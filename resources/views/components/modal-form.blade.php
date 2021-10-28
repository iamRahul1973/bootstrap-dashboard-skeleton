<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $action }}" method="POST" x-data="{loading:false}" x-on:submit="loading=true">
                <div class="modal-body">
                    {{ $slot }}
                </div>
                <div class="modal-footer">
                    @if ($method !== 'POST')
                        @method($method)
                    @endif
                    @csrf
                    <div x-show="!loading">
                        @isset($footer)
                            {{ $footer }}
                        @else
                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-{{ $variant }}">{{ $submitLabel }}</button>
                        @endisset
                    </div>
                    <div x-show="loading"><x-bootstrap-dashboard-skeleton::spinner /></div>
                </div>
            </form>
        </div>
    </div>
</div>