<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }} - Admin Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap-dashboard-skeleton/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-dashboard-skeleton/icons/bootstrap-icons.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/bootstrap-dashboard-skeleton/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/bootstrap-dashboard-skeleton/css/admin/sidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-dashboard-skeleton/css/admin/custom.css') }}" rel="stylesheet">

    @includeIf('admin.partials.extra-header')

    {{-- Alpine --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body>

    @include('bootstrap-dashboard-skeleton::partials.svg-icons')

    <main>
        @include('bootstrap-dashboard-skeleton::partials.sidebar')
        <div class="content-area">
            @include('bootstrap-dashboard-skeleton::partials.page-header')
            @if (session()->has('status') && session()->get('status') === 'success')
                <x-bdskeleton-alert class="success" />
            @endif
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('vendor/bootstrap-dashboard-skeleton/js/admin/sidebars.js') }}"></script>
    @includeIf('admin.partials.extra-footer')
    @yield('custom-scripts')
</body>

</html>
