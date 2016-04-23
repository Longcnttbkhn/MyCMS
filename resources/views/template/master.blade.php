<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My CMS</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- navbar-start -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">My CMS</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Tin mới</a></li>
					<li><a href="#">ICT</a></li>
					<li><a href="#">Tutorial</a></li>
					<li><a href="#">Smartphone</a></li>
				</ul>
				<div class="nav navbar-btn navbar-right">
					<button type="button" class="btn btn-success">Đăng ký</button>
					<button type="button" class="btn btn-info">Đăng nhập</button>
				</div>
			</div>
		</div>
	</nav>
	<!-- navbar-stop -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Content Manager System</h1>

				<!-- Author -->
				<p class="lead">
					by <a href="#">team</a>
				</p>
				<hr>
				@yield('content')	
			</div>
			<div class="col-md-4">
				<div class="panel panel-default panel-body">
					<h3>Search</h3>
					<form class="search-form" role="search">
						<div class="form-group has-feedback">
							<!-- <label for="search" class="sr-only">Search</label> -->
							<input type="text" class="form-control" name="search" id="search"
								placeholder="search"> <span
								class="glyphicon glyphicon-search form-control-feedback"></span>
						</div>
					</form>
				</div>
				<div class="panel panel-default panel-body">
					<h3>Categories</h3>
					<ul>
						<li><a href="#">Categorie1</a></li>
						<li><a href="#">Categorie2</a></li>
						<li><a href="#">Categorie3</a></li>
					</ul>
				</div>
				<div class="panel panel-default panel-body">
					<h3>Authors</h3>
					<ul>
						<li><a href="#">Author1</a></li>
						<li><a href="#">Author2</a></li>
						<li><a href="#">Author3</a></li>
					</ul>
				</div>
				<div class="panel panel-default panel-body">
					<h3>Seris</h3>
					<ul>
						<li><a href="#">Seri1</a></li>
						<li><a href="#">Seri2</a></li>
						<li><a href="#">Seri3</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

