<!-- resources/views/components/backgrounds-preview.blade.php -->
@php
    $backgrounds = $getState();
@endphp

@if(is_array($backgrounds))
    <div class="flex space-x-2">
        @foreach($backgrounds as $background)
            <img src="{{ $background }}" alt="Background Image" class="w-16 h-16 rounded-lg">
        @endforeach
    </div>
@endif
