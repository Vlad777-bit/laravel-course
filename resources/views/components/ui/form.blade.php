<form method="{{ $method }}" action="{{ $route }}">

    @csrf
    @method("$customMethod")

    {{ $slot }}

    <br><br>

    {{ $button }}
</form>
