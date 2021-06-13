<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:12
  from 'C:\xampp-7\htdocs\jtl\includes\vendor\jtlshop\scc\src\scc\templates\progress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245c3bafb8_69979089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c566d6c04ca51807130214d8fadb8df3b3783fd' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\progress.tpl',
      1 => 1621413696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1245c3bafb8_69979089 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="progress"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue() || $_smarty_tpl->tpl_vars['params']->value['height']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue()) {?>; height: <?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();
}?>" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['class']->hasValue() || $_smarty_tpl->tpl_vars['params']->value['height']->hasValue()) {?>class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
" <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
>
    <div class="progress-bar<?php if ($_smarty_tpl->tpl_vars['params']->value['type']->hasValue()) {?> bg-<?php echo $_smarty_tpl->tpl_vars['params']->value['type']->getValue();
}?>
         <?php if ($_smarty_tpl->tpl_vars['params']->value['striped']->getValue() === true) {?> progress-bar-striped<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['params']->value['animated']->getValue() === true) {?> progress-bar-animated<?php }?>"
         role="<?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();
} else { ?>progressbar<?php }?>"
         <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
         <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
         style="width: <?php echo $_smarty_tpl->tpl_vars['params']->value['now']->getValue();?>
%"
         aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['params']->value['now']->getValue();?>
"
         aria-valuemin="<?php echo $_smarty_tpl->tpl_vars['params']->value['min']->getValue();?>
"
         aria-valuemax="<?php echo $_smarty_tpl->tpl_vars['params']->value['max']->getValue();?>
">
        <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();
}?>
    </div>
</div><?php }
}
