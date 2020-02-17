<ul id="accordionSidebar" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/cms">
        <div class="sidebar-brand-icon">
            <object width="60px" height="60px" data="{{ asset('img/logo/logo_icon_white.svg') }}" type="image/svg+xml">
                <!-- Alt -->
                Veads
            </object>
        </div>
        <div class="sidebar-brand-text mx-3">Veads CMS</div>
    </a>
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/cms">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">


    <!-- Content blocks -->

    <!-- Home content block -->
    {{-- Icons : https://fontawesome.com/icons?d=gallery --}}
    @component('partials/cms/navblock', ['header' => 'Pages'])

        @include('partials.cms.navitem', ['subject' => 'pages.homepage', 'icon' => 'fa-home', 'link' => '/'])

    @endcomponent

    @component('partials/cms/navblock', ['header' => 'Componenten'])

        @include('partials.cms.navitem', ['subject' => 'Videos', 'icon' => 'fas fa-video', 'link' => '/homeCms'])

        @include('partials.cms.navitem', ['subject' => 'Veiling', 'icon' => 'fas fa-gavel', 'link' => '/veilingCms'])

        @include('partials.cms.navitem', ['subject' => 'Over Ons', 'icon' => 'fas fa-book-open', 'link' => '/descriptionCms'])

        @include('partials.cms.navitem', ['subject' => 'Partners', 'icon' => 'fa-hands-helping', 'link' => '/partnerCms'])

        @include('partials.cms.navitem', ['subject' => 'Personeel', 'icon' => 'fa-users', 'link' => '/personeelCms'])

        @include('partials.cms.navitem', ['subject' => 'Robots', 'icon' => 'fas fa-robot', 'link' => '/robotCms'])

        @include('partials.cms.navitem', ['subject' => 'Crowdfund', 'icon' => 'fas fa-money-bill-alt', 'link' => '/crowdfundCms'])

        @include('partials.cms.navitem', ['subject' => 'Projecten', 'icon' => 'fa-grip-horizontal', 'link' => '/projectCms'])

        @include('partials.cms.navitem', ['subject' => 'Social media', 'icon' => 'fas fa-user-friends', 'link' => '/socialmediaCms'])

        @include('partials.cms.navitem', ['subject' =>'FAQ','icon'=>'fa-question','link'=>'/questionCms'])

        @include('partials.cms.navitem', ['subject' =>'Algemene Voorwaarden','icon'=>'fas fa-file-signature','link'=>'/TermsAndConditionsCms'])

    @endcomponent

</ul>
