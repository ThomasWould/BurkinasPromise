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
        {if $success === true}
            {if $user->isAdmin()}
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Child has been updated.
                </div>
            {else}
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Update has been requested.
                </div>
            {/if}
        {elseif $success === false}
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> This child was not updated.
            </div>
        {/if}
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update Child</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        {foreach $data as $childData}
        <p class="h4 text-left mb-4">Update Child</p>
        <form role="form" action="update-child.php?id={$id}" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">

                <label for="first_name">First name</label>
                <input type="text" class="form-control col-4" id="first_name" name="first_name" value="{$childData['first_name']}" required />
            </div>

            <div class="form-group">

                <label for="last_name">Last Name</label>
                <input type="text" class="form-control col-4" id="last_name" name="last_name" value="{$childData['last_name']}" required />
            </div>

            <div class="form-group">

                <label for="fathers_first_name">Fathers First name</label>
                <input type="text" class="form-control col-4" id="fathers_first_name" name="fathers_first_name" value="{$childData['fathers_first_name']}" required />
            </div>

            <div class="form-group">

                <label for="mothers_first_name">Mother First name</label>
                <input type="text" class="form-control col-4" id="mothers_first_name" name="mothers_first_name" value="{$childData['mothers_first_name']}" required />
            </div>

            <div class="form-group">

                <label for="number_of_sisters">Number of Sisters</label>
                <input type="number" class="form-control col-4" id="number_of_sisters" name="number_of_sisters" value="{$childData['number_of_sisters']}" required />
            </div>

            <div class="form-group">

                <label for="number_of_brothers">Number of Brothers</label>
                <input type="number" class="form-control col-4" id="number_of_brothers" name="number_of_brothers" value="{$childData['number_of_brothers']}" required />
            </div>

            <div class="form-group">

                <label for="place_of_origin">Place of Origin</label>
                <input type="text" class="form-control col-4" id="place_of_origin" name="place_of_origin" value="{$childData['place_of_origin']}" required />
            </div>

            <div class="form-group">

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control col-4" id="date_of_birth" name="date_of_birth" value="{$childData['date_of_birth']}" required />
            </div>

            <div class="form-group">

                <label for="current_class">Current Class Level</label>
                <input type="text" class="form-control col-4" id="current_class" name="current_class" value="{$childData['current_class']}" required />
            </div>

            <div class="form-group">

                <label for="equivalent_us_class">Equivalent US Class Level</label>
                <input type="text" class="form-control col-4" id="equivalent_us_class" name="equivalent_us_class" value="{$childData['equivalent_us_class']}" required />
            </div>

            <div class="form-group">

                <label for="school_name">School Name</label>
                <input type="text" class="form-control col-4" id="school_name" name="school_name" value="{$childData['school_name']}"  />
            </div>

            <div class="form-group">

                <label for="school_village">School Village</label>
                <input type="text" class="form-control col-4" id="school_village" name="school_village" value="{$childData['school_village']}" required />
            </div>
            {/foreach}

            <div class="text-left mt-4">
                <button class="btn btn-primary" type="submit">Update</button>
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
</body>

</html>
