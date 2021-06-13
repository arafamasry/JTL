<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:07
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033b5151c3_13588586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b4f3e3ec9c9cb03ca4d840d321a1a932f0104fa' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\header.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/extension.tpl' => 1,
    'file:snippets/image.tpl' => 1,
    'file:selectionwizard/index.tpl' => 1,
    'file:snippets/product_slider.tpl' => 2,
    'file:snippets/productlist_page_nav.tpl' => 1,
    'file:snippets/filter/active_filter.tpl' => 1,
  ),
),false)) {
function content_60c2033b5151c3_13588586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132563337660c2033b43b281_10919224', 'productlist-header');
?>

<?php }
/* {block 'productlist-header-heading'} */
class Block_129307763860c2033b43e363_29731484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="h1"><?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTermWrite();?>
</div>
        <?php
}
}
/* {/block 'productlist-header-heading'} */
/* {block 'productlist-header-alert'} */
class Block_190738159460c2033b4400b1_85676113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('variant'=>"info"));
$_block_repeat=true;
echo $_block_plugin21->render(array('variant'=>"info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noResults','section'=>'productOverview'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin21->render(array('variant'=>"info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-header-alert'} */
/* {block 'productlist-header-form-search'} */
class Block_6182635360c2033b441794_06997393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin22->render(array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <fieldset>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'searchText'),$_smarty_tpl ) );
$_prefixVariable9=ob_get_clean();
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"searchkey",'label'=>$_prefixVariable9));
$_block_repeat=true;
echo $_block_plugin23->render(array('label-for'=>"searchkey",'label'=>$_prefixVariable9), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTerm()) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchTerm(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');
}
$_prefixVariable10=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"text",'name'=>"suchausdruck",'value'=>$_prefixVariable10,'id'=>"searchkey"),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin23->render(array('label-for'=>"searchkey",'label'=>$_prefixVariable9), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"submit",'value'=>"1"));
$_block_repeat=true;
echo $_block_plugin24->render(array('variant'=>"primary",'type'=>"submit",'value'=>"1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'searchAgain','section'=>'productOverview'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin24->render(array('variant'=>"primary",'type'=>"submit",'value'=>"1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </fieldset>
            <?php $_block_repeat=false;
echo $_block_plugin22->render(array('id'=>"suche2",'action'=>$_smarty_tpl->tpl_vars['ShopURL']->value,'method'=>"get",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-header-form-search'} */
/* {block 'productlist-header-include-extension'} */
class Block_89939312660c2033b44fe78_87138568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-extension'} */
/* {block 'productlist-header-description-heading'} */
class Block_67197509760c2033b4cc6c9_46680573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1 class="h2"><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getName();?>
</h1>
                <?php
}
}
/* {/block 'productlist-header-description-heading'} */
/* {block 'productlist-header-description-category'} */
class Block_57124704660c2033b4d0287_82288405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-category'} */
/* {block 'productlist-header-description-manufacturers'} */
class Block_204061693360c2033b4d2e09_41502868 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-manufacturers'} */
/* {block 'productlist-header-description-attributes'} */
class Block_83353900560c2033b4d5910_47514248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="desc">
                    <p><?php echo $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue()->cBeschreibung;?>
</p>
                </div>
            <?php
}
}
/* {/block 'productlist-header-description-attributes'} */
/* {block 'productlist-header-description'} */
class Block_16125943660c2033b450ac6_56605937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== (defined('BILD_KEIN_KATEGORIEBILD_VORHANDEN') ? constant('BILD_KEIN_KATEGORIEBILD_VORHANDEN') : null) && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== 'gfx/keinBild_kl.gif' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getImageURL() !== ($_smarty_tpl->tpl_vars['imageBaseURL']->value).((defined('BILD_KEIN_KATEGORIEBILD_VORHANDEN') ? constant('BILD_KEIN_KATEGORIEBILD_VORHANDEN') : null))) {?>
            <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory());?>
            <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer());?>
            <?php } elseif ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() !== null) {?>
                <?php $_smarty_tpl->_assignInScope('navData', $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue());?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'productlist-header-description-image','item'=>$_smarty_tpl->tpl_vars['navData']->value,'square'=>false,'alt'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navData']->value->cBeschreibung),50 ))), 0, false);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getName()) {?>
            <div class="title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading'),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67197509760c2033b4cc6c9_46680573', 'productlist-header-description-heading', $this->tplIndex);
?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['kategorie_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57124704660c2033b4d0287_82288405', 'productlist-header-description-category', $this->tplIndex);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['hersteller_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204061693360c2033b4d2e09_41502868', 'productlist-header-description-manufacturers', $this->tplIndex);
?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['merkmalwert_beschreibung_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() !== null && strlen($_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue()->cBeschreibung) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83353900560c2033b4d5910_47514248', 'productlist-header-description-attributes', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'productlist-header-description'} */
/* {block 'productlist-header-subcategories-image'} */
class Block_4837577260c2033b4dae91_63025567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <div class="subcategories-image d-none d-md-flex">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['subCategory']->value->getImage(\JTL\Media\Image::SIZE_SM),'alt'=>$_smarty_tpl->tpl_vars['subCategory']->value->getName()),$_smarty_tpl ) );?>

                                        </div>
                                    <?php $_block_repeat=false;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productlist-header-subcategories-image'} */
