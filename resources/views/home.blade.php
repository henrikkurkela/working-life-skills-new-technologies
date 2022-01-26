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
        <div class='flex flex-col gap-4'>
            @foreach ($tasks as $task)
            <x-task task='{{ $task->task }}' id='{{ $task->id }}' />
            @endforeach
        </div>
    </div>
</x-layout>