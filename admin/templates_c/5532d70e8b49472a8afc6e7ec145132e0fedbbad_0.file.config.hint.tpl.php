<?php
/* Smarty version 3.1.39, created on 2021-06-10 11:56:20
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.hint.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e1c4691093_05046299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5532d70e8b49472a8afc6e7ec145132e0fedbbad' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.hint.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e1c4691093_05046299 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['propdesc']->value['class'];?>
" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['text'];?>

</div><?php }
}
