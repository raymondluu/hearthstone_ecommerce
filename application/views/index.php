<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
</head>
<body>
  <div class="container-fluid">
  <h1>Welcome to Hearthstone Ecommerce site!</h1>
<?php
  // The unirest library is in the views folder already!
  $this->load->view('/unirest-php/src/Unirest.php');

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
  </div>
</body>
</html>