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
            <button class='bg-red-300 hover:bg-red-500 rounded px-4 py-2 mt-4 w-fit font-semibold text-lg'
                action='submit'>
                Logout
            </button>
        </form>
    </div>
</x-layout>