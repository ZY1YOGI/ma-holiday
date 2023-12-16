@props(['src' => 'default-placeholder.png', 'alt' => 'image', 'id' => null, 'width' => null, 'height' => null])

<img {{ $attributes->merge(['src' => $src, 'id' => $id, 'alt' => $alt, 'width' => $width, 'height' => $height]) }} />
