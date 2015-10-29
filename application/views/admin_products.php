<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>
<body>
 <?php $this->load->view("/partials/admin_partial.php"); ?>
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <div class="col-lg-11">
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <th class="col-lg-2">Picture</th>
                <th class="col-lg-1">ID</th>
                <th class="col-lg-2">Name</th>
                <th class="col-lg-1">Inventory Count</th>
                <th class="col-lg-1">Quantity Sold</th>
                <th class="col-lg-2">Action</th>
            </thead>
            <tbody>
                <?php foreach ($cards as $card) { ?>
                <tr>
                    <td><img src="<?= $card['imgGold']?>" class="admin_products_imgs"/></td>
                    <td><?= $card['id'] ?></td>
                    <td><?= $card['name'] ?></td>
                    <td><?= $card['inventory_count'] ?></td>
                    <td><?= $card['quantity_sold'] ?></td>
                    <td>
                        <a class="edit_btn_link" href="products/edit/<?= $card['id'] ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a class="delete_card_btn_link" href="products/delete_card/<?= $card['id'] ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Page Navigation -->
    <div class="col-lg-12">
        <nav>
            <ul class="pagination">
                <li>
                <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
    </div>
<script src="assets/js/jquery.min.js" type="text/javascript">
$(document).ready(function() {
    $('[role="search"]').on('keyup', function(e) {
        var searchValue = e.target.value;
        if()
        // do something every keystroke
    })
//     $('.delete_card_btn_link').on('click', function() {
//         alert("Are you certain you want to delete this card?");
//         // $this  = $(this);
//         //     e.preventDefault();
//         //     var url = $(this).attr("href");
//         //     $.get(url, function(r){
//         //         if(r.success){
//         //             $this.closest("tr").remove();
//         //         }
//     })
})
</script>
</body>
</html>