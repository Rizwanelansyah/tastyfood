<x-admin>
    <section class="md:px-20 md:my-20">
        <h1 class="text-2xl md:text-6xl text-black font-extrabold mb-5 md:mb-10">Create News</h1>
        <x-messages />
        <form class="bg-white border-4 border-black p-5 rounded-lg md:rounded-3xl" action="/news" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="my-3 flex flex-col">
                <label class="text-2xl font-bold m-2" for="title">Title</label>
                <input class="text-lg p-4 bg-primary border-black border-2 rounded-xl" type="text" name="title"
                    id="title" value="{{ old('title') }}">
            </div>

            <div class="my-3 flex flex-col">
                <label class="text-2xl font-bold m-2" for="content">Content</label>
                <textarea class="text-lg p-4 bg-primary border-black border-2 rounded-xl" rows="10" name="content"
                    id="content">{{ old('content') }}</textarea>
            </div>

            <div class="my-3 flex flex-col">
                <label class="text-2xl font-bold m-2" for="thumbnail">Thumbnail</label>
                <input class="
                    file:bg-black file:text-white file:p-2 md:file:p-5 file:m-0 file:border-none file:text-lg md:file:text-2xl file:font-bold file:mr-5 file:hover:cursor-pointer
                    text-md md:text-xl font-bold bg-primary border-black border-2 rounded-xl
                " type="file" name="thumbnail" id="thumbnail">
            </div>
            <button class="my-3 py-2 md:py-6 w-full text-2xl font-bold text-white bg-[green] rounded-2xl"
                type="submit">Save</button>
        </form>
    </section>
</x-admin>
