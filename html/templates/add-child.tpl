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
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Child has been added.
            </div>
        {elseif $success === false}
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> This child was not added.
            </div>
        {/if}
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Child</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        <p class="h4 text-left mb-4">Add Child</p>
        <form role="form" action="add-child.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">

                <label for="first_name">First name</label>
                <input type="text" class="form-control col-4" id="first_name" name="first_name" placeholder="" required
                       {*{if isset($first_name)}value="{$first_name}"{/if}/>*}
            </div>

            <div class="form-group">

                <label for="last_name">Last Name</label>
                <input type="text" class="form-control col-4" id="last_name" name="last_name" placeholder="" required
                       {*{if isset($last_name)}value="{$last_name}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="fathers_first_name">Fathers First name</label>
                <input type="text" class="form-control col-4" id="fathers_first_name" name="fathers_first_name" placeholder="" required
                       {*{if isset($father_first_name)}value="{$fathers_first_name}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="mothers_first_name">Mother First name</label>
                <input type="text" class="form-control col-4" id="mothers_first_name" name="mothers_first_name" placeholder="" required
                       {*{if isset($mother_first_name)}value="{$mothers_first_name}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="number_of_sisters">Number of Sisters</label>
                <input type="number" class="form-control col-4" id="number_of_sisters" name="number_of_sisters" placeholder="" required
                {*{if isset($number_of_sisters)}value="{$number_of_sisters}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="number_of_brothers">Number of Brothers</label>
                <input type="number" class="form-control col-4" id="number_of_brothers" name="number_of_brothers" placeholder="" required
                       {*{if isset($number_of_brothers)}value="{$number_of_brothers}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="place_of_origin">Place of Origin</label>
                <input type="text" class="form-control col-4" id="place_of_origin" name="place_of_origin" placeholder="" required
                       {*{if isset($place_of_origin)}value="{$place_of_origin}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control col-4" id="date_of_birth" name="date_of_birth" placeholder="" required
                       {*{if isset($date_of_birth)}value="{$date_of_birth}"{/if}/>*}

            </div>

            <div class="form-group">

                <label for="current_class">Current Class Level</label>
                <input type="text" class="form-control col-4" id="current_class" name="current_class" placeholder="" required
                       {*{if isset($current_class)}value="{$current_class}"{/if}/>*}
            </div>

            <div class="form-group">

                <label for="equivalent_us_class">Equivalent US Class Level</label>
                <input type="text" class="form-control col-4" id="equivalent_us_class" name="equivalent_us_class" placeholder="" required
                       {*{if isset($equivalent_us_class)}value="{$equivalent_us_class}"{/if}/>*}
            </div>

            <div class="form-group">

                <label for="school_name">School Name</label>
                <input type="text" class="form-control col-4" id="school_name" name="school_name" placeholder="" required
                       {*{if isset($school_name)}value="{$school_name}"{/if}/>*}
            </div>

            <div class="form-group">

                <label for="school_village">School Village</label>
                <input type="text" class="form-control col-4" id="school_village" name="school_village" placeholder="" required
                       {*{if isset($school_village)}value="{$school_village}"{/if}/>*}
            </div>

            <div class="form-group mt-2">
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                <h6>Child Image:</h6>
                <input type="file" class="form-control col-4" name="image" id="image" required>
            </div>

            {*</div>*}
                {*<label>Is this Child Sponsored?</label>*}
                {*<div class="form-check">*}
                    {*<input type="radio" class="form-check-input" id="status" name="status" placeholder=""  required*}
                           {*{if isset($status)}value="{$status}"{/if}/>*}
                    {*<label class="form-check-label" for="status">*}
                        {*1*}
                    {*</label>*}
                {*</div>*}
                {*<div class="form-check">*}
                    {*<input type="radio" class="form-check-input" id="status" name="status" placeholder="" value="1" required*}
                           {*{if isset($status)}value="{$status}"{/if}/>*}
                    {*<label class="form-check-label" for="status">*}
                        {*0*}
                    {*</label>*}
                {*</div>*}

            <div class="text-left mt-4">
                <input class="btn btn-primary" type="submit" value="Submit" name="add">
                {*<button class="btn btn-primary" type="submit">Update</button>*}
                {*<button class="btn btn-danger" type="submit">Cancel</button>*}
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
