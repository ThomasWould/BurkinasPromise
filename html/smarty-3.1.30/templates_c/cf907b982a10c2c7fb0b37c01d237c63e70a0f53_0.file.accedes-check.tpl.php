<?php
/* Smarty version 3.1.30, created on 2018-03-22 13:39:30
  from "C:\Apache24\htdocs\Burkinas Promise\public_html\templates\accedes-check.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab3b212cbe885_38001224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf907b982a10c2c7fb0b37c01d237c63e70a0f53' => 
    array (
      0 => 'C:\\Apache24\\htdocs\\Burkinas Promise\\public_html\\templates\\accedes-check.tpl',
      1 => 1521467923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab3b212cbe885_38001224 (Smarty_Internal_Template $_smarty_tpl) {
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
