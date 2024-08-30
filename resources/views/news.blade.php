<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasty Food</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>

    <body class="overflow-x-hidden bg-primary">
        <x-navbar color="white" class="md:justify-between w-[100vw] absolute top-0 left-0" />
            <x-page-title title="BERITA KAMI" />

                <section id="news" class="grid relative grid-cols-1 grid-rows-1 gap-16 px-5 py-5 my-20 md:px-20 md:grid-cols-2">
                    <div
                        class="absolute z-20 bg-gradient-to-b from-transparent md:hidden size-full to-primary md:bg-transparent">
                    </div>
                    <div class="absolute md:static h-full md:h-[unset] p-5 md:p-0">
                        <img class="object-cover rounded-xl shdow-md size-full"
                        src="/assets/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" alt="img">
                    </div>
                    <div class="flex z-30 flex-col gap-6 justify-center py-6 text-center md:text-start">
                        <h1 class="text-xl md:text-4xl font-bold">APA SAJA MAKANAN KHAS NUSANTARA?</h1>
                        <p class="z-10 text-md md:text-xl md:text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                        distinctio consequatur
                        necessitatibus
                        mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                        deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                        <p class="z-10 text-md md:text-xl md:text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                        distinctio consequatur
                        necessitatibus
                        mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                        deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                        <a href="#" class="px-12 py-4 mx-auto my-6 text-md md:text-xl text-white bg-black md:ml-0 md:mr-auto">BACA SELENGKAPNYA</a>
                    </div>
                </section>

                <section id="other-news" class="px-5 py-10 my-20 bg-white md:px-20">
                    <h1 class="my-10 text-2xl md:text-4xl font-bold text-center md:text-start">BERITA LAINNYA</h1>
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
                            <p class="text-6xl text-center">Belum ada berita</p>
                        </div>
                    @endif
                </section>

                <x-footer />
    </body>

</html>
