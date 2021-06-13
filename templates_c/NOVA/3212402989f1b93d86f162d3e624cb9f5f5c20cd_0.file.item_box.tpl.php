<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:26:32
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\item_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c123f8ab1537_15800738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3212402989f1b93d86f162d3e624cb9f5f5c20cd' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\item_box.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/ribbon.tpl' => 1,
    'file:productlist/productlist_actions.tpl' => 1,
    'file:productdetails/rating.tpl' => 1,
    'file:productdetails/price.tpl' => 1,
  ),
),false)) {
function content_60c123f8ab1537_15800738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58895411560c123f8997e63_88475059', 'productlist-item-box');
?>

<?php }
/* {block 'productlist-item-box-include-ribbon'} */
class Block_14430954960c123f8a6afc6_20273146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/ribbon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'productlist-item-box-include-ribbon'} */
/* {block "productlist-item-list-image"} */
class Block_201658500860c123f8a7bdd5_07663425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]);?><div class="productbox-image square square-image first-wrapper"><div class="inner"><?php ob_start();
if (!$_smarty_tpl->tpl_vars['isMobile']->value && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1])) {
echo " first";
}
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['alt']->value,'fluid'=>true,'webp'=>true,'lazy'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                         ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                         ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"auto",'data'=>array("id"=>$_smarty_tpl->tpl_vars['imgcounter']->value),'class'=>$_prefixVariable1),$_smarty_tpl ) );?>
</div></div><?php if (!$_smarty_tpl->tpl_vars['isMobile']->value && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1])) {?><div class="productbox-image square square-image second-wrapper"><div class="inner"><?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[1]);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>$_smarty_tpl->tpl_vars['alt']->value,'fluid'=>true,'webp'=>true,'lazy'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                                 ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                                 ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"auto",'data'=>array("id"=>($_smarty_tpl->tpl_vars['imgcounter']->value).("_2nd")),'class'=>'second'),$_smarty_tpl ) );?>
</div></div><?php }?>
                                    <?php
}
}
/* {/block "productlist-item-list-image"} */
/* {block 'productlist-item-box-image'} */
class Block_21070019460c123f89cdcb6_78258475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

                            <?php echo smarty_function_counter(array('assign'=>'imgcounter','print'=>0),$_smarty_tpl);?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild))) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14430954960c123f8a6afc6_20273146', 'productlist-item-box-include-ribbon', $this->tplIndex);
?>

                            <?php }?>
                            <div class="productbox-images list-gallery">
                                <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin3->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201658500860c123f8a7bdd5_07663425', "productlist-item-list-image", $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin3->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal)) {?>
                                    <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal;?>
">
                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-image'} */
/* {block 'productlist-item-badge-yousave'} */
class Block_147435924560c123f8a9f023_87594396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="productbox-sale-percentage">
                                    <div class="ribbon ribbon-7 productbox-ribbon"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent;?>
%</div>
                                </div>
                            <?php
}
}
/* {/block 'productlist-item-badge-yousave'} */
/* {block 'productlist-item-box-include-productlist-actions'} */
class Block_200694655560c123f8aa1589_18031960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="productbox-quick-actions productbox-onhover d-none d-md-flex">
                                <?php $_smarty_tpl->_subTemplateRender('file:productlist/productlist_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-include-productlist-actions'} */
/* {block 'productlist-item-box-caption-short-desc'} */
class Block_20647930860c123f8aa34d1_15197737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="productbox-title" itemprop="name">
                                <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"));
$_block_repeat=true;
echo $_block_plugin5->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung;?>

                                <?php $_block_repeat=false;
echo $_block_plugin5->render(array('href'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull,'class'=>"text-clamp-2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-item-box-caption-short-desc'} */
/* {block 'productlist-item-box-meta'} */
class Block_64789740160c123f8aa4fc9_49529319 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cName !== $_smarty_tpl->tpl_vars['Artikel']->value->cKurzbezeichnung) {?>
                                <meta itemprop="alternateName" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cName;?>
">
                            <?php }?>
                            <meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;?>
">
                        <?php
}
}
/* {/block 'productlist-item-box-meta'} */
/* {block 'productlist-index-include-rating'} */
class Block_23711329960c123f8aa7208_52666219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung > 0) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->fDurchschnittsBewertung,'link'=>$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull), 0, false);
?><br>
                            <?php }?>
                        <?php
}
}
/* {/block 'productlist-index-include-rating'} */
/* {block 'productlist-index-include-price'} */
class Block_201613197360c123f8aa9812_49721152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <link itemprop="businessFunction" href="http://purl.org/goodrelations/v1#Sell" />
                                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'tplscope'=>$_smarty_tpl->tpl_vars['tplscope']->value), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'productlist-index-include-price'} */
