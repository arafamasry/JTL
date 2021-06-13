<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac3cae67_68265476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77103e86aea6e6ca87c2ce9e25413ff906851ceb' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\tutorials.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac3cae67_68265476 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tutorials">
    <div id="tutBackdrop"></div>
    <div id="tutBackdrop2"></div>
    <div id="tutBackdrop3"></div>
    <div id="tutBox">
        <div id="tutboxHeader" class="modal-header">
            <h5 id="tutboxTitle">Hello</h5>
            <button type="button" class="opc-header-btn" onclick="opc.tutorial.stopTutorial()">
                <i class="fa fas fa-times"></i>
            </button>
        </div>
        <div id="tutboxContent">Text</div>
        <div id="tutboxFooter">
            <button type="button" id="tutboxNext" class="opc-btn-primary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goNextStep()">
                <span id="tutboxNextLabel">
                    <?php echo __('Next');?>

                    <i class="fas fa-chevron-right"></i>
                </span>
                <span id="tutboxDoneLabel" style="display: none">
                    <i class="fas fa-check"></i>
                    <?php echo __('Done');?>

                </span>
            </button>
            <button type="button" id="tutboxPrev" class="opc-btn-secondary opc-mini-btn opc-float-right"
                    onclick="opc.tutorial.goPrevStep()">
                <i class="fas fa-chevron-left"></i>
                <?php echo __('Back');?>

            </button>
        </div>
    </div>
</div><?php }
}
