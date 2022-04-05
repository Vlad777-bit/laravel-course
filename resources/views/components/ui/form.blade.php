<form method="{{ $method }}" class="pure-form" action="{{ $route }}">

    @csrf
    @method("$customMethod")

    <fieldset class="pure-group">
        {{ $slot }}
    </fieldset>

    {{ $button }}
</form>
