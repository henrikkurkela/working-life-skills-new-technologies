<div class='flex flex-row justify-center'>
    @if ($color == 'teal')
    <button class='bg-teal-500 hover:bg-teal-700 text-slate-900 rounded px-4 py-2 my-4 w-full font-semibold text-lg'
        type='{{ $type }}'>{{ $text }}</button>
    @elseif ($color == 'red')<button
        class='bg-red-300 hover:bg-red-500 text-slate-900 rounded px-4 py-2 my-4 w-full font-semibold text-lg'
        type='{{ $type }}'>{{ $text }}</button>
    @endif
</div>