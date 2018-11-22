<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{URL::asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{URL::asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/_all.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/responsive.bootstrap.min.css')}}">
    <style>
        td,.primera_mayuscula{
            text-transform: capitalize;
        }
        .table1 {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .table1 {
            background-color: transparent;
        }
        .table1 {
            border-spacing: 0;
            border-collapse: collapse;
        }
        .table1 {
            display: table;
            border-spacing: 2px;
            border-color: grey;
        }
        .table1>tbody>tr>td, .table1>tfoot>tr>td {
            border-top: 1px solid #f4f4f4;
        }
        .table1>tbody>tr>td, .table1>tbody>tr>th, .table1>tfoot>tr>td, .table1>tfoot>tr>th, .table1>thead>tr>td, .table1>thead>tr>th {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }
        .active{
            background-color: #3c8dbc;
        }
        .active2{
            background-color: #3f6b77;
        }
        .mostrar{
            display: block !important;
        }

    </style>
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/chosen.jquery.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
    <script src="{{URL::asset('js/adminlte.min.js')}}"></script>
    <script src="{{URL::asset('js/icheck.min.js')}}"></script>
    <script src="{{URL::asset('js/select2.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('js/responsive.bootstrap.min.js')}}"></script>
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">

    <input type="hidden" id="slide" value="1">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header oc">

            <a href="#" class="logo" style="text-decoration: none;">
                <span class="logo-mini">{{ env('APP_NAME') }}</span>
                <span class="logo-lg">{{ env('APP_NAME') }}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{ asset('img/icon.png') }}"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{ asset('img/icon.png') }}"
                                         class="img-circle" alt="User Image"/>
                                    <p class="primera_mayuscula">
                                        {!! Auth::user()->name !!}
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer oc" style="max-height: 100px;text-align: center">
            <strong>Copyright © <a href="#">{{ env('APP_NAME') }}</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    {{ env('APP_NAME') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        $( ".sidebar-toggle" ).click(function() {
            open();
        });

        function open(){
            var x=$('#slide').val();
            if(x==1){
                $('#slide').val(0);
                $( "body" ).addClass("sidebar-collapse");
                $( "body" ).addClass("sidebar-open");
                $( "body" ).removeClass("sidebar-close");
            }
            if(x==0){
                $('#slide').val(1);
                $( "body" ).addClass("sidebar-close");
                $( "body" ).removeClass("sidebar-collapse");
                $( "body" ).removeClass("sidebar-open");
            }
            
        }

        $(document).ready( function () {
            $('.table').DataTable({
                "ordering": false,
                "responsive": true
            });
            $('.date').datepicker({format: "yyyy-mm-dd"}); 
            $('.tree-toggle').click(function () {
                $(this).parent().children('ul.tree').toggle(200);
            });
        } );
        
        var config = {
          '.chosen-select'           : {},
          '.chosen-select-deselect'  : { allow_single_deselect: true },
          '.chosen-select-no-single' : { disable_search_threshold: 10 },
          '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
          '.chosen-select-rtl'       : { rtl: true },
          '.chosen-select-width'     : { width: '95%' }
        }
        for (var selector in config) {
          $(selector).chosen(config[selector]);
        }
    </script>
    @yield('scripts')
</body>
</html>