<style>
    .hover-text:hover span {
        display: none
    }

    .hover-text:hover:after {
        content: 'Done'
    }

</style>

<div class='w-full rounded bg-slate-300'>
    <div class='flex flex-row justify-between content-center items-center gap-4 pl-4'>
        <p class='w-full text-md p-3'>
            {{ $task }}
        </p>
        <form class='self-stretch' method='POST' action='/tasks/{{ $id }}'>
            @method('DELETE')
            {{ csrf_field() }}
            <x-button class='flex flex-row items-center hover-text h-full' color='teal'>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
            </x-button>
        </form>
    </div>
</div>
