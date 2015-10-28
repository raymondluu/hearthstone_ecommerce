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