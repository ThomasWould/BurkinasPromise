<?php
/* Smarty version 3.1.30, created on 2018-04-26 04:38:10
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\sponsor-connect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae157b2863355_20729342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e489caf179f9d6f9f036d0f8092943a605fbc80c' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\sponsor-connect.tpl',
      1 => 1524436291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ae157b2863355_20729342 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

<?php $_smarty_tpl->_subTemplateRender("file:templates/admin-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;

<div class="content-wrapper">
    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['success']->value === true) {?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Sponsor is now sponsoring .
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['success']->value === false) {?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> A sponsor with this email already exists.
            </div>
        <?php }?>

        <p class="h4 text-left mb-4">Connect a Sponsor to a Child</p>

        <form role="form" action="sponsor-connect.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">
                <label for="child">Choose a Child:</label>
                <select id="child" name="child" class="form-control selectpicker col-4">
                    <option value="">Select Child</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['child']->value['child_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['child']->value['last_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>

            <div class="form-group">
                <label for="sponsor">Choose a Sponsor:</label>
                <select id="sponsor" name="sponsor" class="form-control selectpicker col-4">
                    <option value="">Select Sponsor</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sponsors']->value, 'sponsor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsor']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['sponsor']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sponsor']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['sponsor']->value['last_name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
    </div>
</div>
</body>

</html>
<?php }
}
