<?php
/* Smarty version 3.1.30, created on 2018-04-10 15:08:46
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\accedes-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5accd37e3b3117_85947776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e44337875aa94fbee3747683ae1e6a83d96a3ce6' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\accedes-check.tpl',
      1 => 1521904216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5accd37e3b3117_85947776 (Smarty_Internal_Template $_smarty_tpl) {
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
