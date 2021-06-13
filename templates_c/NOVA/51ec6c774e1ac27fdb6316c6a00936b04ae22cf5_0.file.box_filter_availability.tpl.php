<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:19:04
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\boxes\box_filter_availability.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c203389f3237_26429696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ec6c774e1ac27fdb6316c6a00936b04ae22cf5' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\boxes\\box_filter_availability.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/filter/genericFilterItem.tpl' => 1,
  ),
),false)) {
function content_60c203389f3237_26429696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23770361460c203389d5594_11272392', 'boxes-box-filter-availability');
?>

<?php }
/* {block 'boxes-box-filter-availability-content'} */
class Block_77186607660c203389ed724_28264573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/filter/genericFilterItem.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems()), 0, false);
?>
                <?php
}
}
/* {/block 'boxes-box-filter-availability-content'} */
/* {block 'boxes-box-filter-availability-hr'} */
class Block_34187520160c203389f2455_63312205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-filter-hr">
            <?php
}
}
/* {/block 'boxes-box-filter-availability-hr'} */
/* {block 'boxes-box-filter-availability'} */
class Block_23770361460c203389d5594_11272392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-filter-availability' => 
  array (
    0 => 'Block_23770361460c203389d5594_11272392',
  ),
  'boxes-box-filter-availability-content' => 
  array (
    0 => 'Block_77186607660c203389ed724_28264573',
  ),
  'boxes-box-filter-availability-hr' => 
  array (
    0 => 'Block_34187520160c203389f2455_63312205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['nSeitenTyp']->value === (defined('PAGE_ARTIKELLISTE') ? constant('PAGE_ARTIKELLISTE') : null) && !($_smarty_tpl->tpl_vars['isMobile']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_placement'] === 'modal')) {?>
        <div id="sidebox<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
" class="box box-filter-availability d-none d-lg-block">
            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <span class="text-truncate">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'filterAvailability'),$_smarty_tpl ) );?>

                </span>
            <?php $_block_repeat=false;
echo $_block_plugin1->render(array('variant'=>"link",'class'=>"btn-filter-box dropdown-toggle",'block'=>true,'role'=>"button",'data'=>array("toggle"=>"collapse","target"=>"#cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77186607660c203389ed724_28264573', 'boxes-box-filter-availability-content', $this->tplIndex);
?>

            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>"cllps-box".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'visible'=>($_smarty_tpl->tpl_vars['oBox']->value->getItems()->isActive() || $_smarty_tpl->tpl_vars['Einstellungen']->value['template']['productlist']['filter_items_always_visible'] === 'Y')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34187520160c203389f2455_63312205', 'boxes-box-filter-availability-hr', $this->tplIndex);
?>

        </div>
    <?php }
}
}
/* {/block 'boxes-box-filter-availability'} */
}
