<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from nouthemes.net/html/athena/homepage-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:21:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>exxpert</title><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap%7cMontserrat:400,600,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/athena/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  </head>
  <body>
    <header class="header header--2 dark" data-sticky="true">
      <div class="header__left">
        <a class="ps-logo" href="index.html">
        <img src="{{asset('assets/img/exxpert-logo2.png')}}" alt=""></a></div>
      <div class="header__right">
        <ul class="menu">
          <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span> </li>
          <li><a href="brower-freelancer.html">exxperts</a></li>
          <li><a href="brower-employers.html">companies</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li class="menu-item-has-children"><a href="blog-grid.html">explore</a><span class="sub-toggle"></span>
            <ul class="sub-menu">
              <li><a href="blog-list.html">Blog list</a></li>
              <li><a href="blog-grid.html">Blog Grid</a></li>
              <li><a href="blog-detail.html">Blog Detail Width Sidebar</a></li>
			  <li><a href="blog-no-sidebar.html">Blog Detail Without Sidebar</a>
			
			<div class="">
				<a href="#">electricians</a>  ||  
				<a href="#">tillers</a>  ||  
				<a href="#">massons</a>   ||  
				<a href="#">web designers</a>  ||  
				<a href="#">graphic designers</a>  ||  
				<a href="#">houser cleaner</a>  ||  
				<a href="#">painters</a>   ||  
				
			</div>
			</li>
            </ul>
          </li>
          <li><a href="contact-us.html">Contact</a></li>
		</ul>
		

		@guest
		<div class="header__actions">
			
		@if (Route::has('login'))
			
				<a class="ps-btn ps-btn--outline" href="{{ route('login') }}">{{ __('Login') }}</a>
			
		@endif
		
		@if (Route::has('register'))
			
				<a class="ps-btn" href="{{ route('register') }}">{{ __('Register') }}</a>

		@endif 
	</div> 
	@else
	<ul class="menu">
		

		<li class="menu-item-has-children"><a href="blog-grid.html">Hi	{{ Auth::user()->name }} <i class="fa fa-user"></i>  </a><span class="sub-toggle"></span>
            <ul class="sub-menu">
              <li><a class="dropdown-item" href="{{ route('logout') }}"
				onclick="event.preventDefault();
							  document.getElementById('logout-form').submit();">
				 {{ __('Logout') }}
				 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			 </a></li>
              <li><a href="blog-grid.html">dasboard</a></li>
              <li><a href="blog-detail.html">account</a></li>
			  <li><a href="blog-no-sidebar.html">profile</a>
			
			
			</li>
            </ul>
          </li>

	
		
	</ul>
	@endguest

      </div>
    </header>
    <header class="header header--mobile" data-sticky="false">
      <div class="header__content">
        <div class="header__left"><a class="ps-toggle--sidebar" href="#navigation-mobile"><i class="fa fa-bars"></i></a></div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="{{asset('assets/img/exxpert-logo2.png')}}" alt=""></a></div>
        <div class="header__right">
          <div class="header__actions"><a class="ps-search-btn" href="#"><i class="fa fa-search"></i></a></div>
        </div>
      </div>
    </header>
    <div class="ps-panel--sidebar" id="navigation-mobile">
      <div class="ps-panel__header">
        <h3>Menu</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span></li>
          <li><a href="brower-freelancer.html">exxpert</a></li>
          <li><a href="brower-employers.html">companies</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li class="menu-item-has-children"><a href="blog-grid.html">explore</a><span class="sub-toggle"></span>
            <ul class="sub-menu">
              <li><a href="blog-list.html">Blog list</a></li>
              <li><a href="blog-grid.html">Blog Grid</a></li>
              <li><a href="blog-detail.html">Blog Detail Width Sidebar</a></li>
              <li><a href="blog-no-sidebar.html">Blog Detail Without Sidebar</a></li>
            </ul>
          </li>
          <li><a href="contact-us.html">Contact</a></li>
        </ul>
      </div>
    </div>
<!-- Header Container / End -->

<main class="py-4">
	@yield('content')
</main>
  


<!-- Footer
================================================== -->
      
      <footer class="ps-footer">
        <div class="container">
          <div class="ps-footer__top"><a class="ps-logo" href="index.html"><img src="{{asset('assets/img/exxpert-logo2.png')}}" alt=""></a>
            <div class="ps-footer__numbers">
              <p><span><strong>2,342,233</strong> COMMUNITY MEMBERS</span><span><strong>15,342,216</strong> TOTAL JOBS POSTED</span></p>
            </div>
          </div>
          <div class="ps-footer__center">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <aside class="widget widget_footer">
                  <h3 class="widget-title">Meet exxpert</h3>
                  <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">How it Works</a></li>
                    <li><a href="#">Our services</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact us</a></li>
                  </ul>
                </aside>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                <aside class="widget widget_footer">
                  <h3 class="widget-title">exxpert Tools</h3>
                  <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Resumes</a></li>
                    <li><a href="#">My Jobs</a></li>
                    <li><a href="#">Employers’ Messages</a></li>
                  </ul>
                </aside>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                <form class="ps-form--newsletters" action="http://nouthemes.net/html/athena/index.html" method="get">
                  <h3>Email Newsletters</h3>
                  <p>Keep me up to date with content, updates, and offers from exxpert</p>
                  <div class="form-group--nest">
                    <input class="form-control" type="email" placeholder="Email address">
                    <button>Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="ps-footer__bottom">
            <figure>
              <ul class="ps-footer__nav">
                <li><a href="#"> Privacy Policy</a></li>
                <li><a href="#"> Terms and Conditions</a></li>
                <li><a href="#"> Help</a></li>
                <li><a href="#"> Ath Licenses</a></li>
                <li><a href="#"> Partners</a></li>
              </ul>
			<p>&copy; 2020 <a href="#"><img src="{{asset('assets/img/exxpert-logo2.png')}}" alt="" srcset=""></p>
            </figure>
            <figure>
              <div class="ps-footer__language"><span>Language:</span>
                <select class="ps-select">
                  <option value="1">English</option>
                  <option value="1">Vietnamese</option>
                </select>
              </div>
              <ul class="ps-list--social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </figure>
          </div>
        </div>
      </footer>
    </div>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="http://nouthemes.net/html/athena/do_action" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    <!-- Plugins-->
    <script src="{{asset('assets/plugins/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/plugins/anime.min.js')}}"></script>
    <script src="{{asset('assets/plugins/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/jquery.filterizr.js')}}"></script>
	<script src="{{asset('assets/js/filterizr.min.js')}}"></script>
	<script>

$(window).load(function () {
    
    if ($('body .filter-portfolio').length > 0) {
        $(function () {
            $('.filter-portfolio').filterizr(
                {
                    delay: 0
                }
            );
        });
        $('.filteriz-navigation li').on('click', function () {
            $('.filteriz-navigation .filtr').removeClass('active');
            $(this).addClass('active');
        });
    }

});
	</script>
  </body>

<!-- Mirrored from nouthemes.net/html/athena/homepage-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:23:22 GMT -->
</html>