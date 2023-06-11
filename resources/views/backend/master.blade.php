<!DOCTYPE html>
<html lang="en" data-footer="true"
    data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Acorn Admin Template | Ecommerce Dashboard</title>
    <meta name="description" content="Ecommerce Dashboard" />
    <!-- Favicon Tags Start -->
    @include('backend.inc.style')
</head>

<body>
    <div id="root">
        @include('backend.layout.navbar')
        <main>
            @yield('content')
        </main>
        <!-- Layout Footer Start -->
        @include('backend.layout.footer')
        <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    @include('backend.layout.theme-setting-modal')
    <!-- Theme Settings Modal End -->

    <!-- Search Modal Start -->
    @include('backend.layout.modal')
    <!-- Search Modal End -->

    @include('backend.inc.script')
</body>

</html>
