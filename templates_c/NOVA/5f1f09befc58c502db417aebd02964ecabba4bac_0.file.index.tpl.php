<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:48
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\page\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d8db8775_53481314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1f09befc58c502db417aebd02964ecabba4bac' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\page\\index.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:selectionwizard/index.tpl' => 1,
    'file:snippets/product_slider.tpl' => 1,
    'file:snippets/slider_items.tpl' => 1,
  ),
),false)) {
function content_60c117d8db8775_53481314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210568734860c117d8da2430_01593161', 'page-index');
?>

<?php }
/* {block 'page-index-include-selection-wizard'} */
class Block_208456059760c117d8da2b49_91622561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'page-index-include-selection-wizard'} */
/* {block 'page-index-include-product-slider'} */
class Block_187462740760c117d8dae378_55749258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('class'=>"product-slider-wrapper product-slider-".((string)$_smarty_tpl->tpl_vars['Box']->value->name),'fluid'=>true));
$_block_repeat=true;
echo $_block_plugin136->render(array('class'=>"product-slider-wrapper product-slider-".((string)$_smarty_tpl->tpl_vars['Box']->value->name),'fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productlist'=>$_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente,'title'=>$_smarty_tpl->tpl_vars['title']->value,'hideOverlays'=>true,'moreLink'=>$_smarty_tpl->tpl_vars['moreLink']->value,'moreTitle'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'titleContainer'=>true), 0, true);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin136->render(array('class'=>"product-slider-wrapper product-slider-".((string)$_smarty_tpl->tpl_vars['Box']->value->name),'fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-index-include-product-slider'} */
/* {block 'page-index-boxes'} */
class Block_117820477760c117d8da6112_36819605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['StartseiteBoxen']->value, 'Box');
$_smarty_tpl->tpl_vars['Box']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Box']->value) {
$_smarty_tpl->tpl_vars['Box']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente)) && count($_smarty_tpl->tpl_vars['Box']->value->Artikel->elemente) > 0 && (isset($_smarty_tpl->tpl_vars['Box']->value->cURL))) {?>
                    <?php if ($_smarty_tpl->tpl_vars['Box']->value->name === 'TopAngebot') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topOffer','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllTopOffers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'Sonderangebote') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'specialOffer','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllSpecialOffers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'NeuImSortiment') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newProducts','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllNewProducts','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['Box']->value->name === 'Bestseller') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestsellers','assign'=>'title'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'showAllBestsellers','assign'=>'moreTitle'),$_smarty_tpl ) );?>

                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('moreLink', $_smarty_tpl->tpl_vars['Box']->value->cURL);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187462740760c117d8dae378_55749258', 'page-index-include-product-slider', $this->tplIndex);
?>

                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'page-index-boxes'} */
/* {block 'page-index-subheading-news'} */
class Block_30361439460c117d8db3286_45574465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="blog-header">
                            <div class="hr-sect h2">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'news.php'),$_smarty_tpl ) );
$_prefixVariable80=ob_get_clean();
$_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable80));
$_block_repeat=true;
echo $_block_plugin138->render(array('href'=>$_prefixVariable80), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'news','section'=>'news'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin138->render(array('href'=>$_prefixVariable80), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                        </div>
                    <?php
}
}
/* {/block 'page-index-subheading-news'} */
/* {block 'page-index-news'} */
class Block_133000879260c117d8db4ce3_95875812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
if (count($_smarty_tpl->tpl_vars['oNews_arr']->value) < 3) {
echo "slider-no-preview";
}
$_prefixVariable81=ob_get_clean();
$_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news ".$_prefixVariable81,'data'=>array("slick-type"=>"news-slider")));
$_block_repeat=true;
echo $_block_plugin139->render(array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news ".$_prefixVariable81,'data'=>array("slick-type"=>"news-slider")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/slider_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['oNews_arr']->value,'type'=>'news'), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin139->render(array('itemprop'=>"about",'itemscope'=>true,'itemtype'=>"http://schema.org/Blog",'class'=>"slick-smooth-loading carousel carousel-arrows-inside slick-lazy slick-type-news ".$_prefixVariable81,'data'=>array("slick-type"=>"news-slider")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'page-index-news'} */
/* {block 'page-index-additional-content'} */
class Block_116500011560c117d8db17d0_29538360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['oNews_arr']->value)) && count($_smarty_tpl->tpl_vars['oNews_arr']->value) > 0) {?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_news','inContainer'=>false),$_smarty_tpl ) );?>


            <section class="index-news-wrapper">
                <?php $_block_plugin137 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin137, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>true));
$_block_repeat=true;
echo $_block_plugin137->render(array('fluid'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30361439460c117d8db3286_45574465', 'page-index-subheading-news', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133000879260c117d8db4ce3_95875812', 'page-index-news', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin137->render(array('fluid'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </section>
        <?php }?>
    <?php
}
}
/* {/block 'page-index-additional-content'} */
/* {block 'page-index'} */
class Block_210568734860c117d8da2430_01593161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-index' => 
  array (
    0 => 'Block_210568734860c117d8da2430_01593161',
  ),
  'page-index-include-selection-wizard' => 
  array (
    0 => 'Block_208456059760c117d8da2b49_91622561',
  ),
  'page-index-boxes' => 
  array (
    0 => 'Block_117820477760c117d8da6112_36819605',
  ),
  'page-index-include-product-slider' => 
  array (
    0 => 'Block_187462740760c117d8dae378_55749258',
  ),
  'page-index-additional-content' => 
  array (
    0 => 'Block_116500011560c117d8db17d0_29538360',
  ),
  'page-index-subheading-news' => 
  array (
    0 => 'Block_30361439460c117d8db3286_45574465',
  ),
  'page-index-news' => 
  array (
    0 => 'Block_133000879260c117d8db4ce3_95875812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208456059760c117d8da2b49_91622561', 'page-index-include-selection-wizard', $this->tplIndex);
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['StartseiteBoxen']->value)) && count($_smarty_tpl->tpl_vars['StartseiteBoxen']->value) > 0) {?>
        <?php $_smarty_tpl->_assignInScope('moreLink', null);?>
        <?php $_smarty_tpl->_assignInScope('moreTitle', null);?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_boxes','inContainer'=>false),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117820477760c117d8da6112_36819605', 'page-index-boxes', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116500011560c117d8db17d0_29538360', 'page-index-additional-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page-index'} */
}
