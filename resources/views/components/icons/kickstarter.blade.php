@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
    <path d="M1000 500c0 277-223 500-500 500S0 777 0 500 223 0 500 0s500 223 500 500zM749 633L616 487l114-137c33-43 23-103-20-135-42-32-103-24-134 19L459 394V281c0-52-42-93-94-93s-94 41-94 93v438c0 52 42 94 94 94s94-42 94-94V592l141 167c34 39 95 45 135 11 42-34 47-95 14-137z"></path>
</svg>
