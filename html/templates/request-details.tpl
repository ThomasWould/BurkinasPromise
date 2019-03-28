<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Requests</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this templates-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this templates-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
{include file = "templates/admin-navbar.tpl"};

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add/Update Request Details</li>
        </ol>
        {*<h1>Add/Update Child</h1>*}
        <button class="btn btn-primary" data-toggle="modal" data-target="#accept">Accept</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#reject">Reject</button>
        <div class="row">
        <div class="col-6">
            {if isset($currentInfo)}
                <h3>Proposed New Information</h3>
            {else}
                <h3>Proposed Child to Add</h3>
            {/if}
            {*<img />*}
            <p>First Name: {$newInfo['first_name']}</p>
            <p>Last Name: {$newInfo['last_name']}</p>
            <p>Date of Birth: {$newInfo['date_of_birth']}</p>
            <p>Mother's Name: {$newInfo['mothers_first_name']}</p>
            <p>Father's Name: {$newInfo['fathers_first_name']}</p>
            <p>Number of Brothers: {$newInfo['number_of_brothers']}</p>
            <p>Number of Sisters: {$newInfo['number_of_sisters']}</p>
            <p>Birth Place: {$newInfo['place_of_origin']}</p>
            <p>Current Grade: {$newInfo['current_class']}</p>
            <p>Equivalent US Grade: {$newInfo['equivalent_us_class']}</p>
            <p>School Name: {$newInfo['school_name']}</p>
            <p>School Village: {$newInfo['school_village']}</p>
        </div>

        {if isset($currentInfo)}
            <div class="col-6">
                <h3>Current Child Information</h3>
                {*<img />*}
                <p>First Name: {$currentInfo['first_name']}</p>
                <p>Last Name: {$currentInfo['last_name']}</p>
                <p>Date of Birth: {$currentInfo['date_of_birth']}</p>
                <p>Mother's Name: {$currentInfo['mothers_first_name']}</p>
                <p>Father's Name: {$currentInfo['fathers_first_name']}</p>
                <p>Number of Brothers: {$currentInfo['number_of_brothers']}</p>
                <p>Number of Sisters: {$currentInfo['number_of_sisters']}</p>
                <p>Birth Place: {$currentInfo['place_of_origin']}</p>
                <p>Current Grade: {$currentInfo['current_class']}</p>
                <p>Equivalent US Grade: {$currentInfo['equivalent_us_class']}</p>
                <p>School Name: {$currentInfo['school_name']}</p>
                <p>School Village: {$currentInfo['school_village']}</p>
            </div>
        {/if}
    </div>


        <div id="accept" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to accept these changes?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="add-request-admin.php">
                            <input id="childID" name="childID" value="{$newInfo['child_id']}" hidden>
                            <input id="record_date" name="record_date" value="{$newInfo['record_date']}" hidden>
                            <input type="submit" class="btn btn-primary" value="Yes">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="reject" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    {*<div class="modal-header">*}

                    {*</div>*}
                    <div class="modal-body">
                        <p>Why is this information being rejected?</p>
                        <form method="post" action="add-request-admin.php">
                            <input id="child_id" name="child_id" value="{$newInfo['child_id']}" hidden>
                            <input id="record_date" name="record_date" value="{$newInfo['record_date']}" hidden>
                            <textarea id="message" name="message" rows="5" cols="50"></textarea>
                            <br/>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                    {*<div class="modal-footer">*}
                        {*<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>*}
                    {*</div>*}
                </div>

            </div>
        </div>

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