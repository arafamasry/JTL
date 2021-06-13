<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:49
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\product_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d9490652_99114897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd03a8c0369fbda57170c1e1e7152804a1a640a81' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\product_slider.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/slider_items.tpl' => 2,
  ),
),false)) {
function content_60c117d9490652_99114897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151392658160c117d9475e30_08480245', 'snippets-product-slider');
?>

<?php }
/* {block 'snippets-product-slider-box-title'} */
class Block_132803646860c117d947d7e5_29752495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="productlist-filter-headline"><?php echo $_smarty_tpl->tpl_vars['title']->value;
if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin142 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin142, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))));
$_block_repeat=true;
echo $_block_plugin142->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fa fa-arrow-circle-right"></i><?php $_block_repeat=false;
echo $_block_plugin142->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>((string)$_smarty_tpl->tpl_vars['moreTitle']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></div><?php
}
}
/* {/block 'snippets-product-slider-box-title'} */
/* {block 'product-box-slider-class'} */
class Block_30517511860c117d9481939_62045173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
box-slider<?php
}
}
/* {/block 'product-box-slider-class'} */
/* {block 'snippets-product-slider-box-products'} */
class Block_102673589060c117d9480b96_54206822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-mb slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-box <?php if (count($_smarty_tpl->tpl_vars['productlist']->value) < 3) {?>slider-no-preview<?php }?>"data-slick-type="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30517511860c117d9481939_62045173', 'product-box-slider-class', $this->tplIndex);
?>
"><?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, false);
?></div><?php
}
}
/* {/block 'snippets-product-slider-box-products'} */
/* {block 'snippets-product-slider-box'} */
class Block_152438907060c117d94796c4_42638113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
echo " box box-slider";
}
$_prefixVariable82=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {
echo " ";
echo (string)$_smarty_tpl->tpl_vars['class']->value;
}
$_prefixVariable83=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {
echo (string)$_smarty_tpl->tpl_vars['id']->value;
}
$_prefixVariable84=ob_get_clean();
$_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('class'=>$_prefixVariable82.$_prefixVariable83,'id'=>$_prefixVariable84));
$_block_repeat=true;
echo $_block_plugin141->render(array('class'=>$_prefixVariable82.$_prefixVariable83,'id'=>$_prefixVariable84), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132803646860c117d947d7e5_29752495', 'snippets-product-slider-box-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102673589060c117d9480b96_54206822', 'snippets-product-slider-box-products', $this->tplIndex);
$_block_repeat=false;
echo $_block_plugin141->render(array('class'=>$_prefixVariable82.$_prefixVariable83,'id'=>$_prefixVariable84), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-box'} */
/* {block 'snippets-product-slider-other-title'} */
class Block_73878729460c117d9486620_73440477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?><div class="container slick-slider-other-container"><?php }?><div class="hr-sect h2"><?php if (!empty($_smarty_tpl->tpl_vars['moreLink']->value)) {
$_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)));
$_block_repeat=true;
echo $_block_plugin143->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo $_block_plugin143->render(array('class'=>"text-decoration-none-util",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></div><?php if ((($tmp = $_smarty_tpl->tpl_vars['titleContainer']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?></div><?php }
}
}
/* {/block 'snippets-product-slider-other-title'} */
/* {block 'product-slider-class'} */
class Block_125436250660c117d948d1c5_92469741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product-slider-class'} */
/* {block 'snippets-product-slider-other-products'} */
class Block_80552633160c117d948ae27_92647092 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slick-type-half";
} else {
echo "slick-type-product";
}
$_prefixVariable85=ob_get_clean();
ob_start();
if (count($_smarty_tpl->tpl_vars['productlist']->value) < 3) {
echo "slider-no-preview";
}
$_prefixVariable86=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'half') {
echo "slider-half";
} else {
echo "product-slider";
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125436250660c117d948d1c5_92469741', 'product-slider-class', $this->tplIndex);
$_prefixVariable87=ob_get_clean();
$_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable85." ".$_prefixVariable86,'data'=>array("slick-type"=>$_prefixVariable87)));
$_block_repeat=true;
echo $_block_plugin144->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable85." ".$_prefixVariable86,'data'=>array("slick-type"=>$_prefixVariable87)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['productlist']->value,'type'=>'product'), 0, true);
$_block_repeat=false;
echo $_block_plugin144->render(array('class'=>"slick-lazy slick-smooth-loading carousel carousel-arrows-inside ".$_prefixVariable85." ".$_prefixVariable86,'data'=>array("slick-type"=>$_prefixVariable87)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-product-slider-other-products'} */
/* {block 'snippets-product-slider-other'} */
class Block_178075109460c117d94834d8_66374380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slick-slider-other<?php if (!$_smarty_tpl->tpl_vars['isOPC']->value) {?> is-not-opc<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value)) && strlen($_smarty_tpl->tpl_vars['class']->value) > 0) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && strlen($_smarty_tpl->tpl_vars['id']->value) > 0) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73878729460c117d9486620_73440477', 'snippets-product-slider-other-title', $this->tplIndex);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80552633160c117d948ae27_92647092', 'snippets-product-slider-other-products', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'snippets-product-slider-other'} */
/* {block 'snippets-product-slider'} */
class Block_151392658160c117d9475e30_08480245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-product-slider' => 
  array (
    0 => 'Block_151392658160c117d9475e30_08480245',
  ),
  'snippets-product-slider-box' => 
  array (
    0 => 'Block_152438907060c117d94796c4_42638113',
  ),
  'snippets-product-slider-box-title' => 
  array (
    0 => 'Block_132803646860c117d947d7e5_29752495',
  ),
  'snippets-product-slider-box-products' => 
  array (
    0 => 'Block_102673589060c117d9480b96_54206822',
  ),
  'product-box-slider-class' => 
  array (
    0 => 'Block_30517511860c117d9481939_62045173',
  ),
  'snippets-product-slider-other' => 
  array (
    0 => 'Block_178075109460c117d94834d8_66374380',
  ),
  'snippets-product-slider-other-title' => 
  array (
    0 => 'Block_73878729460c117d9486620_73440477',
  ),
  'snippets-product-slider-other-products' => 
  array (
    0 => 'Block_80552633160c117d948ae27_92647092',
  ),
  'product-slider-class' => 
  array (
    0 => 'Block_125436250660c117d948d1c5_92469741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('isOPC', (($tmp = $_smarty_tpl->tpl_vars['isOPC']->value ?? null)===null||$tmp==='' ? false : $tmp));
if (count($_smarty_tpl->tpl_vars['productlist']->value) > 0) {
if (!(isset($_smarty_tpl->tpl_vars['tplscope']->value))) {
$_smarty_tpl->_assignInScope('tplscope', 'slider');
}
if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152438907060c117d94796c4_42638113', 'snippets-product-slider-box', $this->tplIndex);
} else {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178075109460c117d94834d8_66374380', 'snippets-product-slider-other', $this->tplIndex);
}
}
}
}
/* {/block 'snippets-product-slider'} */
}
