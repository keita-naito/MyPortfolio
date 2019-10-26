function sendToCalender(e) {
//  googelスプレッドシートを開く
  var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  
//  新規予約された行番号を取得(getLastRow = 最後の行)
  var num_row = sheet.getLastRow();
  
//  新規予約された行から名前を取得
//  (変数sheetの最後の行の2列目をgetRange(行, 列)で取得、getValueで選択したセルの値を取得)
  var new_name = sheet.getRange(num_row, 2).getValue();
  
//  メールアドレスを取得
  var new_mail = sheet.getRange(num_row, 4).getValue();

//　予約を記載するカレンダーを取得(""の中にはgoogleカレンダーIDをコピペする)  
  var calendar = CalendarApp.getCalendarById("etl9g7pdqok7ujkc4v3g35l8co@group.calendar.google.com");
  
//  予約の日付を取得
  var date = new Date(sheet.getRange(num_row, 5).getValue());  
  
  
//  予約の開始時間を取得
//  (new Dateは()内に指定した時刻を表す日付オブジェクトを作る。下記セルから日付を引っ張ってきて指定している。
//　また、そのままだと日にちが合っていないので、new_stimeに日にち、その他を合わせて入れている)  
  var stime = new Date(sheet.getRange(num_row, 6).getValue());
  var new_stime = new Date(date.getFullYear(), date.getMonth(), date.getDate(), stime.getHours(), stime.getMinutes(), 0);
  
//  予約の終了時間を取得
  var etime = new Date(sheet.getRange(num_row, 7).getValue());
  var new_etime = new Date(date.getFullYear(), date.getMonth(), date.getDate(), etime.getHours(), etime.getMinutes(), 0);
  
//  予約が既に入っているか調べる(getEvendで指定した時間の予定を取得)
  if(calendar.getEvents(new_stime, new_etime) == 0) {
    var check_name = new_name+"様　ご予約";
    
//  予約情報をカレンダーに追加する
    var r = calendar.createEvent(check_name, new_stime, new_etime);
    var check_name = new_name+"様\n/\n ご予約を承りました。";    
    Mail.App.sendEmail(new_mail, "ご予約", check_name);
    
  } else {
    var check_name = new_name+"様 \n\n ご予約時間に先約がありましたので、\n 申し訳ありませんが、再度ご予約お願い致します。";
    MailApp.sendEmail(new_mail, "ご予約できませんでした", check_name);
   
    Logger.log(check_name);
  }
}
