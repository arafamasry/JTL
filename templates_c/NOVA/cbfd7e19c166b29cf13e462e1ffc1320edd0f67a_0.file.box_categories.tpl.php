<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:23
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\boxes\box_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1199fdc6d62_27629815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbfd7e19c166b29cf13e462e1ffc1320edd0f67a' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\boxes\\box_categories.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/categories_recursive.tpl' => 1,
  ),
),false)) {
function content_60c1199fdc6d62_27629815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178790625960c1199fda38d4_09119494', 'boxes-box-categories');
?>

<?php }
/* {block 'boxes-box-categories-toggle-title'} */
class Block_81250560460c1199fda9bb7_01268005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"));
$_block_repeat=true;
echo $_block_plugin1->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['oBox']->value->getTitle())) {
echo $_smarty_tpl->tpl_vars['oBox']->value->getTitle();
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'categories'),$_smarty_tpl ) );
}?>
                <?php $_block_repeat=false;
echo $_block_plugin1->render(array('id'=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'href'=>"#crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'data'=>array("toggle"=>"collapse"),'role'=>"button",'aria'=>array("expanded"=>"false","controls"=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID())),'class'=>"box-normal-link dropdown-toggle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'boxes-box-categories-toggle-title'} */
/* {block 'boxes-box-categories-title'} */
class Block_96566332260c1199fdbb2b0_47901585 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="productlist-filter-headline d-none d-md-flex">
                    <?php if (!empty($_smarty_tpl->tpl_vars['oBox']->value->getTitle())) {
echo $_smarty_tpl->tpl_vars['oBox']->value->getTitle();
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'categories'),$_smarty_tpl ) );
}?>
                </div>
            <?php
}
}
/* {/block 'boxes-box-categories-title'} */
/* {block 'boxes-box-categories-include-categories-recursive'} */
class Block_100323919560c1199fdbfb93_41611335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:snippets/categories_recursive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('i'=>0,'categoryId'=>0,'categoryBoxNumber'=>$_smarty_tpl->tpl_vars['oBox']->value->getCustomID(),'limit'=>3,'categories'=>$_smarty_tpl->tpl_vars['oBox']->value->getItems(),'id'=>$_smarty_tpl->tpl_vars['oBox']->value->getID()), 0, false);
?>
                            <?php
}
}
/* {/block 'boxes-box-categories-include-categories-recursive'} */
/* {block 'boxes-box-categories-collapse'} */
class Block_156055532560c1199fdbd5d9_01064778 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))));
$_block_repeat=true;
echo $_block_plugin2->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <div class="nav-panel">
                        <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['nav'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'render'))) {
throw new SmartyException('block tag \'nav\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('nav', array('vertical'=>true));
$_block_repeat=true;
echo $_block_plugin3->render(array('vertical'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100323919560c1199fdbfb93_41611335', 'boxes-box-categories-include-categories-recursive', $this->tplIndex);
?>

                        <?php $_block_repeat=false;
echo $_block_plugin3->render(array('vertical'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php $_block_repeat=false;
echo $_block_plugin2->render(array('class'=>"d-md-block",'visible'=>false,'id'=>"crd-cllps-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()),'aria'=>array("labelledby"=>"crd-hdr-".((string)$_smarty_tpl->tpl_vars['oBox']->value->getID()))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'boxes-box-categories-collapse'} */
/* {block 'boxes-box-categories-hr-end'} */
class Block_88410701060c1199fdc5f27_23600457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <hr class="box-normal-hr">
            <?php
}
}
/* {/block 'boxes-box-categories-hr-end'} */
/* {block 'boxes-box-categories-content'} */
class Block_191712101960c1199fda9546_37477678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81250560460c1199fda9bb7_01268005', 'boxes-box-categories-toggle-title', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96566332260c1199fdbb2b0_47901585', 'boxes-box-categories-title', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156055532560c1199fdbd5d9_01064778', 'boxes-box-categories-collapse', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88410701060c1199fdc5f27_23600457', 'boxes-box-categories-hr-end', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'boxes-box-categories-content'} */
/* {block 'boxes-box-categories'} */
class Block_178790625960c1199fda38d4_09119494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'boxes-box-categories' => 
  array (
    0 => 'Block_178790625960c1199fda38d4_09119494',
  ),
  'boxes-box-categories-content' => 
  array (
    0 => 'Block_191712101960c1199fda9546_37477678',
  ),
  'boxes-box-categories-toggle-title' => 
  array (
    0 => 'Block_81250560460c1199fda9bb7_01268005',
  ),
  'boxes-box-categories-title' => 
  array (
    0 => 'Block_96566332260c1199fdbb2b0_47901585',
  ),
  'boxes-box-categories-collapse' => 
  array (
    0 => 'Block_156055532560c1199fdbd5d9_01064778',
  ),
  'boxes-box-categories-include-categories-recursive' => 
  array (
    0 => 'Block_100323919560c1199fdbfb93_41611335',
  ),
  'boxes-box-categories-hr-end' => 
  array (
    0 => 'Block_88410701060c1199fdc5f27_23600457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="box box-normal box-categories word-break" id="sidebox-categories-<?php echo $_smarty_tpl->tpl_vars['oBox']->value->getID();?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191712101960c1199fda9546_37477678', 'boxes-box-categories-content', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'boxes-box-categories'} */
}
