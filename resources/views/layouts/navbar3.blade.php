<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		{{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('css/theme.css')}}" rel="stylesheet">
		<link href="{{asset('css/custom.css')}}" rel="stylesheet"> --}}
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="nav-container">
		    <nav class="transparent absolute">
		        <div class="nav-bar text-center" style="border-bottom: 0px">	        
		            <div class="module right">
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<ul class="menu inline-block pull-right">
									<li><a class="btn btn-sm hidden-xs hidden-sm hidden-md" style="font-size: 16px;" href="{{ route('login') }}">Login</a></li>
								</ul>
							@else
								<li class="nav-item dropdown pull-right">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<ul>
											<li>
												<a class="dropdown-item" href="#">&nbsp;&nbsp;&nbsp;Profile</a>
											</li>
											<li><a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
													&nbsp;&nbsp;&nbsp;Logout
												</a>
											</li>
										</ul>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
		            </div>
		        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
		            <i class="ti-menu"></i>
		        </div>
			</nav>
			
		<main class="py-4" >
			@yield('content')

		</main>
		{{-- Back to top button --}}
		{{-- <a href="#" id="myBtn" title="Go to top">Back to top</a> --}}
		</div>
		
	</body>
	<script src="{{asset('js/app.js')}}"></script>
	{{-- animation --}}
	<script src="{{asset('js/main.js')}}"></script>
</html>