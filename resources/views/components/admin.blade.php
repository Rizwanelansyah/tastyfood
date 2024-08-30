<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="overflow-x-hidden md:overflow-hidden bg-primary">
    <div class="flex flex-col md:flex-row">
        <section id="sidebar" class="flex flex-col justify-between md:w-1/5 bg-black text-white md:h-[100vh] p-5">
            <div>
                <div class="flex flex-row justify-between md:justify-start gap-2 items-center md:mb-5">
                    <div class="flex flex-row gap-4">
                        <a href="/" class="font-bold text-4xl">&lt;</a>
                        <h1 class="font-bold text-3xl md:text-2xl underline"><a href="/admin">Dashboard</a></h1>
                    </div>
                    <div class="md:hidden" id="toggle-navbar">
                        <div id="toggle-nav-button"
                        class="md:hidden h-8 w-10 flex flex-col items-center justify-around z-50 cursor-pointer">
                            <span class="bg-white rounded-full h-1.5 w-8 transition-all duration-300"></span>
                            <span class="bg-white rounded-full h-1.5 w-8 transition-all duration-300"></span>
                            <span class="bg-white rounded-full h-1.5 w-8 transition-all duration-300"></span>
                        </div>
                    </div>
                </div>
                <ul class="absolute md:static left-0 md:left-[unset] p-5 md:p-0 bg-black flex flex-col w-[100vw] md:w-full gap-5 flex-grow items-stretch transition-all duration-300 translate-y-[-200%] md:translate-y-0" id="admin-nav-menu">
                    @foreach ([
                        (object) [
                            'name' => 'Berita',
                            'to' => 'admin/news',
                        ],
                        (object) [
                            'name' => 'Inbox',
                            'to' => 'admin/inbox',
                        ],
                    ] as $item)
                        <li class="flex flex-col items-stretch w-full">
                            <a class="text-xl text-center py-2 rounded-lg @if (Request::is($item->to) || Request::is($item->to . '/*')) bg-gray-800 text-white @else bg-white text-black @endif"
                                href="/{{ $item->to }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="hidden md:block">
                <p class="text-gray-600">@copyright</p>
            </div>
        </section>
        <script>
            const toggleNavButton = document.getElementById("toggle-nav-button")
            const navMenu = document.getElementById("admin-nav-menu")
            let isOpen = false

            toggleNavButton.onclick = () => {
                if (window.matchMedia('screen and (max-width: 768px)').matches) {
                    isOpen = !isOpen
                    if (isOpen) {
                        navMenu.classList.add("--state-open")
                        toggleNavButton.classList.add("--state-open")
                    } else {
                        navMenu.classList.remove("--state-open")
                        toggleNavButton.classList.remove("--state-open")
                    }
                }
            }

            if (window.matchMedia('screen and (max-width: 768px)').matches) {
                navMenu.classList.add("w-full")
            } else {
                navMenu.classList.remove("--state-open")
                toggleNavButton.classList.remove("--state-open")
            }

            const scrollToTopButton = document.getElementById("scroll-to-top-button")
            scrollToTopButton.onclick = () => {
                window.scrollTo(0, 0)
            }
            document.onscroll = () => {
                if (window.scrollY > window.innerHeight / 4) {
                    scrollToTopButton.style.display = "flex"
                } else {
                    scrollToTopButton.style.display = "none"
                }
            }
        </script>
        <section id="main" class="w-full p-5 md:overflow-auto md:h-[100vh]">
            {{ $slot }}
        </section>
    </div>
</body>

</html>
