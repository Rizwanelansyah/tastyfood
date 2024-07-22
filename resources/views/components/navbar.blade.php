<nav id="navbar"
    class="md:h-[20vh] flex flex-row justify-between md:justify-start items-center gap-10 py-4 px-5 md:py-8 md:px-20 text-{{ $color }} {{ $class }}">
    <h1 class="font-bold text-2xl">TASTY FOOD</h1>
    <ul id="nav-menu"
        class="text-sm flex flex-col px-5 py-10 md:p-0 md:flex-row justify-center items-center gap-8 absolute top-0 left-0 md:static w-full md:w-[unset] transition-all duration-300 translate-y-[-100%] md:transform-none">
        <li><a href="/">HOME</a></li>
        <li><a href="/about">TENTANG</a></li>
        <li><a href="/news">BERITA</a></li>
        <li><a href="/gallery">GALERI</a></li>
        <li><a href="/contact">KONTAK</a></li>
    </ul>
    <div id="toggle-nav-button"
        class="md:hidden h-8 w-10 flex flex-col items-center justify-around z-50 cursor-pointer">
        <span class="bg-{{ $color }} rounded-full h-1.5 w-8 transition-all duration-300"></span>
        <span class="bg-{{ $color }} rounded-full h-1.5 w-8 transition-all duration-300"></span>
        <span class="bg-{{ $color }} rounded-full h-1.5 w-8 transition-all duration-300"></span>
    </div>
    <div id="scroll-to-top-button"
        class="fixed bottom-5 right-5 size-10 md:size-16 rounded-full bg-black hidden items-center justify-center cursor-pointer z-50">
        <span class="bg-white rounded-full h-1 w-full origin-top-left -rotate-45 translate-x-1/4 translate-y-2"></span>
        <span class="bg-white rounded-full h-1 w-full origin-top-right rotate-45 -translate-x-1/4 translate-y-2"></span>
    </div>
    <script>
        const toggleNavButton = document.getElementById("toggle-nav-button")
        const navMenu = document.getElementById("nav-menu")
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
</nav>
