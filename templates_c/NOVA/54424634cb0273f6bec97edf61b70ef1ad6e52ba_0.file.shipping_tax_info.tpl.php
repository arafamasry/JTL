<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:06
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\shipping_tax_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c12456e22558_61407033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54424634cb0273f6bec97edf61b70ef1ad6e52ba' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\shipping_tax_info.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c12456e22558_61407033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136530343460c12456e02fd9_30667849', 'snippets-shipping-tax-info');
?>

<?php }
/* {block 'snippets-shipping-tax-info-tax-data'} */
class Block_91226228660c12456e03e33_00025814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!empty($_smarty_tpl->tpl_vars['taxdata']->value['text'])) {
echo $_smarty_tpl->tpl_vars['taxdata']->value['text'];
} else {
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_ust_auszeichnung'] === 'auto') {
if ($_smarty_tpl->tpl_vars['taxdata']->value['net']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'excl','section'=>'productDetails'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'incl','section'=>'productDetails'),$_smarty_tpl ) );
}?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['taxdata']->value['tax'];?>
% <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'vat','section'=>'productDetails'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_ust_auszeichnung'] === 'endpreis') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'finalprice','section'=>'productDetails'),$_smarty_tpl ) );
}
}?>
        <?php
}
}
/* {/block 'snippets-shipping-tax-info-tax-data'} */
/* {block 'snippets-shipping-tax-info-zzgl-comma'} */
class Block_154169474160c12456e0a504_06101623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                ,
                <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-comma'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
class Block_113148422060c12456e0c648_70483113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxdata']->value['countries'], 'country', true, 'cISO');
$_smarty_tpl->tpl_vars['country']->iteration = 0;
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cISO']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
$_smarty_tpl->tpl_vars['country']->iteration++;
$_smarty_tpl->tpl_vars['country']->last = $_smarty_tpl->tpl_vars['country']->iteration === $_smarty_tpl->tpl_vars['country']->total;
$__foreach_country_14_saved = $_smarty_tpl->tpl_vars['country'];
echo "<abbr title='";
echo (string)$_smarty_tpl->tpl_vars['country']->value;
echo "'>";
echo (string)$_smarty_tpl->tpl_vars['cISO']->value;
echo "</abbr>";
if (!$_smarty_tpl->tpl_vars['country']->last) {
echo "&nbsp;";
}
$_smarty_tpl->tpl_vars['country'] = $__foreach_country_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('countries', $_prefixVariable10);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingCostsAtExtended','section'=>'basket','printf'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );?>

                                <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
echo "?shipping_calculator=0";
}
$_prefixVariable11=ob_get_clean();
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin38->render(array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin38->render(array('href'=>$_prefixVariable11,'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-D'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
class Block_153840013260c12456e13f32_30998384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'else'),$_smarty_tpl ) );
$_prefixVariable12=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable13=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_prefixVariable14=ob_get_clean();
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14));
$_block_repeat=true;
echo $_block_plugin39->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noShippingcostsTo'),$_smarty_tpl ) );?>

                                <?php $_block_repeat=false;
echo $_block_plugin39->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup",'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>((string)$_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']).", ".$_prefixVariable12." ".$_prefixVariable13." ".$_prefixVariable14), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link'} */
/* {block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
class Block_104389763260c12456e0b9e3_30189739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandkostenfrei_darstellung'] === 'D') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113148422060c12456e0c648_70483113', 'snippets-shipping-tax-info-zzgl-show-shipping-free-D', $this->tplIndex);
?>

                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153840013260c12456e13f32_30998384', 'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link', $this->tplIndex);
?>

                        <?php }?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-show-shipping-free'} */
