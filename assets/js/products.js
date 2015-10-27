$(document).ready(function(){
	$("#showall").on("click", function(){
		$.get("/products/get_cards_json", function(data){
			var card = data;
			var img_str = "";
			for(var i = 0; i < card.length; i++)
			{
				// console.log('card[i].img');
				img_str += " <img class='products' src=' "+ card[i].img +" '>";
			}
			$('#pictureFrame').html(img_str);
		}, "json");
	});
});