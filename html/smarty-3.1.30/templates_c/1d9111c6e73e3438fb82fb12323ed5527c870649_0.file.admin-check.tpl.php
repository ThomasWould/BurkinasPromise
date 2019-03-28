<?php
/* Smarty version 3.1.30, created on 2018-03-19 22:14:48
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\admin-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab036589eef82_63255111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d9111c6e73e3438fb82fb12323ed5527c870649' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\admin-check.tpl',
      1 => 1521467923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab036589eef82_63255111 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['user']->value)) {?>
    <?php echo header("Location:index.php");?>

<?php } elseif (!$_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->isAccedes()) {?>
        <?php echo header("Location:accedes-page.php");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->isSponsor()) {?>
        <?php echo header("Location:sponsor-page.php");?>

    <?php }
}
}
}
