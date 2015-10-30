<!-- <?php var_dump($order_info); ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-6">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
</head>
<body>
    <?php $this->load->view("/partials/admin_partial.php"); ?>
    <div class="col-lg-4 text-center">
        <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th class="text-center">Order ID:</th>
                <td><?= $order_info[0]['session_id']?></td>
            </tr>
            <tr>
                <th colspan="2">Customer Shipping Info:</th>
            </tr>
            <tr>
                <th class="text-center">Name:</th>
                <td><?= $order_info[0]['customer_name']?></td>
            </tr>
            <tr>
                <th class="text-center">Address:</th>
                <td><?= $order_info[0]['customer_address']?></td>
            </tr>
            <tr>
                <th colspan="2">Customer Billing Info:</th>
            </tr>
            <tr>
                <th class="text-center">Name:</th>
                <td><?= $order_info[0]['billing_name']?></td>
            </tr>
            <tr>
                <th class="text-center">Address:</th>
                <td><?= $order_info[0]['billing_address']?></td>
            </tr>
        </table>
    </div>

    <div class="col-lg-8">
        <h1 class="text-center">Order: <?= $order_info[0]['session_id']?>, Customer: <?= $order_info[0]['customer_name']?></h1>
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <th class="col-lg-1 text-center tbl-head">ID</th>
                    <th class="col-lg-2 text-center tbl-head">Item</th>
                    <th class="col-lg-1 text-center tbl-head">Price</th>
                    <th class="col-lg-1 text-center tbl-head">Quantity</th>
                    <th class="col-lg-2 text-center tbl-head">Total</th>
                </thead>
                <tbody>
                   <!--  NEED TO ADD PRODUCTS -->
                   <?php $Subtotal = 0;
                   foreach ($order_info as $order) { ?>
                    <tr class="text-center">
                        <td><?=$order['session_id']?></td>
                        <td><a href="/product_description/<?=$order['api_id']?>"><?=$order['name']?></a></td>
                        <td><?=$order['price']?></td>
                        <td><?=$order['quantity']?></td>
                        <td>$<?=$order['price'] * $order['quantity']?></td>
                        <?php $Subtotal += $order['price'] * $order['quantity']; ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>

    <div class="col-lg-3 col-lg-offset-1 <?php if ($order_info[0]['status'] == 'Shipped'){
                                    echo 'green';
                                    } elseif ($order_info[0]['status'] == 'In Process') {
                                     echo 'yellow';
                                    } else { echo 'red';}

                                    ?>">
        <h3>Status: <?= $order_info[0]['status']?></h3>
        <div class="col-lg-4">
            <p>Subtotal: <?="$".$Subtotal?></p>
            <p>Shipping: FREE!</p>
            <p>Total: $<?=$Subtotal?></p>
        </div>
    </div>

​
</body>
<html>