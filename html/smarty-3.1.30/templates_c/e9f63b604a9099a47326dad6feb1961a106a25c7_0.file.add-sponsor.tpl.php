<?php
/* Smarty version 3.1.30, created on 2018-04-25 23:46:10
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\add-sponsor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae113426f2380_98192576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f63b604a9099a47326dad6feb1961a106a25c7' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\add-sponsor.tpl',
      1 => 1524025313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/admin-navbar.tpl' => 1,
  ),
),false)) {
function content_5ae113426f2380_98192576 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if ($_smarty_tpl->tpl_vars['success']->value === true) {?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Sponsor has been added.
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['success']->value === false) {?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> A sponsor with this email already exists.
            </div>
        <?php }?>
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
        <form role="form" action="add-sponsor.php" method="post">
            <input type="hidden" name="processForm" value="1">

            <div class="form-group">

                <label for="first_name">First name</label>
                <input type="text" class="form-control col-4" id="first_name" name="first_name" placeholder="" required
                        <?php if (isset($_smarty_tpl->tpl_vars['first_name']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
"<?php }?>/>
            </div>

            <div class="form-group">

                <label for="last_name">Last Name</label>
                <input type="text" class="form-control col-4" id="last_name" name="last_name" placeholder="" required
                        <?php if (isset($_smarty_tpl->tpl_vars['last_name']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
"<?php }?>/>

            </div>

            <div class="form-group">

                <label for="address">Address</label>
                <input type="text" class="form-control col-4" id="address" name="address" placeholder="" required
                        <?php if (isset($_smarty_tpl->tpl_vars['address']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"<?php }?>/>

            </div>

            <div class="form-group">

                <label for="city">City</label>
                <input type="text" class="form-control col-4" id="city" name="city" placeholder="" required
                        <?php if (isset($_smarty_tpl->tpl_vars['city']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
"<?php }?>/>

            </div>

            <div class="form-group">
                <label for="state">State</label>
                <select id="state" name="state" class="form-control selectpicker col-4">
                    <option value="">Select State</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Alabama");
if ("Alabama") {?>selected<?php }
}?>>Alabama</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Alaska");
if ("Alaska") {?>selected<?php }
}?>>Alaska</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Arizona");
if ("Arizona") {?>selected<?php }
}?>>Arizona</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Arkansas");
if ("Arkansas") {?>selected<?php }
}?>>Arkansas</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "California");
if ("California") {?>selected<?php }
}?>>California</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Colorado");
if ("Colorado") {?>selected<?php }
}?>>Colorado</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Connecticut");
if ("Connecticut") {?>selected<?php }
}?>>Connecticut</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Delaware");
if ("Delaware") {?>selected<?php }
}?>>Delaware</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "District of Columbia");
if ("District of Columbia") {?>selected<?php }
}?>>District of Columbia</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Florida");
if ("Florida") {?>selected<?php }
}?>>Florida</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Georgia");
if ("Georgia") {?>selected<?php }
}?>>Georgia</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Hawaii");
if ("Hawaii") {?>selected<?php }
}?>>Hawaii</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Idaho");
if ("Idaho") {?>selected<?php }
}?>>Idaho</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Illinois");
if ("Illinois") {?>selected<?php }
}?>>Illinois</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Indiana");
if ("Indiana") {?>selected<?php }
}?>>Indiana</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Iowa");
if ("Iowa") {?>selected<?php }
}?>>Iowa</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Kansas");
if ("Kansas") {?>selected<?php }
}?>>Kansas</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Kentucky");
if ("Kentucky") {?>selected<?php }
}?>>Kentucky</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Louisiana");
if ("Louisiana") {?>selected<?php }
}?>>Louisiana</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Maine");
if ("Maine") {?>selected<?php }
}?>>Maine</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Maryland");
if ("Maryland") {?>selected<?php }
}?>>Maryland</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Massachusetts");
if ("Massachusetts") {?>selected<?php }
}?>>Massachusetts</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Michigan");
if ("Michigan") {?>selected<?php }
}?>>Michigan</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Minnesota");
if ("Minnesota") {?>selected<?php }
}?>>Minnesota</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Mississippi");
if ("Mississippi") {?>selected<?php }
}?>>Mississippi</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Missouri");
if ("Missouri") {?>selected<?php }
}?>>Missouri</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Montana");
if ("Montana") {?>selected<?php }
}?>>Montana</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Nebraska");
if ("Nebraska") {?>selected<?php }
}?>>Nebraska</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Nevada");
if ("Nevada") {?>selected<?php }
}?>>Nevada</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "New Hampshire");
if ("New Hampshire") {?>selected<?php }
}?>>New Hampshire</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "New Jersey");
if ("New Jersey") {?>selected<?php }
}?>>New Jersey</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "New Mexico");
if ("New Mexico") {?>selected<?php }
}?>>New Mexico</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "New York");
if ("New York") {?>selected<?php }
}?>>New York</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "North Carolina");
if ("North Carolina") {?>selected<?php }
}?>>North Carolina</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "North Dakota");
if ("North Dakota") {?>selected<?php }
}?>>North Dakota</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Ohio");
if ("Ohio") {?>selected<?php }
}?>>Ohio</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Oklahoma");
if ("Oklahoma") {?>selected<?php }
}?>>Oklahoma</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Oregon");
if ("Oregon") {?>selected<?php }
}?>>Oregon</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Pennsylvania");
if ("Pennsylvania") {?>selected<?php }
}?>>Pennsylvania</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Rhode Island");
if ("Rhode Island") {?>selected<?php }
}?>>Rhode Island</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "South Carolina");
if ("South Carolina") {?>selected<?php }
}?>>South Carolina</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "South Dakota");
if ("South Dakota") {?>selected<?php }
}?>>South Dakota</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Tennessee");
if ("Tennessee") {?>selected<?php }
}?>>Tennessee</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Texas");
if ("Texas") {?>selected<?php }
}?>>Texas</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Utah");
if ("Utah") {?>selected<?php }
}?>>Utah</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Vermont");
if ("Vermont") {?>selected<?php }
}?>>Vermont</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Virginia");
if ("Virginia") {?>selected<?php }
}?>>Virginia</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Washington");
if ("Washington") {?>selected<?php }
}?>>Washington</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "West Virginia");
if ("West Virginia") {?>selected<?php }
}?>>West Virginia</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Wisconsin");
if ("Wisconsin") {?>selected<?php }
}?>>Wisconsin</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Wyoming");
if ("Wyoming") {?>selected<?php }
}?>>Wyoming</option>
                    <option <?php if (isset($_smarty_tpl->tpl_vars['state']->value)) {
$_smarty_tpl->_assignInScope('state', "Other Country");
if ("Other Country") {?>selected<?php }
}?>>Other Country</option>
                </select>
            </div>

    <div class="form-group">

        <label for="zip">Zip Code</label>
        <input type="text" class="form-control col-4" id="zip" name="zip" placeholder="" pattern="[0-9][0-9][0-9][0-9][0-9]" required
                <?php if (isset($_smarty_tpl->tpl_vars['zip']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
"<?php }?>/>

    </div>

    <div class="form-group">

        <label for="country">Country</label>
        <input type="text" class="form-control col-4" id="country" name="country" placeholder="" required
                <?php if (isset($_smarty_tpl->tpl_vars['country']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
"<?php }?>/>

    </div>

    <div class="form-group">

        <label for="phone">Phone Number (Format: xxx-xxx-xxxx)</label>
        <input type="text" class="form-control col-4" id="phone" name="phone" placeholder="" pattern="[0-9][0-9][0-9][-][0-9][0-9][0-9][-][0-9][0-9][0-9][0-9]" required
                <?php if (isset($_smarty_tpl->tpl_vars['phone']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"<?php }?>/>

    </div>

    <div class="form-group">

        <label for="email">Email Address</label>
        <input type="email" class="form-control col-4" id="email" name="email" placeholder="" required
                <?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"<?php }?>/>

        <div class="text-left mt-4">
            <button class="btn btn-primary" type="submit">Add</button>
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
