<?php
/* Smarty version 3.1.30, created on 2018-05-04 01:14:06
  from "/var/www/html/templates/sponsor-page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebec1eeb27c9_67868212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0b9e13621d07fd3c7dbb6f6cf8c75dec9ba56a' => 
    array (
      0 => '/var/www/html/templates/sponsor-page.tpl',
      1 => 1525410844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/sponsor-navbar.tpl' => 1,
  ),
),false)) {
function content_5aebec1eeb27c9_67868212 (Smarty_Internal_Template $_smarty_tpl) {
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
  </head>

  <body>
    <!---->

    <?php $_smarty_tpl->_subTemplateRender("file:templates/sponsor-navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 p-0">
          <h1 class="m-3">Home</h1>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'sponsorData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsorData']->value) {
?>
          <p class="border-bottom"></p>
          <div class="list-group">
            <a href="child-profile-page.php?id=<?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["child_id"];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["first_name"];?>
 <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["last_name"];?>
</a>

          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/sponsor-child1.jpg" alt="Child example">
              </div>

              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/sponsor-child3.jpg" alt="Child example">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'sponsorData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sponsorData']->value) {
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="child-profile-page.php?id=<?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["child_id"];?>
"><img width="297" height="170" class="card-img-top" src="images/<?php echo $_smarty_tpl->tpl_vars['sponsorData']->value["photo"];?>
" alt="Child example"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href='child-profile-page.php?id=<?php echo $_smarty_tpl->tpl_vars['sponsorData']->value['child_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['sponsorData']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['sponsorData']->value['last_name'];?>
</a>
                  </h4>
                  <p class="card-text"></p>
                </div>
                
                
              </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
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
