$(document).ready(function(){

	//set up pagination links on first load
	$.get("/products/admin_products", function(data){
		var pages = Math.ceil(data.count /20);

		var pagination_str = "";

		pagination_str += "<li><a href aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
		for(var i = 0; i < pages; i++) {
			pagination_str += "<li><a href page='" + (i * 20) + "'>" + (i + 1) + "</a></li>";
		}
		pagination_str += "<li><a href aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
		$('.pagination-admin').html(pagination_str);
	}, "json");

	//when page is loaded show all cards
	$.get("/products/admin_products_view", function(data){
		// console.log(data);
		// var img_str = "";
			for(var i = 0; i < data.cards.length; i++)
			{
				// console.log('card[i].img');
				img_str += " <a href='/product_description/" + data.cards[i].api_id + "'><img class='products' src=' "+ data.cards[i].img +" '></a>";
			}
		$('#pictureFrame').html(img_str);
	}, "json");
});