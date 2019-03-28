<?php
/* Smarty version 3.1.30, created on 2018-05-03 23:35:44
  from "/var/www/html/templates/sponsor-profile-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebd51082ba28_99682686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0283b8a80745e83bc6cee09e6bb85b83a7d84e' => 
    array (
      0 => '/var/www/html/templates/sponsor-profile-page.tpl',
      1 => 1525404942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/sponsor-navbar.tpl' => 1,
  ),
),false)) {
function content_5aebd51082ba28_99682686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sponsor Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/presentation-page.css" rel="stylesheet" type="text/css"
</head>

<body>
<!---->

<?php $_smarty_tpl->_subTemplateRender("file:templates/sponsor-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3 p-0">
            <h2 class="m-3">Sponsor Profile</h2>
        </div>
        <div class="container">
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                        <label class="control-label col-sm-6" for="image">Image Upload:</label>

                        <input type="file" class="form-control" name="photo" required>
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <h3>Personal Information</h3>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-5 bg-dark sticky-footer" style="width: 100%;">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Burkina's Promise 2018</p>
    </div>
    <!-- /.container -->
</footer>
<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
