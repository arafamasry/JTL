<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:49
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\item_slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d98cf226_83706806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a083be1384a5c43ef401296516488a6ec7e25f1' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\item_slider.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/price.tpl' => 1,
  ),
),false)) {
function content_60c117d98cf226_83706806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111920278260c117d98bca55_96912277', 'productlist-item-slider');
?>

<?php }
/* {block 'productlist-item-slider-image'} */
class Block_212836632360c117d98c1817_47323575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['Artikel']->value,'square'=>false,'srcSize'=>'sm','class'=>'product-image'), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-item-slider-image'} */
/* {block 'productlist-item-slider-link'} */
class Block_113979867060c117d98bd156_57167068 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin147->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="item-slider productbox-image square square-image">
                <div class="inner">
                    <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut))) {?>
                        <?php $_smarty_tpl->_assignInScope('alt', htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut),60 )), ENT_QUOTES, 'utf-8', true));?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('alt', $_smarty_tpl->tpl_vars['Artikel']->value->cName);?>
                    <?php }?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212836632360c117d98c1817_47323575', 'productlist-item-slider-image', $this->tplIndex);
?>

                    <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>
                        <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal;?>
">
                        <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                    <?php }?>
                </div>
            </div>
        <?php $_block_repeat=false;
echo $_block_plugin147->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productlist-item-slider-link'} */
/* {block 'productlist-item-slider-caption-bundle'} */
class Block_197518647760c117d98c79c8_73746141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->fAnzahl_stueckliste;?>
x
                        <?php
}
}
/* {/block 'productlist-item-slider-caption-bundle'} */
/* {block 'productlist-item-slider-caption-short-desc'} */
class Block_70750360860c117d98c5334_54907724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin148->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <span class="item-slider-desc text-clamp-2">
                    <?php if ((isset($_smarty_tpl->tpl_vars['showPartsList']->value)) && $_smarty_tpl->tpl_vars['showPartsList']->value === true && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fAnzahl_stueckliste))) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197518647760c117d98c79c8_73746141', 'productlist-item-slider-caption-bundle', $this->tplIndex);
?>

                    <?php }?>
                    <span <?php if ($_smarty_tpl->tpl_vars['tplscope']->value !== 'box') {?>itemprop="name"<?php }?>><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung;?>
</span>
                </span>
            <?php $_block_repeat=false;
echo $_block_plugin148->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-item-slider-caption-short-desc'} */
/* {block 'productlist-item-slider-include-rating'} */
class Block_113632094360c117d98cc655_33723803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <small class="item-slider-rating"><?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung,'link'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), 0, false);
?></small>
                <?php
}
}
/* {/block 'productlist-item-slider-include-rating'} */
/* {block 'productlist-item-slider-include-price'} */
class Block_131140470360c117d98cdd18_52412486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="item-slider-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'tplscope'=>$_smarty_tpl->tpl_vars['tplscope']->value), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'productlist-item-slider-include-price'} */
/* {block 'productlist-item-slider-caption'} */
class Block_16126462560c117d98c4e47_51165370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70750360860c117d98c5334_54907724', 'productlist-item-slider-caption-short-desc', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['tplscope']->value === 'box') {?>
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113632094360c117d98cc655_33723803', 'productlist-item-slider-include-rating', $this->tplIndex);
?>

            <?php }?>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131140470360c117d98cdd18_52412486', 'productlist-item-slider-include-price', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'productlist-item-slider-caption'} */
/* {block 'productlist-item-slider'} */
class Block_111920278260c117d98bca55_96912277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-item-slider' => 
  array (
    0 => 'Block_111920278260c117d98bca55_96912277',
  ),
  'productlist-item-slider-link' => 
  array (
    0 => 'Block_113979867060c117d98bd156_57167068',
  ),
  'productlist-item-slider-image' => 
  array (
    0 => 'Block_212836632360c117d98c1817_47323575',
  ),
  'productlist-item-slider-caption' => 
  array (
    0 => 'Block_16126462560c117d98c4e47_51165370',
  ),
  'productlist-item-slider-caption-short-desc' => 
  array (
    0 => 'Block_70750360860c117d98c5334_54907724',
  ),
  'productlist-item-slider-caption-bundle' => 
  array (
    0 => 'Block_197518647760c117d98c79c8_73746141',
  ),
  'productlist-item-slider-include-rating' => 
  array (
    0 => 'Block_113632094360c117d98cc655_33723803',
  ),
  'productlist-item-slider-include-price' => 
  array (
    0 => 'Block_131140470360c117d98cdd18_52412486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113979867060c117d98bd156_57167068', 'productlist-item-slider-link', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16126462560c117d98c4e47_51165370', 'productlist-item-slider-caption', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-item-slider'} */
}
