<!-- form-fields.blade.php -->
<style>
    .capitalize-text {
        text-transform: uppercase;
    }
</style>


<div class="col-md-2 col-sm-6 col-xs-6 mb-sm-0">
    <div class="tom-select-custom">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <input type="number" class="form-control text-center @error($name) is-invalid @enderror"
            value="{{ old($name, $value ?? '') }}" name="{{ $name }}" maxlength="8" minlength="4">
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
