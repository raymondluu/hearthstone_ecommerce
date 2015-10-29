<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
</head>
<script src="/assets/js/product_description.js"></script>
<body>

  <?php $this->load->view("/partials/nav.php") ?>
 
<div class="container-fluid">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-2">
      <h4 class="text-center">Home</h4>
        <ul class="list-group">
          <li class="list-group-item text-center side-nav"><a id="showall" href="/">View All Cards</a></li>
        </ul>
    </div>

  <h1 class="text-center"><?= $card_info['name']; ?></h1>
  <div id="image">
    <img class="card-desc-main-img"src="<?= $card_info['img']; ?>">
  </div>
  <div id="card_description">
    <h3>Detailed Card Information</h3>
    <ul>
    <li><strong>Set:</strong> <?= $card_info['cardSet']; ?></li>
    <li><strong>Type:</strong> <?= $card_info['type']; ?></li>
    <li><strong>Faction:</strong> <?= $card_info['faction']; ?></li>
    <li><strong>Rarity:</strong> <?= $card_info['rarity']; ?></li>
    <?php if($card_info['text'] != null){ ?>
        <li><strong>Text:</strong> <?= $card_info['text']; ?></li>
    <?php } ?>
    <?php if($card_info['artist'] != null){ ?>
      <li><strong>Artist:</strong> <?= $card_info['artist']; ?></li>
    <?php } ?>
    <li><strong>Collectible:</strong> <?php if($card_info['collectible'] == 1)
        { echo "YES"; } else {echo "NO";}?>
    </li>
    <?php if(isset($card_info['elite'])){ ?>
    <li><strong>Elite:</strong> <?php if($response1->body[0]->elite == 1)
        { echo "YES"; } else {echo "NO";}?>
    <?php } ?>
    </li>
    <li><strong>Locale:</strong> <?= $card_info['locale']; ?></li>
  </ul>
  <form action="/add_card_to_cart/<?=$card_info['api_id']?>" method="post">
    <select name="card_count">
      <option value = "1">1 ($<?= $card_info['price']; ?>)</option>
      <option value = "2">2 ($<?= $card_info['price'] * 2 ?>)</option>
      <option value = "3">3 ($<?= $card_info['price'] * 3 ?>)</option>
    </select>
    <input type="submit" name="add_cart" value="Add to Cart">
    <input type="hidden" name="card_id" value="<?=$card_info['id']?>">
  </form>
  <?php echo $this->session->flashdata('added'); ?>
  </div>
  <div id="bottom_row" class="col-md-10 col-md-offset-2">
<?php for($i = 0; $i < count($related_cards); $i++){
    echo '<a href="/product_description/'.$related_cards[$i]['api_id'].'"><img id="mini" src="'. $related_cards[$i]['img'] .'"></a>';
   } ?>
  </div>
</div>

</body>
</html>