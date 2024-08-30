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
      <x-messages />
      <form class="flex flex-col md:grid grid-cols-2 grid-rows-4 gap-8 text-lg" action="/inbox" method="post">
        @csrf
        <input class="p-5 rounded-xl border-2 md:border-3 border-black" id="subject" name="subject" type="text"
          placeholder="Subject" value="{{ old('subject') }}">
        <textarea
          class="p-5 rounded-xl border-2 order-4 md:order-none md:border-3 border-black md:row-span-3 h-72 md:h-full resize-none"
          name="message" id="message" placeholder="Message">{{ old('message') }}</textarea>
        <input id="name" name="name" type="text" placeholder="Name"
          class="p-5 rounded-xl border-2 md:border-3 border-black" value="{{ old('name') || Auth::check() ? Auth::user()->name : "" }}">
        <input id="email" name="email" type="email" placeholder="Email"
          class="p-5 rounded-xl border-2 md:border-3 border-black" value="{{ old('email') || Auth::check() ? Auth::user()->email : "" }}">
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

  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806840755!2d107.66140701036342!3d-6.943211393027936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs!5e0!3m2!1sen!2sid!4v1722998621647!5m2!1sen!2sid"
    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
    class="w-full h-[80vh] my-20 px-20"></iframe>

  <x-footer />
</body>

</html>
