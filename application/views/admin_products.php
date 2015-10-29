<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>All Products for Hearthstone ECommerce</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
    <script src="/assets/js/admin-pagination.js"></script>
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
            <tbody id="admin-products-table">
                <!-- Cards loading here -->
            </tbody>
        </table>
    </div>
    <!-- Page Navigation -->
    <div class="col-lg-12">
        <nav>
            <ul class="pagination pagination-admin">
             
            </ul>
        </nav>
    </div>
</body>
</html>