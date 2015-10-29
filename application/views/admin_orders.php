<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view("/partials/admin_partial.php"); ?>

    <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
​ -->
​
    <div class="col-lg-10 col-lg-offset-1">
        <h1 class="text-center">Orders</h1>
        <table class="table table-striped table-bordered table-condensed text-center">
            <thead>
                <th class="col-lg-1 text-center">Order ID</th>
                <th class="col-lg-2 text-center">Name</th>
                <th class="col-lg-2 text-center">Date</th>
                <th class="col-lg-3 text-center">Billing Address</th>
                <th class="col-lg-1 text-center">Total</th>
                <th class="col-lg-1 text-center">Status</th>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><a href="orders/show_order/<?=$order['id']?>"><?=$order['id']?></a></td>
                    <td><?=$order['customer_name']?></td>
                    <td><?=$order['purchase_date']?></td>
                    <td><?=$order['customer_address']?></td>
                    <td>$<?=$order['total']?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Status
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="orders/set_status_shipped/<?=$order['id']?>">Shipped</a></li>
                                <li><a href="orders/set_status_in_process/<?=$order['id']?>">In Process</a></li>
                                <li><a href="orders/set_status_cancelled/<?=$order['id']?>">Cancelled</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Page Navigation -->
<!-- <div class="col-lg-11 col-lg-offset-1">
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
</div> -->

<script src="assets/js/jquery.min.js" type="text/javascript">
</script>
</body>
</html>