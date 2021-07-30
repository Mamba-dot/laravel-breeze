@props(['action'])

<form {{ $action }} {{ $attributes }}>
    {{ $slot }}
</form>