<?php
/* Smarty version 3.1.30, created on 2018-03-27 21:10:55
  from "/var/www/html/templates/logout-modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abaeb9f2e9ac4_28118901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76622d3478974debe2fb5f4c6f6484eb71cb3b53' => 
    array (
      0 => '/var/www/html/templates/logout-modal.tpl',
      1 => 1520400941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abaeb9f2e9ac4_28118901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div><?php }
}
