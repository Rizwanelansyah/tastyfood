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
    <div
        class="flex flex-row justify-start items-center px-5 py-20 md:p-20 w-[100vw] h-[50vh] md:h-[100vh] bg-cover bg-[url('/assets/group-70.png')]">
        <h1 class="font-extrabold text-white text-4xl">GALERI KAMI</h1>
    </div>

    <x-image-preview />

    <section id="galery" class="bg-white py-10 mt-20 md:mt-40 px-5 md:px-20 flex flex-col gap-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-5 md:px-20 py-10">
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
    </section>

    <x-footer />
</body>

</html>
