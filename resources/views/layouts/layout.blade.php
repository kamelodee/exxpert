<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 22:28:53 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>exxpert||user dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/colors/blue.css')}}">

</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/"><img src="{{asset('assets/images/exxpert-logo.png')}}" alt="exxpert logo"></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

                    <li><a href="{{route('home')}}" class="current">Home</a>
							
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								
							<li><a href="{{route('tasks')}}">Browse Tasks</a>
									
						</li>
								
					<li><a href="{{route('jobs')}}">Browse Jobs</a>
									
						</li>

					<li><a href="{{route('companies')}}">For Employers</a>
						</ul>	
						</li>

						<li><a href="{{route('exxperts')}}" class="">find exxpert</a>
							
						</li>


					
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

          
			<!-- Right Side Content / End -->
			<div class="right-side">
                
                @guest
                <nav id="navigation">
					<ul id="responsive">
                @if (Route::has('login'))
                <li class="">
                        <a class="nav-link" href="{{ route('login') }}"> <i class="icon-feather-user"></i> {{ __('Login') }}</a>
                </li>
                @endif
                
                @if (Route::has('register'))

                <li class="">
                    <a class="nav-link" href="{{ route('register') }}"><i class="icon-feather-user"></i> {{ __('Become an exxpert') }}</a>
                </li>
                    
                @endif
                    </ul>
                </nav>
            @else
			



			<!--  User Notifications -->
			<div class="header-widget hide-on-mobile">
				
				<!-- Notifications -->
				<div class="header-notifications">

					<!-- Trigger -->
					<div class="header-notifications-trigger">
						<a href="#"><i class="icon-feather-bell"></i><span>4</span></a>
					</div>

					<!-- Dropdown -->
					<div class="header-notifications-dropdown">

						<div class="header-notifications-headline">
							<h4>Notifications</h4>
							<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
								<i class="icon-feather-check-square"></i>
							</button>
						</div>

						<div class="header-notifications-content">
							<div class="header-notifications-scroll" data-simplebar>
								<ul>
									<!-- Notification -->
									<li class="notifications-not-read">
										<a href="dashboard-manage-candidates.html">
											<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
											<span class="notification-text">
												<strong>Michael Shannah</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
											</span>
										</a>
									</li>

									<!-- Notification -->
									<li>
										<a href="dashboard-manage-bidders.html">
											<span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
											<span class="notification-text">
												<strong>Gilbert Allanis</strong> placed a bid on your <span class="color">iOS App Development</span> project
											</span>
										</a>
									</li>

									<!-- Notification -->
									<li>
										<a href="dashboard-manage-jobs.html">
											<span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
											<span class="notification-text">
												Your job listing <span class="color">Full Stack PHP Developer</span> is expiring.
											</span>
										</a>
									</li>

									<!-- Notification -->
									<li>
									<a href="{{route('dashboard')}}">
											<span class="notification-icon"><i class="icon-material-outline-group"></i></span>
											<span class="notification-text">
												<strong>Sindy Forrest</strong> applied for a job <span class="color">Full Stack Software Engineer</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
				
				<!-- Messages -->
				<div class="header-notifications">
					<div class="header-notifications-trigger">
						<a href="#"><i class="icon-feather-mail"></i><span>3</span></a>
					</div>

					<!-- Dropdown -->
					<div class="header-notifications-dropdown">

						<div class="header-notifications-headline">
							<h4>Messages</h4>
							<button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
								<i class="icon-feather-check-square"></i>
							</button>
						</div>

						<div class="header-notifications-content">
							<div class="header-notifications-scroll" data-simplebar>
								<ul>
									<!-- Notification -->
									<li class="notifications-not-read">
										<a href="dashboard-messages.html">
											<span class="notification-avatar status-online"><img src="images/user-avatar-small-03.jpg" alt=""></span>
											<div class="notification-text">
												<strong>David Peterson</strong>
												<p class="notification-msg-text">Thanks for reaching out. I'm quite busy right now on many...</p>
												<span class="color">4 hours ago</span>
											</div>
										</a>
									</li>

									<!-- Notification -->
									<li class="notifications-not-read">
										<a href="dashboard-messages.html">
											<span class="notification-avatar status-offline"><img src="images/user-avatar-small-02.jpg" alt=""></span>
											<div class="notification-text">
												<strong>Sindy Forest</strong>
												<p class="notification-msg-text">Hi Tom! Hate to break it to you, but I'm actually on vacation until...</p>
												<span class="color">Yesterday</span>
											</div>
										</a>
									</li>

									<!-- Notification -->
									<li class="notifications-not-read">
										<a href="dashboard-messages.html">
											<span class="notification-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></span>
											<div class="notification-text">
												<strong>Marcin Kowalski</strong>
												<p class="notification-msg-text">I received payment. Thanks for cooperation!</p>
												<span class="color">Yesterday</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<a href="dashboard-messages.html" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>

			</div>
			<!--  User Notifications / End -->


		   
			<!-- User Menu -->
			<div class="header-widget">

				<!-- Messages -->
				<div class="header-notifications user-menu">
					<div class="header-notifications-trigger">
						<a href="#"><div class="user-avatar status-online"><img src="{{asset('assets/images/user-avatar-small-01.jpg')}}" alt=""></div></a>
					</div>

					<!-- Dropdown -->
					<div class="header-notifications-dropdown">

						<!-- User Status -->
						<div class="user-status">

							<!-- User Name / Avatar -->
							<div class="user-details">
								<div class="user-avatar status-online"><img src="{{asset('assets/images/user-avatar-small-01.jpg')}}" alt=""></div>
								<div class="user-name">
								{{Auth::user()->name}}<span>Freelancer</span>
								</div>
							</div>
							
							<!-- User Status Switcher -->
							<div class="status-switch" id="snackbar-user-status">
								<label class="user-online current-status">Online</label>
								<label class="user-invisible">Invisible</label>
								<!-- Status Indicator -->
								<span class="status-indicator" aria-hidden="true"></span>
							</div>	
					</div>
					
					<ul class="user-menu-small-nav">
						<li><a href="{{route('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
						<li><a href="{{route('dashboard')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
						<li><a  href="{{ route('logout') }}"  onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
			   <i class="icon-material-outline-power-settings-new"></i> {{ __('Logout') }}</a>

						 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							 @csrf
						 </form>
						
						
						
						
						
						</li>
					</ul>

					</div>
				</div>
			   
			</div>
			<!-- User Menu / End -->
			@endguest








				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="{{route('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="{{route('messages')}}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>
							<li><a href="{{route('bookmarks')}}"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="{{route('reviews')}}"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="{{route('manage.jobs')}}">Manage Jobs <span class="nav-tag">3</span></a></li>
									<li><a href="{{route('manage.candidate')}}">Manage Candidates</a></li>
									<li><a href="{{route('job.create')}}">Post a Job</a></li>
								</ul>	
							</li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tasks</a>
								<ul>
								<li><a href="{{route('manage.task')}}">Manage Tasks <span class="nav-tag">2</span></a></li>
									<li><a href="{{route('manage.bidders')}}">Manage Bidders</a></li>
									<li><a href="{{route('active.bids')}}">My Active Bids <span class="nav-tag">4</span></a></li>
									<li><a href="{{route('task.create')}}">Post a Task</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="{{route('settings')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->
				
			
			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
	
		@yield('content')
	

   

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2020 <strong><img src="{{asset('assets/images/exxpert-logo.png')}}" alt="" srcset=""></strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->


@yield('popups')

<!-- Scripts
================================================== -->
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.1.0.min.html')}}"></script>
<script src="{{asset('assets/js/mmenu.min.js')}}"></script>
<script src="{{asset('assets/js/tippy.all.min.js')}}"></script>
<script src="{{asset('assets/js/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/snackbar.js')}}"></script>
<script src="{{asset('assets/js/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counterup.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 22:28:53 GMT -->
</html>