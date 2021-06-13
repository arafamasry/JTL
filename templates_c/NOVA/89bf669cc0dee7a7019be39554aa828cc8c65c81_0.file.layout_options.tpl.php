<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:08
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\layout_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2033c957233_78836278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89bf669cc0dee7a7019be39554aa828cc8c65c81' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\layout_options.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c2033c957233_78836278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182535068860c2033c9494e1_41105016', 'productlist-layout-options');
?>

<?php }
/* {block 'productlist-layout-options-quare'} */
class Block_101601292260c2033c94c561_18145968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung === (defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)) {
echo " active";
}
$_prefixVariable18=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'list','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable19=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'list','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable18,'role'=>"button",'title'=>$_prefixVariable19,'aria'=>array("label"=>$_prefixVariable20)));
$_block_repeat=true;
echo $_block_plugin46->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable18,'role'=>"button",'title'=>$_prefixVariable19,'aria'=>array("label"=>$_prefixVariable20)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="fa fa-th-list d-none d-md-inline-flex"></span><span class="fa fa-square d-inline-flex d-md-none"></span>
                <?php $_block_repeat=false;
echo $_block_plugin46->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_LISTE') ? constant('ERWDARSTELLUNG_ANSICHT_LISTE') : null)],'id'=>"ed_list",'class'=>"btn btn-outline-secondary btn-option ed list".$_prefixVariable18,'role'=>"button",'title'=>$_prefixVariable19,'aria'=>array("label"=>$_prefixVariable20)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productlist-layout-options-quare'} */
/* {block 'productlist-layout-options-list'} */
class Block_167321753160c2033c952573_59439898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
if ($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung === (defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)) {
echo " active";
}
$_prefixVariable21=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gallery','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable22=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gallery','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable23 = ob_get_clean();
$_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable21,'role'=>"button",'title'=>$_prefixVariable22,'aria'=>array("label"=>$_prefixVariable23)));
$_block_repeat=true;
echo $_block_plugin47->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable21,'role'=>"button",'title'=>$_prefixVariable22,'aria'=>array("label"=>$_prefixVariable23)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <span class="fa fa-th-large"></span>
                <?php $_block_repeat=false;
echo $_block_plugin47->render(array('href'=>$_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->cURL_arr[(defined('ERWDARSTELLUNG_ANSICHT_GALERIE') ? constant('ERWDARSTELLUNG_ANSICHT_GALERIE') : null)],'id'=>"ed_gallery",'class'=>"btn btn-outline-secondary btn-option ed gallery".$_prefixVariable21,'role'=>"button",'title'=>$_prefixVariable22,'aria'=>array("label"=>$_prefixVariable23)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productlist-layout-options-list'} */
/* {block 'productlist-layout-options'} */
class Block_182535068860c2033c9494e1_41105016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-layout-options' => 
  array (
    0 => 'Block_182535068860c2033c9494e1_41105016',
  ),
  'productlist-layout-options-quare' => 
  array (
    0 => 'Block_101601292260c2033c94c561_18145968',
  ),
  'productlist-layout-options-list' => 
  array (
    0 => 'Block_167321753160c2033c952573_59439898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['oErweiterteDarstellung']->value->nDarstellung)) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_erw_darstellung'] === 'Y' && empty($_smarty_tpl->tpl_vars['AktuelleKategorie']->value->categoryFunctionAttributes['darstellung']) && $_smarty_tpl->tpl_vars['navid']->value === 'header') {?>
        <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['buttongroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['buttongroup'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'buttongroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('buttongroup', array());
$_block_repeat=true;
echo $_block_plugin45->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101601292260c2033c94c561_18145968', 'productlist-layout-options-quare', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167321753160c2033c952573_59439898', 'productlist-layout-options-list', $this->tplIndex);
?>

        <?php $_block_repeat=false;
echo $_block_plugin45->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'productlist-layout-options'} */
}
