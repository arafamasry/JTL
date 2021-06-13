<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:06
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033ab251f1_03555658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '919cb5a66696ea63e57eacd1da7609072240c0b1' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\index.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:productlist/header.tpl' => 1,
    'file:snippets/product_slider.tpl' => 1,
    'file:productlist/item_list.tpl' => 1,
    'file:productlist/item_box.tpl' => 1,
    'file:productlist/footer.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_60c2033ab251f1_03555658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164178083860c2033ab05bc9_30477608', 'productlist-index');
?>

<?php }
/* {block 'productlist-index-include-header'} */
class Block_107583135560c2033ab062c5_38426592 extends Smarty_Internal_Block
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
/* {/block 'productlist-index-include-header'} */
/* {block 'productlist-index-include-productlist-header'} */
class Block_100846706160c2033ab08837_42548431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:productlist/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-index-include-productlist-header'} */
/* {block 'productlist-index-list-type'} */
class Block_35759118060c2033ab12959_23091379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <input type="hidden" id="product-list-type" value="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
            <?php
}
}
/* {/block 'productlist-index-list-type'} */
/* {block 'productlist-index-alert'} */
class Block_144529999060c2033ab13f95_36215215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"danger"));
$_block_repeat=true;
echo $_block_plugin18->render(array('variant'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getError();
$_block_repeat=false;
echo $_block_plugin18->render(array('variant'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productlist-index-alert'} */
/* {block 'productlist-index-include-product-slider'} */
class Block_85325944260c2033ab17463_38751105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_bestseller'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestseller','section'=>'global','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-top-products','productlist'=>$_smarty_tpl->tpl_vars['oBestseller_arr']->value,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, false);
?>
                <?php
}
}
/* {/block 'productlist-index-include-product-slider'} */
/* {block 'productlist-index-include-item-list'} */
class Block_191679851260c2033ab1fd55_09837659 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'productlist-index-include-item-list'} */
/* {block 'productlist-index-include-item-box'} */
class Block_202787107260c2033ab20cc6_29380871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>
                                <?php
}
}
/* {/block 'productlist-index-include-item-box'} */
/* {block 'productlist-index-products'} */
class Block_84258599460c2033ab19263_36326883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) > 0) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_products'),$_smarty_tpl ) );?>

                <?php $_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"));
