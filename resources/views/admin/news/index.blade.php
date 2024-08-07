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
        <div class="flex flex-row justify-between items-center my-10">
            <h1 class="text-6xl font-bold">List Berita</h1>
            <a class="p-5 text-2xl text-white bg-[green] rounded-2xl" href="/admin/news/create">Tambah</a>
        </div>
        <table class="min-w-full text-center p-5 table-auto">
            <thead class="text-2xl bg-black text-white">
                <tr class="[&>*]:p-4">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @for($i = 0; $i < count($news); $i++)
                    <tr class="[&>*]:p-4 {{ ($i % 2 == 0) ? "bg-gray-300" : "" }}">
                        <td class="text-xl">{{ $i + 1 }}</td>
                        <td>
                            <img src="{{ asset('news-thumbnail/' . $news[$i]->thumbnail) }}" alt="" class="max-w-60">
                        </td>
                        <td>{{ $news[$i]->title }}</td>
                        <td>{{ $news[$i]->content }}</td>
                        <td class="flex flex-col justify-center gap-2 h-full">
                            <a class="py-2 text-black bg-[orange] rounded-2xl" href="/admin/news/edit?id={{ $news[$i]->id }}">Edit</a>
                            <form class="w-full bg-[red] text-white rounded-2xl" action="/news" method="post">
                                @method("DELETE")
                                @csrf
                                <input type="hidden" name="id" class="hidden" value="{{ $news[$i]->id }}">
                                <button class="py-2 w-full">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </section>
    <x-footer />
</body>

</html>
