<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Medic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />


        <!-- Styles -->
        <style>

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
       
    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <ul class="dropdown-menu">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                           
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        
				
				
				
				
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<span class="icon icon-cog"></span>
					<h1><a href="#">e-Medics</a></h1>
				</div>
				<div id="menu">
					<ul>
						<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
						<li><a href="#" accesskey="2" title="">Our Clients</a></li>
						<li><a href="#" accesskey="3" title="">About Us</a></li>
						<li><a href="#" accesskey="4" title="">Careers</a></li>
						<li><a href="#" accesskey="5" title="">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div id="banner" class="container"><img src="images/banner.jpg" width="1200" height="500" alt="Image" /></div>
			<div id="welcome" class="container">
			
		<div class="title">
			  <h2>Welcome to our website</h2>
				</div>
				<p>This is <strong>Undeviating</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
			</div>
			<div id="three-column" class="container">
				<div><span class="arrow-down"></span></div>
				<div id="tbox1">
					<div class="title">
						<h2>Maecenas luctus</h2>
					</div>
					<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
					<a href="#" class="button">Learn More</a> </div>
				<div id="tbox2">
					<div class="title">
						<h2>Integer gravida</h2>
					</div>
					<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>
					<a href="#" class="button">Learn More</a> </div>
				<div id="tbox3">
					<div class="title">
						<h2>Praesent mauris</h2>
					</div>
					<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>
					<a href="#" class="button">Learn More</a> </div>
			</div>
			<div id="portfolio" class="container">
				<div class="column1">
					<div class="box">
					  <h3>Vestibulum venenatis</h3>
						<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
				  <a href="#" class="button button-small">Etiam posuere</a> </div>
				</div>
				<div class="column2">
					<div class="box">
					  <h3>Praesent scelerisque</h3>
						<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				  <a href="#" class="button button-small">Etiam posuere</a> </div>
				</div>
				<div class="column3">
					<div class="box">
					  <h3>Donec dictum metus</h3>
						<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				  <a href="#" class="button button-small">Etiam posuere</a> </div>
				</div>
				<div class="column4">
					<div class="box">
					  <h3>Mauris vulputate dolor</h3>
						<p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
				  <a href="#" class="button button-small">Etiam posuere</a> </div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="fbox1">
				<span class="icon icon-map-marker"></span>
					<span>1234 Fictional Road Suite #789
					<br />Nashville TN 00000</span>
				</div>
				<div class="fbox1">
					<span class="icon icon-phone"></span>
					<span>
						Telephone: +1 800 123 4657
					</span>
				</div>
				<div class="fbox1">
					<span class="icon icon-envelope"></span>
					<span>businessname@business.com</span>
				</div>
			</div>
		</div>
		<div id="copyright">
			<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
		</div>        
				
				
				
				
				
				
				
	</div>	
        
        
        
        
        
        
        
        
        
    </body>
</html>
