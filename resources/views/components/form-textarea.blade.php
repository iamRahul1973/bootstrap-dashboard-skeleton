<div class="col-md-{{ $col }} form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror"
        name="{{ $name }}" id="{{ $id }}" rows="{{ $textareaRows }}"
        @error('record') aria-describedby="{{ $id }}Feedback" @enderror>{{ old($name, $defaultValue) }}</textarea>
    @error($name)
        <div id="{{ $id }}Feedback" class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
