<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                @if (!$hideCloseBtn)
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">{{ $closeBtnLabel }}</button>
                @endif
                @if (!$hideConfirmBtn)
                    <button type="submit" class="btn btn-sm btn-{{ $variant }}">{{ $ConfirmBtnLabel }}</button>
                @endif
            </div>
        </div>
    </div>
</div>