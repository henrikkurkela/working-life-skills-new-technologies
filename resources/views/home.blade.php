<x-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class='container max-w-lg bg-slate-500 p-4 shadow-xl rounded mt-16 mx-auto flex flex-col gap-4'>
        <form method='POST' action='/tasks'>
            <div class='flex flex-col gap-4 mb-4'>
                <p class='text-3xl font-bold text-center text-slate-900'>{{ Auth::user()->name }}'s Todo List</p>
                <x-error-message />
                {{ csrf_field() }}
                <div class='flex flex-col items-end gap-4'>
                    <div class='w-full'>
                        <x-input type='text' label='Task' name='task' autocomplete='off' />
                    </div>
                    <div class='hidden'>
                        <x-button type='submit' color='teal' class='w-full'>Submit</x-button>
                    </div>
                </div>
            </div>
        </form>
        <div>
            <p class='text-md text-slate-900'>Unfinished tasks</p>
            <div class='flex flex-col gap-4'>
                @foreach ($tasks as $task)
                    <x-task task='{{ $task->task }}' id='{{ $task->id }}' />
                @endforeach
            </div>
        </div>
        <div>
            <p class='text-md text-slate-900'>Work yet to be done</p>
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
        </div>
    </div>
</x-layout>

<script>
    window.onload = () => {
        const inputs = document.getElementsByTagName('input');
        for (i = 0; i < inputs.length; i++) {
            if (inputs[i].name === 'task') {
                inputs[i].focus();
            }
        }
    }
</script>
