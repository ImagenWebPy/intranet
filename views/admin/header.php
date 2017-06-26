<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= TITLE_ADMIN . $this->title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= URL; ?>public/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= URL; ?>public/dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="<?= URL; ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <!-- TAG INPUTS -->
        <link rel="stylesheet" href="<?= URL; ?>public/assets/css/jquery.tagsinput.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?= URL; ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?= URL; ?>public/assets/js/jquery.tagsinput.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= URL; ?>admin" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>AD</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Administrador</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>


                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        <li class="treeview"><a href="<?= URL; ?>admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li class="treeview"><a href="<?= URL; ?>admin/contenido"><i class="fa fa-plus-square-o"></i><span>Contenido</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
