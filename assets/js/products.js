$(document).ready(function(){
	//when category links are clicked, populate page
	$(document).on("click", "li a", function(e){
		var id = $(this).attr("id");

		var page = "0";
		if($(this).attr("page"))
		{
			page = $(this).attr("page");	
		}

		var url = "";
		var pag_url = "";
		if(id == "catheros")
		{
			title_str = "Heros";
			url = "/products/get_cards_by_type_limit_json/hero/" + page;
			pag_url = "/products/get_cards_by_type_json/hero";
		}
		else if(id == "catspells")
		{
			title_str = "Spells";
			url = "/products/get_cards_by_type_limit_json/spell/" + page;
			pag_url = "/products/get_cards_by_type_json/spell";
		}
		else if(id == "catweapons")
		{
			title_str = "Weapons";
			url = "/products/get_cards_by_type_limit_json/weapon/" + page;
			pag_url = "/products/get_cards_by_type_json/weapon";
		}
		else if(id == "catminions")
		{
			title_str = "Minions";
			url = "/products/get_cards_by_type_limit_json/minion/" + page;
			pag_url = "/products/get_cards_by_type_json/minion";
		}
		else if(id == "showall")
		{
			title_str = "Show all";
			url = "/products/get_cards_limit_json/" + page;
			pag_url = "/products/get_cards_json";
		}

		//set up pagination links
		$.get(pag_url, function(data){
			var pages = Math.ceil(data.count /20);

			var pagination_str = "";

			//pagination_str += "<li><a href aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
			for(var i = 0; i < pages; i++)
			{
				pagination_str += "<li><a class='pag' href id='" + id + "' page='" + (i * 20) + "'>" + (i + 1) + "</a></li>";
			}
			//pagination_str += "<li><a href aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
			$('.pagination').html(pagination_str);
		}, "json");

		//set up display products
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

		e.preventDefault();
		// return false;
	});

	//set up pagination links on first load
	$.get("/products/get_cards_json", function(data){
		var pages = Math.ceil(data.count /20);

		var pagination_str = "";

		//pagination_str += "<li><a href aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
		for(var i = 0; i < pages; i++)
		{
			pagination_str += "<li><a href id='showall' page='" + (i * 20) + "'>" + (i + 1) + "</a></li>";
		}
		//pagination_str += "<li><a href aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
		$('.pagination').html(pagination_str);
	}, "json");

	//when page is loaded show all cards
	$.get("/products/get_cards_limit_json/0", function(data){
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
	$.get("/products/get_cards_json", function(data){
		var hero_count = 0;
		var spell_count = 0;
		var weapon_count = 0;
		var minion_count = 0;
		var hero_title;

		for(var i = 0; i < data.count; i++)
		{
			if(data.cards[i].type == "Hero")
			{
				hero_count++;
			}
			else if(data.cards[i].type == "Spell")
			{
				spell_count++;
			}
			else if(data.cards[i].type == "Weapon")
			{
				weapon_count++;
			}
			else if(data.cards[i].type == "Minion")
			{
				minion_count++;
			}
		}

		$('#catheros').append("Heroes (" + hero_count + ")");
		$('#catspells').append("Spells (" + spell_count + ")");
		$('#catweapons').append("Weapons (" + weapon_count + ")");
		$('#catminions').append("Minions (" + minion_count + ")");
	}, "json");
});