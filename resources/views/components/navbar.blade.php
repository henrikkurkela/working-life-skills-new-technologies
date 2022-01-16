<nav class='bg-slate-700'>
    <div class='container flex flex-row flex-wrap justify-between items-center mx-auto'>
        <p class='text-2xl text-center text-slate-500'>Tailwind CSS App</p>
        @if(Auth::check())
        <form method='POST' action='/logout'>
            {{ csrf_field() }}
            <x-button type='submit' color='outline-red' class='my-1'>Logout</x-button>
        </form>
        @else
        <form method='GET' action='/login'>
            <x-button type='submit' color='outline-teal' class='my-1'>Login</x-button>
        </form>
        @endif
    </div>
</nav>