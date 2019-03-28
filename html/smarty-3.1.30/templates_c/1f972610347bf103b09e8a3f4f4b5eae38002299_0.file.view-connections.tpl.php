<?php
/* Smarty version 3.1.30, created on 2018-04-24 20:23:49
  from "/var/www/html/templates/view-connections.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfca9560ca70_91829093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f972610347bf103b09e8a3f4f4b5eae38002299' => 
    array (
      0 => '/var/www/html/templates/view-connections.tpl',
      1 => 1524436449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5adfca9560ca70_91829093 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Connections</li>
        </ol>

        <?php if ($_smarty_tpl->tpl_vars['success']->value === true) {?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Connection has been updated!
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['success']->value === false) {?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> A sponsor with this email already exists.
            </div>
        <?php }?>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Connections</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type of Connection</th>
                            <th>Child Name</th>
                            <th>Description of Connection</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['connections']->value, 'connection', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['connection']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['connection']->value["user_first_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['connection']->value["user_last_name"];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['relationship'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['child_first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['connection']->value['child_last_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['description'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['start_date'];?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['connection']->value['end_date'] === null) {?>
                                    <td>Active</td>
                                <?php } else { ?>
                                    <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['end_date'];?>
</td>
                                <?php }?>
                                <td><a href="edit-connection.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Edit</a></td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
<?php }
}
