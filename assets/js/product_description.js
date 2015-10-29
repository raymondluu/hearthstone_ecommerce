$(document).ready(function(){
	//when category links are clicked, populate page
	

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