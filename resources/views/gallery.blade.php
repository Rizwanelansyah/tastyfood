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
    <x-page-title title="GALERI KAMI" />

    <x-image-preview :images="['/assets/anna-pelzer-IGfIGP5ONV0-unsplash.jpg', '/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg', '/assets/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg']" />

    <section id="galery" class="bg-white py-10 px-5 md:px-20 flex flex-col gap-6">
        @if (count($pictures) > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-5 md:px-20 py-10">
                @foreach ($pictures as $picture)
                    <img src="/pictures/{{ $picture->getFilename() }}" alt="{{ $picture->getFilename() }}"
                        class="aspect-square w-[100%] object-cover rounded-xl object-center">
                @endforeach
            </div>
        @else
            <div class="flex justify-center items-center h-[50vh]">
                <p class="text-6xl text-center">Belum ada gambar</p>
            </div>
        @endif
    </section>

    <x-footer />
</body>

</html>
