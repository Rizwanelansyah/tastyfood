<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="bg-primary overflow-x-hidden">
    <div class="md:hidden h-[60vh] w-full z-[-5] bg-gradient-to-b from-white to-transparent absolute"></div>
    <nav id="navbar"
        class="md:h-[20vh] flex flex-row justify-between md:justify-start items-center gap-10 py-4 px-5 md:py-8 md:px-20">
        <h1 class="font-bold text-2xl">TASTY FOOD</h1>
        <ul id="nav-menu"
            class="text-sm flex flex-col px-5 py-10 md:p-0 md:flex-row justify-center items-center gap-8 absolute top-0 left-0 md:static w-full md:w-[unset] transition-all duration-300 translate-y-[-100%] md:transform-none">
            <li><a href="#">HOME</a></li>
            <li><a href="#">TENTANG</a></li>
            <li><a href="#">BERITA</a></li>
            <li><a href="#">GALERI</a></li>
            <li><a href="#">KONTAK</a></li>
        </ul>
        <div id="toggle-nav-button"
            class="md:hidden h-8 w-10 flex flex-col items-center justify-around z-50 cursor-pointer">
            <span class="bg-black rounded-full h-1.5 w-8 transition-all duration-300"></span>
            <span class="bg-black rounded-full h-1.5 w-8 transition-all duration-300"></span>
            <span class="bg-black rounded-full h-1.5 w-8 transition-all duration-300"></span>
        </div>
    </nav>
    <script>
        const toggleNavButton = document.getElementById("toggle-nav-button");
        const navMenu = document.getElementById("nav-menu");
        let isOpen = false;
        if (window.matchMedia('screen and (max-width: 768px)').matches) {
            navMenu.classList.add("w-full")
            toggleNavButton.onclick = () => {
                isOpen = !isOpen;
                if (isOpen) {
                    navMenu.classList.add("--state-open")
                    toggleNavButton.classList.add("--state-open")
                } else {
                    navMenu.classList.remove("--state-open")
                    toggleNavButton.classList.remove("--state-open")
                }
            };
        } else {
            if (isOpen) {
                navMenu.classList.add("--state-open")
                toggleNavButton.classList.add("--state-open")
            } else {
                navMenu.classList.remove("--state-open")
                toggleNavButton.classList.remove("--state-open")
            }
        }
    </script>
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
            <button class="bg-black text-white text-sm my-6 py-4 px-12">TENTANG KAMI</button>
        </div>
        <img src="/assets/img-4-2000x2000.png" alt="food image"
            class="aspect-square absolute -z-10 top-[-25%] md:h-[120vh] md:right-[-20vw] md:top-[-40vh]">
    </section>

    <section id="about-us" class="bg-white flex flex-col justify-center items-center text-center gap-8 py-20 my-8 md:my-20">
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
            <x-card.type1 src="/assets/img-1.png" title="LOREM IPSUM">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt voluptate odit dolorem velit
                illo!
            </x-card.type1>
            <x-card.type1 src="/assets/img-2.png" title="LOREM IPSUM">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt voluptate odit dolorem velit
                illo!
            </x-card.type1>
            <x-card.type1 src="/assets/img-3.png" title="LOREM IPSUM">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt voluptate odit dolorem velit
                illo!
            </x-card.type1>
            <x-card.type1 src="/assets/img-4.png" title="LOREM IPSUM">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nesciunt voluptate odit dolorem velit
                illo!
            </x-card.type1>
        </div>
    </section>

    <section id="news" class="py-10 px-5 md:px-20 my-20">
        <h1 class="my-5 font-bold text-2xl text-center">BERITA KAMI</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 md:grid-rows-1 gap-5 h-[150vh] md:h-[100vh]">
            <x-card.type2 src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" title="Test 123">Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Cumque excepturi modi consectetur eveniet recusandae porro odit
                assumenda. Harum architecto id commodi in? Molestiae omnis praesentium vitae nobis tempora aut
                ipsa!</x-card.type2>
            <div class="grid grid-cols-2 grid-rows-1 md:grid-rows-2 gap-5">
                <x-card.type2 src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" title="Test 123">Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Cumque excepturi modi consectetur eveniet recusandae porro odit
                    ipsa!</x-card.type2>
                <x-card.type2 src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" title="Test 123">Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Cumque excepturi modi consectetur eveniet recusandae porro odit
                    ipsa!</x-card.type2>
                <x-card.type2 src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" title="Test 123">Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Cumque excepturi modi consectetur eveniet recusandae porro odit
                    ipsa!</x-card.type2>
                <x-card.type2 src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" title="Test 123">Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Cumque excepturi modi consectetur eveniet recusandae porro odit
                    ipsa!</x-card.type2>
            </div>
        </div>
    </section>

    <section id="galery" class="bg-white py-10 my-20 md:my-40 px-5 md:px-20 flex flex-col gap-6">
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
