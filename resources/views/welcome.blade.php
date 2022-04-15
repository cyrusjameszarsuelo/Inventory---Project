<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>Inventory | @yield('title')</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </div>
    @include('includes.scripts')
</body>
</html>