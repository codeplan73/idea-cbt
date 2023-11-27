<!-- components/form-select-field.blade.php -->
<div class="col-sm-3 col-md-3 mb-sm-0">
    <div class="tom-select-custom">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        <select class="js-select form-select @error($name) is-invalid @enderror" name="{{ $name }}">
            @foreach ($options as $option)
                @if (!empty($option->$value))
                    <option value="{{ $value }}">{{ $value }}</option>
                @endif
            @endforeach
        </select>
        @error($name)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
