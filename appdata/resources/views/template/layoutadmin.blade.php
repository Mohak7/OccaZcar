<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin - @yield('title')</title>

    <link href="{{asset('massets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('massets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="{{asset('massets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('massets/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('massets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('massets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('massets/css/style-responsive.css')}}" rel="stylesheet">

</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="{{asset('massets/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
                <h5 class="centered">Sam Soffes</h5>
                <li class="mt">
                    <a href="{{route('adminpage')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listecate')}}">Liste</a></li>
                        <li><a href="{{route('newcate')}}">Nouveau</a></li>
                        <li><a href="buttons.html">Search</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Couleur</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listecolor')}}">Liste</a></li>
                        <li><a href="{{route('newcolor')}}">Nouveau</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Transmission</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listetranz')}}">Liste</a></li>
                        <li><a href="{{route('newtranz')}}">Nouveau</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Marques</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listemarque')}}">Liste</a></li>
                        <li><a href="{{route('newmarque')}}">Nouveau</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Nbrevitesse</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listenbrv')}}">Liste</a></li>
                        <li><a href="{{route('newnbrv')}}">Nouveau</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Carburant</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listecarbure')}}">Liste</a></li>
                        <li><a href="{{route('newcarbure')}}">Nouveau</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Produits</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listeprod')}}">Liste</a></li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Prix</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('listepriceprod')}}">Liste</a></li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">

                    @yield('contentadmin')

                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
            </p>
            <div class="credits">
                <!--
                  You are NOT allowed to delete the credit link to TemplateMag with free version.
                  You can delete the credit link only if you bought the pro version.
                  Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                  Licensing information: https://templatemag.com/license/
                -->
                Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
            </div>
            <a href="blank.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('massets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('massets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('massets/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('massets/lib/jquery.ui.touch-punch.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('massets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('massets/lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('massets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{asset('massets/lib/common-scripts.js')}}"></script>
<script src="{{asset('massets/js/viewer.js')}}"></script>
<!--script for this page-->

</body>

</html>
