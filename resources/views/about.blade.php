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
    <x-page-title title="TENTANG KAMI" />

    <section id="about">
        <article class="px-5 md:px-20 py-5 my-20 grid grid-cols-1 md:grid-cols-2 grid-rows-1 gap-16 relative">
            <div class="md:hidden absolute size-full bg-gradient-to-r from-transparent via-primary to-transparent md:bg-transparent z-20"></div>
            <div class="flex flex-col justify-center py-6 gap-6 z-30 text-center md:text-start">
                <h1 class="text-xl md:text-4xl font-bold">Tasty Food</h1>
                <p class="text-md md:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione distinctio
                    consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                <p class="text-md md:text-xl text-gray-600 z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    distinctio consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
            </div>
            <div class="absolute md:static h-full md:h-[unset] grid grid-cols-2 grid-rows-1 gap-4 p-5 md:p-0">
                <img class="shdow-md rounded-xl size-full object-cover"
                    src="/assets/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" alt="img">
                <img class="shdow-md rounded-xl size-full object-cover"
                    src="/assets/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="img">
            </div>
        </article>

        <article class="px-5 md:px-20 py-5 my-20 grid grid-cols-1 md:grid-cols-2 grid-rows-1 gap-16 relative">
            <div class="md:hidden absolute size-full bg-gradient-to-r from-transparent via-primary to-transparent md:bg-transparent z-20"></div>
            <div class="absolute md:static h-full md:h-[unset] grid grid-cols-2 grid-rows-1 gap-4 p-5 md:p-0">
                <img class="shdow-md rounded-xl size-full object-cover"
                    src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt="img">
                <img class="shdow-md rounded-xl size-full object-cover"
                    src="/assets/michele-blackwell-rAyCBQTH7ws-unsplash.jpg" alt="img">
            </div>
            <div class="flex flex-col justify-center py-6 gap-6 z-30 text-center md:text-start">
                <h1 class="text-xl md:text-4xl font-bold">Visi</h1>
                <p class="text-md md:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione distinctio
                    consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                <p class="text-md md:text-xl text-gray-600 z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    distinctio consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
            </div>
        </article>

        <article class="px-5 md:px-20 py-5 my-20 grid grid-cols-1 md:grid-cols-2 grid-rows-1 gap-16 relative">
            <div class="md:hidden absolute size-full bg-gradient-to-r from-transparent via-primary to-transparent md:bg-transparent z-20"></div>
            <div class="flex flex-col justify-center py-6 gap-6 z-30 text-center md:text-start">
                <h1 class="text-xl md:text-4xl font-bold">Misi</h1>
                <p class="text-md md:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione distinctio
                    consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
                <p class="text-md md:text-xl text-gray-600 z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    distinctio consequatur
                    necessitatibus
                    mollitia perferendis enim provident reiciendis cum molestias corporis perspiciatis quae, error quam
                    deleniti repellendus adipisci! Asperiores, veritatis a.</p>
            </div>
            <div class="absolute md:static h-full md:h-[unset] p-5 md:p-0 md:flex md:justify-center md:items-center">
                <img class="shdow-md rounded-xl size-full md:h-2/3 object-cover"
                    src="/assets/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="img">
            </div>
        </article>
    </section>

    <x-footer />
</body>

</html>
