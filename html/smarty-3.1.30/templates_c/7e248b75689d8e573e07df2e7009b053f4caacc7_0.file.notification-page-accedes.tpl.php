<?php
/* Smarty version 3.1.30, created on 2018-04-26 01:45:55
  from "/var/www/html/templates/notification-page-accedes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae16793d93160_40976670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e248b75689d8e573e07df2e7009b053f4caacc7' => 
    array (
      0 => '/var/www/html/templates/notification-page-accedes.tpl',
      1 => 1524721529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/accedes-check.tpl' => 1,
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ae16793d93160_40976670 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <link href="css/notification-page.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php $_smarty_tpl->_subTemplateRender("file:templates/accedes-check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

<?php $_smarty_tpl->_subTemplateRender("file:templates/admin-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="accedes-page.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Notification Page</li>
        </ol>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-success">
                        <h4>
                            Example Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-danger">
                        <h4>
                            Exmaple Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. For performance
                            reasons, the Tooltip and Popover data-apis are opt-in, meaning.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-warning">
                        <h4>
                            Example Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-info">
                        <h4>
                            Example Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. For performance
                            reasons, the Tooltip and Popover data-apis are opt-in, meaning
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-default">
                        <h4>
                            Example Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s.<strong> strong
                                message</strong>.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="alert-message alert-message-notice">
                        <h4>
                            Example Notification</h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s.<strong> strong
                                message</strong>.</p>
                    </div>
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
        <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- Core plugin JavaScript-->
        <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>
        <!-- Page level plugin JavaScript-->
        <?php echo '<script'; ?>
 src="vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
        <!-- Custom scripts for all pages-->
        <?php echo '<script'; ?>
 src="js/sb-admin.min.js"><?php echo '</script'; ?>
>
        <!-- Custom scripts for this page-->
        <?php echo '<script'; ?>
 src="js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/sb-admin-charts.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    </div>
</body>

</html><?php }
}
