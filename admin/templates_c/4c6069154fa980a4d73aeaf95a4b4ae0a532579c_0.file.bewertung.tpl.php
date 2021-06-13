<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:43:28
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\bewertung.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c208f0064b11_60933414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6069154fa980a4d73aeaf95a4b4ae0a532579c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\bewertung.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/bewertung_uebersicht.tpl' => 1,
    'file:tpl_inc/bewertung_editieren.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c208f0064b11_60933414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'bewertung_editieren') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/bewertung_editieren.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
