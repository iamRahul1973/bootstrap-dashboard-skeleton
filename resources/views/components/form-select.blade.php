<div class="col-md-{{ $col }} form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <select id="{{ $id }}" name="{{ $name }}" class="form-select @error($name) is-invalid @enderror"
        aria-label="select {{ $id }}">
        <option value>Select any Option</option>
        @foreach ($options as $key => $option)
            <option value="{{ $key }}"
                @if (old($name) === (string) $key)
                    selected
                @elseif((old($name) === null) && ($defaultSelected === (String) $key))
                    selected
                @endif>
                {{ $option }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div id="{{ $id }}Feedback" class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>