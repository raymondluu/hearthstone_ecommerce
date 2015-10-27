<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
</head>
<body>
    <div class="col-lg-9">
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <th class="col-lg-3">Item</th>
                <th class="col-lg-2">Price</th>
                <th class="col-lg-2">Quantity</th>
                <th class="col-lg-2">Total</th>
            </thead>
            <tbody>
                <tr>
                    <td>Card Name</td>
                    <td>Card Price</td>
                    <td>1 <a href="controller/update_quantity">update</a>
                        <a href="controller/remove_item"><button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button></a>
                    </td>
                    <td>$19.99</td>
                </tr>
                <tr>
                    <td>Card Name</td>
                    <td>Card Price</td>
                    <td>1 <a href="controller/update_quantity">update</a>
                        <a href="controller/remove_item"><button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button></a>
                    </td>
                    <td>$19.99</td>
                </tr>
            </tbody>
        </table>
    </div>
<<<<<<< HEAD

=======
​
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
    <div class="col-lg-12">
        <!-- This needs to be left aligned -->
        <p>Total: </p>
        <button type="button" class="btn btn-success"><a href="main/index">Continue Shopping</a></button>
<<<<<<< HEAD
    </div> 


=======
    </div>
​
​
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
    <div class="col-md-3">
        <h3>Shipping Information</h3>
        <form id="shipping-form"  action="controller/submit_address" method="post">
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
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary">Submit</button>        
        </form>


            <h3>Billing Information</h3>

=======
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
​
​
            <h3>Billing Information</h3>
​
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
        <form id="billing-form" action="controller/submit_billing" method="post">
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
<<<<<<< HEAD
                </select> 
=======
                </select>
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
                <select class="form-control" name='expireYY'>
                    <option value=''>Year</option>
                    <option value='15'>2015</option>
                    <option value='16'>2016</option>
                    <option value='17'>2017</option>
                    <option value='18'>2018</option>
                    <option value='19'>2019</option>
                    <option value='20'>2020</option>
<<<<<<< HEAD
                </select> 
            <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
            </div>
            <button type="submit" class="btn btn-primary">Pay</button>   
        </form>    
    </div>

=======
                </select>
            <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
            </div>
            <button type="submit" class="btn btn-primary">Pay</button>
        </form>
    </div>
​
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
</body>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
    $('input[name="same_shipping"]').on('change', copyShippingInfo);
<<<<<<< HEAD

    function copyShippingInfo(e) {
        var $target = $(e.target); // checkbox
        var checked = $target.prop('checked'); // returns true or false based on checked state

=======
​
    function copyShippingInfo(event) {
        var $target = $(event.target); // checkbox
        var checked = $target.prop("checked"); // returns true or false based on checked state
​
<<<<<<< HEAD
        if ('checked') {
=======
>>>>>>> 1823e3cf9bce9ee9831c034d20b30368c4caa90a
        if (checked) {
>>>>>>> 66673c38f73591d32614f52afc915e8b71f74d70
            $('[name="billing_first_name"]').val($('[name="shipping_first_name"]').val());
            $('[name="billing_last_name"]').val($('[name="shipping_last_name"]').val());
            $('[name="billing_address"]').val($('[name="shipping_address"]').val());
            $('[name="billing_address2"]').val($('[name="shipping_address2"]').val());
            $('[name="billing_city"]').val($('[name="shipping_city"]').val());
            $('[name="billing_state"]').val($('[name="shipping_state"]').val());
            $('[name="billing_zipcode"]').val($('[name="shipping_zipcode"]').val());
        } else {
            $('[name="billing_first_name"]').val('');
            $('[name="billing_last_name"]').val('');
            $('[name="billing_address"]').val('');
            $('[name="billing_address2"]').val('');
            $('[name="billing_city"]').val('');
            $('[name="billing_state"]').val('');
            $('[name="billing_zipcode"]').val('');
        }
    }
});
</script>
</html>