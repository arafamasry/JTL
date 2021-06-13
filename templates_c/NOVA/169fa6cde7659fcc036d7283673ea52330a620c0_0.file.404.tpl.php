<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:26
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\page\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119a201d163_15043751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '169fa6cde7659fcc036d7283673ea52330a620c0' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\page\\404.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/sitemap.tpl' => 1,
  ),
),false)) {
function content_60c119a201d163_15043751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196687129060c119a201b905_07621058', 'page-404');
?>

<?php }
/* {block 'page-404-include-sitemap'} */
class Block_208181382160c119a201bff3_88732131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'page-404-include-sitemap'} */
/* {block 'page-404'} */
class Block_196687129060c119a201b905_07621058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-404' => 
  array (
    0 => 'Block_196687129060c119a201b905_07621058',
  ),
  'page-404-include-sitemap' => 
  array (
    0 => 'Block_208181382160c119a201bff3_88732131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="page-not-found">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208181382160c119a201bff3_88732131', 'page-404-include-sitemap', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'page-404'} */
}
