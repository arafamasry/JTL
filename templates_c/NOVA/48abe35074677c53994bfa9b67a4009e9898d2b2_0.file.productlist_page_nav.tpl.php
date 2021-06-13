<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:07
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\productlist_page_nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033be2f970_16323549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48abe35074677c53994bfa9b67a4009e9898d2b2' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\productlist_page_nav.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productlist/result_options.tpl' => 1,
    'file:productlist/layout_options.tpl' => 1,
  ),
),false)) {
function content_60c2033be2f970_16323549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110518820960c2033bdfe447_99741794', 'snippets-productlist-page-nav');
?>

<?php }
/* {block 'snippets-productlist-page-nav-hr-top'} */
class Block_174227526260c2033be00862_72183529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="productlist-page-nav-top">
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-top'} */
/* {block 'snippets-productlist-page-nav-include-result-options'} */
class Block_106537532860c2033be05236_12125213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if (count($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProducts()) > 0) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_result_options'),$_smarty_tpl ) );?>

                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('filterPlacement', '');?>
                            <?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('filterPlacement', "collapse");?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['isTablet']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal') {?>
                                <?php $_smarty_tpl->_assignInScope('filterPlacement', "modal");?>
                            <?php }?>
                            <div id="improve_search" class="result-option-wrapper <?php if ($_smarty_tpl->tpl_vars['filterPlacement']->value !== 'collapse') {?>d-inline-block btn-group<?php }?> <?php if ($_smarty_tpl->tpl_vars['filterPlacement']->value === '') {?>d-lg-none<?php }?>">
                                <?php $_smarty_tpl->_subTemplateRender('file:productlist/result_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('itemCount'=>$_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount(),'filterPlacement'=>$_smarty_tpl->tpl_vars['filterPlacement']->value), 0, false);
?>
                            </div>
                        <?php
}
}
/* {/block 'snippets-productlist-page-nav-include-result-options'} */
/* {block 'snippets-productlist-page-nav-actions-sort'} */
class Block_81584047060c2033be0b971_93361206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sorting','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable12));
$_block_repeat=true;
echo $_block_plugin32->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getSortingOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin33->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin33->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin32->render(array('class'=>"filter-type-FilterItemSort btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-sort'} */
/* {block 'snippets-productlist-page-nav-actions-items'} */
class Block_169065124460c2033be10499_30516888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productsPerPage','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
$_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdown'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'render'))) {
throw new SmartyException('block tag \'dropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdown', array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable13));
$_block_repeat=true;
echo $_block_plugin34->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable13), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getLimitOptions(), 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <?php $_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()));
$_block_repeat=true;
echo $_block_plugin35->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['option']->value->getName();?>

                                            <?php $_block_repeat=false;
echo $_block_plugin35->render(array('rel'=>"nofollow",'href'=>$_smarty_tpl->tpl_vars['option']->value->getURL(),'class'=>"page-nav-filter-item",'active'=>$_smarty_tpl->tpl_vars['option']->value->isActive()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin34->render(array('class'=>"filter-type-FilterItemLimits btn-group",'variant'=>"outline-secondary",'text'=>$_prefixVariable13), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions-items'} */
/* {block 'snippets-productlist-page-nav-include-layout-options'} */
class Block_138626487960c2033be14ba6_03954634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:productlist/layout_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    <?php
}
}
/* {/block 'snippets-productlist-page-nav-include-layout-options'} */
/* {block 'snippets-productlist-page-nav-actions'} */
class Block_101100158060c2033be0b209_68157978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81584047060c2033be0b971_93361206', 'snippets-productlist-page-nav-actions-sort', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169065124460c2033be10499_30516888', 'snippets-productlist-page-nav-actions-items', $this->tplIndex);
?>

                                <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138626487960c2033be14ba6_03954634', 'snippets-productlist-page-nav-include-layout-options', $this->tplIndex);
?>

                                <?php }?>
                            <?php
}
}
/* {/block 'snippets-productlist-page-nav-actions'} */
/* {block 'snippets-productlist-page-nav-result-options-sort'} */
class Block_50848101760c2033be041e2_27747990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"));
$_block_repeat=true;
echo $_block_plugin31->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106537532860c2033be05236_12125213', 'snippets-productlist-page-nav-include-result-options', $this->tplIndex);
?>

                        <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['isTablet']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101100158060c2033be0b209_68157978', 'snippets-productlist-page-nav-actions', $this->tplIndex);
