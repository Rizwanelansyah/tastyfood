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
    <x-page-title title="KONTAK KAMI" />

    <section id="form" class="bg-white">
        <div class="px-5 md:px-20 py-10 my-10">
            <h1 class="font-bold text-4xl my-10">KONTAK KAMI</h1>
            <form class="flex flex-col md:grid grid-cols-2 grid-rows-4 gap-8 text-lg">
                <input class="p-5 rounded-xl border-2 md:border-3 border-black" id="subject" name="subject" type="text"
                    placeholder="Subject">
                <textarea class="p-5 rounded-xl border-2 order-4 md:order-none md:border-3 border-black md:row-span-3 h-72 md:h-full resize-none" name="message"
                    id="message" placeholder="Message"></textarea>
                <input id="name" name="name" type="text" placeholder="Name"
                    class="p-5 rounded-xl border-2 md:border-3 border-black">
                <input id="email" name="email" type="email" placeholder="Email"
                    class="p-5 rounded-xl border-2 md:border-3 border-black">
                <button class="rounded-xl col-span-2 bg-black text-white text-xl p-4 order-last">Submit</button>
            </form>
        </div>

        <div class="flex flex-row justify-evenly py-10 my-10">
            <div class="flex flex-col gap-4 items-center">
                <img src="/assets/Group 66.png" alt="mail icon" class="size-20 md:size-[unset]">
                <h1 class="font-bold text-lg">email</h1>
                <p>some@email.com</p>
            </div>
            <div class="flex flex-col gap-4 items-center">
                <img src="/assets/Group 67.png" alt="mail icon" class="size-20 md:size-[unset]">
                <h1 class="font-bold text-lg">telepon</h1>
                <p>+62 1234 5432 2343</p>
            </div>
            <div class="flex flex-col gap-4 items-center">
                <img src="/assets/Group 68.png" alt="mail icon" class="size-20 md:size-[unset]">
                <h1 class="font-bold text-lg">lokasi</h1>
                <p>dimana?</p>
            </div>
        </div>
    </section>

    <x-footer />
</body>

</html>
