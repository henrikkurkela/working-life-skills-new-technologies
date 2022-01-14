<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? 'Tailwind App' }}</title>
</head>

<body class='bg-slate-900'>
    <nav class='bg-slate-700'>
        <div class='container flex flex-row flex-wrap justify-between items-center mx-auto'>
            <p class='text-2xl text-center text-slate-500'>Tailwind CSS App</p>
            @if(Auth::check())
            <form method='POST' action='/logout'>
                {{ csrf_field() }}
                <button
                    class='bg-teal-500 hover:bg-teal-700 text-slate-900 rounded px-4 py-1 my-1 w-fit-content font-semibold text-lg'
                    type='submit'>Logout</button>
            </form>
            @else
            <form method='GET' action='/login'>
                <button
                    class='bg-teal-500 hover:bg-teal-700 text-slate-900 rounded px-4 py-1 my-1 w-fit-content font-semibold text-lg'
                    type='submit'>Login</button>
            </form>
            @endif
        </div>
    </nav>
    {{ $slot }}
</body>

</html>