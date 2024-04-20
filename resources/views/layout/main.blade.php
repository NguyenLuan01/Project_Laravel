<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.head')
</head>

<body>

{{--header--}}
@include('layout.header')

@yield('body')


{{--footer--}}
@include('layout.footer')

{{--footer-bottom--}}
@include('layout.footerBottom')
{{--script--}}
@include('layout.script')
</body>
</html>
