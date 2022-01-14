<x-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <div class='bg-slate-500 p-4 shadow-xl rounded flex flex-col items-center w-fit flex-wrap mt-16 mx-auto'>
        <div class='divide-y divide-slate-900'>
            <form class='w-96' method='POST' action='/login'>
                <p class='text-3xl font-bold text-center text-slate-900'>Login</p>
                <x-error-message />
                {{ csrf_field() }}
                <div>
                    <label class='text-slate-900' for='email'>Email address</label><br />
                    <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='text' name='email'
                        autocomplete='email' /><br />
                </div>
                <div>
                    <label class='text-slate-900' for='password'>Password</label><br />
                    <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='password' name='password'
                        autocomplete='password' /><br />
                </div>
                <div class='flex flex-row justify-center'>
                    <button
                        class='bg-teal-500 hover:bg-teal-700 text-slate-900 rounded px-4 py-2 my-4 w-full font-semibold text-lg'
                        type='submit'>Login</button>
                </div>
            </form>
            <div class='flex flex-row items-center'>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class='text-slate-900'>No account yet? Register <a class='text-blue-900' href='/register'>here</a>.
                </p>
            </div>
        </div>
    </div>
</x-layout>