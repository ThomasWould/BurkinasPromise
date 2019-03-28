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
            <li class="breadcrumb-item active">Recent Messages</li>
        </ol>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
        <div style="padding: 20px 20% 0 20%;">
            <div class="chat_list">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted">04.12.2018 at 12:56</small>
                        <div>
                            <small class="list-group-item-heading text-muted text-primary">User 1</small>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus dictum congue. Proin vel odio metus. Maecenas odio felis,
                                congue in ante vel, vulputate maximus tortor. Nam a ullamcorper nisl.
                            </p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted">04.12.2018 at 12:57</small>
                        <div>
                            <small class="list-group-item-heading text-muted">User 2</small>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus dictum congue.
                            </p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted">04.12.2018 at 12:58</small>
                        <div>
                            <small class="list-group-item-heading text-muted text-primary">User 3</small>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus dictum congue. Proin vel odio metus. Maecenas odio felis,
                                congue in ante vel, vulputate maximus tortor. Nam a ullamcorper nisl. Donec at scelerisque eros, quis maximus erat. Morbi facilisis eros purus,
                                ac semper quam accumsan at. In non accumsan diam.
                            </p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="pull-left hidden-xs">
                        </div>
                        <small class="pull-right text-muted">04.12.2018 at 12:58</small>
                        <div>
                            <small class="list-group-item-heading text-muted text-primary">User 4</small>
                            <p class="list-group-item-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus dictum congue. Proin vel odio metus. Maecenas odio felis,
                                congue in ante vel, vulputate maximus tortor. Nam a ullamcorper nisl. Donec at scelerisque eros, quis maximus erat.
                            </p>
                        </div>
                    </li>
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