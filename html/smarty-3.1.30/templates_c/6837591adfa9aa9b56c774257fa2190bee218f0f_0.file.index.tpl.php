<?php
/* Smarty version 3.1.30, created on 2018-03-06 03:43:32
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e0e64ad1523_43846582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6837591adfa9aa9b56c774257fa2190bee218f0f' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\index.tpl',
      1 => 1519883149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9e0e64ad1523_43846582 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this templates-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this templates-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
      <form method="POST" action="index.php">
        <div class="form-group">
          <label for="email">Email address</label>
          <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" id="password" type="password" placeholder="Password" name="password">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox">Remember Password</label>
          </div>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Login"/>
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="register.php">Register an Account</a>
        <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>
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
</body>

</html>
<?php }
}
