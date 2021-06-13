<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:43:53
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c209096c7fa2_63837073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe878d12ab0dc460857031ae208b9d710347146f' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\links.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/links_uebersicht.tpl' => 1,
    'file:tpl_inc/links_neue_linkgruppe.tpl' => 1,
    'file:tpl_inc/links_neuer_link.tpl' => 1,
    'file:tpl_inc/links_loesch_confirm.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c209096c7fa2_63837073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'uebersicht') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neue Linkgruppe') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neue_linkgruppe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'neuer Link') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_neuer_link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'linkgruppe_loeschen_confirm') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_loesch_confirm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