/* {block 'snippets-shipping-tax-info-zzgl-special-page'} */
class Block_106385357960c12456e18d29_72058909 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'plus','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"));
$_block_repeat=true;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin40->render(array('href'=>((string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL())."?shipping_calculator=0",'rel'=>"nofollow",'class'=>"shipment popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl-special-page'} */
/* {block 'snippets-shipping-tax-info-zzgl'} */
class Block_7591562160c12456e0a094_36490935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154169474160c12456e0a504_06101623', 'snippets-shipping-tax-info-zzgl-comma', $this->tplIndex);
?>

                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandfrei_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['taxdata']->value['shippingFreeCountries']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104389763260c12456e0b9e3_30189739', 'snippets-shipping-tax-info-zzgl-show-shipping-free', $this->tplIndex);
?>

                <?php } elseif ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106385357960c12456e18d29_72058909', 'snippets-shipping-tax-info-zzgl-special-page', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-zzgl'} */
/* {block 'snippets-shipping-tax-info-inkl'} */
class Block_78571142660c12456e1c392_76048903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                , <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'incl','section'=>'productDetails'),$_smarty_tpl ) );?>
 <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {
echo (string)$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL();
}
$_prefixVariable15=ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"));
$_block_repeat=true;
echo $_block_plugin41->render(array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shipping','section'=>'basket'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin41->render(array('href'=>$_prefixVariable15,'rel'=>"nofollow",'class'=>"shipment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'snippets-shipping-tax-info-inkl'} */
/* {block 'snippets-shipping-tax-info-content'} */
class Block_202698793760c12456e03858_56914608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91226228660c12456e03e33_00025814', 'snippets-shipping-tax-info-tax-data', $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'zzgl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7591562160c12456e0a094_36490935', 'snippets-shipping-tax-info-zzgl', $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandhinweis'] === 'inkl') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78571142660c12456e1c392_76048903', 'snippets-shipping-tax-info-inkl', $this->tplIndex);
?>

        <?php }?>
    <?php
}
}
/* {/block 'snippets-shipping-tax-info-content'} */
/* {block 'snippets-shipping-tax-info-shipping-class'} */
class Block_197117279460c12456e1fe49_65215876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!empty($_smarty_tpl->tpl_vars['taxdata']->value['shippingClass']) && $_smarty_tpl->tpl_vars['taxdata']->value['shippingClass'] !== 'standard' && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_versandklasse_anzeigen'] === 'Y') {?>
            (<?php echo $_smarty_tpl->tpl_vars['taxdata']->value['shippingClass'];?>
)
        <?php }?>
    <?php
}
}
/* {/block 'snippets-shipping-tax-info-shipping-class'} */
/* {block 'snippets-shipping-tax-info'} */
class Block_136530343460c12456e02fd9_30667849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-shipping-tax-info' => 
  array (
    0 => 'Block_136530343460c12456e02fd9_30667849',
  ),
  'snippets-shipping-tax-info-content' => 
  array (
    0 => 'Block_202698793760c12456e03858_56914608',
  ),
  'snippets-shipping-tax-info-tax-data' => 
  array (
    0 => 'Block_91226228660c12456e03e33_00025814',
  ),
  'snippets-shipping-tax-info-zzgl' => 
  array (
    0 => 'Block_7591562160c12456e0a094_36490935',
  ),
  'snippets-shipping-tax-info-zzgl-comma' => 
  array (
    0 => 'Block_154169474160c12456e0a504_06101623',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free' => 
  array (
    0 => 'Block_104389763260c12456e0b9e3_30189739',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-D' => 
  array (
    0 => 'Block_113148422060c12456e0c648_70483113',
  ),
  'snippets-shipping-tax-info-zzgl-show-shipping-free-free-link' => 
  array (
    0 => 'Block_153840013260c12456e13f32_30998384',
  ),
  'snippets-shipping-tax-info-zzgl-special-page' => 
  array (
    0 => 'Block_106385357960c12456e18d29_72058909',
  ),
  'snippets-shipping-tax-info-inkl' => 
  array (
    0 => 'Block_78571142660c12456e1c392_76048903',
  ),
  'snippets-shipping-tax-info-shipping-class' => 
  array (
    0 => 'Block_197117279460c12456e1fe49_65215876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202698793760c12456e03858_56914608', 'snippets-shipping-tax-info-content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197117279460c12456e1fe49_65215876', 'snippets-shipping-tax-info-shipping-class', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-shipping-tax-info'} */
}
