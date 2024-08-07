@if($errors->any())
<div class="flex flex-col gap-5 py-5">
    @foreach($errors->all() as $err)
    <div class="bg-[red]/50 p-10 text-2xl font-extrabold text-white border-4 border-[red] rounded-3xl">{{ $err }}</div>
    @endforeach
</div>
@endif
