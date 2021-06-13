<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:42
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\basket\cart_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d2af6b79_17625385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea339b7186aa6eca158f22604e9793be3dfb4719' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\basket\\cart_dropdown.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/image.tpl' => 1,
  ),
),false)) {
function content_60c117d2af6b79_17625385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135596087060c117d2aa6b46_17708867', 'basket-cart-dropdown');
?>

<?php }
/* {block 'basket-cart-dropdown-cart-item-item-image'} */
class Block_134136258960c117d2aaca62_42613359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin66 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin66, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin66->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin67 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin67, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin67->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fluid'=>false,'item'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel,'square'=>false,'srcSize'=>'xs','sizes'=>'45px','class'=>'img-sm'), 0, true);
?>
                                                                <?php $_block_repeat=false;
echo $_block_plugin67->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin66->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-image'} */
/* {block 'basket-cart-dropdown-cart-item-item-link'} */
class Block_93081110760c117d2ab5a44_75919321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_block_plugin68 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin68, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin68->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin68->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin69 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin69, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin69->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php $_block_plugin70 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin70, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)));
$_block_repeat=true;
echo $_block_plugin70->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName ));?>

                                                                <?php $_block_repeat=false;
echo $_block_plugin70->render(array('href'=>$_smarty_tpl->tpl_vars['oPosition']->value->Artikel->cURLFull,'title'=>htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_repeat=false;
echo $_block_plugin69->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-link'} */
/* {block 'basket-cart-dropdown-cart-item-item-price'} */
class Block_13758012560c117d2ac4eb5_48401582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->istKonfigVater()) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cKonfigpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                        <?php }?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-item-price'} */
/* {block 'basket-cart-dropdown-cart-item-no-item-count'} */
class Block_14626818560c117d2acbdf6_38716530 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td>
                                                        <?php $_block_plugin71 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin71, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin71->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                            <?php $_block_plugin72 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin72, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin72->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo $_block_plugin72->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin73 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin73, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin73->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'replace_delim' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->nAnzahl ));?>
x
                                                            <?php $_block_repeat=false;
echo $_block_plugin73->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                            <?php $_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin74->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                                <?php echo mb_convert_encoding(htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trans' ][ 0 ], array( $_smarty_tpl->tpl_vars['oPosition']->value->cName )), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>

                                                            <?php $_block_repeat=false;
echo $_block_plugin74->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php $_block_repeat=false;
echo $_block_plugin71->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-no-item-count'} */
/* {block 'basket-cart-dropdown-cart-item-noitem-price'} */
class Block_162373989560c117d2ad00b2_71368958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <td class="text-right-util text-nowrap-util">
                                                        <?php echo $_smarty_tpl->tpl_vars['oPosition']->value->cEinzelpreisLocalized[$_smarty_tpl->tpl_vars['NettoPreise']->value][$_SESSION['cWaehrungName']];?>

                                                    </td>
                                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-noitem-price'} */
/* {block 'basket-cart-dropdown-cart-item'} */
class Block_53484096960c117d2aa8839_61156624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Warenkorb']->PositionenArr, 'oPosition');
$_smarty_tpl->tpl_vars['oPosition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oPosition']->value) {
$_smarty_tpl->tpl_vars['oPosition']->do_else = false;
?>
                                    <?php if (!$_smarty_tpl->tpl_vars['oPosition']->value->istKonfigKind()) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == C_WARENKORBPOS_TYP_ARTIKEL || $_smarty_tpl->tpl_vars['oPosition']->value->nPosTyp == C_WARENKORBPOS_TYP_GRATISGESCHENK) {?>
                                            <tr>
                                                <td>
                                                    <?php $_block_plugin65 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin65, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array());
$_block_repeat=true;
echo $_block_plugin65->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134136258960c117d2aaca62_42613359', 'basket-cart-dropdown-cart-item-item-image', $this->tplIndex);
?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93081110760c117d2ab5a44_75919321', 'basket-cart-dropdown-cart-item-item-link', $this->tplIndex);
?>

                                                    <?php $_block_repeat=false;
echo $_block_plugin65->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                </td>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13758012560c117d2ac4eb5_48401582', 'basket-cart-dropdown-cart-item-item-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14626818560c117d2acbdf6_38716530', 'basket-cart-dropdown-cart-item-no-item-count', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162373989560c117d2ad00b2_71368958', 'basket-cart-dropdown-cart-item-noitem-price', $this->tplIndex);
?>

                                            </tr>
                                        <?php }?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item'} */
