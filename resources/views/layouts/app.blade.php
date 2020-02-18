<!doctype html>
<html lang="nl">

<head>
    @include('partials.layouts.head')
</head>

<body>
@include('partials.layouts.header')
@include('layouts.messages')
<div class="paralax_wrap">
    <div class="paralax_section">
        @yield('content')
    </div>
</div>
<footer>
    @include('partials.layouts.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
