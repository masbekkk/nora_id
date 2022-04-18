<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Fonts -->
    @include('layouts.style')
    <title>HIMIT PENS | Official Website</title>

</head>

<body>
    @include('layouts.head')
    @include('layouts.nav')
    @yield('content')
    {{-- @include('component.footer.footer') --}}
</body>
@include('layouts.script')
{{-- <!-- @include('component.footer.footer') --> --}}

</html>
