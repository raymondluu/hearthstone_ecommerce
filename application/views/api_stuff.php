<?php

$this->load->view('/unirest/src/Unirest.php');


  $response = Unirest\Request::get("https://omgvamp-hearthstone-v1.p.mashape.com/cards",
    array
    (
    "X-Mashape-Key" => "h1qylTCmitmshxurlWa9zZuVvvb5p10IB58jsnIYzfQeooEdLv",
    "Accept" => "json"
    )
  );

  // var_dump( $response->body->Basic);

$query_str = "";

for ($i = 0; $i < count($response->body->Basic); $i++) {
  $name = $response->body->Basic[$i]->name;
  $api_id = $response->body->Basic[$i]->cardId;
  $cardSet = $response->body->Basic[$i]->cardSet;
  $type = $response->body->Basic[$i]->type;
  if(isset($response->body->Basic[$i]->artist))
    {
      $artist = $response->body->Basic[$i]->artist;
    }
    else
    {
      $artist = 'null';
    };
  if(isset($response->body->Basic[$i]->faction))
    {
      $faction = $response->body->Basic[$i]->faction;
    }
    else
    {
      $faction = 'null';
    };
  if(isset($response->body->Basic[$i]->collectible))
    {
      $collectible = "YES";
    }
    else
    {
      $collectible = "NO";
    };
  if(isset( $response->body->Basic[$i]->playerClass ))
    {
      $playerClass = $response->body->Basic[$i]->playerClass;
    }
    else
    {
      $playerClass = 'null';
    };
  if(isset( $response->body->Basic[$i]->rarity ))
    {
      $rarity = $response->body->Basic[$i]->rarity;
    }
    else
    {
      $rarity = 'null';
    };
  if(isset( $response->body->Basic[$i]->text ))
    {
      $text = $response->body->Basic[$i]->text;
    }
    else
    {
      $text = 'null';
    };
  if(isset( $response->body->Basic[$i]->img ))
    {
      $img = $response->body->Basic[$i]->img;
    }
    else
    {
      $img = 'null';
    };
  if(isset( $response->body->Basic[$i]->imgGold ))
    {
      $imgGold = $response->body->Basic[$i]->imgGold;
    }
    else
    {
      $imgGold = 'null';
    };
  $locale = $response->body->Basic[$i]->locale;

  $values = array($name, $api_id, $cardSet, $type, null, null, $playerClass, $img, $imgGold, null, $locale, $collectible, $rarity);

  $query = "INSERT INTO cards (name, api_id, cardSet, type, faction, text, player_class, img, imgGold, artist, locale, collectible, rarity)
           VALUES('$name', '$api_id', '$cardSet', '$type', '$faction', '$text', '$playerClass', '$img' , '$imgGold', '$artist', '$locale', '$collectible', '$rarity');" . "<br><br>";

  echo $query;
}


?>