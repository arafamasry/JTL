<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:09
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033dd120f8_58506368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d89e0f4ec14749f08a5d660ad946e49feb3e93' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\footer.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/productlist_page_nav.tpl' => 1,
  ),
),false)) {
function content_60c2033dd120f8_58506368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20338240460c2033dd0f6e0_16007671', 'productlist-footer');
?>

<?php }
/* {block 'productlist-footer-include-productlist-page-nav'} */
class Block_99228981760c2033dd10bd7_52305647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/productlist_page_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navid'=>'footer','hrTop'=>true), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-footer-include-productlist-page-nav'} */
/* {block 'productlist-footer'} */
class Block_20338240460c2033dd0f6e0_16007671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-footer' => 
  array (
    0 => 'Block_20338240460c2033dd0f6e0_16007671',
  ),
  'productlist-footer-include-productlist-page-nav' => 
  array (
    0 => 'Block_99228981760c2033dd10bd7_52305647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('Suchergebnisse', $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults(false));?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99228981760c2033dd10bd7_52305647', 'productlist-footer-include-productlist-page-nav', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-footer'} */
}
