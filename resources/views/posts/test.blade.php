 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        

    <!--likeのテスト　-->
     @foreach ($posts as $post)
            
                       <form action="/like/{{$post->id}}" method="post">
                           @csrf
                           <input type=submit value="いいね">
                       </form>
                       
                       <form action="/unlike/{{$post->id}}" method="post">
                           @csrf
                           <input type=submit value="いいね解除">
                       </form>
                       
                       
                        <div class="flex-1">
                            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                              <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                              <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                 
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
     
     
     
       
     
     

     
     
        
    </body>
</html>