<x-app-layout>
<x-slot name="header">
    <h1>おすすめチョコレート共有サイト 新規登録</h1>
</x-slot>
    <!--<form class="mt-4" action="/posts" method="POST">-->
    <!--    @csrf-->
    <!--    <div>-->
    <!--        <h2 class="text-orange-600">チョコレートの名前</h2>-->
    <!--        <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>-->
    <!--        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>-->
    <!--    </div>-->
    <!--    <div>-->
    <!--        <h2 class="text-orange-600">カテゴリー</h2>-->
    <!--        <select name="post[category_id]">-->
    <!--            @foreach($categories as $category)-->
    <!--                <option value="{{ $category->id }}">{{ $category->name }}</option>-->
    <!--            @endforeach-->
    <!--        </select>-->
    <!--    </div>-->
    <!--    <div>-->
    <!--        <h2 class="text-orange-600">コメント</h2>-->
    <!--        <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>-->
    <!--        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>-->
    <!--    </div>-->
    <!--    <div class="flex gap-4">-->
    <!--        <button>-->
    <!--            <input class="text-orange-600" type="submit" value="保存"/>-->
    <!--        </button>-->
    <!--        <a class="text-" href="/">キャンセル</a>-->
    <!--    </div>-->
    <!--</form>-->
    <form class="mt-4" action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label class="text-orange-600" for="name" class="block mb-2 text-sm font-medium text-gray-900">チョコレートの名前</label>
            <input type="text" id="name" name="post[title]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg shadow focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
        </div>
        <div class="mb-6">
            <label class="text-orange-600" for="type" class="block mb-2 text-sm font-medium text-gray-900">手作り or 購入</label>
            <select name="post[handmake]" class="block appearance-none bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 pr-8 rounded shadow leading-tight">
                <option value="true">手作り</option>
                <option value="false">購入</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="text-orange-600" for="type_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">費用</label>
            <select name="post[price]" id="type_price" class="block appearance-none bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 pr-8 rounded shadow leading-tight">
                <option value="1000円以下">1000円以下</option>
                <option value="1001円～3000円">1001円～3000円</option>
                <option value="3001円～5000円">3001円～5000円</option>
                <option value="5000円以上">5000円以上</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="text-orange-600" for="type_age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">渡す相手の年齢層</label>
            <select name="post[age]" id="type_age" class="block appearance-none bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 pr-8 rounded shadow leading-tight">
                <option value="18歳未満">18歳未満</option>
                <option value="18歳～22歳">18歳～22歳</option>
                <option value="23歳～29歳">23歳～29歳</option>
                <option value="23歳～29歳">23歳～29歳</option>
                <option value="30歳～39歳">30歳～39歳</option>
                <option value="40歳以上">40歳以上</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="text-orange-600" for="type_relationship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">渡す相手との関係</label>
            <select name="post[relationship]" id="type_relationship" class="block appearance-none bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 pr-8 rounded shadow leading-tight">
                <option value="恋人">恋人</option>
                <option value="友達">友達</option>
                <option value="片思い">片思い</option>
                <option value="家族">家族</option>
                <option value="同僚">同僚</option>
                <option value="友達">友達</option>
                <option value="上司">上司</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="text-orange-600" for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">コメント</label>
            <textarea id="comment" name="post[comment]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg shadow focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="message" placeholder="コメントを入力"></textarea>
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 text-orange-600" for="file_input">画像</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="file_input" name="post[image_url]" type="file">
        </div>
        <button class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow">
            <input type="submit" value="投稿"/>
        </button>
        <button class="font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center shadow">
            <a href="/">キャンセル</a>
        </button>
    </form>
<x-slot name="footer">

</x-slot>
</x-app-layout>

