<!DOCTYPE html>
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
        <p>Categories</p>
        <ul>
          <li><a id="catheros" href="#"></a></li>
          <li><a id="catspells" href="#"></a></li>
          <li><a id="catweapons" href="#"></a></li>
          <li><a id="catminions" href="#"></a></li>
          <li><a id="showall" href="#">Show all</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="col-md-10">
        <h1 id="title">Show all</h1>
        <div id="pictureFrame">
        </div>
        <nav>
          <ul class="pagination">
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <a href="/product_description">Link to Product Descriptions</a>
</body>
</html>