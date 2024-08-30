<div class="flex flex-col gap-4 relative">
    <img src="{{ $src }}" alt="image for card" class="absolute -top-1/2">
    <div class="bg-white px-4 pb-5 pt-[60%] rounded-lg">
        <h2 class="text-center text-2xl font-bold"> {{ $title }} </h2>
        <p class="text-sm text-center line-clamp-2">
            {{ $slot }}
        </p>
    </div>
</div>
