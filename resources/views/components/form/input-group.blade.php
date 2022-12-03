@props([
    'name',
    'type',
    'placeholder'=>Str::of($name)
        ->replace('_', ' ')
        ->title(),
    'icon'=>"",

])

<div class="input-group is-invalid">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name) }}" placeholder="{{ $placeholder }}">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="{{ $icon }}"></span>
        </div>
    </div>
    @error($name)
    <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}
    </span>
    @enderror
</div>
