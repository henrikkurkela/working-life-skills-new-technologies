<x-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class='container bg-slate-500 p-4 shadow-xl rounded mt-16 mx-auto'>
        <p class='text-3xl font-bold text-center'>
            Welcome {{ Auth::user()->name }}
        </p>
        <form method='POST' action='/logout'>
            {{ csrf_field() }}
            <x-button type='submit' text='Logout' color='red' />
        </form>
    </div>
</x-layout>