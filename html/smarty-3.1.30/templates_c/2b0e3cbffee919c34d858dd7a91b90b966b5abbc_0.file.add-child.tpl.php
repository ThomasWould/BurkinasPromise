<?php
/* Smarty version 3.1.30, created on 2018-03-22 13:33:37
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\add-child.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab3b0b128c8d7_64806179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b0e3cbffee919c34d858dd7a91b90b966b5abbc' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\add-child.tpl',
      1 => 1521725067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ab3b0b128c8d7_64806179 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/admin-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        <form>
            <p class="h4 text-left mb-4">Add/Update Child</p>
            <!-- Default input name -->
            <label for="defaultFormRegisterNameEx" class="grey-text">Child's Name</label>
            <input type="text" id="defaultFormRegisterNameEx" class="form-control col-4">
            <br>
            <!-- Default input email -->
            <label for="defaultFormRegisterEmailEx" class="grey-text">Child's Sponsor</label>
            <input type="email" id="defaultFormRegisterEmailEx" class="form-control col-4">
            <br>
            <!-- Default input email -->
            <label for="defaultFormRegisterConfirmEx" class="grey-text">Child's Age</label>
            <input type="email" id="defaultFormRegisterConfirmEx" class="form-control col-4">
            <br>
            <!-- Default input password -->
            <label for="defaultFormRegisterPasswordEx" class="grey-text">Date of Birth</label>
            <input type="password" id="defaultFormRegisterPasswordEx" class="form-control col-4">

            <div class="text-left mt-4">
                <button class="btn btn-unique" type="submit">Add</button>
                <button class="btn btn-primary" type="submit">Update</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
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
    </div>
</body>

</html>
<?php }
}
