<button {{ $attributes->class([
    'bg-teal-500 hover:bg-teal-700 text-slate-900' => $color == 'teal',
    'bg-red-300 hover:bg-red-500 text-slate-900' => $color == 'red',
    'border border-teal-500 text-teal-500 hover:bg-teal-500 hover:text-slate-300' => $color == 'outline-teal',
    'border border-red-500 text-red-500 hover:bg-red-500 hover:text-slate-300' => $color == 'outline-red',
    'rounded px-4 py-2 font-semibold text-lg']) }}
    type='{{ $type }}'>
    {{ $slot }}
</button>