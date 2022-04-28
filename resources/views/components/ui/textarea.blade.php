<label for="{{ $name }}">{{ $title }}</label>
<textarea class="form-control" name="{{ $name }}" id="{{ $name }}">
    {{ $slot }}
</textarea>
