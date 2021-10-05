<div class="col-md-{{ $col }} form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}"
        id="{{ $id }}" value="{{ old($name, $defaultValue) }}"
        @error('record') aria-describedby="{{ $id }}Feedback" @enderror />
    @error($name)
        <div id="{{ $id }}Feedback" class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
