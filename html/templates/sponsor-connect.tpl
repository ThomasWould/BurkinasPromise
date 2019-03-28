<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Burkina's Promise</title>
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

{include file = 'templates/admin-navbar.tpl'};

<div class="content-wrapper">
    <div class="container-fluid">
        {if $success === true}
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Sponsor is now sponsoring .
            </div>
        {elseif $success === false}
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> A sponsor with this email already exists.
            </div>
        {/if}

        <p class="h4 text-left mb-4">Connect a Sponsor to a Child</p>

        <form role="form" action="sponsor-connect.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">
                <label for="child">Choose a Child:</label>
                <select id="child" name="child" class="form-control selectpicker col-4">
                    <option value="">Select Child</option>
                    {foreach $children as $child}
                        <option value="{$child['child_id']}">{$child['first_name']} {$child['last_name']}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-group">
                <label for="sponsor">Choose a Sponsor:</label>
                <select id="sponsor" name="sponsor" class="form-control selectpicker col-4">
                    <option value="">Select Sponsor</option>
                    {foreach $sponsors as $sponsor}
                        <option value="{$sponsor['user_id']}">{$sponsor['first_name']} {$sponsor['last_name']}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-group">

                <label for="description">Description:</label> <br/>
                <textarea id="description" name="description" class="col-4" rows=4></textarea>
            </div>

            <div class="form-group">
                <div class="text-left mt-4">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </form>

        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Burkina's Promise 2018</small>
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
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="js/sb-admin-datatables.min.js"></script>
    </div>
</div>
</body>

</html>
