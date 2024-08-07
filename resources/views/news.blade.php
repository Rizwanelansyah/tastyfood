<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasty Food</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>

    <body class="bg-primary overflow-x-hidden">
        <x-navbar color="white" class="md:justify-between w-[100vw] absolute top-0 left-0" />
            <x-page-title title="BERITA KAMI" />

                <section id="news" class="px-5 md:px-20 py-5 my-20 grid grid-cols-1 md:grid-cols-2 grid-rows-1 gap-16 relative">
                    <div
                        class="md:hidden absolute size-full bg-gradient-to-b from-transparent to-primary md:bg-transparent z-20">
                    </div>
                    <div class="absolute md:static h-full md:h-[unset] p-5 md:p-0">
                        <img class="shdow-md rounded-xl size-full object-cover"
                        src="/assets/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" alt="img">
                    </div>
                    <div class="flex flex-col justify-center py-6 gap-6 z-30 text-center md:text-start">
                        <h1 class="text-xl font-bold">APA SAJA MAKANAN KHAS NUSANTARA?</h1>
                        <p class="text-sm md:text-gray-600 z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                        distinctio consequatur
                        necessitatibus
                        mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                        deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                        <p class="text-sm md:text-gray-600 z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                        distinctio consequatur
                        necessitatibus
                        mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                        deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                        <a href="#" class="bg-black text-white text-sm my-6 mx-auto md:ml-0 md:mr-auto py-4 px-12">BACA SELENGKAPNYA</a>
                    </div>
                </section>

                <section id="other-news" class="bg-white py-10 px-5 md:px-20 my-20">
                    <h1 class="my-10 font-bold text-2xl text-center md:text-start">BERITA LAINNYA</h1>
                    @if(count($news) > 0)
                        <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-4 md:grid-rows-2 gap-5 h-[220vh] md:h-[140vh]">
                            @foreach($news as $new)
                                <x-card.type2 src="{{ asset('news-thumbnail/'.$new->thumbnail) }}" title="{{ $new->title }}">
                                    {{ $new->content }}
                                </x-card.type2>
                            @endforeach
                        </div>
                    @else
                        <div class="flex justify-center items-center h-[50vh]">
                            <p class="text-center text-6xl">Belum ada berita</p>
                        </div>
                    @endif
                </section>

                <x-footer />
    </body>

</html>
