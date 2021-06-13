<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:08
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\result_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033c4810c7_85862948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30256c225bd2f29fa7d71f9924e7d191694ac7ff' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\result_options.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productlist/layout_options.tpl' => 1,
  ),
),false)) {
function content_60c2033c4810c7_85862948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155247703660c2033c46d124_55523033', 'productlist-result-options');
?>

<?php }
/* {block 'productlist-result-options-filter-link-filter'} */
class Block_36111792160c2033c4725b8_02039066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['filterPlacement']->value)) {
echo (string)$_smarty_tpl->tpl_vars['filterPlacement']->value;
} else {
echo "modal";
}
$_prefixVariable17=ob_get_clean();
$_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('id'=>"js-filters",'variant'=>"outline-secondary",'class'=>"text-nowrap-util",'data'=>array("toggle"=>$_prefixVariable17,"target"=>"#collapseFilter"),'aria'=>array("expanded"=>"false","controls"=>"collapseFilter"),'role'=>"button",'block'=>$_smarty_tpl->tpl_vars['filterPlacement']->value === 'collapse'));
$_block_repeat=true;
echo $_block_plugin43->render(array('id'=>"js-filters",'variant'=>"outline-secondary",'class'=>"text-nowrap-util",'data'=>array("toggle"=>$_prefixVariable17,"target"=>"#collapseFilter"),'aria'=>array("expanded"=>"false","controls"=>"collapseFilter"),'role'=>"button",'block'=>$_smarty_tpl->tpl_vars['filterPlacement']->value === 'collapse'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <span class="fas fa-filter<?php if ($_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterCount() > 0) {?> text-primary<?php }?>"></span>
                            <?php if ($_smarty_tpl->tpl_vars['filterPlacement']->value === 'collapse') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'filterAndSort'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'filter'),$_smarty_tpl ) );
}?>
                        <?php $_block_repeat=false;
echo $_block_plugin43->render(array('id'=>"js-filters",'variant'=>"outline-secondary",'class'=>"text-nowrap-util",'data'=>array("toggle"=>$_prefixVariable17,"target"=>"#collapseFilter"),'aria'=>array("expanded"=>"false","controls"=>"collapseFilter"),'role'=>"button",'block'=>$_smarty_tpl->tpl_vars['filterPlacement']->value === 'collapse'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productlist-result-options-filter-link-filter'} */
/* {block 'productlist-result-options-filter-include-layout-options'} */
class Block_15091954860c2033c47c346_74789042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:productlist/layout_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-result-options-filter-include-layout-options'} */
/* {block 'productlist-result-options-filter-link'} */
class Block_89085533660c2033c471118_61061236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>4,'class'=>"filter-collapsible-control order-1 order-md-0 d-flex"));
$_block_repeat=true;
echo $_block_plugin42->render(array('cols'=>12,'md'=>4,'class'=>"filter-collapsible-control order-1 order-md-0 d-flex"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['show_filters']->value) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36111792160c2033c4725b8_02039066', 'productlist-result-options-filter-link-filter', $this->tplIndex);
?>

                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['filterPlacement']->value) && !$_smarty_tpl->tpl_vars['filterPlacement']->value === "collapse") {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15091954860c2033c47c346_74789042', 'productlist-result-options-filter-include-layout-options', $this->tplIndex);
?>

                <?php }?>
            <?php $_block_repeat=false;
echo $_block_plugin42->render(array('cols'=>12,'md'=>4,'class'=>"filter-collapsible-control order-1 order-md-0 d-flex"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productlist-result-options-filter-link'} */
/* {block 'productlist-result-options-filter-collapsible'} */
class Block_179321586060c2033c47da35_11790740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['show_filters']->value) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['filterPlacement']->value) && $_smarty_tpl->tpl_vars['filterPlacement']->value === 'collapse') {?>
                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"collapseFilter",'class'=>"productlist-filter js-collapse-filter",'aria'=>array("expanded"=>"false")));
$_block_repeat=true;
echo $_block_plugin44->render(array('id'=>"collapseFilter",'class'=>"productlist-filter js-collapse-filter",'aria'=>array("expanded"=>"false")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo $_block_plugin44->render(array('id'=>"collapseFilter",'class'=>"productlist-filter js-collapse-filter",'aria'=>array("expanded"=>"false")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } else { ?>
                    <div class="modal" id="collapseFilter">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'filterAndSort'),$_smarty_tpl ) );?>
</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body js-collapse-filter">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
        <?php
}
}
/* {/block 'productlist-result-options-filter-collapsible'} */
/* {block 'productlist-result-options'} */
class Block_155247703660c2033c46d124_55523033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-result-options' => 
  array (
    0 => 'Block_155247703660c2033c46d124_55523033',
  ),
  'productlist-result-options-filter-link' => 
  array (
    0 => 'Block_89085533660c2033c471118_61061236',
  ),
  'productlist-result-options-filter-link-filter' => 
  array (
    0 => 'Block_36111792160c2033c4725b8_02039066',
  ),
  'productlist-result-options-filter-include-layout-options' => 
  array (
    0 => 'Block_15091954860c2033c47c346_74789042',
  ),
  'productlist-result-options-filter-collapsible' => 
  array (
    0 => 'Block_179321586060c2033c47da35_11790740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('show_filters', (count($_smarty_tpl->tpl_vars['NaviFilter']->value->getAvailableContentFilters()) > 0 && ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['suchfilter_anzeigen_ab'] == 0 || $_smarty_tpl->tpl_vars['NaviFilter']->value->getSearchResults()->getProductCount() >= $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['suchfilter_anzeigen_ab'])) || $_smarty_tpl->tpl_vars['NaviFilter']->value->getFilterCount() > 0);?>
    <div id="result-options">
        <?php $_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin41->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89085533660c2033c471118_61061236', 'productlist-result-options-filter-link', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin41->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179321586060c2033c47da35_11790740', 'productlist-result-options-filter-collapsible', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'productlist-result-options'} */
}
