<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>

<body class="bg-primary overflow-x-hidden">
    <x-navbar class="bg-black" color="white" />
    <section class="px-20 my-20">
        <h1 class="text-6xl text-black font-extrabold mb-10">Create News</h1>
        <x-error-messages />
        <form class="bg-white border-4 border-black p-5 rounded-3xl" action="/news" method="post"
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
                    file:bg-black file:text-white file:p-5 file:m-0 file:border-none file:text-2xl file:font-bold file:mr-5 file:hover:cursor-pointer
                    text-xl font-bold bg-primary border-black border-2 rounded-xl
                " type="file" name="thumbnail" id="thumbnail">
            </div>
            <button class="my-3 py-6 w-full text-2xl font-bold text-white bg-[green] rounded-2xl"
                type="submit">Save</button>
        </form>
    </section>
    <x-footer />
</body>

</html>
