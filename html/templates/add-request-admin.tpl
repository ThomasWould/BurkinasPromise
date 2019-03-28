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
        {if $success === true}
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Child Info has been Accepted.
            </div>
        {elseif $success === false}
            <div class="alert alert-dark alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Message was sent to Accedes.
            </div>
        {/if}

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Recent Add Requests</li>
        </ol>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
        <div style="padding: 20px 20% 0 20%;">
            <div class="chat_list">
                <ul class="list-group">
                    {foreach $rows as $row}
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted">{$row['record_date']}</small>
                        <div>
                            <small class="list-group-item-heading text-muted text-primary"></small>
                            <p class="list-group-item-text">
                                {if $row['status'] == 3}
                                    An accedes user has requested that {$row['first_name']} {$row['last_name']}'s information be updated.
                                {else}
                                     An accedes user has requested a child to be added to the database.
                                {/if}
                            </p>
                        </div>
                        <form method="get" action="request-details.php">
                            <input id="status" name="status" value="{$row['status']}" hidden>
                            <input id="child_id" name="child_id" value="{$row['child_id']}" hidden>
                            <input id="record_date" name="record_date" value="{$row['record_date']}" hidden>
                            <input type="submit" class="btn btn-unique" value="Details">
                        </form>
                        {*<input type="button" class="btn btn-unique" value="Details" onclick="location.href = 'request-details.php?type={$row['status']}?id={$row['child_id']}?date={$row['record_date']}'">*}
                    </li>
                    {/foreach}
                </ul>
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