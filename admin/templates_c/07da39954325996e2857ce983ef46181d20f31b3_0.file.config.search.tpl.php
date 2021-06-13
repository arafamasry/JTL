<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:20:55
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c122a7326833_15265320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07da39954325996e2857ce983ef46181d20f31b3' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.search.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c122a7326833_15265320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">&nbsp;</label>
    <input type="search" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
           <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['placeholder'])) {?>placeholder="&#xF002; <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['placeholder'];?>
"<?php }?>>
</div><?php }
}
