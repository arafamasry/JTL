<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:05
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c124557c51a0_77344928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9ea510dc68490fd59040fd7acbf47086d5a63d' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\image.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_button.tpl' => 1,
    'file:snippets/wishlist_button.tpl' => 1,
    'file:productdetails/product_images_modal.tpl' => 1,
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60c124557c51a0_77344928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7573495360c1245577fc76_03042354', 'productdetails-image');
?>

<?php }
/* {block 'productdetails-image-button'} */
class Block_186036466260c12455780b07_89255815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'class'=>"product-detail-image-topbar"));
$_block_repeat=true;
echo $_block_plugin22->render(array('cols'=>12,'class'=>"product-detail-image-topbar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('id'=>"image_fullscreen_close",'variant'=>"link",'aria'=>array("label"=>"close")));
$_block_repeat=true;
echo $_block_plugin23->render(array('id'=>"image_fullscreen_close",'variant'=>"link",'aria'=>array("label"=>"close")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                <?php $_block_repeat=false;
echo $_block_plugin23->render(array('id'=>"image_fullscreen_close",'variant'=>"link",'aria'=>array("label"=>"close")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin22->render(array('cols'=>12,'class'=>"product-detail-image-topbar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-image-button'} */
/* {block 'productdetails-image-include-comparelist-button'} */
class Block_59049893860c12455785c53_00282664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/comparelist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'productdetails-image-include-comparelist-button'} */
/* {block 'productdetails-image-include-wishlist-button'} */
class Block_1639173260c12455787309_54229712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'productdetails-image-include-wishlist-button'} */
/* {block 'productdetails-image-actions'} */
class Block_143920272060c124557847f0_99508217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product-actions" data-toggle="product-actions">
                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_vergleichsliste_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59049893860c12455785c53_00282664', 'productdetails-image-include-comparelist-button', $this->tplIndex);
?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639173260c12455787309_54229712', 'productdetails-image-include-wishlist-button', $this->tplIndex);
?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'productdetails-image-actions'} */
/* {block 'productdetails-image-images'} */
class Block_68438206560c12455788b12_09920037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Bilder, 'image', true);
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_1_saved = $_smarty_tpl->tpl_vars['image'];
?>
                                <div class="square square-image js-gallery-images <?php if (!$_smarty_tpl->tpl_vars['image']->first) {?>d-none<?php }?>"><div class="inner"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->galleryJSON, ENT_QUOTES, 'utf-8', true);
$_prefixVariable4=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->cAltAttribut, ENT_QUOTES, 'utf-8', true),'class'=>"product-image",'fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                    ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                    ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w,
                                                    ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLGross)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_gross_breite'])."w",'data'=>array("list"=>$_prefixVariable4,"index"=>$_smarty_tpl->tpl_vars['image']->index,"sizes"=>"auto")),$_smarty_tpl ) );?>
</div></div>
                            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'productdetails-image-images'} */
/* {block 'productdetails-image-images-wrapper'} */
class Block_72405702460c124557886c4_93832585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="gallery_wrapper" class="clearfix">
                    <div id="gallery"
                         class="product-images slick-smooth-loading carousel slick-lazy"
                         data-slick-type="gallery">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68438206560c12455788b12_09920037', 'productdetails-image-images', $this->tplIndex);
?>

                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['Artikel']->value->Bilder) > 1) {?>
                        <ul class="slick-dots initial-slick-dots d-lg-none" style="" role="tablist">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Bilder, 'image', true);
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_2_saved = $_smarty_tpl->tpl_vars['image'];
?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['image']->first) {?>slick-active<?php }?>" role="presentation">
                                    <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array());
$_block_repeat=true;
echo $_block_plugin25->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo $_block_plugin25->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                </div>
            <?php
}
}
/* {/block 'productdetails-image-images-wrapper'} */
/* {block 'productdetails-image-main'} */
class Block_83475512260c12455782f33_04913412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin24->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->nIstVater && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel == 0)) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143920272060c124557847f0_99508217', 'productdetails-image-actions', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72405702460c124557886c4_93832585', 'productdetails-image-images-wrapper', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin24->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-image-main'} */
/* {block 'productdetails-image-preview-images'} */
class Block_11608957860c124557b1c00_17266613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Bilder, 'image', true);
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_3_saved = $_smarty_tpl->tpl_vars['image'];
?>
                                <div class="square square-image js-gallery-images<?php if ($_smarty_tpl->tpl_vars['image']->first) {?> preview-first <?php if ($_smarty_tpl->tpl_vars['imageCount']->value <= $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?> first-ml<?php }
} elseif ($_smarty_tpl->tpl_vars['image']->index >= $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?> d-none<?php }
if ($_smarty_tpl->tpl_vars['image']->last && $_smarty_tpl->tpl_vars['imageCount']->value <= $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?> last-mr<?php }?>"><div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->cAltAttribut, ENT_QUOTES, 'utf-8', true),'class'=>"product-image",'fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)),$_smarty_tpl ) );?>
</div></div>
                            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'productdetails-image-preview-images'} */
