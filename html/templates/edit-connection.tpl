<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Page</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
{include file = 'templates/admin-navbar.tpl'};

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Sponsor</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        <p class="h4 text-left mb-4">Add Sponsor</p>
        <form role="form" action="view-connections.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <input type="hidden" id="id" name="id" value="{$connection['connection_id']}"

            <div class="form-group">

                <label for="name">Name</label>
                <input type="text" class="form-control col-4" id="name" name="name"
                       value="{$connection['user_first_name']} {$connection['user_last_name']}" required readonly

            </div>

            <div class="form-group">

                <label for="child_name">Child's Name</label>
                <input type="text" class="form-control col-4" id="child_name" name="child_name"
                       value="{$connection['child_first_name']} {$connection['child_last_name']}" required readonly>
                <input type="text" id="child_id" name="child_id" value="{$connection['child_fk']}" hidden

            </div>

            <div class="form-group">

                <label for="description">Description:</label> <br/>
                <textarea id="description" name="description" class="col-4" rows=4 >{$connection['description']}</textarea>

            </div>

            {if $connection['end_date'] === null}
            <div class="form-group">
                <label for="closed">Would you like to Close this Connection?</label><br/>
                <input type="checkbox" id="closed" name="closed" value="true">  Close Connection<br/>
            </div>
            {/if}

            <div class="form-group">
                <div class="text-left mt-4">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>

        <!-- Default form register -->
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer bg-dark">
            <div class="container">
                <div class="text-center">
                    <small class="text-white">Copyright © Burkina's Promise 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/sb-admin-charts.min.js"></script>

    </div>
</div>
</body>

</html>
