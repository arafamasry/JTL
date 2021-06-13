<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:24
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\boxes\box_comparelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119a0c2ed05_47073473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb63e8c0468aa8892584941233fd5aadb99bfe26' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\boxes\\box_comparelist.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60c119a0c2ed05_47073473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168349104660c119a0bf36d1_41984354', 'boxes-box-comparelist');
?>

<?php }
/* {block 'boxes-box-comparelist-toggle-title'} */
class Block_64077800560c119a0bf8301_45086816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin20->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin20->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-toggle-title'} */
/* {block 'boxes-box-comparelist-title'} */
class Block_196350157960c119a0bfc336_50787109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="productlist-filter-headline align-items-center-util d-none d-md-flex">
                        <i class='fas fa-list icon-mr-2'></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'compare'),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block 'boxes-box-comparelist-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image'} */
class Block_74211693060c119a0c05484_79967878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin24->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['product']->value,'square'=>false,'srcSize'=>'xs','sizes'=>'45px'), 0, true);
?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin24->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image'} */
/* {block 'boxes-box-comparelist-dropdown-products-title'} */
class Block_60537742160c119a0c0a2b7_73763507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin26->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->cName,40,'...' ));
$_block_repeat=false;
echo $_block_plugin26->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-image-title'} */
class Block_130108616060c119a0c020b2_81762445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin22->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin23->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74211693060c119a0c05484_79967878', 'boxes-box-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin23->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin25->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60537742160c119a0c0a2b7_73763507', 'boxes-box-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin25->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                <?php $_block_repeat=false;
echo $_block_plugin22->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-image-title'} */
/* {block 'boxes-box-comparelist-dropdown-products-remove'} */
class Block_77637670260c119a0c0f450_93790539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable6=ob_get_clean();
ob_start();?>{<?php $_prefixVariable7=ob_get_clean();
ob_start();?>}<?php $_prefixVariable8=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)));
$_block_repeat=true;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <span class="fas fa-times"></span>
                                                <?php $_block_repeat=false;
echo $_block_plugin27->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLDEL,'class'=>"remove",'title'=>$_prefixVariable6,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable7.((string)$_smarty_tpl->tpl_vars['id']->value).":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable8),'aria'=>array("label"=>$_prefixVariable9)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'boxes-box-comparelist-dropdown-products-remove'} */
/* {block 'boxes-box-comparelist-products'} */
class Block_140049734460c119a0bfee57_08374019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <table class="table table-vertical-middle table-striped table-img">
                                <tbody>
                                    <?php $_smarty_tpl->_assignInScope('id', htmlspecialchars('"a"', ENT_QUOTES, 'utf-8', true));?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oBox']->value->getProducts(), 'product');
$_smarty_tpl->tpl_vars['product']->iteration = 0;
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['product']->iteration++;
$__foreach_product_2_saved = $_smarty_tpl->tpl_vars['product'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->iteration > $_smarty_tpl->tpl_vars['maxItems']->value) {?>
                                            <?php break 1;?>
                                        <?php }?>
                                        <tr>
                                        <td class="w-100-util" data-id=<?php echo $_smarty_tpl->tpl_vars['product']->value->kArtikel;?>
>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130108616060c119a0c020b2_81762445', 'boxes-box-comparelist-dropdown-products-image-title', $this->tplIndex);
?>

                                        </td>
                                        <td class="box-delete-button">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77637670260c119a0c0f450_93790539', 'boxes-box-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                        </td>
                                    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        <?php
}
}
/* {/block 'boxes-box-comparelist-products'} */
/* {block 'boxes-box-comparelist-link'} */
class Block_66594963860c119a0c20b24_02589406 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <hr class="hr-no-top">
                                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'popup') {
echo " popup";
}
$_prefixVariable10=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable11=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_target'] === 'blank') {
echo "_blank";
} else {
echo "_self";
}
$_prefixVariable12=ob_get_clean();
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12,'data'=>array("modal-classes"=>"modal-fullwidth")));
$_block_repeat=true;
echo $_block_plugin28->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12,'data'=>array("modal-classes"=>"modal-fullwidth")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin28->render(array('class'=>"btn btn-outline-primary btn-sm btn-block".$_prefixVariable10,'href'=>$_prefixVariable11,'target'=>$_prefixVariable12,'data'=>array("modal-classes"=>"modal-fullwidth")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'boxes-box-comparelist-link'} */
/* {block 'boxes-box-comparelist-collapse'} */
class Block_171770341860c119a0bfcf50_65078813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin21->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140049734460c119a0bfee57_08374019', 'boxes-box-comparelist-products', $this->tplIndex);
?>

                        <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 1) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66594963860c119a0c20b24_02589406', 'boxes-box-comparelist-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin21->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'boxes-box-comparelist-collapse'} */
