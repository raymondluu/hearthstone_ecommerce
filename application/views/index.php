<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
</head>
<body>
	<?php $this->load->view("/partials/nav.php") ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<form>
					<input type="text" name="search" placeholder="product name">
					<input type="submit" name="action" value="search">
				</form>
				<p>Categories</p>
				<ul>
					<li>Tshirts (25)</li>
					<li>Shoes (35)</li>
					<li>Cups (5)</li>
					<li>Fruits (105)</li>
					<li>Show all</li>
				</ul>
			</div>
			<div class="col-md-10">
				<h1>Tshirts (page 2)</h1>
			</div>
		</div>
	</div>
</body>
</html>