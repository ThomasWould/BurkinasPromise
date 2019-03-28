<?php
/* Smarty version 3.1.30, created on 2018-03-27 21:13:11
  from "/var/www/html/templates/accedes-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abaec273fb352_44957624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0833a6b2d73b16bc8220c7fb120665b4c874afe2' => 
    array (
      0 => '/var/www/html/templates/accedes-check.tpl',
      1 => 1521467923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abaec273fb352_44957624 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php echo header("Location:index.php");?>

<?php } elseif (!$_smarty_tpl->tpl_vars['user']->value->isAccedes()) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
        <?php echo header("Location:admin-page.php");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->isSponsor()) {?>
        <?php echo header("Location:sponsor-page.php");?>

    <?php }
}
}
}
