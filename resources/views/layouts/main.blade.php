<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Welcome</title>
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

	<div class="top-bar">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="menu-text">Blog</li>
				<li><a href="/">Home</a></li>
				<li><a href="/articles">Articles</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</div>
		<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-bar-right">
                    @auth
						<a href = "profile">User Profile</a>
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<button type="submit">Logout</button>
						</form>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
		</div>
	</div>
    

	<div class="callout large primary">
		<div class="row column text-center">
			<h1>Our Blog</h1>
			<h2 class="subheader">Such a Simple Blog Layout</h2>
		</div>
	</div>

	<div class="row medium-8 large-7 columns">
		@yield('content') 
	</div>
	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
	      $(document).foundation();
	 </script>
</body>
</html>
