<?php
/* Smarty version 3.1.30, created on 2018-04-25 23:57:06
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\child-info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae115d2067003_63740974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1115f1cb10d31a0c0d492f9dc9ccca49cf7d4d4' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\child-info.tpl',
      1 => 1524619336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ae115d2067003_63740974 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li class="breadcrumb-item active">Child Information</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Child Information</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Sponsor Status</th>
                  <th>Father's First Name</th>
                  <th>Mother's First Name</th>
                  <th>Number of Sisters</th>
                  <th>Number of Brothers</th>
                  <th>Place of Origin</th>
                  <th>Current Class</th>
                  <th>Equivalent US Class</th>
                  <th>Date of Birth</th>
                  <th>School Name</th>
                  <th>School Village</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'childData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childData']->value) {
?>
                <tr>
                  <td><a href="update-child.php?id=<?php echo $_smarty_tpl->tpl_vars['childData']->value['child_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['childData']->value["first_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['childData']->value["last_name"];?>
</td></a>
                  <?php if ($_smarty_tpl->tpl_vars['childData']->value["sponsorship_status"] == 0) {?>
                    <td>Not Sponsored</td>
                  <?php } else { ?>
                    <td>Sponsored</td>
                  <?php }?>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["fathers_first_name"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["mothers_first_name"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["number_of_sisters"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["number_of_brothers"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["place_of_origin"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["current_class"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["equivalent_us_class"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value["date_of_birth"];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value['school_name'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['childData']->value['school_village'];?>
</td>
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
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
