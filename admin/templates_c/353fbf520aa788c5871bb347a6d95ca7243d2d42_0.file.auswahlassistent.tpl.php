<?php
/* Smarty version 3.1.39, created on 2021-06-11 15:46:00
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\auswahlassistent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c369185e47f3_18030221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '353fbf520aa788c5871bb347a6d95ca7243d2d42' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\auswahlassistent.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/auswahlassistent_gruppe.tpl' => 1,
    'file:tpl_inc/auswahlassistent_frage.tpl' => 1,
    'file:tpl_inc/auswahlassistent_uebersicht.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c369185e47f3_18030221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['step']->value === 'edit-group') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/auswahlassistent_gruppe.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['step']->value === 'edit-question') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/auswahlassistent_frage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/auswahlassistent_uebersicht.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
