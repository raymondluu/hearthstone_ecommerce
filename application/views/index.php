<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
  <script src="/assets/js/products.js"></script>
</head>
<body>
  <div class="container-fluid">
  <!-- <h1>Welcome to Hearthstone Ecommerce site!</h1> -->
<?php
  // The unirest library is in the views folder already!
  //$this->load->view('/unirest/src/Unirest.php');

  //$response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/EX1_572",
    //array
    //(
    //THIS KEY IS PRIVATE USE UR OWNNNN!!!!
    //"X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    //"Accept" => "json"
    //)
  //);
  //var_dump($response);
?>

<!-- the php echo'd here is how you get the img, change "img" to any atrribute in the object! -->
<!-- <img src="<?= $response->body[0]->img; ?>" > -->
  </div>
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
          <li><a id="catheros" href="#"></a></li>
          <li><a id="catenchants" href="#"></a></li>
          <li><a id="catspells" href="#"></a></li>
          <li><a id="catweapons" href="#"></a></li>
          <li><a id="catminions" href="#"></a></li>
          <li><a id="showall" href="#">Show all</a></li>
        </ul>
      </div>
      <div class="col-md-10">
        <h1 id="title">Show all</h1>
        <div id="pictureFrame">
        </div>
        <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <a href="/product_description">Link to Product Descriptions</a>
</body>
</html>