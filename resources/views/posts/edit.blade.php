<x-app-layout>

<x-slot name="header">
    <h1>おすすめチョコレート共有サイト 編集画面</h1>
</x-slot>

<body>
    <h1 class="title"></h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='mb-6'>
                <h2>チョコレートの名前</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}" />
            </div>
            <div class='mb-6'>
                <h2>手作り or 購入</h2>
                <input class="input_handmake" type='text' name='post[handmake]' value="{{ $post->handmake }}" />
            </div>
            <div class='mb-6'>
                <h2>費用</h2>
                <input type='text' name='post[price]' value="{{ $post->price }}" />
            </div>
            <div class='mb-6'>
                <h2>渡す相手の年齢層</h2>
                <input type='text' name='post[age]' value="{{ $post->age }}" />
            </div>
            <div class='mb-6'>
                <h2>渡す相手との関係</h2>
                <input type='text' name='post[relationship]' value="{{ $post->relationship }}" />
            </div>
            <div class='mb-6'>
                <h2>コメント</h2>
                <input type='text' name='post[comment]' value="{{ $post->comment }}" />
            </div>
            <div class='mb-6'>
                <h2>画像</h2>
                <input type='text' name='post[image_url]' value="{{ $post->image_url }}" />
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    
    <script>
        let input_handmake = document.querySelector(".input_handmake");
        if(input_handmake.value == 1) {
            input_handmake.value  = "手作り";
        } else if (input_handmake.value == 0) {
            input_handmake.value  = "購入";
        }
    </script>
    
</body>

</x-app-layout>