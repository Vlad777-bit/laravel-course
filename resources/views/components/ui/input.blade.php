<div class="form-group">
    <label for="{{ $name }}">{{ $title }}</label>
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
        class="form-control @if($errors->has("$name")) alert-danger @endif" />
    @error("$name") <strong class="text-danger">{{ $message }}</strong>  @enderror
</div>