?>

                        <?php }?>
                    <?php $_block_repeat=false;
echo $_block_plugin31->render(array('cols'=>12,'xl'=>"auto",'class'=>"displayoptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-result-options-sort'} */
/* {block 'snippets-productlist-page-nav-current-page-count'} */
class Block_337217160c2033be165c0_94717019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1) {
echo "productlist-item-border";
}
$_prefixVariable14=ob_get_clean();
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable14));
$_block_repeat=true;
echo $_block_plugin36->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable14), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"products"),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetStart();?>
 - <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getOffsetEnd();?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'of','section'=>'productOverview'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount();?>

                <?php $_block_repeat=false;
echo $_block_plugin36->render(array('cols'=>"auto",'class'=>"productlist-item-info ".$_prefixVariable14), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-productlist-page-nav-current-page-count'} */
/* {block 'snippets-productlist-page-nav-first-page'} */
class Block_115173716560c2033be211b3_86128851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == 1) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'previous','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable15)));
$_block_repeat=true;
echo $_block_plugin38->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable15)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-left"></i><?php $_block_repeat=false;
echo $_block_plugin38->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getPrev()->getURL(),'aria'=>array('label'=>$_prefixVariable15)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-first-page'} */
/* {block 'snippets-productlist-page-nav-button'} */
class Block_75657269560c2033be259a0_71044670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="pagination-site"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'page'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage();?>

                                        </button>
                                    <?php
}
}
/* {/block 'snippets-productlist-page-nav-button'} */
/* {block 'snippets-productlist-page-nav-pages'} */
class Block_93452576660c2033be26e66_34891808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterPagination']->value->getPages(), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                                <div class="dropdown-item page-item<?php if ($_smarty_tpl->tpl_vars['page']->value->isActive()) {?> active<?php }?>">
                                                    <?php $_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()));
$_block_repeat=true;
echo $_block_plugin39->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><span class="pagination-site"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'page'),$_smarty_tpl ) );?>
</span> <?php echo $_smarty_tpl->tpl_vars['page']->value->getPageNumber();
$_block_repeat=false;
echo $_block_plugin39->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['page']->value->getURL()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}
}
/* {/block 'snippets-productlist-page-nav-pages'} */
/* {block 'snippets-productlist-page-nav-last-page'} */
class Block_114552841060c2033be2ad72_56920408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="page-item<?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getCurrentPage() == $_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage()) {?> disabled<?php }?>">
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'next','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable16)));
$_block_repeat=true;
echo $_block_plugin40->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable16)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><i class="fas fa-long-arrow-alt-right"></i><?php $_block_repeat=false;
echo $_block_plugin40->render(array('class'=>"page-link js-pagination-ajax",'href'=>$_smarty_tpl->tpl_vars['filterPagination']->value->getNext()->getURL(),'aria'=>array('label'=>$_prefixVariable16)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    </li>
                                <?php
}
}
/* {/block 'snippets-productlist-page-nav-last-page'} */
/* {block 'snippets-productlist-page-nav-page-nav'} */
class Block_172564799360c2033be1f7a7_00160800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"));
$_block_repeat=true;
echo $_block_plugin37->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <nav class="navbar-pagination" aria-label="Productlist Navigation">
                            <ul class="pagination">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115173716560c2033be211b3_86128851', 'snippets-productlist-page-nav-first-page', $this->tplIndex);
?>

                                <li class="page-item dropdown">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75657269560c2033be259a0_71044670', 'snippets-productlist-page-nav-button', $this->tplIndex);
?>

                                    <div class="dropdown-menu shadow-none">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93452576660c2033be26e66_34891808', 'snippets-productlist-page-nav-pages', $this->tplIndex);
?>

                                    </div>
                                </li>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114552841060c2033be2ad72_56920408', 'snippets-productlist-page-nav-last-page', $this->tplIndex);
?>

                            </ul>
                        </nav>
                    <?php $_block_repeat=false;
