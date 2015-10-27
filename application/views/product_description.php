<?php
  $this->load->view('/unirest/src/Unirest.php');


  $response1 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_097",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );
  $response2 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/HERO_08",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );
  $response3 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_179",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );
  $response4 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_029",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );

  $response5 = Unirest\Request::get('https://omgvamp-hearthstone-v1.p.mashape.com/cards/power%20overwhelming',
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hearthstone Ecommerce Site</title>
  <?php $this->load->view("/partials/head.php") ?>
  <style type="text/css">
    img
    {
      border-radius: 15px;
      background-color: rgba(211,211,211,1);
    }
    #card_description
    {
      margin-left: 50px;
      display: inline-block;
      vertical-align: top;
    }
    #image
    {
    display: inline-block;
    }
    #mini
    {
      margin: 20px;
      width: 100px;
    }
  </style>
</head>
<body>
  <a href="/">Go Back</a>
<div class="container-fluid">
  <h1><?= $response1->body[0]->name; ?></h1>

  <div id="image">
    <img src="<?= $response1->body[0]->imgGold; ?>">
  </div>

  <div id="card_description">
    <h2>Detailed Card Information</h2>
    <ul>
    <li><strong>Set:</strong> <?=$response1->body[0]->cardSet; ?></li>
    <li><strong>Type:</strong> <?= $response1->body[0]->type; ?></li>
    <li><strong>Faction:</strong> <?= $response1->body[0]->faction; ?></li>
    <li><strong>Rarity:</strong> <?= $response1->body[0]->rarity; ?></li>
    <li><strong>Cost to play:</strong> <?= $response1->body[0]->cost; ?></li>
    <li><strong>Attack:</strong> <?= $response1->body[0]->attack ; ?></li>
    <?php if(isset($response1->body[0]->health)){ ?>
    <li><strong>Health:</strong> <?= $response1->body[0]->health ?></li>
    <?php } ?>
    <li><strong>Text:</strong> <?= $response1->body[0]->text; ?></li>
    <li><strong>Flavor:</strong> <?= $response1->body[0]->flavor; ?></li>
    <li><strong>Artist:</strong> <?= $response1->body[0]->artist; ?></li>
    <li><strong>Collectible:</strong> <?php if($response1->body[0]->collectible == 1)
        { echo "YES"; } else {echo "NO";}?>
    </li>

    <?php if(isset($response1->body[0]->elite)){ ?>
    <li><strong>Elite:</strong> <?php if($response1->body[0]->elite == 1)
        { echo "YES"; } else {echo "NO";}?>
    <?php } ?>

    </li>
    <li><strong>Locale:</strong> <?= $response1->body[0]->locale; ?></li>

    <?php if(isset($response1->body[0]->heatlh)){ ?>
    <li><strong>Health:</strong> <?= $response1->body[0]->health ?></li>
    <?php } ?>


  </ul>
  <form action="add to cart" method="post">
    <select>
      <option>1 ($5.99)</option>
      <option>1 ($11.98)</option>
      <option>1 ($17.97)</option>
    </select>
    <input type="submit" name="buy" value="buy">
  </form>
  </div>
  <div id="bottom_row_imgs">
    <img id="mini" src="<?= $response2->body[0]->imgGold; ?>">
    <img id="mini" src="<?= $response3->body[0]->imgGold; ?>">
    <img id="mini" src="<?= $response4->body[0]->imgGold; ?>">
    <img id="mini" src="<?= $response5->body[1]->imgGold; ?>">
  </div>

</div>
</body>
</html>