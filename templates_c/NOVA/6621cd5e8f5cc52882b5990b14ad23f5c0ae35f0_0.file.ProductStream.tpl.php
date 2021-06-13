<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:20:54
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\ProductStream\ProductStream.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c122a6333362_68204984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6621cd5e8f5cc52882b5990b14ad23f5c0ae35f0' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\ProductStream\\ProductStream.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productlist/item_list.tpl' => 1,
    'file:productlist/item_box.tpl' => 1,
    'file:snippets/product_slider.tpl' => 2,
  ),
),false)) {
function content_60c122a6333362_68204984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('style', $_smarty_tpl->tpl_vars['instance']->value->getProperty('listStyle'));?>

<?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <div class="opc-ProductStream" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>'ProductStream','src'=>((($_smarty_tpl->tpl_vars['portlet']->value->getBaseUrl()).('preview.')).($_smarty_tpl->tpl_vars['style']->value)).('.png')),$_smarty_tpl ) );?>

    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('productlist', $_smarty_tpl->tpl_vars['portlet']->value->getFilteredProducts($_smarty_tpl->tpl_vars['instance']->value));?>
    
    <?php if ($_smarty_tpl->tpl_vars['style']->value === 'list' || $_smarty_tpl->tpl_vars['style']->value === 'gallery') {?>
        <?php if ($_smarty_tpl->tpl_vars['style']->value === 'list') {?>
            <?php $_smarty_tpl->_assignInScope('grid', '12');?>
            <?php $_smarty_tpl->_assignInScope('eqHeightClasses', '');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('grid', '6');?>
            <?php $_smarty_tpl->_assignInScope('gridmd', '4');?>
            <?php $_smarty_tpl->_assignInScope('eqHeightClasses', 'row-eq-height row-eq-img-height');?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
            <div class="container-fluid">
        <?php }?>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>(((((($_smarty_tpl->tpl_vars['style']->value).(' ')).($_smarty_tpl->tpl_vars['eqHeightClasses']->value)).(' product-list opc-ProductStream opc-ProductStream-')).($_smarty_tpl->tpl_vars['style']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList",'style'=>((string)$_smarty_tpl->tpl_vars['instance']->value->getStyleString())));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>(((((($_smarty_tpl->tpl_vars['style']->value).(' ')).($_smarty_tpl->tpl_vars['eqHeightClasses']->value)).(' product-list opc-ProductStream opc-ProductStream-')).($_smarty_tpl->tpl_vars['style']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList",'style'=>((string)$_smarty_tpl->tpl_vars['instance']->value->getStyleString())), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productlist']->value, 'Artikel', true);
$_smarty_tpl->tpl_vars['Artikel']->iteration = 0;
$_smarty_tpl->tpl_vars['Artikel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikel']->value) {
$_smarty_tpl->tpl_vars['Artikel']->do_else = false;
$_smarty_tpl->tpl_vars['Artikel']->iteration++;
$_smarty_tpl->tpl_vars['Artikel']->last = $_smarty_tpl->tpl_vars['Artikel']->iteration === $_smarty_tpl->tpl_vars['Artikel']->total;
$__foreach_Artikel_0_saved = $_smarty_tpl->tpl_vars['Artikel'];
?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['grid']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
if ((isset($_smarty_tpl->tpl_vars['gridmd']->value))) {
echo (string)$_smarty_tpl->tpl_vars['gridmd']->value;
}
$_prefixVariable2=ob_get_clean();
ob_start();
if (!($_smarty_tpl->tpl_vars['style']->value === 'list' && $_smarty_tpl->tpl_vars['Artikel']->last)) {
echo "mb-4";
}
$_prefixVariable3=ob_get_clean();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>$_prefixVariable1,'md'=>$_prefixVariable2,'class'=>"product-wrapper ".$_prefixVariable3,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"));
$_block_repeat=true;
echo $_block_plugin2->render(array('cols'=>$_prefixVariable1,'md'=>$_prefixVariable2,'class'=>"product-wrapper ".$_prefixVariable3,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['style']->value === 'list') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value), 0, true);
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['style']->value === 'gallery') {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:productlist/item_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>$_smarty_tpl->tpl_vars['style']->value,'class'=>'thumbnail'), 0, true);
?>
                    <?php }?>
                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('cols'=>$_prefixVariable1,'md'=>$_prefixVariable2,'class'=>"product-wrapper ".$_prefixVariable3,'itemprop'=>"itemListElement",'itemscope'=>true,'itemtype'=>"http://schema.org/Product"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
$_smarty_tpl->tpl_vars['Artikel'] = $__foreach_Artikel_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>(((((($_smarty_tpl->tpl_vars['style']->value).(' ')).($_smarty_tpl->tpl_vars['eqHeightClasses']->value)).(' product-list opc-ProductStream opc-ProductStream-')).($_smarty_tpl->tpl_vars['style']->value)).(' ')).($_smarty_tpl->tpl_vars['instance']->value->getStyleClasses()),'itemprop'=>"mainEntity",'itemscope'=>true,'itemtype'=>"http://schema.org/ItemList",'style'=>((string)$_smarty_tpl->tpl_vars['instance']->value->getStyleString())), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['style']->value === 'simpleSlider') {?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getUid();?>
"
             class="carousel carousel-arrows-inside evo-slider slick-lazy
                    opc-ProductStream opc-ProductStream-<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 slick-type-product"
             data-slick-type="product-slider"
             style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productlist']->value, 'Artikel', true);
$_smarty_tpl->tpl_vars['Artikel']->iteration = 0;
$_smarty_tpl->tpl_vars['Artikel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikel']->value) {
$_smarty_tpl->tpl_vars['Artikel']->do_else = false;
$_smarty_tpl->tpl_vars['Artikel']->iteration++;
$_smarty_tpl->tpl_vars['Artikel']->last = $_smarty_tpl->tpl_vars['Artikel']->iteration === $_smarty_tpl->tpl_vars['Artikel']->total;
$__foreach_Artikel_1_saved = $_smarty_tpl->tpl_vars['Artikel'];
?>
                <div class="product-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                        <div class="square square-image">
                            <div class="inner">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cName;?>
"
                                     title="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cName;?>
">
                            </div>
                        </div>
                    </a>
                </div>
            <?php
$_smarty_tpl->tpl_vars['Artikel'] = $__foreach_Artikel_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['style']->value === 'slider') {?>
        <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
            <div class="container-fluid">
        <?php }?>
        <div class="opc-product-slider" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productlist'=>$_smarty_tpl->tpl_vars['productlist']->value,'isOPC'=>true), 0, false);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['inContainer']->value === false) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['style']->value === 'box-slider') {?>
        <div class="opc-product-slider" style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('productlist'=>$_smarty_tpl->tpl_vars['productlist']->value,'tplscope'=>'box','isOPC'=>true), 0, true);
?>
        </div>
    <?php }
}
}
}
