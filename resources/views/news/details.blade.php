    <div>
        @foreach ($posts as $post)
            <pre>
                <?php $image = $post->image_path ?>
                {{ $image }}
                {{ $post->title }}
                {{ $post->body }}
            </pre>
        @endforeach
    </div>
     
