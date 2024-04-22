@include('layouts.admin.header')
    <body class="sb-nav-fixed">
       @include('layouts.admin.topnavbar')
        <div id="layoutSidenav">

            @include('layouts.admin.sidebar')

            <div id="layoutSidenav_content">
               @yield('admin_content')
                
                @include('layouts.admin.footer')
    </body>
</html>
