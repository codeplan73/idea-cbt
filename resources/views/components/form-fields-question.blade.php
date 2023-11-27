<!-- form-fields.blade.php -->

<div class="col-md-3">
    <div class="tom-select-custom">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <input type="text" class="form-control text-center @error($name) is-invalid @enderror"
            value="{{ old($name, $value ?? '') }}" name="{{ $name }}">
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
