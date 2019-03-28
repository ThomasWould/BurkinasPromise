<?php
/* Smarty version 3.1.30, created on 2018-05-04 01:01:15
  from "/var/www/html/templates/child-profile-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebe91b3aa4a9_95558639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506e8453366d9251a26179fa27075fe5313b0925' => 
    array (
      0 => '/var/www/html/templates/child-profile-page.tpl',
      1 => 1525410071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/sponsor-navbar.tpl' => 1,
  ),
),false)) {
function content_5aebe91b3aa4a9_95558639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Child Profile Page</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/sponsor-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Page Content -->

    <div class="container">
      
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'sponsorData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsorData']->value) {
?>
          <div class="row">
        <div class="col-lg-3 p-0">
          <h3 class="m-3">Child Profile Page</h3>
          <p class="border-bottom"></p>
          <div class="list-group">
            
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="images/<?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["photo"];?>
" alt="Child Profile example">
            <div class="card-body">

              <h3 class="card-title"><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["first_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["last_name"];?>
</h3>
              <p class="card-text"></p>
            </div>
          </div>
          <!-- /.card -->
          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Child Information
            </div>
            <div class="card-body">
              <p>My fathers name is <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["fathers_first_name"];?>
</p>
              <p>My mothers name is <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["mothers_first_name"];?>
</p>
              <p>I have <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["number_of_brothers"];?>
 brother(s) and <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["number_of_sisters"];?>
 sister(s).</p>
              <hr>
              <p>I was born in <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["place_of_origin"];?>
.</p>
              <hr>
              <p>My birthday is <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["date_of_birth"];?>
!</p>
              <hr>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>


    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
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
</html>
<?php }
}
