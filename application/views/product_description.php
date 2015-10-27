<?php
  // The unirest library is in the views folder already!
  $this->load->view('/unirest/src/Unirest.php');
  // $response2 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/HERO_08",
  //   array
  //   (
  //   "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
  //   "Accept" => "json"
  //   )
  // );
  // $response3 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_179",
  //   array
  //   (
  //   "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
  //   "Accept" => "json"
  //   )
  // );
  // $response4 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_029",
  //   array
  //   (
  //   "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
  //   "Accept" => "json"
  //   )
  // );
  // $response5 = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_105e",
  //   array
  //   (
  //   "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
  //   "Accept" => "json"
  //   )
  // );


  $response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards/CS2_097",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );
$data = $response->body[0];
// $jsonStr = json_encode($data);
foreach ($data as $key => $value) {
  echo $key . " " . $value . "<br>";
}
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

    #image img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -ms-transition: all 1s ease; /* IE 9 */
    -o-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
    }

  #image:hover img {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
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
    <?php if(isset($response->body[0]->health)){ ?>
    <li><strong>Health:</strong> <?= $response->body[0]->health ?></li>
    <?php } ?>
    <li><strong>Text:</strong> <?= $response->body[0]->text; ?></li>
    <li><strong>Flavor:</strong> <?= $response->body[0]->flavor; ?></li>
    <li><strong>Artist:</strong> <?= $response->body[0]->artist; ?></li>
    <li><strong>Collectible:</strong> <?php if($response->body[0]->collectible == 1)
        { echo "YES"; } else {echo "NO";}?>
    </li>

    <?php if(isset($response->body[0]->elite)){ ?>
    <li><strong>Elite:</strong> <?php if($response->body[0]->elite == 1)
        { echo "YES"; } else {echo "NO";}?>
    <?php } ?>

    </li>
    <li><strong>Locale:</strong> <?= $response->body[0]->locale; ?></li>

    <?php if(isset($response->body[0]->heatlh)){ ?>
    <li><strong>Health:</strong> <?= $response->body[0]->health ?></li>
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