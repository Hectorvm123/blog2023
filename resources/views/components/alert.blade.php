@props(['type' => 'info', 'message'])

<div 
    class="rounded-md p-4 
           @if($type === 'success') bg-green-100 text-green-800 @endif
           @if($type === 'error') bg-red-100 text-red-800 @endif
           @if($type === 'warning') bg-yellow-100 text-yellow-800 @endif"
    role="alert"
>
    {{ $message }}
</div>
