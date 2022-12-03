@props([
    'name',
    'type'=>'text',
    'placeholder'=>Str::of($name)
        ->replace('_', ' ')
        ->title(),
    'icon'=>"",
    'icon_position'=>"end"

])

<div>
    <div class="input-group @error($name) is-invalid @enderror">

        @if ($icon_position === 'start')
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <span class="{{ $icon }}"></span>
                </div>
            </div>

            <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
                name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $placeholder }}">
        @else
            <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
                name="{{ $name }}" value="{{ old($name) }}" placeholder="{{ $placeholder }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="{{ $icon }}"></span>
                </div>
            </div>
        @endif
    </div>
    @error($name)
        <div class="error invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

{{-- <div class="input-group is-invalid">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name) }}" placeholder="{{ $placeholder }}">
    <div class="input-group-prepend">
        <div class="input-group-text">
            <span class="{{ $icon }}"></span>
        </div>
    </div>
    @error($name)
    <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}
    </span>
    @enderror
</div> --}}

