@include('layouts.templates.admin.header')
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('layouts.templates.admin.top-nav-bar')
        <!-- /.navbar-top-links -->

        @include('layouts.templates.admin.sidebar')
        <!-- /.navbar-static-side -->
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
@include('layouts.templates.admin.footer')