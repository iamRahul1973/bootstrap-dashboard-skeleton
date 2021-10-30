<div class="col-md-{{ $col }} form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}"
        id="{{ $id }}" value="{{ old($name, $defaultValue) }}"
        @error('record') aria-describedby="{{ $id }}Feedback" @enderror
        @if (filter_var($disabled, FILTER_VALIDATE_BOOLEAN) === true) disabled @endif
        @if ($max !== null) maxlength="{{ $max }}" @endif
        @if ($min !== null) minlength="{{ $min }}" @endif
        @if ($pattern !== null) pattern="{{ $pattern }}" @endif
        />
    @error($name)
        <div id="{{ $id }}Feedback" class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
