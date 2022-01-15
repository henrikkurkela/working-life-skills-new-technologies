<nav class='bg-slate-700'>
    <div class='container flex flex-row flex-wrap justify-between items-center mx-auto'>
        <p class='text-2xl text-center text-slate-500'>Tailwind CSS App</p>
        @if(Auth::check())
        <form method='POST' action='/logout'>
            {{ csrf_field() }}
            <button
                class='border border-red-500 text-red-500 hover:bg-red-500 hover:text-slate-300 rounded px-4 py-1 my-1 w-fit-content font-semibold text-lg'
                type='submit'>Logout</button>
        </form>
        @else
        <form method='GET' action='/login'>
            <button
                class='border border-teal-700 text-teal-700 hover:bg-teal-700 hover:text-slate-300 rounded px-4 py-1 my-1 w-fit-content font-semibold text-lg'
                type='submit'>Login</button>
        </form>
        @endif
    </div>
</nav>