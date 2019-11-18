<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;
use App\History;
use Storage;

class NewsController extends Controller
{
    public function add ()
    {
        return view('news.create');
    }
    
    // Requestにユーザーから送られた情報を取得、$requestに代入
    public function create(Request $request)
    {
        // バリデーションを行う、(モデルのNewsクラスの$rulusの配列内容を検証)
        $this->validate($request, News::$rules);
        
        // ニュースインスタンスを生成して$newsへ代入
        $news = new News;
        
        // ユーザーが入力したデータを$formに代入
        $form = $request->all();
        
        // フォームから画像が送られてきたら保存して、$news->image_pathに画像のパスを保存
        // issetは引数の中にデータがあるか判断。引数がnull or falseならfalse、それ以外はtrue
        if (isset($form['image'])) {
            
            // $request->fileは画像をアップロードするメソッド
            // ->store()でファイルを保存するパスを指定する
            $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
            
            // basenameでハッシュ化されてるファイル名だけを取得、newsテーブルのimage_pathに代入
            $news->image_path = Storage::disk('s3')->url($path);
            
        } else {
            
            // 元々null、あえて表示
            $news->image_path = null;
        }
        
        // newsテーブルの残りはtitleとbody、不要なフォームから送信された_token削除
        unset($form['_token']);
        
        // フォームから送信されたimage削除
        unset($form['image']);
        
        // fillメソッドでformの値をnewsのカラムに代入
        $news->fill($form);
        
        // データ保存
        $news->save();
        
        return redirect('news/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            
            // 検索されたら検索結果を取得する
            // where()->get()、whereメソッドでnewsテーブルのtitleカラムと
            // $cond_title（ユーザーが入力した文字）に一致するレコードを全て$postsに取得
            $posts = News::where('title', $cond_title)->get();
            
        } else {
            
            // それ以外はnewsテーブルのレコード全てを$postに代入
            $posts = News::all();
        }
        // ニュース検索機能
        return view('news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
        
    
    }
    
    public function edit(Request $request)
    {
        $news = News::find($request->id);
        if (empty($news)) {
            abort(404);
        }
        return view('news.edit', ['news_form' => $news]);
    }
    
    public function update(Request $request)
    {
        // バリデーションを行う、(モデルのNewsクラスの$rulusの配列内容を検証)
        $this->validate($request, News::$rules);
        
        // Newsモデルからデータを取得する
        $news = News::find($request->id);
        
        // 送信されたフォームのデータを$news_formに代入
        $news_form = $request->all();
        
        if ($request->remove == 'true') {
            $news_form['image_path'] = null;
            
        // $request->fileは画像をアップロードするメソッド
        } else if ($request->file('image')) {
            
            // ->store()でファイルを保存するパスを指定する
            $path = $request->file('image')->store('public/image');
            $news_form['image_path'] = basename($path);
        } else {
            $news_form['image_path'] = $news->image_path;   
        }
            
        unset($news_form['image']);
        unset($news_form['_token']);
        unset($news_form['remove']);
         
        // fillメソッドでformの値をnewsのカラムに代入
        $news->fill($news_form);
        
        // データ保存
        $news->save();
        
        $history = new History;
        $history->news_id = $news->id;
        $history->edited_at = Carbon::now();
        $history->save();
        
        return redirect('news');
    }
    
    public function delete(Request $request)
    {
        $news = News::find($request->id);
        $news->delete();
        return redirect('news');
    }
}


