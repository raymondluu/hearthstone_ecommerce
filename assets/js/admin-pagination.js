$(document).ready(function(){

	//set up pagination links on first load
	$.get("/products/products_table_json", function(data){
		var pages = Math.ceil(data.count /20);
		// console.log(data);

		var pagination_str = "";

		// pagination_str += "<li><a href aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
		for(var i = 0; i < pages; i++) {
			pagination_str += "<li><a href id ='"+i * 20+"'>" + (i+1) + "</a></li>";
		}
		// pagination_str += "<li><a href aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
		$('.pagination-admin').html(pagination_str);
	}, "json");


	//when page is loaded show all cards
	$.get("/products/products_table_limit_json/0", function(data){
		// console.log(data);
		var tbl_str = "";
			for(var i = 0; i < data.cards.length; i++){
				// console.log(data.cards[i].imgGold);
				tbl_str += "<tr class='text-center'><td><a href='/product_description/" + data.cards[i].api_id + "'><img src='"
						+ data.cards[i].img +
						"' class='admin_products_imgs'/></a></td><td>"
						+ data.cards[i].id + "</td><td>"
						+ data.cards[i].name + "</td><td>"
						+ data.cards[i].inventory_count + "</td><td>"
						+ data.cards[i].quantity_sold + "</td>";

						// <td><a class='edit_btn_link' href='products/edit/"
						// + data.cards[i].id + "'><button type='button' class='btn btn-primary'>Edit</button></a><a class='delete_card_btn_link' href='products/delete_card/" + data.cards[i].id + "'><button type='button' class='btn btn-primary'>Delete</button></a></td></tr>";
			}
		$('#admin-products-table').html(tbl_str);
	}, "json");

//allow user to click pages :)
$('.pagination').on('click', 'li a', function() {
	// console.log('Im working');
	$.get("/products/products_table_limit_json/"+$(this).attr("id"), function(data){
		// console.log(data);
		var tbl_str = "";
			for(var i = 0; i < data.cards.length; i++){
				// console.log(data.cards[i].imgGold);
				tbl_str += "<tr><td><img src='"
						+ data.cards[i].img +
						"' class='admin_products_imgs'/></td><td>"
						+ data.cards[i].id + "</td><td>"
						+ data.cards[i].name + "</td><td>"
						+ data.cards[i].inventory_count + "</td><td>"
						+ data.cards[i].quantity_sold + "</td><td><a class='edit_btn_link' href='products/edit/"
						+ data.cards[i].id + "'><button type='button' class='btn btn-primary'>Edit</button></a><a class='delete_card_btn_link' href='products/delete_card/" + data.cards[i].id + "'><button type='button' class='btn btn-primary'>Delete</button></a></td></tr>";
			}
		$('#admin-products-table').html(tbl_str);
	}, "json");
	return false;
})


});