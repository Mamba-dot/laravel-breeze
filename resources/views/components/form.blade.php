<form {{ $action }} {{ $attributes }}>
    @csrf
    {{ $slot }}
</form>