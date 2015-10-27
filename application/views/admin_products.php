<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hearthstone Ecommerce Site</title>
    <?php $this->load->view("/partials/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5-dist/css/bootstrap.css">
</head>
<body>

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
                <tr>
                    <td>IMAGE HERE</td>
                    <td>1</td>
                    <td>Ysera Gold</td>
                    <td>1</td>
                    <td>2</td>
                    <td>
                        <a href="products/edit">Edit</a>
                        <a href="products/delete">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>IMAGE HERE</td>
                    <td>1</td>
                    <td>Ysera Normal</td>
                    <td>15</td>
                    <td>25</td>
                    <td>
                        <a href="products/edit">Edit</a>
                        <a href="products/delete">Delete</a>
                    </td>
                </tr>
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
    // $(document).ready(function() {
    //     $('#dropdownStatus').dropdown();
    // });
</script>
</body>
</html>