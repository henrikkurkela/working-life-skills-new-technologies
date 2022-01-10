<x-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <p class='text-3xl font-bold text-center'>
        Welcome {{ Auth::user()->name }}
    <form method='POST' action='/logout'>
        {{ csrf_field() }}
        <button class='bg-red-300 hover:bg-red-500 rounded px-4 py-2 mt-4 w-full font-semibold text-lg' action='submit'>
            Logout
        </button>
    </form>
    </p>
</x-layout>