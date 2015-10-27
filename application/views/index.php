<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
</head>
<body>
<<<<<<< HEAD
  <div class="container-fluid">
  <h1>Welcome to Hearthstone Ecommerce site!</h1>
<?php
  // The unirest library is in the views folder already!
  $this->load->view('/unirest/src/Unirest.php');

  $response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/EX1_572",
    array
    (
    //THIS KEY IS PRIVATE USE UR OWNNNN!!!!
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );
  var_dump($response);
?>

<!-- the php echo'd here is how you get the img, change "img" to any atrribute in the object! -->
<img src="<?= $response->body[0]->img; ?>" >
<a href="/product_description">Link to Product Descriptions</a>
  </div>
=======
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
>>>>>>> 8fa41851e3fac5ac27c5e6eb24b0ce961a3c59b1
</body>
</html>