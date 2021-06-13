<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:23:48
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\consent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20454f1e5e9_44273259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bfdd79491436a1ad414567f982f409326014bbe' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\consent.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/model_list.tpl' => 1,
    'file:tpl_inc/model_detail.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c20454f1e5e9_44273259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['step']->value === 'overview') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/model_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['models']->value,'select'=>true,'edit'=>true,'search'=>true,'delete'=>true), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'detail') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/model_detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'select'=>true,'edit'=>true,'search'=>true,'delete'=>true,'save'=>true,'enable'=>true,'disable'=>true), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
