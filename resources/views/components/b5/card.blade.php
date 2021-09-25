<div {{ $attributes->class(['card shadow', "border-{$status}" => $hasStatus]) }}>
    <div class="card-header {{ $hasStatus ? "bg-{$status} text-white" : '' }}">{{ $title }}</div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>