<!DOCTYPE html>
<html lang="en" dir="rtl">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    @include('layouts.header')
</head>

<body>
@include('layouts.main-header')
    @yield('content')

    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
