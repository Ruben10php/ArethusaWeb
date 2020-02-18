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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v6.0"></script>
</body>

</html>
