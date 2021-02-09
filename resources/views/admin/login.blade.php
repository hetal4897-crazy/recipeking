<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{__('messages.Recipe King')}}</title>
    <meta name="description" content="{{__('messages.Recipe King')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('public/admin-design/apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('public/admin-design/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin-design/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{route('admin-login')}}">
                        <h3 style="color:white">{{__('messages.Recipe King')}}</h3>
                    </a>
                </div>
                <div class="login-form">
                    @if(Session::get("message"))
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">{{__('messages.Error')}}</span>
                                {{Session::get("message")}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                </button>
                        </div>
                    @endif
                    <form method="POST" action="{{route('post-login')}}">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label>{{__('messages.Email')}}</label>
                            <input type="email" name="email" required class="form-control" placeholder="{{__('messages.Email')}}"/>
                        </div>
                        <div class="form-group">
                             <label>{{__('messages.Password')}}</label>
                             <input type="password" name="password" required class="form-control" placeholder="{{__('messages.Password')}}" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">{{__('messages.Sign in')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/admin-design/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin-design/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('public/admin-design/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/admin-design/assets/js/main.js')}}"></script>
</body>
</html>