/* {block 'basket-cart-dropdown-cart-item-net'} */
class Block_10315166760c117d2ad2cc1_01841602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li class="cart-dropdown-total-item">
                                        <?php if (empty($_SESSION['Versandart'])) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                        <?php }?> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'net'),$_smarty_tpl ) );?>
) <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[$_smarty_tpl->tpl_vars['NettoPreise']->value];?>
</span>
                                    </li>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-net'} */
/* {block 'basket-cart-dropdown-cart-item-tax'} */
class Block_194875814060c117d2ad70a1_00362711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Steuerpositionen']->value, 'Steuerposition');
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Steuerposition']->value) {
$_smarty_tpl->tpl_vars['Steuerposition']->do_else = false;
?>
                                        <li class="cart-dropdown-total-item">
                                            <?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cName;?>

                                            <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['Steuerposition']->value->cPreisLocalized;?>
</span>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-tax'} */
/* {block 'basket-cart-dropdown-cart-item-total'} */
class Block_191572922360c117d2ad9898_31148688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <li class="font-weight-bold-util">
                                    <?php if (empty($_SESSION['Versandart'])) {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'subtotal','section'=>'account data'),$_smarty_tpl ) );?>

                                    <?php } else { ?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'totalSum'),$_smarty_tpl ) );?>

                                    <?php }?>: <span class="cart-dropdown-total-item-price"><?php echo $_smarty_tpl->tpl_vars['WarensummeLocalized']->value[0];?>
</span>
                                </li>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-total'} */
/* {block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
class Block_181445557560c117d2adc1d3_09702484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php if ($_smarty_tpl->tpl_vars['favourableShippingString']->value !== '') {?>
                                    <li class="cart-dropdown-total-item"><?php echo $_smarty_tpl->tpl_vars['favourableShippingString']->value;?>
</li>
                                <?php }?>
                            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-item-favourable-shipping'} */
/* {block 'basket-cart-dropdown-total'} */
class Block_112107256360c117d2ad23b9_11231821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="list-unstyled">
                            <?php if ($_smarty_tpl->tpl_vars['NettoPreise']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10315166760c117d2ad2cc1_01841602', 'basket-cart-dropdown-cart-item-net', $this->tplIndex);
?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_steuerpos_anzeigen'] !== 'N' && (isset($_smarty_tpl->tpl_vars['Steuerpositionen']->value)) && count($_smarty_tpl->tpl_vars['Steuerpositionen']->value) > 0) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194875814060c117d2ad70a1_00362711', 'basket-cart-dropdown-cart-item-tax', $this->tplIndex);
?>

                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191572922360c117d2ad9898_31148688', 'basket-cart-dropdown-cart-item-total', $this->tplIndex);
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181445557560c117d2adc1d3_09702484', 'basket-cart-dropdown-cart-item-favourable-shipping', $this->tplIndex);
?>

                        </ul>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-total'} */
