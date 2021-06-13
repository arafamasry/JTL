<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:24
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\boxes\box_wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119a0737bf0_08269209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d80e3ded94b3eca4af628ac00be321dcd3ffe3a' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\boxes\\box_wishlist.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60c119a0737bf0_08269209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59845312160c119a06b88d4_72476788', 'boxes-box-wishlist');
?>

<?php }
/* {block 'boxes-box-wishlist-toggle-title'} */
class Block_140045273260c119a06c0a62_86357417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin11->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin11->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-wishlist-toggle-title'} */
/* {block 'boxes-box-wishlist-title'} */
class Block_34027311660c119a06c5391_52690416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="productlist-filter-headline align-items-center-util d-none d-md-flex">
                        <i class='fa fa-heart icon-mr-2'></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'wishlist'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'boxes-box-wishlist-title'} */
/* {block 'boxes-box-wishlist-dropdown-products-image'} */
class Block_16531380960c119a07164b3_04532003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                <?php $_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)));
$_block_repeat=true;
echo $_block_plugin15->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel,'square'=>false,'srcSize'=>'xs','sizes'=>'24px'), 0, true);
?>
                                                                <?php $_block_repeat=false;
echo $_block_plugin15->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-image'} */
/* {block 'boxes-box-wishlist-dropdown-products-title'} */
class Block_78972276560c119a071f667_91015797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)));
$_block_repeat=true;
echo $_block_plugin17->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlistItem']->value->fAnzahl ));?>
 &times; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName,40,"..." ));?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin17->render(array('href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->Artikel->cURLFull,'title'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['wishlistItem']->value->cArtikelName)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-title'} */
/* {block 'boxes-box-wishlist-dropdown-products-image-title'} */
class Block_19714334760c119a07147d1_48673341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin13->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php if ($_smarty_tpl->tpl_vars['oBox']->value->getShowImages()) {?>
                                                        <?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin14->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16531380960c119a07164b3_04532003', 'boxes-box-wishlist-dropdown-products-image', $this->tplIndex);
?>

                                                        <?php $_block_repeat=false;
echo $_block_plugin14->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php }?>
                                                    <?php $_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin16->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78972276560c119a071f667_91015797', 'boxes-box-wishlist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin16->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin13->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-wishlist-dropdown-products-image-title'} */
/* {block 'snippets-wishlist-dropdown-products-remove'} */
class Block_35607908360c119a0723cb2_35478695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'login','key'=>'wishlistremoveItem'),$_smarty_tpl ) );
$_prefixVariable4=ob_get_clean();
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)));
$_block_repeat=true;
echo $_block_plugin18->render(array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin18->render(array('class'=>"remove",'href'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->cURL,'data'=>array("name"=>"Wunschliste.remove","toggle"=>"product-actions","value"=>htmlspecialchars(json_encode(array('a'=>$_smarty_tpl->tpl_vars['wishlistItem']->value->kWunschlistePos)), ENT_QUOTES, 'utf-8', true)),'aria'=>array("label"=>$_prefixVariable4)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-wishlist-dropdown-products-remove'} */
/* {block 'boxes-box-wishlist-wishlist-items'} */
class Block_64428477260c119a06c9d54_73389725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getItems(), 'wishlistItem');
$_smarty_tpl->tpl_vars['wishlistItem']->iteration = 0;
$_smarty_tpl->tpl_vars['wishlistItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlistItem']->value) {
$_smarty_tpl->tpl_vars['wishlistItem']->do_else = false;
$_smarty_tpl->tpl_vars['wishlistItem']->iteration++;
$__foreach_wishlistItem_1_saved = $_smarty_tpl->tpl_vars['wishlistItem'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['wishlistItem']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {
break 1;
}?>
                                    <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['wishlistItem']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19714334760c119a07147d1_48673341', 'boxes-box-wishlist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35607908360c119a0723cb2_35478695', 'snippets-wishlist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                <?php
$_smarty_tpl->tpl_vars['wishlistItem'] = $__foreach_wishlistItem_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'boxes-box-wishlist-wishlist-items'} */
/* {block 'boxes-box-wishlist-actions'} */
class Block_9884823860c119a072aa11_26046326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <hr class="hr-no-top">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'wunschliste.php'),$_smarty_tpl ) );
$_prefixVariable5=ob_get_clean();
$_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"));
$_block_repeat=true;
echo $_block_plugin19->render(array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'goToWishlist'),$_smarty_tpl ) );?>

                            <?php $_block_repeat=false;
