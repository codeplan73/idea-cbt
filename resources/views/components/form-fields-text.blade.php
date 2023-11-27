<!-- form-fields.blade.php -->

<div class="col-sm-6 mb-1 mb-sm-0">
    <div class="tom-select-custom">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <input type="text" class="form-control @error($name) is-invalid @enderror" value="{{ old($name) }}"
            name="{{ $name }}" />
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