/* {block 'boxes-box-comparelist-content'} */
class Block_17847823560c119a0bf7e48_17322414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64077800560c119a0bf8301_45086816', 'boxes-box-comparelist-toggle-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196350157960c119a0bfc336_50787109', 'boxes-box-comparelist-title', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171770341860c119a0bfcf50_65078813', 'boxes-box-comparelist-collapse', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'boxes-box-comparelist-content'} */
/* {block 'boxes-box-comparelist-hr-end'} */
class Block_151464057760c119a0c2ac96_50419991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-comparelist-hr-end'} */
/* {block 'blog-preview-no-items'} */
class Block_23909579860c119a0c2bf43_94220433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="d-none box-compare" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
"></section>
        <?php
}
}
/* {/block 'blog-preview-no-items'} */
/* {block 'boxes-box-comparelist'} */
class Block_168349104660c119a0bf36d1_41984354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-comparelist' => 
  array (
    0 => 'Block_168349104660c119a0bf36d1_41984354',
  ),
  'boxes-box-comparelist-content' => 
  array (
    0 => 'Block_17847823560c119a0bf7e48_17322414',
  ),
  'boxes-box-comparelist-toggle-title' => 
  array (
    0 => 'Block_64077800560c119a0bf8301_45086816',
  ),
  'boxes-box-comparelist-title' => 
  array (
    0 => 'Block_196350157960c119a0bfc336_50787109',
  ),
  'boxes-box-comparelist-collapse' => 
  array (
    0 => 'Block_171770341860c119a0bfcf50_65078813',
  ),
  'boxes-box-comparelist-products' => 
  array (
    0 => 'Block_140049734460c119a0bfee57_08374019',
  ),
  'boxes-box-comparelist-dropdown-products-image-title' => 
  array (
    0 => 'Block_130108616060c119a0c020b2_81762445',
  ),
  'boxes-box-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_74211693060c119a0c05484_79967878',
  ),
  'boxes-box-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_60537742160c119a0c0a2b7_73763507',
  ),
  'boxes-box-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_77637670260c119a0c0f450_93790539',
  ),
  'boxes-box-comparelist-link' => 
  array (
    0 => 'Block_66594963860c119a0c20b24_02589406',
  ),
  'boxes-box-comparelist-hr-end' => 
  array (
    0 => 'Block_151464057760c119a0c2ac96_50419991',
  ),
  'blog-preview-no-items' => 
  array (
    0 => 'Block_23909579860c119a0c2bf43_94220433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
    <?php $_smarty_tpl->_assignInScope('maxItems', $_smarty_tpl->tpl_vars['oBox']->value->getItemCount());?>
    <?php $_smarty_tpl->_assignInScope('itemCount', count($_smarty_tpl->tpl_vars['oBox']->value->getProducts()));?>
    <?php if ($_smarty_tpl->tpl_vars['itemCount']->value > 0) {?>
        <div class="box box-compare box-normal" id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17847823560c119a0bf7e48_17322414', 'boxes-box-comparelist-content', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151464057760c119a0c2ac96_50419991', 'boxes-box-comparelist-hr-end', $this->tplIndex);
?>

        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23909579860c119a0c2bf43_94220433', 'blog-preview-no-items', $this->tplIndex);
?>

    <?php }?>
    <?php }
}
}
/* {/block 'boxes-box-comparelist'} */
}
