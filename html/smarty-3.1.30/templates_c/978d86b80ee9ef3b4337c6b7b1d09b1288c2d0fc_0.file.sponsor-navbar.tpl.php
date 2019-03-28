<?php
/* Smarty version 3.1.30, created on 2018-04-26 03:19:07
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\sponsor-navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1452b2aa628_60046849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978d86b80ee9ef3b4337c6b7b1d09b1288c2d0fc' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\sponsor-navbar.tpl',
      1 => 1524712744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/logout-modal.tpl' => 1,
  ),
),false)) {
function content_5ae1452b2aa628_60046849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
        <a href="sponsor-page.php" class=""><img src="images/navlogo2.png" style="width: 80px; height: 60px; margin-right: 20pt;></a>
    <a class="navbar-brand" href="accedes-page.php"></a>
        <h6 class="text-center text-white">Sponsor Page</h6>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="margin-left: 220px;" id="navbarResponsive">
            <ul class="navbar-nav nav" style="margin-left: 100px;">
                <li class="nav-item active">
                    <a class="nav-link" href="sponsor-page.php" style="padding-left: 50px;">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="unsponsored-page.php">Unsponsored Children</a>
                </li>
                <?php if (($_smarty_tpl->tpl_vars['user']->value->isSponsor())) {?>
                <li class="nav-item">
                    <a class="nav-link" href="sponsor-profile-page.php">Profile</a>
                </li>
                <?php }?>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
                <li class="nav-item text-right" style="margin-left: 400px;">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php $_smarty_tpl->_subTemplateRender("file:templates/logout-modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
