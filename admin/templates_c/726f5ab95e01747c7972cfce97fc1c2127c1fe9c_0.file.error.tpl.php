<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:51:08
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\modals\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11bac1b86b6_93265123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726f5ab95e01747c7972cfce97fc1c2127c1fe9c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\modals\\error.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11bac1b86b6_93265123 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="errorModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorTitle"><?php echo __('error');?>
</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="errorAlert">
                    <?php echo __('somethingHappend');?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
