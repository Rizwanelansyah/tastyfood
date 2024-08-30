<x-admin>
    <section class="md:px-20 md:my-20 overflow-x-auto">
        <h1 class="text-xl md:text-6xl font-bold my-10">List Inbox</h1>
        @if (count($inboxes) > 0)
            <table class="w-full text-center p-5 table-auto">
                <thead class="text-base md:text-2xl bg-black text-white">
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
                    @for ($i = 0; $i < count($inboxes); $i++)
                        <tr class="[&>*]:p-4 {{ $i % 2 == 0 ? 'bg-gray-300' : '' }}">
                            <td class="text-sm md:text-xl">{{ $i + 1 }}</td>
                            <td class="text-sm md:text-base">{{ $inboxes[$i]->subject }}</td>
                            <td class="text-sm md:text-base">{{ $inboxes[$i]->name }}</td>
                            <td class="text-sm md:text-base">{{ $inboxes[$i]->email }}</td>
                            <td class="text-sm md:text-base">{{ $inboxes[$i]->message }}</td>
                            <td class="flex flex-col justify-center gap-2 h-full">
                                <form class="w-full bg-[red] text-white rounded-2xl" action="/inbox" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" class="hidden" value="{{ $inboxes[$i]->id }}">
                                    <button class="py-2 w-full">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        @else
            <h1 class="text-sm md:text-2xl text-center font-bold text-gray-400">Inbox Kosong</h1>
        @endif
    </section>
</x-admin>
