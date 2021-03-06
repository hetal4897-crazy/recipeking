<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="<?php echo e(__('messages.Recipe King - Waditech')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo e(asset('public/admin-design/apple-icon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('public/admin-design/favicon.ico')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/themify-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/selectFX/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/vendors/jqvmap/dist/jqvmap.min.css')); ?>">
    <link rel="stylesheet"
          href="<?php echo e(asset('public/admin-design/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
          href="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/admin-design/assets/css/style.css')); ?>">
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
            <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('messages.Recipe King')); ?></a>
            <a class="navbar-brand hidden" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('messages.RK')); ?></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <i class="menu-icon fa fa-dashboard"></i>
                        <?php echo e(__('messages.Dashboard')); ?>

                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo e(route('category')); ?>">
                        <i class="menu-icon ti-layout-grid2"></i>
                        <?php echo e(__('messages.Category')); ?>

                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo e(route('recipe')); ?>">
                        <i class="menu-icon ti-book"></i>
                        <?php echo e(__('messages.Recipes')); ?>

                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo e(route('users')); ?>">
                        <i class="menu-icon ti-user"></i>
                        <?php echo e(__('messages.Users')); ?>

                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo e(route('review')); ?>">
                        <i class="menu-icon ti-star"></i>
                        <?php echo e(__('messages.Reviews')); ?>

                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo e(route('setting')); ?>">
                        <i class="menu-icon fa fa-cog"></i>
                        <?php echo e(__('messages.Setting')); ?>

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
                            <p class="red" id="notificationmsg"><?php echo e(__('messages.You have no Notification')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle"
                             src="<?php echo e(asset('public/upload/profile/'.Auth::user()->profile_pic)); ?>" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?php echo e(url('edit_profile')); ?>">
                            <i class="fa fa-user"></i>
                            <?php echo e(__('messages.My Profile')); ?>

                        </a>
                        <a class="nav-link" href="<?php echo e(url('change_password')); ?>">
                            <i class="fa fa-cog"></i>
                            <?php echo e(__('messages.Change password')); ?>

                        </a>
                        <a class="nav-link" href="<?php echo e(url('logout')); ?>">
                            <i class="fa fa-power-off"></i>
                            <?php echo e(__('messages.Logout')); ?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
</div>
<input type="hidden" id="url_lang" value="<?php echo e(url('/')); ?>"/>
<input type="hidden" id="Likes_lang" value="<?php echo e(__('messages.Likes')); ?>">
<input type="hidden" id="Views_lang" value="<?php echo e(__('messages.Views')); ?>">
<input type="hidden" id="Share_lang" value="<?php echo e(__('messages.Share')); ?>">
<input type="hidden" id="orders_pending" value="<?php echo e(__('messages.orders_pending')); ?>">
<input type="hidden" id="you_have" value="<?php echo e(__('messages.you_have')); ?>">
<input type="hidden" id="new_order" value="<?php echo e(__('messages.new_order')); ?>">
<input type="hidden" id="demo_lang" value="<?php echo e(Session::get('is_demo')); ?>">
<input type="hidden" id="delete_data" value='<?php echo e(__("messages.delete_alert")); ?>'>
<script src="<?php echo e(asset('public/admin-design/vendors/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/popper.js/dist/umd/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/assets/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('public/ckeditor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/jszip/dist/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/pdfmake/build/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/pdfmake/build/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin-design/vendors/datatables.net-buttons/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/admin.js').'?v=123'); ?>"></script>
<?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\myproject\recipeking\resources\views/admin/index.blade.php ENDPATH**/ ?>