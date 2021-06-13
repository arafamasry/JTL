<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:45:36
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\benutzer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11a602819b6_08179293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa0efc33072bcb5c50eae6c9b65bbc131452557' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\benutzer.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/benutzer_uebersicht.tpl' => 1,
    'file:tpl_inc/benutzer_bearbeiten.tpl' => 1,
    'file:tpl_inc/gruppe_bearbeiten.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c11a602819b6_08179293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['action']->value == '' || $_smarty_tpl->tpl_vars['action']->value === 'account_view' || $_smarty_tpl->tpl_vars['action']->value === 'group_view') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/benutzer_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['action']->value === 'account_add' || $_smarty_tpl->tpl_vars['action']->value === 'account_edit') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/benutzer_bearbeiten.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['action']->value === 'group_add' || $_smarty_tpl->tpl_vars['action']->value === 'group_edit') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/gruppe_bearbeiten.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
