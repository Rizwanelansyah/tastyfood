@if ($errors->any() || Session::has('error') || Session::has('msg'))
    <div class="flex flex-col gap-5 py-5">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <div class="bg-[red]/50 p-10 text-2xl font-extrabold text-white border-4 border-[red] rounded-3xl">
                    {{ $err }}</div>
            @endforeach
        @endif
        @if (Session::has('error'))
            <div class="bg-[red]/50 p-10 text-2xl font-extrabold text-white border-4 border-[red] rounded-3xl">
                {{ Session::get('error') }}</div>
        @endif
        @if (Session::has('msg'))
            <div class="bg-[green]/50 p-10 text-2xl font-extrabold text-white border-4 border-[green] rounded-3xl">
                {{ Session::get('msg') }}</div>
        @endif
    </div>
@endif
