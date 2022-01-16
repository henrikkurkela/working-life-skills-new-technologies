<div>
    <label class='text-slate-900' for='{{ $name }}'>{{ $label }}</label><br />
    <input class='w-full h-auto bg-slate-300 p-1 border rounded' type='{{ $type }}' name='{{ $name }}'
        autocomplete='{{ $autocomplete ?? ' off' }}' /><br />
</div>