$_block_repeat=true;
echo $_block_plugin19->render(array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts(), 'Artikel');
$_smarty_tpl->tpl_vars['Artikel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikel']->value) {
$_smarty_tpl->tpl_vars['Artikel']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['grid']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridmd']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridmd']->value;
}
$_prefixVariable6=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridsm']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridsm']->value;
}
$_prefixVariable7=ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridxl']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridxl']->value;
}
$_prefixVariable8=ob_get_clean();
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>$_prefixVariable5,'md'=>$_prefixVariable6,'sm'=>$_prefixVariable7,'xl'=>$_prefixVariable8,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"));
$_block_repeat=true;
echo $_block_plugin20->render(array('cols'=>$_prefixVariable5,'md'=>$_prefixVariable6,'sm'=>$_prefixVariable7,'xl'=>$_prefixVariable8,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if ($_smarty_tpl->tpl_vars['style']->value === 'list' && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191679851260c2033ab1fd55_09837659', 'productlist-index-include-item-list', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202787107260c2033ab20cc6_29380871', 'productlist-index-include-item-box', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin20->render(array('cols'=>$_prefixVariable5,'md'=>$_prefixVariable6,'sm'=>$_prefixVariable7,'xl'=>$_prefixVariable8,'class'=>"product-wrapper",'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_block_plugin19->render(array('class'=>"product-list layout-".((string)$_smarty_tpl->tpl_vars['style']->value),'id'=>"product-list",'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'productlist-index-products'} */
/* {block 'productlist-index-include-productlist-footer'} */
class Block_100826700460c2033ab22749_95160873 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:productlist/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-index-include-productlist-footer'} */
/* {block 'productlist-index-content'} */
class Block_28122760c2033ab08331_37242334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="result-wrapper" data-wrapper="true">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100846706160c2033ab08837_42548431', 'productlist-index-include-productlist-header', $this->tplIndex);
?>

                        <?php if ((!empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && $_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung'] == 1) || (empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && ((!empty($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung) && $_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung == 1) || (empty($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung) && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung_stdansicht'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung_stdansicht'] == 1)))) {?>
                <?php $_smarty_tpl->_assignInScope('style', 'list');?>
                <?php $_smarty_tpl->_assignInScope('grid', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridmd', '12');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('style', 'gallery');?>
                <?php $_smarty_tpl->_assignInScope('grid', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridsm', '6');?>
                <?php $_smarty_tpl->_assignInScope('gridmd', '4');?>
                <?php $_smarty_tpl->_assignInScope('gridxl', '3');?>
                <?php if (!$_smarty_tpl->tpl_vars['bExclusive']->value || empty($_smarty_tpl->tpl_vars['boxes']->value['left'])) {?>
                    <?php $_smarty_tpl->_assignInScope('gridmd', '4');?>
                <?php }?>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35759118060c2033ab12959_23091379', 'productlist-index-list-type', $this->tplIndex);
?>


            <?php if (!empty($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getError())) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144529999060c2033ab13f95_36215215', 'productlist-index-alert', $this->tplIndex);
?>

            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['oBestseller_arr']->value)) && count($_smarty_tpl->tpl_vars['oBestseller_arr']->value) > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85325944260c2033ab17463_38751105', 'productlist-index-include-product-slider', $this->tplIndex);
?>

            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84258599460c2033ab19263_36326883', 'productlist-index-products', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100826700460c2033ab22749_95160873', 'productlist-index-include-productlist-footer', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'productlist-index-content'} */
/* {block 'productlist-index-include-footer'} */
class Block_1560146160c2033ab238a0_77139032 extends Smarty_Internal_Block
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
/* {/block 'productlist-index-include-footer'} */
/* {block 'productlist-index'} */
class Block_164178083860c2033ab05bc9_30477608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-index' => 
  array (
    0 => 'Block_164178083860c2033ab05bc9_30477608',
  ),
  'productlist-index-include-header' => 
  array (
    0 => 'Block_107583135560c2033ab062c5_38426592',
  ),
  'productlist-index-content' => 
  array (
    0 => 'Block_28122760c2033ab08331_37242334',
  ),
  'productlist-index-include-productlist-header' => 
  array (
    0 => 'Block_100846706160c2033ab08837_42548431',
  ),
  'productlist-index-list-type' => 
  array (
    0 => 'Block_35759118060c2033ab12959_23091379',
  ),
  'productlist-index-alert' => 
  array (
    0 => 'Block_144529999060c2033ab13f95_36215215',
  ),
  'productlist-index-include-product-slider' => 
  array (
    0 => 'Block_85325944260c2033ab17463_38751105',
  ),
  'productlist-index-products' => 
  array (
    0 => 'Block_84258599460c2033ab19263_36326883',
  ),
  'productlist-index-include-item-list' => 
  array (
    0 => 'Block_191679851260c2033ab1fd55_09837659',
  ),
  'productlist-index-include-item-box' => 
  array (
    0 => 'Block_202787107260c2033ab20cc6_29380871',
  ),
  'productlist-index-include-productlist-footer' => 
  array (
    0 => 'Block_100826700460c2033ab22749_95160873',
  ),
  'productlist-index-include-footer' => 
  array (
    0 => 'Block_1560146160c2033ab238a0_77139032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107583135560c2033ab062c5_38426592', 'productlist-index-include-header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28122760c2033ab08331_37242334', 'productlist-index-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560146160c2033ab238a0_77139032', 'productlist-index-include-footer', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-index'} */
}
