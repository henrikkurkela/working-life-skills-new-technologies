<div class='w-72 rounded bg-slate-300'>
    <div class='flex flex-row justify-start content-center gap-4 px-4 pt-4'>
        <p class='font-semibold text-red-700 text-4xl'>
            !
        </p>
        <p>
            {{ $task }}
        </p>
    </div>
    <div class='p-4'>
        <form method='POST' action='/tasks/{{ $id }}'>
            @method('DELETE')
            {{ csrf_field() }}
            <x-button class='w-full' color='teal'>Done</x-button>
        </form>
    </div>
</div>