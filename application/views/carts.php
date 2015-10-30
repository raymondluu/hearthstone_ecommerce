<?php
// $this->session->sess_destroy();
// if($this->session->userdata['count'] == null){
//   echo 0;
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <script src="/assets/js/carts.js"></script>
</head>
<body>
    <?php $this->load->view("/partials/nav.php"); ?>
    <div class="col-lg-9 col-lg-offset-1">
        <?= $this->session->flashdata('order_good'); ?>
        <h1>Checkout:</h1>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <th class="col-lg-3 cart-head">Item</th>
                <th class="col-lg-2 cart-head">Price</th>
                <th class="col-lg-2 cart-head">Quantity</th>
                <th class="col-lg-2 cart-head">Total</th>
            </thead>
            <tbody>
                <tr>
                    <?php $total_price = 0.0;
                    foreach ($cart_info as $cards_in_cart) { ?>
                    <td><?=$cards_in_cart['name']?> </td>
                    <td>$<?=$cards_in_cart['price']?></td>
                    <td><?=$cards_in_cart['card_quantity']?>
                        <a href="/remove_item/<?= $cards_in_cart['Card_ID']?>"><button id="trashGlyph" type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
                    </td>
                    <td>$<?php $price = $cards_in_cart['price'] * $cards_in_cart['card_quantity'];
                    echo $cards_in_cart['price'] * $cards_in_cart['card_quantity']?></td>
                </tr>
                <?php $total_price += $price; } ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-10 col-lg-offset-8">
        <!-- This needs to be left aligned -->
        <p>Total: $ <?= $total_price ?></p>
        <button type="button" class="btn btn-success"><a href="main/index" id="continue-shopping-btn">Continue Shopping</a></button>
        <br>
        <br>
        <br>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <h3>Shipping Information</h3>
<<<<<<< HEAD
        <form id="shipping-form"  action="#" method="post">
=======
        <form id="shipping-form"  action="submit_billing" method="post">
>>>>>>> development
            <div class="form-group">
                <label for="shipping_first_name">First Name:</label>
                <input type="text" class="form-control" name="shipping_first_name">
            </div>
            <div class="form-group">
                <label for="shipping_last_name">Last Name:</label>
                <input type="text" class="form-control" name="shipping_last_name">
            </div>
            <div class="form-group">
                <label for="shipping_address">Address:</label>
                <input type="text" class="form-control" name="shipping_address">
            </div>
             <div class="form-group">
                <label for="shipping_address2">Address 2:</label>
                <input type="text" class="form-control" name="shipping_address2">
            </div>
             <div class="form-group">
                <label for="shipping_city">City:</label>
                <input type="text" class="form-control" name="shipping_city">
            </div>
             <div class="form-group">
                <label for="shipping_state">State:</label>
                <input type="text" class="form-control" name="shipping_state">
            </div>
             <div class="form-group">
                <label for="shipping_zipcode">Zipcode:</label>
                <input type="text" class="form-control" name="shipping_zipcode">
            </div>
            <!-- </form> -->
    </div>
    <div class="col-md-3 col-md-offset-2">
            <h3>Billing Information</h3>
<<<<<<< HEAD
        <form id="billing-form" action="/submit_billing" method="post">
=======
        <!-- <form id="billing-form" action="submit_billing" method="post"> -->
>>>>>>> development
            <div class="checkbox">
                <label><input type="checkbox" name="same_shipping"> Same as Shipping</label>
            </div>
            <div class="form-group">
                <label for="billing_first_name">First Name:</label>
                <input type="text" class="form-control" name="billing_first_name">
            </div>
            <div class="form-group">
                <label for="billing_last_name">Last Name:</label>
                <input type="text" class="form-control" name="billing_last_name">
            </div>
            <div class="form-group">
                <label for="billing_address">Address:</label>
                <input type="text" class="form-control" name="billing_address">
            </div>
             <div class="form-group">
                <label for="billing_address2">Address 2:</label>
                <input type="text" class="form-control" name="billing_address2">
            </div>
             <div class="form-group">
                <label for="billing_city">City:</label>
                <input type="text" class="form-control" name="billing_city">
            </div>
             <div class="form-group">
                <label for="billing_state">State:</label>
                <input type="text" class="form-control" name="billing_state">
            </div>
             <div class="form-group">
                <label for="billing_zipcode">Zipcode:</label>
                <input type="text" class="form-control" name="billing_zipcode">
            </div>
            <div class="form-group">
                <label for="billing_card">Card:</label>
                <input type="text" class="form-control" name="billing_card">
            </div>
            <div class="form-group">
                <label for="billing_ssc">Security Code:</label>
                <input type="text" class="form-control" name="billing_ssc">
            </div>
            <div class="form-group">
                <label>Expiration Date:</label>
                <select class="form-control" name="expireMM">
                    <option value=''>Month</option>
                    <option value='01'>Janaury</option>
                    <option value='02'>February</option>
                    <option value='03'>March</option>
                    <option value='04'>April</option>
                    <option value='05'>May</option>
                    <option value='06'>June</option>
                    <option value='07'>July</option>
                    <option value='08'>August</option>
                    <option value='09'>September</option>
                    <option value='10'>October</option>
                    <option value='11'>November</option>
                    <option value='12'>December</option>
                </select>
                <select class="form-control" name='expireYY'>
                    <option value=''>Year</option>
                    <option value='15'>2015</option>
                    <option value='16'>2016</option>
                    <option value='17'>2017</option>
                    <option value='18'>2018</option>
                    <option value='19'>2019</option>
                    <option value='20'>2020</option>
                </select>
            <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
            <input type="hidden" name="total_price" value = "<?=$total_price?>" />
            </div>
            <button type="submit" class="btn btn-primary"> CHECKOUT </button>
        </form>
    </div>
</body>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/products.js" type="text/javascript"></script>
</html>