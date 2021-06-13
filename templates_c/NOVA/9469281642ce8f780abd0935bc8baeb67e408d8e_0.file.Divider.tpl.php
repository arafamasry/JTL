<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:16:10
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\Divider\Divider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e66a74e9c2_35436385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9469281642ce8f780abd0935bc8baeb67e408d8e' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\Divider\\Divider.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e66a74e9c2_35436385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('moreLink', $_smarty_tpl->tpl_vars['instance']->value->getProperty('moreLink'));
$_smarty_tpl->_assignInScope('moreTitle', $_smarty_tpl->tpl_vars['instance']->value->getProperty('moreTitle'));
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['instance']->value->getProperty('title'));
$_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['instance']->value->getProperty('id'));
$_smarty_tpl->_assignInScope('withoutTitle', empty($_smarty_tpl->tpl_vars['title']->value));?>

<div class="opc-Divider <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
 <?php if ($_smarty_tpl->tpl_vars['withoutTitle']->value) {?>opc-Divider-empty<?php }?>"
     <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>

     <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {
echo $_smarty_tpl->tpl_vars['instance']->value->getDataAttributeString();
}?> <?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?>
     <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAttributeString();?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['moreLink']->value) && !$_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)));
$_block_repeat=true;
echo $_block_plugin1->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php $_block_repeat=false;
echo $_block_plugin1->render(array('class'=>"more float-right",'href'=>$_smarty_tpl->tpl_vars['moreLink']->value,'title'=>$_smarty_tpl->tpl_vars['moreTitle']->value,'data-toggle'=>"tooltip",'data'=>array("placement"=>"auto right"),'aria'=>array("label"=>$_smarty_tpl->tpl_vars['moreTitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    <?php }?>
</div><?php }
}
