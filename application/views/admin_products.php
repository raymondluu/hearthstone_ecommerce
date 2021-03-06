<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>All Products for Hearthstone ECommerce</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <script src="/assets/js/admin-pagination.js"></script>
</head>
<body>
 <?php $this->load->view("/partials/admin_partial.php"); ?>

    <div class="col-lg-10 col-lg-offset-1 index_margin_top">
        <h1 class="text-center">Admin View of All Products</h1>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <th class="col-lg-2 text-center tbl-head">Picture</th>
                <th class="col-lg-1 text-center tbl-head">ID</th>
                <th class="col-lg-2 text-center tbl-head">Name</th>
                <th class="col-lg-1 text-center tbl-head">Inventory Count</th>
                <th class="col-lg-1 text-center tbl-head">Quantity Sold</th>
                <!-- <th class="col-lg-1 text-center tbl-head">Action</th> -->
            </thead>
            <tbody id="admin-products-table">
                <!-- Cards loading here -->
            </tbody>
        </table>
    </div>

    <!-- Page Navigation -->
    <div class="col-lg-12 col-lg-offset-4">
        <nav>
            <ul class="pagination pagination-admin">
             <!-- Page links generated by JS here -->
            </ul>
        </nav>
    </div>

</body>
</html>