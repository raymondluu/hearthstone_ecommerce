<?php
// $this->session->sess_destroy();
// var_dump($this->session->userdata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
</head>
<body>
    <?php $this->load->view("/partials/admin_partial.php"); ?>

​
    <div class="col-lg-10 col-lg-offset-1 index_margin_top">
        <h1 class="text-center">Orders</h1>
        <table class="table table-striped table-bordered table-condensed text-center">
            <thead>
                <th class="col-lg-1 text-center tbl-head">Order ID</th>
                <th class="col-lg-2 text-center tbl-head">Name</th>
                <th class="col-lg-2 text-center tbl-head">Date</th>
                <th class="col-lg-3 text-center tbl-head">Billing Address</th>
                <th class="col-lg-1 text-center tbl-head">Total</th>
                <th class="col-lg-1 text-center tbl-head">Status</th>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) { ?>
                <tr>
                    <td><a href="show_order/<?=$order['session_id']?>"><?=$order['session_id']?></a></td>
                    <td><?=$order['customer_name']?></td>
                    <td><?=$order['purchase_date']?></td>
                    <td><?=$order['customer_address']?></td>
                    <td>$<?=$order['total_price']?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Status
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="/set_status_shipped/<?=$order['session_id']?>">Shipped</a></li>
<li><a href="/set_status_in_process/<?=$order['session_id']?>">In Process</a></li>
    <li><a href="/set_status_cancelled/<?=$order['session_id']?>">Cancelled</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<script src="assets/js/jquery.min.js" type="text/javascript">
</script>
</body>
</html>