echo $_block_plugin19->render(array('href'=>$_prefixVariable5."?wl=".((string)$_smarty_tpl->tpl_vars['oBox']->value->getWishListID()),'class'=>"btn btn-outline-primary btn-block btn-sm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'boxes-box-wishlist-actions'} */
/* {block 'boxes-box-wishlist-collapse'} */
class Block_142319316560c119a06c6085_31364657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin12->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
                        <table class="table table-vertical-middle table-striped table-img">
                            <tbody>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64428477260c119a06c9d54_73389725', 'boxes-box-wishlist-wishlist-items', $this->tplIndex);
?>

                            </tbody>
                        </table>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9884823860c119a072aa11_26046326', 'boxes-box-wishlist-actions', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin12->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-wishlist-collapse'} */
/* {block 'boxes-box-wishlist-content'} */
class Block_66931268560c119a06c0566_94721453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140045273260c119a06c0a62_86357417', 'boxes-box-wishlist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34027311660c119a06c5391_52690416', 'boxes-box-wishlist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142319316560c119a06c6085_31364657', 'boxes-box-wishlist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-wishlist-content'} */
/* {block 'boxes-box-wishlist-hr-end'} */
class Block_132998555960c119a07320b6_80597700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-wishlist-hr-end'} */
/* {block 'boxes-box-wishlist-no-items'} */
class Block_175239364260c119a0733d31_14629627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="d-none box-wishlist" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></section>
        <?php
}
}
/* {/block 'boxes-box-wishlist-no-items'} */
/* {block 'boxes-box-wishlist'} */
class Block_59845312160c119a06b88d4_72476788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-wishlist' => 
  array (
    0 => 'Block_59845312160c119a06b88d4_72476788',
  ),
  'boxes-box-wishlist-content' => 
  array (
    0 => 'Block_66931268560c119a06c0566_94721453',
  ),
  'boxes-box-wishlist-toggle-title' => 
  array (
    0 => 'Block_140045273260c119a06c0a62_86357417',
  ),
  'boxes-box-wishlist-title' => 
  array (
    0 => 'Block_34027311660c119a06c5391_52690416',
  ),
  'boxes-box-wishlist-collapse' => 
  array (
    0 => 'Block_142319316560c119a06c6085_31364657',
  ),
  'boxes-box-wishlist-wishlist-items' => 
  array (
    0 => 'Block_64428477260c119a06c9d54_73389725',
  ),
  'boxes-box-wishlist-dropdown-products-image-title' => 
  array (
    0 => 'Block_19714334760c119a07147d1_48673341',
  ),
  'boxes-box-wishlist-dropdown-products-image' => 
  array (
    0 => 'Block_16531380960c119a07164b3_04532003',
  ),
  'boxes-box-wishlist-dropdown-products-title' => 
  array (
    0 => 'Block_78972276560c119a071f667_91015797',
  ),
  'snippets-wishlist-dropdown-products-remove' => 
  array (
    0 => 'Block_35607908360c119a0723cb2_35478695',
  ),
  'boxes-box-wishlist-actions' => 
  array (
    0 => 'Block_9884823860c119a072aa11_26046326',
  ),
  'boxes-box-wishlist-hr-end' => 
  array (
    0 => 'Block_132998555960c119a07320b6_80597700',
  ),
  'boxes-box-wishlist-no-items' => 
  array (
    0 => 'Block_175239364260c119a0733d31_14629627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (count($_smarty_tpl->tpl_vars['oBox']->value->getItems()) > 0) {?>
        <div class="box box-wishlist box-normal" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66931268560c119a06c0566_94721453', 'boxes-box-wishlist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132998555960c119a07320b6_80597700', 'boxes-box-wishlist-hr-end', $this->tplIndex);
?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175239364260c119a0733d31_14629627', 'boxes-box-wishlist-no-items', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'boxes-box-wishlist'} */
}