/* {block 'productdetails-image-preview'} */
class Block_44957560460c124557abe24_32091177 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'align-self'=>'end','class'=>'product-detail-image-preview-bar'));
$_block_repeat=true;
echo $_block_plugin26->render(array('cols'=>12,'align-self'=>'end','class'=>'product-detail-image-preview-bar'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_assignInScope('imageCount', count($_smarty_tpl->tpl_vars['Artikel']->value->Bilder));?>
            <?php $_smarty_tpl->_assignInScope('imageCountDefault', 5);?>
            <?php if ($_smarty_tpl->tpl_vars['imageCount']->value > 1) {?>
                <div id="gallery_preview_wrapper" class="product-thumbnails-wrapper">
                    <div id="gallery_preview"
                         class="product-thumbnails slick-smooth-loading carousel carousel-thumbnails slick-lazy <?php if ($_smarty_tpl->tpl_vars['imageCount']->value <= $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?>slick-count-default<?php }?>"
                         data-slick-type="gallery_preview">
                        <?php if ($_smarty_tpl->tpl_vars['imageCount']->value > $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?>
                            <button class="slick-prev slick-arrow slick-inital-arrow" aria-label="Previous" type="button" style="">Previous</button>
                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11608957860c124557b1c00_17266613', 'productdetails-image-preview-images', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['imageCount']->value > $_smarty_tpl->tpl_vars['imageCountDefault']->value) {?>
                            <button class="slick-next slick-arrow slick-inital-arrow" aria-label="Next" type="button" style="">Next</button>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
            <?php $_block_repeat=false;
echo $_block_plugin26->render(array('cols'=>12,'align-self'=>'end','class'=>'product-detail-image-preview-bar'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-image-preview'} */
/* {block 'productdetails-image-meta'} */
class Block_55167381560c124557b8c55_56962510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->Bilder, 'image', true);
$_smarty_tpl->tpl_vars['image']->iteration = 0;
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->iteration++;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
$__foreach_image_4_saved = $_smarty_tpl->tpl_vars['image'];
?>
                <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['image']->value->cURLNormal;?>
">
            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'productdetails-image-meta'} */
/* {block 'productdetails-image-include-product-images-modal'} */
class Block_199434346960c124557ba7e0_73592313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/product_images_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bilder), 0, false);
?>
        <?php
}
}
/* {/block 'productdetails-image-include-product-images-modal'} */
/* {block 'productdetails-image-variation-preview'} */
class Block_114886242660c124557bbb80_51105998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value && (isset($_smarty_tpl->tpl_vars['Artikel']->value->Variationen)) && count($_smarty_tpl->tpl_vars['Artikel']->value->Variationen) > 0) {?>
                <?php $_smarty_tpl->_assignInScope('VariationsSource', 'Variationen');?>
                <?php if ((isset($_smarty_tpl->tpl_vars['ohneFreifeld']->value)) && $_smarty_tpl->tpl_vars['ohneFreifeld']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('VariationsSource', 'VariationenOhneFreifeld');?>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->{$_smarty_tpl->tpl_vars['VariationsSource']->value}, 'Variation', false, 'i', 'Variationen', array (
));
$_smarty_tpl->tpl_vars['Variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['Variation']->value) {
$_smarty_tpl->tpl_vars['Variation']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Variation']->value->Werte, 'Variationswert', false, 'y', 'Variationswerte', array (
));
$_smarty_tpl->tpl_vars['Variationswert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['y']->value => $_smarty_tpl->tpl_vars['Variationswert']->value) {
$_smarty_tpl->tpl_vars['Variationswert']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['Variationswert']->value->getImage() !== null) {?>
                            <div class="variation-image-preview d-none fade vt<?php echo $_smarty_tpl->tpl_vars['Variationswert']->value->kEigenschaftWert;?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['Variationswert']->value,'sizes'=>'100vw'), 0, true);
?>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
}
/* {/block 'productdetails-image-variation-preview'} */
/* {block 'productdetails-image'} */
class Block_7573495360c1245577fc76_03042354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-image' => 
  array (
    0 => 'Block_7573495360c1245577fc76_03042354',
  ),
  'productdetails-image-button' => 
  array (
    0 => 'Block_186036466260c12455780b07_89255815',
  ),
  'productdetails-image-main' => 
  array (
    0 => 'Block_83475512260c12455782f33_04913412',
  ),
  'productdetails-image-actions' => 
  array (
    0 => 'Block_143920272060c124557847f0_99508217',
  ),
  'productdetails-image-include-comparelist-button' => 
  array (
    0 => 'Block_59049893860c12455785c53_00282664',
  ),
  'productdetails-image-include-wishlist-button' => 
  array (
    0 => 'Block_1639173260c12455787309_54229712',
  ),
  'productdetails-image-images-wrapper' => 
  array (
    0 => 'Block_72405702460c124557886c4_93832585',
  ),
  'productdetails-image-images' => 
  array (
    0 => 'Block_68438206560c12455788b12_09920037',
  ),
  'productdetails-image-preview' => 
  array (
    0 => 'Block_44957560460c124557abe24_32091177',
  ),
  'productdetails-image-preview-images' => 
  array (
    0 => 'Block_11608957860c124557b1c00_17266613',
  ),
  'productdetails-image-meta' => 
  array (
    0 => 'Block_55167381560c124557b8c55_56962510',
  ),
  'productdetails-image-include-product-images-modal' => 
  array (
    0 => 'Block_199434346960c124557ba7e0_73592313',
  ),
  'productdetails-image-variation-preview' => 
  array (
    0 => 'Block_114886242660c124557bbb80_51105998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="image_wrapper" class="gallery-with-action" role="group">
        <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"gallery-with-action-main"));
$_block_repeat=true;
echo $_block_plugin21->render(array('class'=>"gallery-with-action-main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186036466260c12455780b07_89255815', 'productdetails-image-button', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83475512260c12455782f33_04913412', 'productdetails-image-main', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44957560460c124557abe24_32091177', 'productdetails-image-preview', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin21->render(array('class'=>"gallery-with-action-main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55167381560c124557b8c55_56962510', 'productdetails-image-meta', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199434346960c124557ba7e0_73592313', 'productdetails-image-include-product-images-modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114886242660c124557bbb80_51105998', 'productdetails-image-variation-preview', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'productdetails-image'} */
}
