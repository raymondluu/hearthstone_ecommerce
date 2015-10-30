<?php
// $this->session->sess_destroy();
// $userdata = array('user_data' => 'admin');
// $this->session->set_userdata($userdata);
// var_dump($this->session->userdata);
?>


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
        <h4 class="text-center">Categories</h4>
        <ul class="list-group">
          <li class="list-group-item text-center side-nav"><a id="catheros" href="#"></a></li>
          <li class="list-group-item text-center side-nav"><a id="catspells" href="#"></a></li>
          <li class="list-group-item text-center side-nav"><a id="catweapons" href="#"></a></li>
          <li class="list-group-item text-center side-nav"><a id="catminions" href="#"></a></li>
          <li class="list-group-item text-center side-nav"><a id="showall" href="#">Show all</a></li>
        </ul>

      </div>
      <div class="col-md-10">
        <h1 id="title" class="col-md-offset-4">All Available Cards</h1>
        <div id="pictureFrame">
        </div>

        <!-- Pagination -->
        <div class="text-center">
          <nav>
            <ul class="pagination">
            </ul>
          </nav>
        </div>

      </div>
    </div>
  </div>
  <a href="/product_description">Link to Product Descriptions</a>
</body>
</html>