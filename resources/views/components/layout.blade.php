<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? 'Tailwind App' }}</title>
</head>

<body class='bg-slate-900'>
    <div class='flex flex-col items-center w-full mt-16'>
        <div class='bg-slate-500 p-4 shadow-xl rounded'>
            {{ $slot }}
        </div>
    </div>
</body>

</html>