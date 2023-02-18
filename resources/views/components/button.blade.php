@props([
    'name' => 'submit',
    'class' => 'btn btn-primary',
    'type' => 'button',
])
<button type="{{ $type }}" class="{{ $class }}" value="Sign up">{{ $name }}</button>
