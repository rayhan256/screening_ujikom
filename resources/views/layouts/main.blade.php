<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Klinik
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    @include('templates/styles')
</head>

<body class="">
    <div class="wrapper ">
        @include('templates/sidebar')
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            @include('templates/topbar')
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm"></div>
            <div class="content">
                @yield('content')
            </div>
            @include('templates/footer')
        </div>
    </div>
    @include('templates/script')
</body>

</html>
