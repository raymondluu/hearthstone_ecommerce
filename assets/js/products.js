$(document).ready(function(){
	//when category links are clicked, populate page
	$("a").on("click", function(){
		var id = $(this).attr("id");
		var url = "";
		if(id == "catheros")
		{
			title_str = "Heros";
			url = "/products/get_cards_by_type_json/hero";
		}
		else if(id == "catenchants")
		{
			title_str = "Enchantments";
			url = "/products/get_cards_by_type_json/enchantment";
		}
		else if(id == "catspells")
		{
			title_str = "Spells";
			url = "/products/get_cards_by_type_json/spell";
		}
		else if(id == "catweapons")
		{
			title_str = "Weapons";
			url = "/products/get_cards_by_type_json/weapon";
		}
		else if(id == "catminions")
		{
			title_str = "Minions";
			url = "/products/get_cards_by_type_json/minion";
		}
		else
		{
			title_str = "Show all";
			url = "/products/get_cards_json";
		}

		$.get(url, function(data){
			var img_str = "";
			for(var i = 0; i < data.cards.length; i++)
			{
				// console.log('card[i].img');
				img_str += " <a href='/product_description/" + data.cards[i].api_id + "'><img class='products' src=' "+ data.cards[i].img +" '></a>";
			}
			$('#title').html(title_str);
			$('#pictureFrame').html(img_str);
		}, "json");


	});

	//when page is loaded show all cards
	$.get("/products/get_cards_json/0", function(data){
		// console.log(data);
		title_str = "Show all";
		var img_str = "";
			for(var i = 0; i < data.cards.length; i++)
			{
				// console.log('card[i].img');
				img_str += " <a href='/product_description/" + data.cards[i].api_id + "'><img class='products' src=' "+ data.cards[i].img +" '></a>";
			}
			$('#title').html(title_str);
			$('#pictureFrame').html(img_str);
	}, "json");

	//get category link names
	$.get("/products/get_cards_by_type_json/hero", function(data){
		$('#catheros').append("Heros (" + data.count + ")");
	}, "json");
	$.get("/products/get_cards_by_type_json/enchantment", function(data){
		$('#catenchants').append("Enchantments (" + data.count + ")");
	}, "json");
	$.get("/products/get_cards_by_type_json/spell", function(data){
		$('#catspells').append("Spells (" + data.count + ")");
	}, "json");
	$.get("/products/get_cards_by_type_json/weapon", function(data){
		$('#catweapons').append("Weapons (" + data.count + ")");
	}, "json");
	$.get("/products/get_cards_by_type_json/minion", function(data){
		$('#catminions').append("Minions (" + data.count + ")");
	}, "json");
});