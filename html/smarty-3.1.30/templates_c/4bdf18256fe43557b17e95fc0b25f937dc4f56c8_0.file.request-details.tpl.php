<?php
/* Smarty version 3.1.30, created on 2018-05-08 11:49:15
  from "/var/www/html/templates/request-details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af1c6fb745032_79324403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdf18256fe43557b17e95fc0b25f937dc4f56c8' => 
    array (
      0 => '/var/www/html/templates/request-details.tpl',
      1 => 1525794541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5af1c6fb745032_79324403 (Smarty_Internal_Template $_smarty_tpl) {
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
            <li class="breadcrumb-item active">Add/Update Request Details</li>
        </ol>
        
        <button class="btn btn-primary" data-toggle="modal" data-target="#accept">Accept</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#reject">Reject</button>
        <div class="row">
        <div class="col-6">
            <?php if (isset($_smarty_tpl->tpl_vars['currentInfo']->value)) {?>
                <h3>Proposed New Information</h3>
            <?php } else { ?>
                <h3>Proposed Child to Add</h3>
            <?php }?>
            
            <p>First Name: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['first_name'];?>
</p>
            <p>Last Name: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['last_name'];?>
</p>
            <p>Date of Birth: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['date_of_birth'];?>
</p>
            <p>Mother's Name: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['mothers_first_name'];?>
</p>
            <p>Father's Name: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['fathers_first_name'];?>
</p>
            <p>Number of Brothers: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['number_of_brothers'];?>
</p>
            <p>Number of Sisters: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['number_of_sisters'];?>
</p>
            <p>Birth Place: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['place_of_origin'];?>
</p>
            <p>Current Grade: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['current_class'];?>
</p>
            <p>Equivalent US Grade: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['equivalent_us_class'];?>
</p>
            <p>School Name: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['school_name'];?>
</p>
            <p>School Village: <?php echo $_smarty_tpl->tpl_vars['newInfo']->value['school_village'];?>
</p>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['currentInfo']->value)) {?>
            <div class="col-6">
                <h3>Current Child Information</h3>
                
                <p>First Name: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['first_name'];?>
</p>
                <p>Last Name: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['last_name'];?>
</p>
                <p>Date of Birth: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['date_of_birth'];?>
</p>
                <p>Mother's Name: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['mothers_first_name'];?>
</p>
                <p>Father's Name: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['fathers_first_name'];?>
</p>
                <p>Number of Brothers: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['number_of_brothers'];?>
</p>
                <p>Number of Sisters: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['number_of_sisters'];?>
</p>
                <p>Birth Place: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['place_of_origin'];?>
</p>
                <p>Current Grade: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['current_class'];?>
</p>
                <p>Equivalent US Grade: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['equivalent_us_class'];?>
</p>
                <p>School Name: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['school_name'];?>
</p>
                <p>School Village: <?php echo $_smarty_tpl->tpl_vars['currentInfo']->value['school_village'];?>
</p>
            </div>
        <?php }?>
    </div>


        <div id="accept" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to accept these changes?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="add-request-admin.php">
                            <input id="childID" name="childID" value="<?php echo $_smarty_tpl->tpl_vars['newInfo']->value['child_id'];?>
" hidden>
                            <input id="record_date" name="record_date" value="<?php echo $_smarty_tpl->tpl_vars['newInfo']->value['record_date'];?>
" hidden>
                            <input type="submit" class="btn btn-primary" value="Yes">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="reject" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    

                    
                    <div class="modal-body">
                        <p>Why is this information being rejected?</p>
                        <form method="post" action="add-request-admin.php">
                            <input id="child_id" name="child_id" value="<?php echo $_smarty_tpl->tpl_vars['newInfo']->value['child_id'];?>
" hidden>
                            <input id="record_date" name="record_date" value="<?php echo $_smarty_tpl->tpl_vars['newInfo']->value['record_date'];?>
" hidden>
                            <textarea id="message" name="message" rows="5" cols="50"></textarea>
                            <br/>
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </form>
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
    </div>
</body>

</html><?php }
}