/* {block 'productlist-header-subcategories-link'} */
class Block_63029582260c2033b4ddf30_69436781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="caption">
                                            <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin28->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['subCategory']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin28->render(array('href'=>$_smarty_tpl->tpl_vars['subCategory']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        </div>
                                    <?php
}
}
/* {/block 'productlist-header-subcategories-link'} */
/* {block 'productlist-header-subcategories-description'} */
class Block_113741973960c2033b4e0aa9_72537302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <p class="item_desc small text-muted-util d-none d-md-block">
                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subCategory']->value->getDescription()),68 ));?>

                                        </p>
                                    <?php
}
}
/* {/block 'productlist-header-subcategories-description'} */
/* {block 'productlist-header-subcategories-list'} */
class Block_3260556560c2033b4e7ef2_50741009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <hr class="d-none d-md-block">
                                            <ul class="d-none d-md-block">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subCategory']->value->getChildren(), 'subChild');
$_smarty_tpl->tpl_vars['subChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subChild']->value) {
$_smarty_tpl->tpl_vars['subChild']->do_else = false;
?>
                                                    <li>
                                                        <?php $_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()));
$_block_repeat=true;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['subChild']->value->getName();
$_block_repeat=false;
echo $_block_plugin29->render(array('href'=>$_smarty_tpl->tpl_vars['subChild']->value->getURL(),'title'=>$_smarty_tpl->tpl_vars['subChild']->value->getName()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        <?php
}
}
/* {/block 'productlist-header-subcategories-list'} */
/* {block 'productlist-header-subcategories'} */
class Block_207316897660c2033b4d7254_23386288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'N' && count($_smarty_tpl->tpl_vars['oUnterKategorien_arr']->value) > 0) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_subcategories'),$_smarty_tpl ) );?>

            <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"row-eq-height content-cats-small"));
$_block_repeat=true;
echo $_block_plugin25->render(array('class'=>"row-eq-height content-cats-small"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oUnterKategorien_arr']->value, 'subCategory');
$_smarty_tpl->tpl_vars['subCategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subCategory']->value) {
$_smarty_tpl->tpl_vars['subCategory']->do_else = false;
?>
                    <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'lg'=>3));
$_block_repeat=true;
echo $_block_plugin26->render(array('cols'=>12,'md'=>4,'lg'=>3), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="sub-categories">
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'Y') {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4837577260c2033b4dae91_63025567', 'productlist-header-subcategories-image', $this->tplIndex);
?>

                            <?php }?>
                            <div>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['artikeluebersicht_bild_anzeigen'] !== 'B') {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63029582260c2033b4ddf30_69436781', 'productlist-header-subcategories-link', $this->tplIndex);
?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['unterkategorien_beschreibung_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['subCategory']->value->getDescription())) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113741973960c2033b4e0aa9_72537302', 'productlist-header-subcategories-description', $this->tplIndex);
?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['navigationsfilter']['unterkategorien_lvl2_anzeigen'] === 'Y') {?>
                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value->hasChildren()) {?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3260556560c2033b4e7ef2_50741009', 'productlist-header-subcategories-list', $this->tplIndex);
?>

                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin26->render(array('cols'=>12,'md'=>4,'lg'=>3), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_block_plugin25->render(array('class'=>"row-eq-height content-cats-small"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php
}
}
/* {/block 'productlist-header-subcategories'} */
/* {block 'productlist-header-include-selection-wizard'} */
class Block_23505294060c2033b4f2890_02245127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('container'=>false), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-selection-wizard'} */
/* {block 'productlist-header-include-product-slider-top'} */
class Block_116693887060c2033b4fba44_49362450 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_category_top'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'topOffer','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-top-products','productlist'=>$_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, false);
?>
            <?php
}
}
/* {/block 'productlist-header-include-product-slider-top'} */
/* {block 'productlist-header-include-product-slider-bestseller'} */
class Block_54863445660c2033b5059e5_20974976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_category_bestseller'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bestsellers','assign'=>'slidertitle'),$_smarty_tpl ) );?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/product_slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'slider-bestseller-products','productlist'=>$_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente,'title'=>$_smarty_tpl->tpl_vars['slidertitle']->value), 0, true);
?>
            <?php
}
}
/* {/block 'productlist-header-include-product-slider-bestseller'} */
/* {block 'productlist-header-include-productlist-page-nav'} */
class Block_212341426960c2033b50b883_77226854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:snippets/productlist_page_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navid'=>'header'), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-productlist-page-nav'} */
/* {block 'productlist-header-include-active-filter'} */
class Block_133698427660c2033b50de50_52894773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterCount() > 0) {?>
            <?php echo $_smarty_tpl->tpl_vars['alertList']->value->displayAlertByKey('noFilterResults');?>

        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/active_filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'productlist-header-include-active-filter'} */
