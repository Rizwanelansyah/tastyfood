<x-admin>
    <section class="md:px-20 md:my-20 overflow-x-auto">
        <div class="flex flex-row justify-between items-center my-10">
            <h1 class="text-xl md:text-6xl font-bold">List Berita</h1>
            <a class="p-2 md:p-5 text-md md:text-2xl text-white bg-[green] rounded-lg md:rounded-2xl" href="/admin/news/create">Tambah</a>
        </div>
        @if (count($news) > 0)
            <table class="min-w-full text-center p-5 table-auto">
                <thead class="text-md md:text-2xl bg-black text-white">
                    <tr class="[&>*]:p-4">
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                    @for ($i = 0; $i < count($news); $i++)
                        <tr class="[&>*]:p-4 {{ $i % 2 == 0 ? 'bg-gray-300' : '' }}">
                            <td class="text-sm md:text-xl">{{ $i + 1 }}</td>
                            <td>
                                <img src="{{ asset('news-thumbnail/' . $news[$i]->thumbnail) }}" alt=""
                                    class="max-w-20 md:max-w-60">
                            </td>
                            <td class="text-sm md:text-base">{{ $news[$i]->title }}</td>
                            <td class="text-sm md:text-base">{{ $news[$i]->content }}</td>
                            <td class="flex flex-col justify-center gap-2 h-full">
                                <a class="py-2 text-black bg-[orange] rounded-lg md:rounded-2xl"
                                    href="/admin/news/edit?id={{ $news[$i]->id }}">Edit</a>
                                <form class="w-full bg-[red] text-white rounded-lg md:rounded-2xl" action="/news" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" class="hidden" value="{{ $news[$i]->id }}">
                                    <button class="py-2 w-full">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @else
            <h1 class="text-2xl text-center font-bold text-gray-400">Berita Kosong</h1>
        @endif
    </section>
</x-admin>
