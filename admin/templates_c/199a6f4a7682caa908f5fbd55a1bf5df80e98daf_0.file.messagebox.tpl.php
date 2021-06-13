<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\messagebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac3856c6_42574284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '199a6f4a7682caa908f5fbd55a1bf5df80e98daf' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\messagebox.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac3856c6_42574284 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="messageboxModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="messageboxAlert"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="opc-btn-primary opc-small-btn" data-dismiss="modal">
                    <?php echo __('OK');?>

                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
