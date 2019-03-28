<?php
/* Smarty version 3.1.30, created on 2018-04-24 21:30:45
  from "/var/www/html/templates/edit-connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfda45141b05_48652491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f121a7a21c4f3bcc2c40b1673147b9eed3fab82' => 
    array (
      0 => '/var/www/html/templates/edit-connection.tpl',
      1 => 1524619843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5adfda45141b05_48652491 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="breadcrumb-item active">Add Sponsor</li>
        </ol>
        <!-- Add Form-->
        <!-- Default form register -->
        <p class="h4 text-left mb-4">Add Sponsor</p>
        <form role="form" action="view-connections.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value['connection_id'];?>
"

            <div class="form-group">

                <label for="name">Name</label>
                <input type="text" class="form-control col-4" id="name" name="name"
                       value="<?php echo $_smarty_tpl->tpl_vars['connection']->value['user_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['connection']->value['user_last_name'];?>
" required readonly

            </div>

            <div class="form-group">

                <label for="child_name">Child's Name</label>
                <input type="text" class="form-control col-4" id="child_name" name="child_name"
                       value="<?php echo $_smarty_tpl->tpl_vars['connection']->value['child_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['connection']->value['child_last_name'];?>
" required readonly>
                <input type="text" id="child_id" name="child_id" value="<?php echo $_smarty_tpl->tpl_vars['connection']->value['child_fk'];?>
" hidden

            </div>

            <div class="form-group">

                <label for="description">Description:</label> <br/>
                <textarea id="description" name="description" class="col-4" rows=4 ><?php echo $_smarty_tpl->tpl_vars['connection']->value['description'];?>
</textarea>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['connection']->value['end_date'] === null) {?>
            <div class="form-group">
                <label for="closed">Would you like to Close this Connection?</label><br/>
                <input type="checkbox" id="closed" name="closed" value="true">  Close Connection<br/>
            </div>
            <?php }?>

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
</div>
</body>

</html>
<?php }
}
