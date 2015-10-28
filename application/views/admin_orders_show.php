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
    <div class="col-lg-4">
        <table class="table table-striped table-bordered table-condensed">
            <tr>
                <th>Order ID:</th>
                <td><?= $order_info['id']?></td>
            </tr>
            <tr>
                <th colspan="2">Customer Shipping Info:</th>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?= $order_info['customer_name']?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?= $order_info['customer_address']?></td>
            </tr>
            <tr>
                <th colspan="2">Customer Billing Info:</th>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?= $order_info['billing_name']?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?= $order_info['billing_address']?></td>
            </tr>
        </table>
    </div>

    <div class="col-lg-8">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <th class="col-lg-1">ID</th>
                    <th class="col-lg-2">Item</th>
                    <th class="col-lg-1">Price</th>
                    <th class="col-lg-1">Quantity</th>
                    <th class="col-lg-2">Total</th>
                </thead>
                <tbody>
                   <!--  NEED TO ADD PRODUCTS -->
                    <tr>
                        <td>PRODUCT ID</td>
                        <td>ITEM</td>
                        <td>PRICE</td>
                        <td>QUANTITy</td>
                        <td>TOTAL</td>
                    </tr>
                </tbody>
            </table>
    </div>

    <div class="col-lg-3 col-lg-offset-1 <?php if ($order_info['status'] == 'Shipped'){ 
                                    echo 'green';
                                    } elseif ($order_info['status'] == 'In Process') {
                                     echo 'yellow';
                                    } else { echo 'red';}

                                    ?>">
        <h3>Status: <?= $order_info['status']?></h3>
        <div class="col-lg-4">
            <p>Subtotal: $</p>
            <p>Shipping: $</p>
            <p>Total: $</p>
        </div>
    </div>    

​
</body>
<html>