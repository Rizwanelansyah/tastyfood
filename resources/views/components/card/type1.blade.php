<div class="bg-white rounded-lg xl:rounded-xl mt-[50%]">
    <img src="{{ $src }}" alt="image for card" class="-mt-[50%]">
    <div class="-mt-10 p-10">
        <h2 class="text-center text-2xl xl:text-4xl font-bold mb-4"> {{ $title }} </h2>
        <p class="text-md xl:text-lg text-center line-clamp-2">
            {{ $slot }}
        </p>
    </div>
</div>
