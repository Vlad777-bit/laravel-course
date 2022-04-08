<div class="form-group">
    <label for="{{ $name }}">{{ $title }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}">
        {{ $slot }}
    </select>
</div>