echo $_block_plugin37->render(array('cols'=>12,'md'=>"auto",'class'=>"productlist-pagination"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-productlist-page-nav-page-nav'} */
/* {block 'snippets-productlist-page-nav-hr-bottom'} */
class Block_201205400660c2033be2e966_37125252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <hr class="productlist-page-nav-bottom">
        <?php
}
}
/* {/block 'snippets-productlist-page-nav-hr-bottom'} */
/* {block 'snippets-productlist-page-nav'} */
class Block_110518820960c2033bdfe447_99741794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-productlist-page-nav' => 
  array (
    0 => 'Block_110518820960c2033bdfe447_99741794',
  ),
  'snippets-productlist-page-nav-hr-top' => 
  array (
    0 => 'Block_174227526260c2033be00862_72183529',
  ),
  'snippets-productlist-page-nav-result-options-sort' => 
  array (
    0 => 'Block_50848101760c2033be041e2_27747990',
  ),
  'snippets-productlist-page-nav-include-result-options' => 
  array (
    0 => 'Block_106537532860c2033be05236_12125213',
  ),
  'snippets-productlist-page-nav-actions' => 
  array (
    0 => 'Block_101100158060c2033be0b209_68157978',
  ),
  'snippets-productlist-page-nav-actions-sort' => 
  array (
    0 => 'Block_81584047060c2033be0b971_93361206',
  ),
  'snippets-productlist-page-nav-actions-items' => 
  array (
    0 => 'Block_169065124460c2033be10499_30516888',
  ),
  'snippets-productlist-page-nav-include-layout-options' => 
  array (
    0 => 'Block_138626487960c2033be14ba6_03954634',
  ),
  'snippets-productlist-page-nav-current-page-count' => 
  array (
    0 => 'Block_337217160c2033be165c0_94717019',
  ),
  'snippets-productlist-page-nav-page-nav' => 
  array (
    0 => 'Block_172564799360c2033be1f7a7_00160800',
  ),
  'snippets-productlist-page-nav-first-page' => 
  array (
    0 => 'Block_115173716560c2033be211b3_86128851',
  ),
  'snippets-productlist-page-nav-button' => 
  array (
    0 => 'Block_75657269560c2033be259a0_71044670',
  ),
  'snippets-productlist-page-nav-pages' => 
  array (
    0 => 'Block_93452576660c2033be26e66_34891808',
  ),
  'snippets-productlist-page-nav-last-page' => 
  array (
    0 => 'Block_114552841060c2033be2ad72_56920408',
  ),
  'snippets-productlist-page-nav-hr-bottom' => 
  array (
    0 => 'Block_201205400660c2033be2e966_37125252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getProductCount() > 0) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>('opc_before_page_nav_').($_smarty_tpl->tpl_vars['navid']->value)),$_smarty_tpl ) );?>


        <?php if ((($tmp = $_smarty_tpl->tpl_vars['hrTop']->value ?? null)===null||$tmp==='' ? false : $tmp) === true) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174227526260c2033be00862_72183529', 'snippets-productlist-page-nav-hr-top', $this->tplIndex);
?>

        <?php }?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['navid']->value === 'header') {
echo "productlist-page-nav-header-m";
}
$_prefixVariable11=ob_get_clean();
$_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>$_prefixVariable11." productlist-page-nav"));
$_block_repeat=true;
echo $_block_plugin30->render(array('no-gutters'=>true,'class'=>$_prefixVariable11." productlist-page-nav"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if (count($_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults()->getProducts()) > 0 && $_smarty_tpl->tpl_vars['navid']->value === 'header') {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50848101760c2033be041e2_27747990', 'snippets-productlist-page-nav-result-options-sort', $this->tplIndex);
?>

            <?php }?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_337217160c2033be165c0_94717019', 'snippets-productlist-page-nav-current-page-count', $this->tplIndex);
?>

            <?php if ($_smarty_tpl->tpl_vars['Suchergebnisse']->value->getPages()->getMaxPage() > 1 && !($_smarty_tpl->tpl_vars['isMobile']->value && $_smarty_tpl->tpl_vars['navid']->value === 'header')) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172564799360c2033be1f7a7_00160800', 'snippets-productlist-page-nav-page-nav', $this->tplIndex);
?>

            <?php }?>
        <?php $_block_repeat=false;
echo $_block_plugin30->render(array('no-gutters'=>true,'class'=>$_prefixVariable11." productlist-page-nav"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201205400660c2033be2e966_37125252', 'snippets-productlist-page-nav-hr-bottom', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-productlist-page-nav'} */
}
