<x-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <form class='w-96' method='POST' action='/register'>
        <x-error-message />
        <p class='text-3xl font-bold text-center'>Register</p>
        {{ csrf_field() }}
        <div>
            <label for='email'>Name</label><br />
            <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='text' name='name'
                autocomplete='name' /><br />
        </div>
        <div>
            <label for='email'>Email address</label><br />
            <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='text' name='email'
                autocomplete='email' /><br />
        </div>
        <div>
            <label for='password'>Password</label><br />
            <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='password' name='password'
                autocomplete='password' /><br />
        </div>
        <div class='flex flex-row justify-center'>
            <button class='bg-teal-500 hover:bg-teal-700 rounded px-4 py-2 mt-4 w-full font-semibold text-lg'
                type='submit'>Register</button>
        </div>
        <p>Already registered? Login <a class='text-blue-900' href='/login'>here</a>.</p>
    </form>
</x-layout>