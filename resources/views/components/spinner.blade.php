@props(['withMessage' => true])

<div class="loading">
    <span class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </span>
    @if (filter_var($withMessage, FILTER_VALIDATE_BOOLEAN)) Wait a Second ... @endif
</div>