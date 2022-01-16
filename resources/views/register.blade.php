<x-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <div class='bg-slate-500 p-4 shadow-xl rounded flex flex-col items-center w-fit flex-wrap mt-16 mx-auto'>
        <div class='divide-y divide-slate-900'>
            <form class='w-96' method='POST' action='/register'>
                <x-error-message />
                <p class='text-3xl font-bold text-center text-slate-900'>Register</p>
                {{ csrf_field() }}
                <x-input type='text' label='Name' name='name' autocomplete='name' />
                <x-input type='text' label='Email address' name='email' autocomplete='email' />
                <x-input type='password' label='Password' name='password' autocomplete='password' />
                <x-button type='submit' color='teal' class='w-full'>Register</x-button>
            </form>
            <div class='flex flex-row items-center'>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class='text-slate-900'>Already registered? Login <a class='text-blue-900' href='/login'>here</a>.
                </p>
            </div>
        </div>
    </div>
</x-layout>