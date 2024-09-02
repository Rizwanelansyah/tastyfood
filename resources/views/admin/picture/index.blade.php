<x-admin>
    <section id="galery" class="px-5 md:px-20 flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-2 justify-between items-center">
            <h1 class="text-4xl font-bold">Galeri @if (count($pictures) > 0)
                    ({{ count($pictures) }} Foto)
                @endif
            </h1>
            <form action="/picture" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" multiple name="pictures[]" required>
                <button type="submit"
                    class="p-2 md:p-4 text-md md:text-xl text-white bg-[green] rounded-lg md:rounded-2xl">Upload</button>
            </form>
        </div>
        @if (count($pictures) > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 px-5 md:px-20 py-10">
                @foreach ($pictures as $picture)
                    <div class="group relative">
                        <img src="/pictures/{{ $picture->getFilename() }}" alt="{{ $picture->getFilename() }}"
                            class="aspect-square w-[100%] object-cover rounded-xl object-center">
                        <form method="post" action="/picture"
                            class="absolute top-0 right-0 p-2 hidden group-hover:block">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" class="hidden" name="filename" value="{{ $picture->getFilename() }}">
                            <button type="submit"
                                class="bg-black/40 text-2xl text-red-600 font-bold rounded-lg p-1">X</button>
                        </form>
                        <div class="absolute bottom-0 left-0 p-2 w-full hidden group-hover:block">
                            <p class="bg-black/40 text-white rounded-lg p-2">
                                {{ $picture->getFilename() }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h1 class="text-sm md:text-2xl text-center font-bold text-gray-400">Gambar Kosong</h1>
        @endif
    </section>
</x-admin>
