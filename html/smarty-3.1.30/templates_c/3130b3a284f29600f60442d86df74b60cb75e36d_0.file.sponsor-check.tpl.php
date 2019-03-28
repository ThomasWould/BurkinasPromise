<?php
/* Smarty version 3.1.30, created on 2018-04-12 02:31:04
  from "C:\MAMP\htdocs\burkinaspromise\html\templates\sponsor-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acec4e8aa5d15_00200599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3130b3a284f29600f60442d86df74b60cb75e36d' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\burkinaspromise\\html\\templates\\sponsor-check.tpl',
      1 => 1521904216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acec4e8aa5d15_00200599 (Smarty_Internal_Template $_smarty_tpl) {
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
