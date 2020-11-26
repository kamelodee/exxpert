@extends('layouts.theme')

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2> Browse Companies</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Find Work</a></li>
						<li>Browse Companies</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-12">
			<div class="letters-list">
				<a href="#" class="current">A</a>
				<a href="#">B</a>
				<a href="#">C</a>
				<a href="#">D</a>
				<a href="#">E</a>
				<a href="#">F</a>
				<a href="#">G</a>
				<a href="#">H</a>
				<a href="#">I</a>
				<a href="#">J</a>
				<a href="#">K</a>
				<a href="#">L</a>
				<a href="#">M</a>
				<a href="#">N</a>
				<a href="#">O</a>
				<a href="#">P</a>
				<a href="#">Q</a>
				<a href="#">R</a>
				<a href="#">S</a>
				<a href="#">T</a>
				<a href="#">U</a>
				<a href="#">V</a>
				<a href="#">W</a>
				<a href="#">X</a>
				<a href="#">Y</a>
				<a href="#">Z</a>
			</div>
		</div>
		<div class="col-xl-12">
			<div class="companies-list">
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/company-logo-placeholder.png" alt=""></span>
						<h4>Acra</h4>
						<div class="star-rating" data-rating="3.5"></div>
					</div>
				</a>
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/browse-companies-02.png" alt=""></span>
						<h4>Acue</h4>
						<div class="star-rating" data-rating="5.0"></div>
					</div>
				</a>
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/browse-companies-04.png" alt=""></span>
						<h4>Acorta</h4>
						<span class="company-not-rated">Minimum of 3 votes required</span>
					</div>
				</a>
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/company-logo-placeholder.png" alt=""></span>
						<h4>Acuneol</h4>
						<span class="company-not-rated">Minimum of 3 votes required</span>
					</div>
				</a>
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/browse-companies-03.png" alt=""></span>
						<h4>Acodia</h4>
						<div class="star-rating" data-rating="4.9"></div>
					</div>
				</a>
				<a href="single-company-profile.html" class="company">
					<div class="company-inner-alignment">
						<span class="company-logo"><img src="images/company-logo-placeholder.png" alt=""></span>
						<h4>Acagic</h4>
						<span class="company-not-rated">Minimum of 3 votes required</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
@endsection