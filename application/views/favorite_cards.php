!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hearthstone Ecommerce Site</title>
	<?php $this->load->view("/partials/head.php") ?>
	<script src="/assets/js/products.js"></script>
</head>
<body>
<?php $this->load->view("/partials/nav.php") ?>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-2">
			<h4 class="text-center">Home</h4>
        	<ul class="list-group">
          		<li class="list-group-item text-center"><a id="showall" href="/">View All Cards</a></li>
        	</ul>
		</div>

		<div class="col-md-10">
		<h1 id="title" class="col-md-offset-4">Users Favorite Cards</h1>
			<div id="favoritesFrame">

			</div>
		</div>	

	</div>

	</body>
</html>