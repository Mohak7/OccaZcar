  <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

       <title>Voiture - @yield('title')</title>

       <!-- Bootstrap -->
       <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>

       <!-- Slick -->
       <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick.css')}}"/>
       <link type="text/css" rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}"/>

       <!-- nouislider -->
       <link type="text/css" rel="stylesheet" href="{{asset('assets/css/nouislider.min.css')}}"/>

       <!-- Font Awesome Icon -->
       <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

       <!-- Custom stlylesheet -->
       <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>


   </head>


   <body>
   <!-- HEADER -->
   <header>
       <!-- TOP HEADER -->

       <!-- MAIN HEADER -->
       <div id="header">
           <!-- container -->
           <div class="container">
               <!-- row -->
               <div class="row">
                   <!-- LOGO -->
                   <div class="col-md-3">
                       <div class="header-logo">
                           <a href="#" class="logo">
                               <img src="{{asset('assets/img/logo.png')}}" alt="">
                           </a>
                       </div>
                   </div>
                </header>
                   <!-- /LOGO -->
   <?php /*
                   <!-- SEARCH BAR -->
                   <div class="col-md-6">
                       <div class="header-search">
                           <form>
                               <select class="input-select" name="cateliste_id">
                                   <option value="0">All Categories</option>
                                   @forelse ($catelist as $liste)
                                       <option value="{{$liste->id}}">{{$liste->namecate}}</option>
                                   @empty
                                       <option value="">No Category</option>
                                   @endforelse
                               </select>
                               <input class="input" placeholder="Search here">
                               <button class="btn-xs search-btn">Search</button>
                           </form>
                       </div>
                   </div>
                   <!-- /SEARCH BAR -->

                   <!-- ACCOUNT -->
                   <div class="col-md-3 clearfix">
                       <div class="header-ctn">

                           <!-- Menu Toogle -->
                           <div class="menu-toggle">
                               <a href="#">
                                   <i class="fa fa-bars"></i>
                                   <span>Menu</span>
                               </a>
                           </div>
                           <!-- /Menu Toogle -->
                       </div>
                   </div>
                   <!-- /ACCOUNT -->
               </div>
               <!-- row -->
           </div>
           <!-- container -->
       </div>
       <!-- /MAIN HEADER -->
   </header>
   <!-- /HEADER -->
*/ ?>
   <!-- NAVIGATION -->
   <nav id="navigation">
       <!-- container -->
       <div class="container">
           <!-- responsive-nav -->
           <div id="responsive-nav">
               <!-- NAV -->
               <ul class="main-nav nav navbar-nav">
                   <li><a href="{{route('adminpage')}}" class="btn-danger">Dash</a></li>
                   <li><a href="{{route('homepage')}}">Accueil</a></li>
                   <li><a href="#">Recherche</a></li>
                   <li><a href="{{route('contactpage')}}">Contact</a></li>
               </ul>
               <!-- /NAV -->
           </div>
           <!-- /responsive-nav -->
       </div>
       <!-- /container -->
   </nav>
   <!-- /NAVIGATION -->






   @yield('content')




   <!-- FOOTER -->
   <footer id="footer">
       <!-- top footer -->
       <div class="section">
           <!-- container -->
           <div class="container">
               <!-- row -->
               <div class="row">
                   <div class="col-md-3 col-xs-6">
                       <div class="footer">
                           <h3 class="footer-title">About Us</h3>
                           <ul class="footer-links">
                               <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                               <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                               <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                           </ul>
                       </div>
                   </div>


                   <div class="clearfix visible-xs"></div>

                   <div class="col-md-3 col-xs-6">
                       <div class="footer">
                           <h3 class="footer-title">Information</h3>
                           <ul class="footer-links">
                               <li><a href="{{route('aboutpage')}}">About Us</a></li>
                               <li><a href="{{route('contactpage')}}">Contact Us</a></li>
                           </ul>
                       </div>
                   </div>

                   <div class="col-md-3 col-xs-6">
                       <div class="footer">
                           <h3 class="footer-title">Service</h3>
                           <ul class="footer-links">
                               <li><a href="{{route('contactpage')}}">Help</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <!-- /row -->
           </div>
           <!-- /container -->
       </div>
       <!-- /top footer -->

       <!-- bottom footer -->
       <div id="bottom-footer" class="section">
           <div class="container">
               <!-- row -->
               <div class="row">
                   <div class="col-md-12 text-center">

							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                   </div>
               </div>
               <!-- /row -->
           </div>
           <!-- /container -->
       </div>
       <!-- /bottom footer -->
   </footer>
   <!-- /FOOTER -->

   <!-- jQuery Plugins -->
   <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/slick.min.js')}}"></script>
   <script src="{{asset('assets/js/nouislider.min.js')}}"></script>
   <script src="{{asset('assets/js/jquery.zoom.min.js')}}"></script>
   <script src="{{asset('assets/js/main.js')}}"></script>

   </body>
   </html>








