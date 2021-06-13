<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\blueprint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac247772_01496449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2954c836b703ebb858ac2c84f66863503b9b949' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\blueprint.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac247772_01496449 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blueprintModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('Save this Portlet as a blueprint');?>
</h5>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.createBlueprint()">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="blueprintName"><?php echo __('Blueprint name');?>
</label>
                        <input type="text" class="form-control" id="blueprintName" name="blueprintName"
                               value="Neue Vorlage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="btnBlueprintSave">
                        <?php echo __('Save');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
