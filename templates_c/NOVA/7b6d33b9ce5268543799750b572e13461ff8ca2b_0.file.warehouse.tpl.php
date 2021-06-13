<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:07
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\warehouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245795aa92_22013708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b6d33b9ce5268543799750b572e13461ff8ca2b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\warehouse.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1245795aa92_22013708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39064708160c124578f2a20_85259875', 'productdetails-warehouse');
?>

<?php }
/* {block 'productdetails-warehouse-detail-link'} */
class Block_36216237460c12457906569_54732269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('no-gutters'=>true,'class'=>"product-stock-info row"));
$_block_repeat=true;
echo $_block_plugin42->render(array('no-gutters'=>true,'class'=>"product-stock-info row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin43->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")));
$_block_repeat=true;
echo $_block_plugin44->render(array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="fas fa-map-marker-alt icon-mr-2"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouseAvailability'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin44->render(array('class'=>"product-stock-info-button",'variant'=>"link",'data'=>array("toggle"=>"modal","target"=>"#warehouseAvailability")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin43->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin42->render(array('no-gutters'=>true,'class'=>"product-stock-info row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-warehouse-detail-link'} */
/* {block 'productdetails-warehouse-modal-content-header'} */
class Block_18669757060c12457917265_06733900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"warehouse-row"));
$_block_repeat=true;
echo $_block_plugin46->render(array('class'=>"warehouse-row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin47->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouse'),$_smarty_tpl ) );?>
</strong>
                            <?php $_block_repeat=false;
echo $_block_plugin47->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"warehouse-right"));
$_block_repeat=true;
echo $_block_plugin48->render(array('class'=>"warehouse-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'status'),$_smarty_tpl ) );?>
</strong>
                            <?php $_block_repeat=false;
echo $_block_plugin48->render(array('class'=>"warehouse-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin46->render(array('class'=>"warehouse-row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <hr>
                    <?php
}
}
/* {/block 'productdetails-warehouse-modal-content-header'} */
/* {block 'productdetails-warehouse-modal-content-items'} */
class Block_11170570060c1245791ded1_01897324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr, 'oWarenlager');
$_smarty_tpl->tpl_vars['oWarenlager']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oWarenlager']->value) {
$_smarty_tpl->tpl_vars['oWarenlager']->do_else = false;
?>
                            <?php $_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"warehouse-row"));
$_block_repeat=true;
echo $_block_plugin49->render(array('class'=>"warehouse-row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin50->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->getName();?>
</strong>
                                <?php $_block_repeat=false;
echo $_block_plugin50->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"warehouse-right"));
$_block_repeat=true;
echo $_block_plugin51->render(array('class'=>"warehouse-right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <span class="signal_image">
                                         <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && $_smarty_tpl->tpl_vars['oWarenlager']->value->getBackorderString($_smarty_tpl->tpl_vars['Artikel']->value) !== '' && ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U')) {?>
                                             <span class="status-1"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->getBackorderString($_smarty_tpl->tpl_vars['Artikel']->value);?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] !== 'N' && $_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand <= 0 && $_smarty_tpl->tpl_vars['Artikel']->value->fLieferantenlagerbestand > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->fLieferzeit > 0 && ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'N' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'I' || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U')) {?>
                                             <span class="status-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supplierStockNotice','printf'=>$_smarty_tpl->tpl_vars['Artikel']->value->fLieferzeit),$_smarty_tpl ) );?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'verfuegbarkeit' || $_smarty_tpl->tpl_vars['anzeige']->value === 'genau') {?>
                                            <span class="status-<?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->cLagerhinweis[$_smarty_tpl->tpl_vars['anzeige']->value];?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'ampel') {?>
                                            <span class="status-<?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['oWarenlager']->value->oLageranzeige->AmpelText;?>
</span>
                                         <?php }?>
                                    </span>
                                <?php $_block_repeat=false;
echo $_block_plugin51->render(array('class'=>"warehouse-right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin49->render(array('class'=>"warehouse-row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <hr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
/* {/block 'productdetails-warehouse-modal-content-items'} */
/* {block 'productdetails-warehouse-modal-content'} */
class Block_61955910360c12457916363_89129835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18669757060c12457917265_06733900', 'productdetails-warehouse-modal-content-header', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11170570060c1245791ded1_01897324', 'productdetails-warehouse-modal-content-items', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'productdetails-warehouse-modal-content'} */
/* {block 'productdetails-warehouse-modal'} */
class Block_171937122460c1245790fce5_00154620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'warehouseAvailability'),$_smarty_tpl ) );
$_prefixVariable16=ob_get_clean();
$_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'modal\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('modal', array('id'=>"warehouseAvailability",'title'=>$_prefixVariable16,'centered'=>true,'size'=>"lg",'class'=>"fade"));
$_block_repeat=true;
echo $_block_plugin45->render(array('id'=>"warehouseAvailability",'title'=>$_prefixVariable16,'centered'=>true,'size'=>"lg",'class'=>"fade"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61955910360c12457916363_89129835', 'productdetails-warehouse-modal-content', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin45->render(array('id'=>"warehouseAvailability",'title'=>$_prefixVariable16,'centered'=>true,'size'=>"lg",'class'=>"fade"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-warehouse-modal'} */
/* {block 'productdetails-warehouse'} */
class Block_39064708160c124578f2a20_85259875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-warehouse' => 
  array (
    0 => 'Block_39064708160c124578f2a20_85259875',
  ),
  'productdetails-warehouse-detail-link' => 
  array (
    0 => 'Block_36216237460c12457906569_54732269',
  ),
  'productdetails-warehouse-modal' => 
  array (
    0 => 'Block_171937122460c1245790fce5_00154620',
  ),
  'productdetails-warehouse-modal-content' => 
  array (
    0 => 'Block_61955910360c12457916363_89129835',
  ),
  'productdetails-warehouse-modal-content-header' => 
  array (
    0 => 'Block_18669757060c12457917265_06733900',
  ),
  'productdetails-warehouse-modal-content-items' => 
  array (
    0 => 'Block_11170570060c1245791ded1_01897324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('anzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikel_lagerbestandsanzeige']);?>
    <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && (isset($_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oWarenlager_arr) > 1 && ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten !== 'Y' || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'Y' || $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fZulauf > 0)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36216237460c12457906569_54732269', 'productdetails-warehouse-detail-link', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171937122460c1245790fce5_00154620', 'productdetails-warehouse-modal', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-warehouse'} */
}
