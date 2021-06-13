<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:18:36
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\page\manufacturers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2031c5168b8_54572096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b4bc463d8f2f8d7d701e0f5a69d540395375070' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\page\\manufacturers.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c2031c5168b8_54572096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180117381560c2031c4caca1_80100680', 'page-manufacturers');
?>

<?php }
/* {block 'page-manufacturers-content'} */
class Block_130739421760c2031c4d4a28_07771801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"page-manufacturers"));
$_block_repeat=true;
echo $_block_plugin1->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"page-manufacturers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin2->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oHersteller_arr']->value, 'mft');
$_smarty_tpl->tpl_vars['mft']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mft']->value) {
$_smarty_tpl->tpl_vars['mft']->do_else = false;
?>
                    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('xl'=>3,'md'=>4,'sm'=>6));
$_block_repeat=true;
echo $_block_plugin3->render(array('xl'=>3,'md'=>4,'sm'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURL,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cMetaTitle));
$_block_repeat=true;
echo $_block_plugin4->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURL,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cMetaTitle), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="square square-image manufacturer-image-wrapper">
                                    <div class="inner">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['mft']->value->getImage(\JTL\Media\Image::SIZE_MD))) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['mft']->value->getImage(\JTL\Media\Image::SIZE_MD),'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['mft']->value->getName(), ENT_QUOTES, 'utf-8', true)),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </div>
                                </div>
                            <?php echo $_smarty_tpl->tpl_vars['mft']->value->getName();?>

                        <?php $_block_repeat=false;
echo $_block_plugin4->render(array('href'=>$_smarty_tpl->tpl_vars['mft']->value->cURL,'title'=>$_smarty_tpl->tpl_vars['mft']->value->cMetaTitle), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_block_repeat=false;
echo $_block_plugin3->render(array('xl'=>3,'md'=>4,'sm'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"page-manufacturers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'page-manufacturers-content'} */
/* {block 'page-manufacturers'} */
class Block_180117381560c2031c4caca1_80100680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page-manufacturers' => 
  array (
    0 => 'Block_180117381560c2031c4caca1_80100680',
  ),
  'page-manufacturers-content' => 
  array (
    0 => 'Block_130739421760c2031c4d4a28_07771801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_manufacturers','inContainer'=>false),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130739421760c2031c4d4a28_07771801', 'page-manufacturers-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page-manufacturers'} */
}
