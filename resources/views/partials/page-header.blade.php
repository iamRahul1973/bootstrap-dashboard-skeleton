<div class="page-header">
    <div class="page-title mb-3">
        <h4>{{ $pageTitle ?? getPageTitleFromRoute() }}</h4>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
            @foreach (getBreadcrumbItemsFromRoute() as $item)
                <li class="breadcrumb-item active" aria-current="page">{{ Str::title(Str::replace('-', ' ', $item)) }}</li>
            @endforeach
        </ol>
    </nav>
    <hr>
</div>