<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:11:14
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\preisverlauf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20162cd2382_73549077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f895c84045af2066b6c08f3a9ae07e4562db0be' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\preisverlauf.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c20162cd2382_73549077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('configurePriceFlow'),'cBeschreibung'=>__('configurePriceFlowDesc'),'cDokuURL'=>__('configurePriceFlowURL')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['oConfig_arr']->value,'name'=>'einstellen','a'=>'saveSettings','action'=>'preisverlauf.php','title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
