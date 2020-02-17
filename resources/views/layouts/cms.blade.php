<!doctype html>
<html lang="nl">
<head>
    @include('partials.layouts.head')
</head>
<body id="page-top">
<div id="wrapper">

    @include('partials.cms.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('partials.cms.header')
            <div class="container-fluid">
                @include('layouts.messages')
                @yield('content')
            </div>
        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

</body>
</html>
