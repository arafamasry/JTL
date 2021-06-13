<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\blueprint_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac293442_05606281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd8e40133ea7ac4097794a35a04f4d5ab737923' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\blueprint_delete.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac293442_05606281 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintDeleteModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Delete Blueprint?');?>
</h5>
            </div>
            <div class="modal-body">
                <p>"<span id="blueprintDeleteTitle">FOO</span>"</p>
                <p><?php echo __('templateDeleteSure');?>
</p>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.deleteBlueprint()">
                <div class="modal-footer">
                    <input type="hidden" id="blueprintDeleteId" name="id" value="">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('delete');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
