<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="overflow-x-hidden bg-primary text-black">
    <div class="md:hidden h-[60vh] w-full z-[-5] bg-gradient-to-b from-white to-transparent absolute"></div>
    <x-navbar />
    <section id="main" class="flex flex-col justify-center md:justify-start md:flex-row4 lg:gap-10 h-[90vh] pb-[10vh] md:pb-0 md:h-[80vh] md:relative">
        <div class="flex flex-col items-center md:items-start max-w-full md:max-w-[40vw] mb-10 px-5 md:px-20 xl:gap-4">
            <div class="mt-6 mb-8 w-20 md:w-32 xl:w-60 h-1 bg-black rounded-full"></div>
            <h1 class="my-4 text-6xl xl:text-8xl text-center md:text-start">HEALTHY<br><span class="text-nowrap font-extrabold">TASTY FOOD</span></h1>
            <p class="text-lg md:text-xl xl:text-2xl text-center md:text-start">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                officia aliquam
                cumque est
                ratione suscipit,
                quas nulla magni soluta accusantium error quis numquam labore illum impedit accusamus aspernatur
                molestiae?
                Quos?</p>
            <a href="/about" class="px-12 py-4 my-6 text-lg xl:text-xl text-white bg-black">TENTANG KAMI</a>
        </div>
        <img src="/assets/img-4-2000x2000.png" alt="food image"
            class="absolute -z-10 top-[-25%] md:h-[120vh] md:right-[-20vw] md:top-[-40vh] animate-spinner">
    </section>

    <section id="about-us"
        class="flex flex-col gap-8 md:gap-16 justify-between items-center py-20 mt-8 text-center bg-white md:mt-20 h-[80vh] py-[15vh] md:py-0 lg:py-[25vh] my-[10vh]">
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">TENTANG KAMI</h1>
        <p class="max-w-[70vw] md:max-w-[50vw] text-lg lg:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Expedita aliquid
            dolorem, praesentium culpa repellat
            nesciunt optio laboriosam, architecto at placeat consequuntur non quis tempore maiores sapiente suscipit
            inventore? Earum sunt officia doloremque, laudantium facilis tempora, labore similique dignissimos tempore
            enim minima asperiores omnis veniam quo perspiciatis perferendis ipsa eveniet quasi!</p>
        <div class="w-[30vw] h-1 bg-black rounded-full"></div>
    </section>

    <section id="menu-list"
        class="flex w-[100vw] justify-center items-center bg-cover bg-[url('/assets/group-70.png')] py-10">
        <div
            class="items-center justify-center grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 place-items-center px-10 md:px-20 py-4 md:py-12 gap-y-16 gap-x-4 lg:gap-x-40 xl:gap-x-8 md:gap-6">
            @for ($i = 1; $i < 5; $i++)
                <x-card.type1 src="/assets/img-{{ $i }}.png" title="Lorem ipsum dolor sit amet">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos accusantium vero
                    reiciendis quis
                    sequi architecto mollitia recusandae voluptatibus! Ipsa?
                </x-card.type1>
            @endfor
        </div>
    </section>

    <section id="news" class="px-5 py-10 my-20 md:px-20">
        <h1 class="my-5 text-4xl font-bold text-center">BERITA KAMI</h1>
        @if (count($news) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 gap-5">
                <x-card.type2 src="{{ asset('news-thumbnail/' . $news[0]->thumbnail) }}" title="{{ $news[0]->title }}">
                    {{ $news[0]->content }}
                </x-card.type2>
                <div class="grid grid-cols-2 grid-rows-1 gap-5 md:grid-rows-2">
                    @for ($i = 1; $i < count($news); $i++)
                        <x-card.type2 src="{{ asset('news-thumbnail/' . $news[$i]->thumbnail) }}" title="{{ $news[$i]->title }}">
                            {{ $news[$i]->content }}
                        </x-card.type2>
                    @endfor
                </div>
            </div>
        @else
            <div class="flex justify-center items-center h-[50vh]">
                <p class="text-6xl text-center">Belum ada berita</p>
            </div>
        @endif
    </section>

    <section id="galery" class="flex flex-col gap-6 px-5 py-10 mt-20 bg-white md:mt-40 md:px-20">
        <h1 class="my-5 text-4xl font-bold text-center">GALERI KAMI</h1>
        @if (count($pictures) > 0)
            <div class="grid grid-cols-2 gap-6 px-5 py-10 md:grid-cols-3 md:px-20">
            @foreach($pictures as $picture)
                <img src="/pictures/{{ $picture->getFilename() }}" alt="{{ $picture->getFilename() }}"
                    class="aspect-square w-[100%] object-cover rounded-xl object-center">
            @endforeach
            </div>
            <a href="/gallery" class="px-8 py-4 mx-auto text-base text-white bg-black">LIHAT LEBIH BANYAK</a>
        @else
            <div class="flex justify-center items-center h-[50vh]">
                <p class="text-6xl text-center">Belum ada gambar</p>
            </div>
        @endif
    </section>

    <x-footer />
</body>

</html>
