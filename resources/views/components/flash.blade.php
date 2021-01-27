@props([
    'type' => 'success', // Default
    'bgColors' => [
        'success' => 'background-color: magenta;',
        'error' => 'background-color: red;'
    ]
])
<div style = "{{$bgColors[$type]}} color: black;">
    {{ $slot }}
</div>