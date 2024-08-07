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
        <h1 class="text-6xl font-bold my-10">List Inbox</h1>
        <table class="min-w-full text-center p-5 table-auto">
            <thead class="text-2xl bg-black text-white">
                <tr class="[&>*]:p-4">
                    <th>No</th>
                    <th>Subjek</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @for($i = 0; $i < count($inboxes); $i++)
                    <tr class="[&>*]:p-4 {{ ($i % 2 == 0) ? "bg-gray-300" : "" }}">
                        <td class="text-xl">{{ $i + 1 }}</td>
                        <td>{{ $inboxes[$i]->subject }}</td>
                        <td>{{ $inboxes[$i]->name }}</td>
                        <td>{{ $inboxes[$i]->email }}</td>
                        <td>{{ $inboxes[$i]->message }}</td>
                        <td class="flex flex-col justify-center gap-2 h-full">
                            <form class="w-full bg-[red] text-white rounded-2xl" action="/inbox" method="post">
                                @method("DELETE")
                                @csrf
                                <input type="hidden" name="id" class="hidden" value="{{ $inboxes[$i]->id }}">
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
