<!doctype html>
<html lang="nl">

<head>
    @include('partials.layouts.head')
</head>

<body>
@include('partials.layouts.header')
@include('layouts.messages')

@yield('content')

<footer>
    @include('partials.layouts.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