/* {block 'basket-cart-dropdown-buttons'} */
class Block_79532243160c117d2add8e5_13531509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array('class'=>"cart-dropdown-buttons"));
$_block_repeat=true;
echo $_block_plugin75->render(array('class'=>"cart-dropdown-buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin76->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'bestellvorgang.php'),$_smarty_tpl ) );
$_prefixVariable44=ob_get_clean();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"));
$_block_repeat=true;
echo $_block_plugin77->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'nextStepCheckout','section'=>'checkout'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin77->render(array('variant'=>"outline-primary",'type'=>"link",'block'=>true,'size'=>"sm",'href'=>$_prefixVariable44."?wk=1",'class'=>"cart-dropdown-next"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin76->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'lg'=>6));
$_block_repeat=true;
echo $_block_plugin78->render(array('cols'=>12,'lg'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );
$_prefixVariable45=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable46=ob_get_clean();
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46));
$_block_repeat=true;
echo $_block_plugin79->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotoBasket'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin79->render(array('variant'=>"primary",'type'=>"link",'block'=>true,'size'=>"sm",'title'=>$_prefixVariable45,'href'=>$_prefixVariable46), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin78->render(array('cols'=>12,'lg'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_block_repeat=false;
echo $_block_plugin75->render(array('class'=>"cart-dropdown-buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'basket-cart-dropdown-buttons'} */
/* {block 'basket-cart-dropdown-shipping-free-hint'} */
class Block_54436456660c117d2ae4176_81178937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <hr>
                            <ul class="cart-dropdown-shipping-notice list-icons font-size-sm">
                                <li>
                                    <a class="popup"
                                       href="<?php if (!empty($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value) && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo $_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
} else { ?>#<?php }?>"
                                       data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingInfo','section'=>'login'),$_smarty_tpl ) );?>
">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value,160,"..." ));?>

                                </li>
                            </ul>
                        <?php
}
}
/* {/block 'basket-cart-dropdown-shipping-free-hint'} */
/* {block 'basket-cart-dropdown-cart-items-content'} */
class Block_38291245760c117d2aa8390_81346583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="table-responsive max-h-sm lg-max-h">
                    <table class="table table-striped dropdown-cart-items">
                        <tbody>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53484096960c117d2aa8839_61156624', 'basket-cart-dropdown-cart-item', $this->tplIndex);
?>

                        </tbody>
                    </table>
                </div>
                <div class="dropdown-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112107256360c117d2ad23b9_11231821', 'basket-cart-dropdown-total', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79532243160c117d2add8e5_13531509', 'basket-cart-dropdown-buttons', $this->tplIndex);
?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['WarenkorbVersandkostenfreiHinweis']->value)) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54436456660c117d2ae4176_81178937', 'basket-cart-dropdown-shipping-free-hint', $this->tplIndex);
?>

                    <?php }?>
                </div>
            <?php
}
}
/* {/block 'basket-cart-dropdown-cart-items-content'} */
/* {block 'basket-cart-dropdown-hint-empty'} */
class Block_100153952760c117d2aef976_78232404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'warenkorb.php'),$_smarty_tpl ) );
$_prefixVariable47 = ob_get_clean();
ob_start();
echo $_prefixVariable47;
$_prefixVariable48=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );
$_prefixVariable49=ob_get_clean();
$_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49));
$_block_repeat=true;
echo $_block_plugin80->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'checkout','key'=>'emptybasket'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin80->render(array('class'=>"cart-dropdown-empty",'href'=>$_prefixVariable48,'rel'=>"nofollow",'title'=>$_prefixVariable49), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'basket-cart-dropdown-hint-empty'} */
/* {block 'basket-cart-dropdown'} */
class Block_135596087060c117d2aa6b46_17708867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'basket-cart-dropdown' => 
  array (
    0 => 'Block_135596087060c117d2aa6b46_17708867',
  ),
  'basket-cart-dropdown-cart-items-content' => 
  array (
    0 => 'Block_38291245760c117d2aa8390_81346583',
  ),
  'basket-cart-dropdown-cart-item' => 
  array (
    0 => 'Block_53484096960c117d2aa8839_61156624',
  ),
  'basket-cart-dropdown-cart-item-item-image' => 
  array (
    0 => 'Block_134136258960c117d2aaca62_42613359',
  ),
  'basket-cart-dropdown-cart-item-item-link' => 
  array (
    0 => 'Block_93081110760c117d2ab5a44_75919321',
  ),
  'basket-cart-dropdown-cart-item-item-price' => 
  array (
    0 => 'Block_13758012560c117d2ac4eb5_48401582',
  ),
  'basket-cart-dropdown-cart-item-no-item-count' => 
  array (
    0 => 'Block_14626818560c117d2acbdf6_38716530',
  ),
  'basket-cart-dropdown-cart-item-noitem-price' => 
  array (
    0 => 'Block_162373989560c117d2ad00b2_71368958',
  ),
  'basket-cart-dropdown-total' => 
  array (
    0 => 'Block_112107256360c117d2ad23b9_11231821',
  ),
  'basket-cart-dropdown-cart-item-net' => 
  array (
    0 => 'Block_10315166760c117d2ad2cc1_01841602',
  ),
  'basket-cart-dropdown-cart-item-tax' => 
  array (
    0 => 'Block_194875814060c117d2ad70a1_00362711',
  ),
  'basket-cart-dropdown-cart-item-total' => 
  array (
    0 => 'Block_191572922360c117d2ad9898_31148688',
  ),
  'basket-cart-dropdown-cart-item-favourable-shipping' => 
  array (
    0 => 'Block_181445557560c117d2adc1d3_09702484',
  ),
  'basket-cart-dropdown-buttons' => 
  array (
    0 => 'Block_79532243160c117d2add8e5_13531509',
  ),
  'basket-cart-dropdown-shipping-free-hint' => 
  array (
    0 => 'Block_54436456660c117d2ae4176_81178937',
  ),
  'basket-cart-dropdown-hint-empty' => 
  array (
    0 => 'Block_100153952760c117d2aef976_78232404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="cart-dropdown dropdown-menu dropdown-menu-right lg-min-w-lg">
        <?php if (count($_SESSION['Warenkorb']->PositionenArr) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38291245760c117d2aa8390_81346583', 'basket-cart-dropdown-cart-items-content', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100153952760c117d2aef976_78232404', 'basket-cart-dropdown-hint-empty', $this->tplIndex);
?>

        <?php }?>
    </div>
<?php
}
}
/* {/block 'basket-cart-dropdown'} */
}
