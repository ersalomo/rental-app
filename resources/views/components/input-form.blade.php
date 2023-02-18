@props([
    'type' => 'text',
    'class' => 'form-control',
    'placeholder' => 'input data...',
    'label' => '',
    'model' => '',
])
<label for="firstname">{{ $label }}</label>
<input type="{{ $type }}" class="{{ $class }}" placeholder="{{ $placeholder }}"
    wire:model.lazy="{{ $model }}" value="{{ old($model) }}">
