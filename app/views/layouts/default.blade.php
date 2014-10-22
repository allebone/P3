<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Developer's Best Friend</title>
	<!-- attach CSS styles -->
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/jumbotron-narrow.css') }}
	{{ HTML::style('css/navbar-fixed-top.css') }}
	{{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
	{{ HTML::style('css/style.css') }}
	<!-- attach javascript files -->
	{{ HTML::script('js/jquery-2.1.1.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/javascript.js') }}
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="{{URL::to('/')}}">Developer's Best Friend</a>
			</div>
			<div class="navbar-collapse collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li id="lisec1"><a href="#sec1">Lorem Ipsum Generator</a></li>
					<li id="lisec2"><a href="#sec2">Random User Generator</a></li>
					<li><a href="#sec3">About</a></li>
				</ul>

			</div><!--/.nav-collapse -->
		</div>
	</div>
	@yield('content')

	<!-- footer -->
	<div class="jumbotron section col-centered margin-top" id="sec3">
		<div class=" text-center">
			<div class="row">
				<p> Volutpat tellus ante nostra euismod nec suspendisse sem curabitur elit malesuada lacus viverra sagittis sit, ornare orci augue nullam adipiscing pulvinar libero aliquam vestibulum platea cursus pellentesque. Aenean dui lectus curabitur euismod ad erat curae non, elit ultrices placerat netus metus feugiat non, conubia fusce porttitor sociosqu diam commodo metus. Id himenaeos vitae aptent consequat luctus purus eleifend enim sollicitudin eleifend, porta malesuada ac class conubia condimentum mauris facilisis conubia, quis scelerisque lacinia tempus nullam felis fusce ac potenti. Euismod curabitur semper molestie iaculis fermentum, ornare curabitur tincidunt imperdiet scelerisque imperdiet, euismod scelerisque torquent curae. </p>
			</div>
			<div class="row">
				<div class="">
					<h4>Contact</h4>


					<ul class="list-unstyled" id="contact">
						<li><i class="fa fa-phone fa-fw"></i>(719)
							235-8180</li>


							<li> Omaha, Nebraska 68154</li>


							<li>
								<i class="fa fa-envelope-o fa-fw"></i><a href=
								"mailto:bryanallebone@g.harvard.edu">bryanallebone@g.harvard.edu</a>
							</li>
						</ul>
						<br>

						<ul class="list-inline">
							<li>
								<a class="fa fa-facebook fa-fw fa-3x" href=
								"https://www.facebook.com/allebone"></a>
							</li>


							<li>
								<a class="fa fa-linkedin fa-fw fa-3x" href=
								"http://www.linkedin.com/in/ballebone"></a>
							</li>


							<li>
								<a class="fa fa-google-plus fa-fw fa-3x" href=
								"https://plus.google.com/u/0/107028875158218439746/posts">
							</a>
						</li>


						<li>
							<a class="fa fa-pied-piper fa-fw fa-3x" href=
							"http://www.piedpiper.com/#hello"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	<div class="footer margin-top" align="center">
		<p>&copy; BRYAN E. ALLEBONE 2014</p>
	</div>
	<!-- /container -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./js/ie10-viewport-bug-workaround.js"></script> 
	

</body>
</html>