<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\tour.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac2da2e3_86820871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '206163e7d2adf12db6902b5fd51611e969ed4491' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\tour.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac2da2e3_86820871 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tourModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo __('help');?>
</h5>
                <button type="button" class="opc-header-btn" data-toggle="tooltip" data-dismiss="modal"
                        data-placement="bottom">
                    <i class="fa fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <p><?php echo __('noteInfoInGuide');?>
</p>
                <div class="card" onclick="opc.tutorial.startTour(0)">
                    <div class="card-header"><?php echo __('generalIntroduction');?>
</div>
                    <div class="card-body"><?php echo __('getToKnowComposer');?>
</div>
                </div>
                <div class="card" onclick="opc.tutorial.startTour(1)">
                    <div class="card-header"><?php echo __('animation');?>
</div>
                    <div class="card-body"><?php echo __('noteMovementOnPage');?>
</div>
                </div>
                <div class="card" onclick="opc.tutorial.startTour(2)">
                    <div class="card-header"><?php echo __('templates');?>
</div>
                    <div class="card-body"><?php echo __('noteSaveAsTemplate');?>
</div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
