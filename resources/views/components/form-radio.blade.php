<div class="col-md-{{ $col }} form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <div id="{{ $id }}">
        @foreach ($options as $key => $option)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="{{ $name }}" 
                    id="inlineRadio_{{ $loop->index + 1 }}" value="{{ $key }}"
                    @if (boolval($defaultChecked) === boolval($key)) checked @endif>
                <label class="form-check-label" for="inlineRadio_{{ $loop->index + 1 }}">{{ $option }}</label>
            </div>
        @endforeach
    </div>
    @error($name)
        <div id="{{ $id }}Feedback" class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>