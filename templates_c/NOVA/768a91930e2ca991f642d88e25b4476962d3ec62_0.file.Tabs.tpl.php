<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:08:43
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\Tabs\Tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e4ab65fae9_55407754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768a91930e2ca991f642d88e25b4476962d3ec62' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\Tabs\\Tabs.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e4ab65fae9_55407754 (Smarty_Internal_Template $_smarty_tpl) {
?><div <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
 class="opc-Tabs <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
">
    <nav class="tab-navigation">
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'tabs\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabs', array());
$_block_repeat=true;
echo $_block_plugin1->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instance']->value->getProperty('tabs'), 'tabTitle', false, 'i');
$_smarty_tpl->tpl_vars['tabTitle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['tabTitle']->value) {
$_smarty_tpl->tpl_vars['tabTitle']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('tabId', (($_smarty_tpl->tpl_vars['instance']->value->getUid()).('-')).($_smarty_tpl->tpl_vars['i']->value));?>
            <?php $_smarty_tpl->_assignInScope('areaId', ('tab-').($_smarty_tpl->tpl_vars['i']->value));?>
            <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('id'=>$_smarty_tpl->tpl_vars['tabId']->value,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['tabTitle']->value, ENT_QUOTES, 'utf-8', true),'active'=>$_smarty_tpl->tpl_vars['i']->value == 0));
$_block_repeat=true;
echo $_block_plugin2->render(array('id'=>$_smarty_tpl->tpl_vars['tabId']->value,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['tabTitle']->value, ENT_QUOTES, 'utf-8', true),'active'=>$_smarty_tpl->tpl_vars['i']->value == 0), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div data-area-id="<?php echo $_smarty_tpl->tpl_vars['areaId']->value;?>
" class="opc-area">
                    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml($_smarty_tpl->tpl_vars['areaId']->value);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml($_smarty_tpl->tpl_vars['areaId']->value);?>

                    <?php }?>
                </div>
            <?php $_block_repeat=false;
echo $_block_plugin2->render(array('id'=>$_smarty_tpl->tpl_vars['tabId']->value,'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['tabTitle']->value, ENT_QUOTES, 'utf-8', true),'active'=>$_smarty_tpl->tpl_vars['i']->value == 0), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin1->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </nav>
</div><?php }
}
