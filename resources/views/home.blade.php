<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasty Food</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
    </head>

    <body class="bg-primary overflow-x-hidden">
        <div class="md:hidden h-[60vh] w-full z-[-5] bg-gradient-to-b from-white to-transparent absolute"></div>
        <x-navbar />
            <section id="main" class="flex flex-col md:flex-row md:gap-10 md:h-[80vh] md:relative">
                <div class="flex flex-col items-center md:items-start max-w-full md:max-w-[40vw] mb-10 px-5 md:px-20">
                    <div class="mt-12 mb-8 h-1 bg-black w-20 rounded-full"></div>
                    <h1 class="my-4 text-4xl text-center md:text-start">HEALTHY <br><span class="font-extrabold">TASTY
                            FOOD</span></h1>
                    <p class="text-sm text-center md:text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                    officia aliquam
                    cumque est
                    ratione suscipit,
                    quas nulla magni soluta accusantium error quis numquam labore illum impedit accusamus aspernatur
                    molestiae?
                    Quos?</p>
                    <a href="/about" class="bg-black text-white text-sm my-6 py-4 px-12">TENTANG KAMI</a>
                </div>
                <img src="/assets/img-4-2000x2000.png" alt="food image"
                class="absolute -z-10 top-[-25%] md:h-[120vh] md:right-[-20vw] md:top-[-40vh] animate-spinner">
            </section>

            <section id="about-us" class="bg-white flex flex-col justify-center items-center text-center gap-8 py-20 mt-8 md:mt-20">
                <h1 class="font-bold text-2xl">TENTANG KAMI</h1>
                <p class="max-w-[50vw] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aliquid
                dolorem, praesentium culpa repellat
                nesciunt optio laboriosam, architecto at placeat consequuntur non quis tempore maiores sapiente suscipit
                inventore? Earum sunt officia doloremque, laudantium facilis tempora, labore similique dignissimos tempore
                enim minima asperiores omnis veniam quo perspiciatis perferendis ipsa eveniet quasi!</p>
                <div class="h-1 bg-black w-20 rounded-full"></div>
            </section>

            <section id="menu-list"
                class="flex w-[100vw] h-[140vh] md:h-[80vh] justify-center items-center bg-cover bg-[url('/assets/group-70.png')]">
                <div class="h-[100vh] md:h-[50vh] items-center justify-center grid grid-cols-2 md:grid-cols-4 place-items-center px-10 md:px-40 py-4 md:py-24 gap-y-16 gap-x-4 md:gap-6">
                    @for($i = 1; $i < 5; $i++)
                        <x-card.type1 src="/assets/img-{{ $i }}.png" title="Lorem ipsum dolor sit amet">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero reiciendis quis sequi architecto mollitia recusandae voluptatibus! Ipsa?
                        </x-card.type1>
                    @endfor
                </div>
            </section>

            <section id="news" class="py-10 px-5 md:px-20 my-20">
                <h1 class="my-5 font-bold text-2xl text-center">BERITA KAMI</h1>
                @if(count($news) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 gap-5 h-[150vh] md:h-[100vh]">
                        <x-card.type2 src="{{ asset('news-thumbnail/'.$news[0]->thumbnail) }}" title="{{ $news[0]->title }}">
                            {{ $news[0]->content }}
                        </x-card.type2>
                        <div class="grid grid-cols-2 grid-rows-1 md:grid-rows-2 gap-5">
                            @for($i = 1; $i < count($news); $i++)
                                <x-card.type2 src="{{ asset('news-thumbnail/'.$news[$i]->thumbnail) }}" title="{{ $news[$i]->title }}">
                                    {{ $news[$i]->content }}
                                </x-card.type2>
                            @endfor
                        </div>
                    </div>
                @else
                    <div class="flex justify-center items-center h-[50vh]">
                        <p class="text-center text-6xl">Belum ada berita</p>
                    </div>
                @endif
            </section>

            <section id="galery" class="bg-white py-10 mt-20 md:mt-40 px-5 md:px-20 flex flex-col gap-6">
                <h1 class="text-2xl font-bold text-center my-5">GALERI KAMI</h1>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 px-5 md:px-20 py-10">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                    <img src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg" alt="food image"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
                </div>
                <button class="bg-black mx-auto px-8 py-4 text-base text-white">LIHAT LEBIH BANYAK</button>
            </section>

            <x-footer/>
    </body>

</html>
