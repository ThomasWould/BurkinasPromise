<?php
/* Smarty version 3.1.30, created on 2018-04-12 03:24:58
  from "/var/www/html/templates/add-request-accedes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf09cae1dbb1_23283640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e482d5f1a90934287bbc2e987b91bc3a14432466' => 
    array (
      0 => '/var/www/html/templates/add-request-accedes.tpl',
      1 => 1523517723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/accedes-check.tpl' => 1,
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5acf09cae1dbb1_23283640 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accedes Page</title>
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
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Child Request</li>
        </ol>
        <p class="h4 text-left mb-2">Request to Add Child</p>
        <p class="border-bottom"></p>
        <form role="form" action="add-child.php" method="post">
            <input type="hidden" name="processForm" value="1">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" class="form-control col-4" id="first_name" name="first_name" placeholder="" required
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control col-4" id="last_name" name="last_name" placeholder="" required
            </div>
            <div class="form-group">
                <label for="fathers_first_name">Fathers First name</label>
                <input type="text" class="form-control col-4" id="fathers_first_name" name="fathers_first_name" placeholder="" required
            </div>
            <div class="form-group">
                <label for="mothers_first_name">Mother First name</label>
                <input type="text" class="form-control col-4" id="mothers_first_name" name="mothers_first_name" placeholder="" required
            </div>
            <div class="form-group">
                <label for="number_of_sisters">Number of Sisters</label>
                <input type="number" class="form-control col-4" id="number_of_sisters" name="number_of_sisters" placeholder="" required
            </div>
            <div class="form-group">
                <label for="number_of_brothers">Number of Brothers</label>
                <input type="number" class="form-control col-4" id="number_of_brothers" name="number_of_brothers" placeholder="" required
            </div>
            <div class="form-group">
                <label for="place_of_origin">Place of Origin</label>
                <input type="text" class="form-control col-4" id="place_of_origin" name="place_of_origin" placeholder="" required
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control col-4" id="date_of_birth" name="date_of_birth" placeholder="" required

            </div>
            <div class="form-group">
                <label for="current_class">Current Class Level</label>
                <input type="text" class="form-control col-4" id="current_class" name="current_class" placeholder="" required
            </div>
            <div class="form-group">
                <label for="equivalent_us_class">Equivalent US Class Level</label>
                <input type="text" class="form-control col-4" id="equivalent_us_class" name="equivalent_us_class" placeholder="" required
            </div>
            <div class="form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control col-4" id="school_name" name="school_name" placeholder="" required
            </div>
            <div class="form-group">
                <label for="school_village">School Village</label>
                <input type="text" class="form-control col-4" id="school_village" name="school_village" placeholder="" required
            </div>
            <div class="text-left mt-4">
                <button class="btn btn-primary" type="submit">Request to Add</button>
            </div>
        </form>
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
