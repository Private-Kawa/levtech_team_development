 <x-app-layout>
    <x-slot name="header">
        <h1>おすすめチョコレート共有サイト</h1>
        <a href='/posts/create' class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">新規投稿</a>
    </x-slot>
    
    <body>
        
        <!-- 検索バー -->
        <form class="mt-3">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-orange-500 focus:border-orange-500" placeholder="チョコレート名、店名、レシピ情報など" required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">検索</button>
            </div>
        </form>

        <section class="text-gray-600 body-font">
          <div class="py-10 mx-auto">
                <div class="flex flex-wrap flex-col md:flex-row gap-3">
                    @foreach ($posts as $post)
                        <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                        <!--    <p>-->
                        <!--        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>-->
                        <!--    </p>-->
                        <!--    <p>カテゴリー：<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>-->
                        <!--</div>-->
                        <div class="flex-1">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                              <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                              <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                  <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                                </h2>
                                <h3 class="title-font text-lg font-medium text-gray-900 mb-3"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                                <p class="leading-relaxed mb-3">内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>
                                <div class="flex items-center flex-wrap justify-between">
                                  <a href="/posts/{{ $post->id }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M5 12h14"></path>
                                      <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                  </a>
                                  <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                    <span>40</span>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div>
            {{ $posts->links() }}
        </div>
    </body>

    </x-app-layout>
