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
                @if (count($tasks) > 0)
                    @foreach ($tasks as $task)
                        <x-task :task='$task->task' :id='$task->id' />
                    @endforeach
                @else
                    <p class='w-full bg-slate-300 text-center text-md p-3'>
                        No tasks unfinished!
                    </p>
                @endif
            </div>
        </div>
        <x-task-table :tasks='$tasks' />
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