/* {block 'productlist-item-box-caption'} */
class Block_200510530160c123f8aa3087_80378290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20647930860c123f8aa34d1_15197737', 'productlist-item-box-caption-short-desc', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64789740160c123f8aa4fc9_49529319', 'productlist-item-box-meta', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23711329960c123f8aa7208_52666219', 'productlist-index-include-rating', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201613197360c123f8aa9812_49721152', 'productlist-index-include-price', $this->tplIndex);
?>

                    <?php
}
}
/* {/block 'productlist-item-box-caption'} */
/* {block 'productlist-item-box'} */
class Block_58895411560c123f8997e63_88475059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-item-box' => 
  array (
    0 => 'Block_58895411560c123f8997e63_88475059',
  ),
  'productlist-item-box-image' => 
  array (
    0 => 'Block_21070019460c123f89cdcb6_78258475',
  ),
  'productlist-item-box-include-ribbon' => 
  array (
    0 => 'Block_14430954960c123f8a6afc6_20273146',
  ),
  'productlist-item-list-image' => 
  array (
    0 => 'Block_201658500860c123f8a7bdd5_07663425',
  ),
  'productlist-item-badge-yousave' => 
  array (
    0 => 'Block_147435924560c123f8a9f023_87594396',
  ),
  'productlist-item-box-include-productlist-actions' => 
  array (
    0 => 'Block_200694655560c123f8aa1589_18031960',
  ),
  'productlist-item-box-caption' => 
  array (
    0 => 'Block_200510530160c123f8aa3087_80378290',
  ),
  'productlist-item-box-caption-short-desc' => 
  array (
    0 => 'Block_20647930860c123f8aa34d1_15197737',
  ),
  'productlist-item-box-meta' => 
  array (
    0 => 'Block_64789740160c123f8aa4fc9_49529319',
  ),
  'productlist-index-include-rating' => 
  array (
    0 => 'Block_23711329960c123f8aa7208_52666219',
  ),
  'productlist-index-include-price' => 
  array (
    0 => 'Block_201613197360c123f8aa9812_49721152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_select_productlist'] === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['hover_productlist'] !== 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('hasOnlyListableVariations', 0);?>
    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hasOnlyListableVariations'][0], array( array('artikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'maxVariationCount'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_select_productlist'],'maxWerteCount'=>$_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['variation_max_werte_productlist'],'assign'=>'hasOnlyListableVariations'),$_smarty_tpl ) );?>

    <?php }?>
    <div id="result-wrapper_buy_form_<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;?>
" data-wrapper="true"
         class="productbox productbox-column <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['hover_productlist'] === 'Y') {?> productbox-hover<?php }
if ((isset($_smarty_tpl->tpl_vars['class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
        <div class="productbox-inner">
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin2->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="productbox-image">
                        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut))) {?>
                            <?php $_smarty_tpl->_assignInScope('alt', htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cAltAttribut),60 )), ENT_QUOTES, 'utf-8', true));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('alt', $_smarty_tpl->tpl_vars['Artikel']->value->cName);?>
                        <?php }?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21070019460c123f89cdcb6_78258475', 'productlist-item-box-image', $this->tplIndex);
?>


                        <?php if ($_SESSION['Kundengruppe']->mayViewPrices() && (isset($_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX)) && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->anzeigen == 1 && $_smarty_tpl->tpl_vars['Artikel']->value->SieSparenX->nProzent > 0 && !$_smarty_tpl->tpl_vars['NettoPreise']->value && $_smarty_tpl->tpl_vars['Artikel']->value->taxData['tax'] > 0) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147435924560c123f8a9f023_87594396', 'productlist-item-badge-yousave', $this->tplIndex);
?>

                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200694655560c123f8aa1589_18031960', 'productlist-item-box-include-productlist-actions', $this->tplIndex);
?>

                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin4->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200510530160c123f8aa3087_80378290', 'productlist-item-box-caption', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin4->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    </div>
<?php
}
}
/* {/block 'productlist-item-box'} */
}
