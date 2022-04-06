<label for="{{ $name }}">{{ $title }}</label>
<select name="{{ $name }}" id="{{ $name }}" class="pure-input-1">
    {{ $slot }}
</select>
