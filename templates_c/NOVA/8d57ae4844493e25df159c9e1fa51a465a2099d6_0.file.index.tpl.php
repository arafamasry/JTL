<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:03
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c124538ae195_40755300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d57ae4844493e25df159c9e1fa51a465a2099d6' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\index.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:productlist/item_list.tpl' => 1,
    'file:productlist/item_box.tpl' => 1,
    'file:snippets/extension.tpl' => 1,
    'file:productdetails/details.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_60c124538ae195_40755300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145104535660c1245388a836_29251872', 'productdetails-index');
?>

<?php }
/* {block 'productdetails-index-include-header'} */
class Block_23106048160c1245388d6e9_59241252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-index-include-header'} */
/* {block 'productdetails-index-include-item-list'} */
class Block_69660193360c124538982e4_57206165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include-item-list'} */
/* {block 'productdetails-index-include'} */
class Block_180454004360c12453899fb8_74104622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'productdetails-index-include'} */
/* {block 'productdetails-index-include-extension'} */
class Block_119070347360c1245389f973_67261327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productdetails-index-include-extension'} */
/* {block 'productdetails-index-include-details'} */
class Block_61214947660c124538a0907_47443792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productdetails-index-include-details'} */
/* {block 'productdetails-index-result-wrapper'} */
class Block_33913978060c1245389b913_18114229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="result-wrapper" data-wrapper="true" itemprop="mainEntity" itemscope itemtype="http://schema.org/Product">
                    <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119070347360c1245389f973_67261327', 'productdetails-index-include-extension', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61214947660c124538a0907_47443792', 'productdetails-index-include-details', $this->tplIndex);
?>

                </div>
            <?php
}
}
/* {/block 'productdetails-index-result-wrapper'} */
/* {block 'productdetails-index-content'} */
class Block_149290584160c12453894708_25723703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value && (isset($_smarty_tpl->tpl_vars['listStyle']->value)) && ($_smarty_tpl->tpl_vars['listStyle']->value === 'list' || $_smarty_tpl->tpl_vars['listStyle']->value === 'gallery')) {?>
            <?php if ($_smarty_tpl->tpl_vars['listStyle']->value === 'list') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'list');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69660193360c124538982e4_57206165', 'productdetails-index-include-item-list', $this->tplIndex);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['listStyle']->value === 'gallery') {?>
                <?php $_smarty_tpl->_assignInScope('tplscope', 'gallery');?>
                <?php $_smarty_tpl->_assignInScope('class', 'thumbnail');?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180454004360c12453899fb8_74104622', 'productdetails-index-include', $this->tplIndex);
?>

            <?php }?>
        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33913978060c1245389b913_18114229', 'productdetails-index-result-wrapper', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'productdetails-index-content'} */
/* {block 'productdetails-include-footer'} */
class Block_9704949460c124538a4403_86804909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-include-footer'} */
/* {block 'productdetails-index'} */
class Block_145104535660c1245388a836_29251872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-index' => 
  array (
    0 => 'Block_145104535660c1245388a836_29251872',
  ),
  'productdetails-index-include-header' => 
  array (
    0 => 'Block_23106048160c1245388d6e9_59241252',
  ),
  'productdetails-index-content' => 
  array (
    0 => 'Block_149290584160c12453894708_25723703',
  ),
  'productdetails-index-include-item-list' => 
  array (
    0 => 'Block_69660193360c124538982e4_57206165',
  ),
  'productdetails-index-include' => 
  array (
    0 => 'Block_180454004360c12453899fb8_74104622',
  ),
  'productdetails-index-result-wrapper' => 
  array (
    0 => 'Block_33913978060c1245389b913_18114229',
  ),
  'productdetails-index-include-extension' => 
  array (
    0 => 'Block_119070347360c1245389f973_67261327',
  ),
  'productdetails-index-include-details' => 
  array (
    0 => 'Block_61214947660c124538a0907_47443792',
  ),
  'productdetails-include-footer' => 
  array (
    0 => 'Block_9704949460c124538a4403_86804909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23106048160c1245388d6e9_59241252', 'productdetails-index-include-header', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149290584160c12453894708_25723703', 'productdetails-index-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9704949460c124538a4403_86804909', 'productdetails-include-footer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-index'} */
}
