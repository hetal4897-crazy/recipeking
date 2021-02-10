<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="{{__('messages.Recipe King - Waditech')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('public/admin-design/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('public/admin-design/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/admin-design/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/admin-design/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('dashboard')}}">{{__('messages.Recipe King')}}</a>
            <a class="navbar-brand hidden" href="{{route('dashboard')}}">{{__('messages.RK')}}</a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('dashboard')}}">
                        <i class="menu-icon fa fa-dashboard"></i>
                        {{__('messages.Dashboard')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('category')}}">
                        <i class="menu-icon ti-layout-grid2"></i>
                        {{__('messages.Category')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('chef')}}">
                        <i class="menu-icon fa fa-cutlery"></i>
                        {{__('messages.Chef')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('recipe')}}">
                        <i class="menu-icon ti-book"></i>
                        {{__('messages.Recipes')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('users')}}">
                        <i class="menu-icon ti-user"></i>
                        {{__('messages.Users')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('review')}}">
                        <i class="menu-icon ti-star"></i>
                        {{__('messages.Reviews')}}
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('setting')}}">
                        <i class="menu-icon fa fa-cog"></i>
                        {{__('messages.Setting')}}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
<div id="right-panel" class="right-panel">
    <header id="header" class="header">
        <div class="header-menu">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" onclick="checknotify()" type="button"
                                id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger" id="ordercount">0</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification" id="notificationshow">
                            <p class="red" id="notificationmsg">{{__('messages.You have no Notification')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle"
                             src="{{asset('public/upload/profile/'.Auth::user()->profile_pic)}}" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{url('edit_profile')}}">
                            <i class="fa fa-user"></i>
                            {{__('messages.My Profile')}}
                        </a>
                        <a class="nav-link" href="{{url('change_password')}}">
                            <i class="fa fa-cog"></i>
                            {{__('messages.Change password')}}
                        </a>
                        <a class="nav-link" href="{{url('logout')}}">
                            <i class="fa fa-power-off"></i>
                            {{__('messages.Logout')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
</div>
<input type="hidden" id="url_lang" value="{{url('/')}}"/>
<input type="hidden" id="Likes_lang" value="{{__('messages.Likes')}}">
<input type="hidden" id="Views_lang" value="{{__('messages.Views')}}">
<input type="hidden" id="Share_lang" value="{{__('messages.Share')}}">
<input type="hidden" id="orders_pending" value="{{__('messages.orders_pending')}}">
<input type="hidden" id="you_have" value="{{__('messages.you_have')}}">
<input type="hidden" id="new_order" value="{{__('messages.new_order')}}">
<input type="hidden" id="demo_lang" value="{{Session::get('is_demo')}}">
<input type="hidden" id="delete_data" value='{{__("messages.delete_alert")}}'>
<script src="{{asset('public/admin-design/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/admin-design/assets/js/main.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/js/script.js')}}"></script>
<script src="{{asset('public/js/admin.js').'?v=123'}}"></script>
@yield('footer')
</body>
</html>
