<div class="bg-white rounded-xl pt-5 pb-12 mt-[-25%] px-4 flex flex-col gap-4">
    <img src="{{ $src }}" alt="image for card" class="mt-[-60%]">
    <h2 class="text-center text-2xl font-bold"> {{ $title }} </h2>
    <p class="text-sm text-center">
        {{ $slot }}
    </p>
</div>
