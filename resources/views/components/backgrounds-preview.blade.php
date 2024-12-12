@if($getRecord())

    @php
        // Kiểm tra xem $getRecord()->backgrounds có phải là chuỗi JSON không
        $images = is_array($getRecord()->backgrounds) ? $getRecord()->backgrounds : json_decode($getRecord()->backgrounds, true);
    @endphp

    <div class="grid grid-cols-3 gap-4">
        @foreach ($images as $image)
            <img src="{{ htmlspecialchars(is_array($image) ? implode(',', $image) : $image) }}" alt="Background Image" class="rounded-lg shadow-md">
        @endforeach
    </div>

@endif
