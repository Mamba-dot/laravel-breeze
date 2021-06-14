@props(['href'])

<div {{ $attributes->merge(['class' => 'mt-10']) }}>
    <a href="{{ $href }}"> 
        {{ $slot }}
    </a>
</div>

