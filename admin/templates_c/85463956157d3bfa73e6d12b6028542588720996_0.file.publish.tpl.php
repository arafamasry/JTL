<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\publish.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac102ab1_85637831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85463956157d3bfa73e6d12b6028542588720996' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\publish.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac102ab1_85637831 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1" id="publishModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('draftPublic');?>
</h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <form action="javascript:void(0);" onsubmit="opc.gui.publish()">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="draftName"><?php echo __('draftName');?>
</label>
                        <input type="text" class="form-control opc-control" id="draftName" name="draftName"
                               value="">
                    </div>
                    <div class="form-group">
                        <input type="radio" id="checkPublishNot" name="scheduleStrategy"
                               onchange="opc.gui.onChangePublishStrategy()">
                        <label for="checkPublishNot">
                            <?php echo __('publishNot');?>

                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="checkPublishNow" name="scheduleStrategy"
                               onchange="opc.gui.onChangePublishStrategy()">
                        <label for="checkPublishNow">
                            <?php echo __('publishImmediately');?>

                        </label>
                    </div>
                    <div style="display:flex;">
                        <div class="form-group" style="width:50%">
                            <input type="radio" id="checkPublishSchedule" name="scheduleStrategy"
                                   onchange="opc.gui.onChangePublishStrategy()">
                            <label for="checkPublishSchedule">
                                <?php echo __('selectDate');?>

                            </label>
                        </div>
                        <div class="form-group" style="width:50%">
                            <input type="checkbox" id="checkPublishInfinite"
                                   onchange="opc.gui.onChangePublishInfinite()">
                            <label for="checkPublishInfinite">
                                <?php echo __('indefinitePeriodOfTime');?>

                            </label>
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="form-group" style="width:50%;padding-right:16px">
                            <label for="publishFrom"><?php echo __('publicFrom');?>
</label>
                            <input type="text" class="form-control opc-control datetimepicker-input" id="publishFrom"
                                   name="publishFrom" data-toggle="datetimepicker" data-target="#publishFrom">
                        </div>
                        <div class="form-group" style="width:50%">
                            <label for="publishTo"><?php echo __('publicTill');?>
</label>
                            <input type="text" class="form-control opc-control datetimepicker-input" id="publishTo"
                                   name="publishTo" data-toggle="datetimepicker" data-target="#publishTo">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="opc-btn-secondary opc-small-btn" data-dismiss="modal"
                            id="btnCancelPublish">
                        <?php echo __('cancel');?>

                    </button>
                    <button type="submit" class="opc-btn-primary opc-small-btn" id="btnApplyPublish">
                        <?php echo __('apply');?>

                    </button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
