<?php
  // The unirest library is in the views folder already!
  $this->load->view('/unirest/src/Unirest.php');

  $response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/EX1_572",
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
  <h1><?= $response->body[0]->name; ?></h1>

  <div id="image">
    <img src="<?= $response->body[0]->img; ?>">
  </div>

  <div id="card_description">
    <h2>Detailed Card Information</h2>
    <ul>
    <li><strong>Set:</strong> <?=$response->body[0]->cardSet; ?></li>
    <li><strong>Type:</strong> <?= $response->body[0]->type; ?></li>
    <li><strong>Faction:</strong> <?= $response->body[0]->faction; ?></li>
    <li><strong>Rarity:</strong> <?= $response->body[0]->rarity; ?></li>
    <li><strong>Cost to play:</strong> <?= $response->body[0]->cost; ?></li>
    <li><strong>Attack:</strong> <?= $response->body[0]->attack ; ?></li>
    <li><strong>Health:</strong> <?= $response->body[0]->health ; ?></li>
    <li><strong>Text:</strong> <?= $response->body[0]->text; ?></li>
    <li><strong>Flavor:</strong> <?= $response->body[0]->flavor; ?></li>
    <li><strong>Artist:</strong> <?= $response->body[0]->artist; ?></li>
    <li><strong>Collectible:</strong> <?php if($response->body[0]->collectible == 1)
        { echo "YES"; } else {echo "NO";}?>
    </li>
    <li><strong>Elite:</strong> <?php if($response->body[0]->elite == 1)
        { echo "YES"; } else {echo "NO";}?>
    </li>
    <li><strong>Locale:</strong> <?= $response->body[0]->locale; ?></li>
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
    <img id="mini" src="<?= $response->body[0]->img; ?>">
    <img id="mini" src="<?= $response->body[0]->img; ?>">
    <img id="mini" src="<?= $response->body[0]->img; ?>">
    <img id="mini" src="<?= $response->body[0]->img; ?>">
    <img id="mini" src="<?= $response->body[0]->img; ?>">
    <img id="mini" src="<?= $response->body[0]->img; ?>">
  </div>

</div>
</body>
</html>

<!--     {
        "cardId": "EX1_116",
        "name": "Leeroy Jenkins",
        "cardSet": "Classic",
        "type": "Minion",
        "faction": "Alliance",
        "rarity": "Legendary",
        "cost": 5,
        "attack": 6,
        "health": 2,
        "text": "<b>Charge</b>. <b>Battlecry:</b> Summon two 1/1 Whelps for your opponent.",
        "flavor": "At least he has Angry Chicken.",
        "artist": "Gabe from Penny Arcade",
        "collectible": true,
        "elite": true,
        "img": "http://wow.zamimg.com/images/hearthstone/cards/enus/original/EX1_116.png",
        "imgGold": "http://wow.zamimg.com/images/hearthstone/cards/enus/animated/EX1_116_premium.gif",
        "locale": "enUS",
        "mechanics":
            {
                "name": "Battlecry"
            },
            {
                "name": "Charge"
            }

    }
 -->