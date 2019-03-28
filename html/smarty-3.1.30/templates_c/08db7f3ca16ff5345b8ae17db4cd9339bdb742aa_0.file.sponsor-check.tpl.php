<?php
/* Smarty version 3.1.30, created on 2018-04-12 02:03:50
  from "/var/www/html/templates/sponsor-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acef6c673a241_25471166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08db7f3ca16ff5345b8ae17db4cd9339bdb742aa' => 
    array (
      0 => '/var/www/html/templates/sponsor-check.tpl',
      1 => 1521467923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acef6c673a241_25471166 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php echo header("Location:index.php");?>

<?php } elseif (!$_smarty_tpl->tpl_vars['user']->value->isSponsor()) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->isAccedes()) {?>
        <?php echo header("Location:accedes-page.php");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
        <?php echo header("Location:sponsor-page.php");?>

    <?php }
}
}
}
