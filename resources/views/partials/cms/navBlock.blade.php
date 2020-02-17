<!-- Heading -->
@if (isset($header))
    <div class="sidebar-heading">
        {{$header}}
    </div>
@endif

{{ $slot }}

<!-- Divider -->
<hr class="sidebar-divider">
