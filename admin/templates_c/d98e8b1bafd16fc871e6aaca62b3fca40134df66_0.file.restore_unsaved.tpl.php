<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\restore_unsaved.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac31ad47_94536911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98e8b1bafd16fc871e6aaca62b3fca40134df66' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\restore_unsaved.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac31ad47_94536911 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="restoreUnsavedModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('restoreChanges');?>
</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" id="errorAlert">
                    <?php echo __('restoreUnsaved');?>

                </div>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.restoreUnsaved()">
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal"
                            onclick="opc.gui.noRestoreUnsaved()">
                        <?php echo __('noCurrent');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn">
                        <?php echo __('yesRestore');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
