<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
	@yield('style')
</head>
<body>
	<!--navbar section-->	
	<header class="header">
		@include('includes.header')
	</header>
	<!--navbar end-->

	<!--container start-->
	<section class="section-content">

		<!--sidebar start-->
		@include('includes.sidebar')
		<!--sidebar end-->

		<!--main content start-->
		<div class="content">
            <div id='spinner'><div><div class='spinner'></div></div></div>
			@yield('content')
        </div>
		<!--main content end-->

	</section>
	<!--container end-->
	@include('includes.footer')
	@yield('scripts')
</body>
</html>