<div>
    <p class='text-md text-slate-900'>Work yet to be done</p>
    @if (count($tasks) > 0)
        <table class='table-auto shadow-xl rounded overflow-hidden'>
            <thead class='bg-slate-300 text-slate-900'>
                <th class='p-3 text-left'>Task</th>
                <th class='p-3'>Actions</th>
            </thead>

            <body>
                @foreach ($tasks as $task)
                    <tr class='even:bg-slate-300 odd:bg-slate-100'>
                        <td class='w-full p-3'>
                            {{ $task->task }}
                        </td>
                        <td>
                            <form method='POST' action='/tasks/{{ $task->id }}'>
                                @method('DELETE')
                                {{ csrf_field() }}
                                <x-button class='flex flex-row items-center m-1' type='submit' color='teal'>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                    <div>Done</div>
                                </x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    @else
        <div class='bg-slate-300 shadow-xl rounded'>
            <p class='text-md text-center'>All tasks done!</p>
        </div>
    @endif
</div>
