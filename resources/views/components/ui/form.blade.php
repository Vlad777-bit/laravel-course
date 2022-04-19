<form method="{{ $method }}" action="{{ $route }}", enctype="{{ $enctype }}">

    @csrf
    @method("$customMethod")

    {{ $slot }}

    <br><br>

    {{ $button }}
</form>
