@if(session('error') || $errors->any())
<div class='bg-red-300 rounded p-4 my-1'>
    <p class='text-xl font-bold text-red-900'>Whoops!</p>
    @if(session('error'))
    <p class='text-red-900'>{{ session('error') }}</p>
    @endif
    @if($errors->any)
    @foreach ($errors->all() as $error)
    <p class='text-red-900'>{{ $error }}</p>
    @endforeach
    @endif
</div>
@endif