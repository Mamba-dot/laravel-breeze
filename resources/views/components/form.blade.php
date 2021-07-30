@props(['action'])

<form {{ $action }} {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>