/* {block 'productlist-header'} */
class Block_132563337660c2033b43b281_10919224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-header' => 
  array (
    0 => 'Block_132563337660c2033b43b281_10919224',
  ),
  'productlist-header-heading' => 
  array (
    0 => 'Block_129307763860c2033b43e363_29731484',
  ),
  'productlist-header-alert' => 
  array (
    0 => 'Block_190738159460c2033b4400b1_85676113',
  ),
  'productlist-header-form-search' => 
  array (
    0 => 'Block_6182635360c2033b441794_06997393',
  ),
  'productlist-header-include-extension' => 
  array (
    0 => 'Block_89939312660c2033b44fe78_87138568',
  ),
  'productlist-header-description' => 
  array (
    0 => 'Block_16125943660c2033b450ac6_56605937',
  ),
  'productlist-header-description-heading' => 
  array (
    0 => 'Block_67197509760c2033b4cc6c9_46680573',
  ),
  'productlist-header-description-category' => 
  array (
    0 => 'Block_57124704660c2033b4d0287_82288405',
  ),
  'productlist-header-description-manufacturers' => 
  array (
    0 => 'Block_204061693360c2033b4d2e09_41502868',
  ),
  'productlist-header-description-attributes' => 
  array (
    0 => 'Block_83353900560c2033b4d5910_47514248',
  ),
  'productlist-header-subcategories' => 
  array (
    0 => 'Block_207316897660c2033b4d7254_23386288',
  ),
  'productlist-header-subcategories-image' => 
  array (
    0 => 'Block_4837577260c2033b4dae91_63025567',
  ),
  'productlist-header-subcategories-link' => 
  array (
    0 => 'Block_63029582260c2033b4ddf30_69436781',
  ),
  'productlist-header-subcategories-description' => 
  array (
    0 => 'Block_113741973960c2033b4e0aa9_72537302',
  ),
  'productlist-header-subcategories-list' => 
  array (
    0 => 'Block_3260556560c2033b4e7ef2_50741009',
  ),
  'productlist-header-include-selection-wizard' => 
  array (
    0 => 'Block_23505294060c2033b4f2890_02245127',
  ),
  'productlist-header-include-product-slider-top' => 
  array (
    0 => 'Block_116693887060c2033b4fba44_49362450',
  ),
  'productlist-header-include-product-slider-bestseller' => 
  array (
    0 => 'Block_54863445660c2033b5059e5_20974976',
  ),
  'productlist-header-include-productlist-page-nav' => 
  array (
    0 => 'Block_212341426960c2033b50b883_77226854',
  ),
  'productlist-header-include-active-filter' => 
  array (
    0 => 'Block_133698427660c2033b50de50_52894773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['oNavigationsinfo']->value)) || (!$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getManufacturer() && !$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCharacteristicValue() && !$_smarty_tpl->tpl_vars['oNavigationsinfo']->value->getCategory())) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading'),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129307763860c2033b43e363_29731484', 'productlist-header-heading', $this->tplIndex);
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSearchUnsuccessful() == true) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_no_results'),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190738159460c2033b4400b1_85676113', 'productlist-header-alert', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6182635360c2033b441794_06997393', 'productlist-header-form-search', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89939312660c2033b44fe78_87138568', 'productlist-header-include-extension', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16125943660c2033b450ac6_56605937', 'productlist-header-description', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207316897660c2033b4d7254_23386288', 'productlist-header-subcategories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23505294060c2033b4f2890_02245127', 'productlist-header-include-selection-wizard', $this->tplIndex);
?>


    <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) <= 0 && (isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente)) && count($_smarty_tpl->tpl_vars['KategorieInhalt']->value->TopArtikel->elemente) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116693887060c2033b4fba44_49362450', 'productlist-header-include-product-slider-top', $this->tplIndex);
?>

        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente)) && count($_smarty_tpl->tpl_vars['KategorieInhalt']->value->BestsellerArtikel->elemente) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54863445660c2033b5059e5_20974976', 'productlist-header-include-product-slider-bestseller', $this->tplIndex);
?>

        <?php }?>
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212341426960c2033b50b883_77226854', 'productlist-header-include-productlist-page-nav', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133698427660c2033b50de50_52894773', 'productlist-header-include-active-filter', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productlist-header'} */
}
