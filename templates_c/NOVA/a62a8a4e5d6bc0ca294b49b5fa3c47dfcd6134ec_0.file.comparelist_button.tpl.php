<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:26:33
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\comparelist_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c123f9727bc6_81996972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62a8a4e5d6bc0ca294b49b5fa3c47dfcd6134ec' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\comparelist_button.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c123f9727bc6_81996972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('isOnCompareList', false);
if ((isset($_SESSION['Vergleichsliste']))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Vergleichsliste']->oArtikel_arr, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value->kArtikel === $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel) {?>
            <?php $_smarty_tpl->_assignInScope('isOnCompareList', true);?>
            <?php break 1;?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54683910860c123f971f351_60484512', 'snippets-comparelist-button-main');
?>

<?php }
/* {block 'snippets-comparelist-button-main'} */
class Block_54683910860c123f971f351_60484512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-comparelist-button-main' => 
  array (
    0 => 'Block_54683910860c123f971f351_60484512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['classes']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable4=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['isOnCompareList']->value) {
echo "on-list";
}
$_prefixVariable5=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToCompare','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'addToCompare','section'=>'productOverview'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('name'=>"Vergleichsliste",'type'=>"submit",'class'=>$_prefixVariable4." compare badge badge-circle-1 action-tip-animation-b ".$_prefixVariable5,'aria'=>array("label"=>$_prefixVariable6),'data'=>array("product-id-cl"=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel,"toggle"=>"tooltip","trigger"=>"hover"),'title'=>$_prefixVariable7));
$_block_repeat=true;
echo $_block_plugin7->render(array('name'=>"Vergleichsliste",'type'=>"submit",'class'=>$_prefixVariable4." compare badge badge-circle-1 action-tip-animation-b ".$_prefixVariable5,'aria'=>array("label"=>$_prefixVariable6),'data'=>array("product-id-cl"=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel,"toggle"=>"tooltip","trigger"=>"hover"),'title'=>$_prefixVariable7), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <span class="far fa-list-alt"></span>
    <?php $_block_repeat=false;
echo $_block_plugin7->render(array('name'=>"Vergleichsliste",'type'=>"submit",'class'=>$_prefixVariable4." compare badge badge-circle-1 action-tip-animation-b ".$_prefixVariable5,'aria'=>array("label"=>$_prefixVariable6),'data'=>array("product-id-cl"=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel,"toggle"=>"tooltip","trigger"=>"hover"),'title'=>$_prefixVariable7), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'snippets-comparelist-button-main'} */
}
