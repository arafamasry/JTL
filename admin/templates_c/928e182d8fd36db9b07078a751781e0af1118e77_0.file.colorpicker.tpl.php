<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:50:34
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\snippets\colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20a9ae11d76_43641680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928e182d8fd36db9b07078a751781e0af1118e77' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\snippets\\colorpicker.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20a9ae11d76_43641680 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-group" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group">
    <input type="text" class="form-control colorpicker-input"
           name="<?php echo $_smarty_tpl->tpl_vars['cpName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cpValue']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
"
           autocomplete="off">
    <span class="input-group-append">
        <span class="input-group-text colorpicker-input-addon">
            <i></i>
        </span>
    </span>
</div>
<?php echo '<script'; ?>
>
    $('#<?php echo $_smarty_tpl->tpl_vars['cpID']->value;?>
-group').colorpicker({
        format: 'hex',
        fallbackColor: '#FFF',
        autoInputFallback: false
    });
<?php echo '</script'; ?>
>
<?php }
}
