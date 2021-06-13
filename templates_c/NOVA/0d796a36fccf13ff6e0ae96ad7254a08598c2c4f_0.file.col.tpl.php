<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:43
  from 'C:\xampp-7\htdocs\jtl\includes\vendor\jtlshop\scc\src\scc\templates\col.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d3615421_15676639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d796a36fccf13ff6e0ae96ad7254a08598c2c4f' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\col.tpl',
      1 => 1621413696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117d3615421_15676639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('class', ('col ').($_smarty_tpl->tpl_vars['params']->value['class']->getValue()));
if ($_smarty_tpl->tpl_vars['params']->value['offset']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." offset-".((string)$_smarty_tpl->tpl_vars['params']->value['offset']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['offset-sm']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." offset-sm-".((string)$_smarty_tpl->tpl_vars['params']->value['offset-sm']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['offset-md']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." offset-md-".((string)$_smarty_tpl->tpl_vars['params']->value['offset-md']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['offset-lg']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." offset-lg-".((string)$_smarty_tpl->tpl_vars['params']->value['offset-lg']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['offset-xl']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." offset-xl-".((string)$_smarty_tpl->tpl_vars['params']->value['offset-xl']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['sm']->getValue() === true) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-sm");
} elseif ($_smarty_tpl->tpl_vars['params']->value['sm']->getValue() !== false) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-sm-".((string)$_smarty_tpl->tpl_vars['params']->value['sm']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['md']->getValue() === true) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-md");
} elseif ($_smarty_tpl->tpl_vars['params']->value['md']->getValue() !== false) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-md-".((string)$_smarty_tpl->tpl_vars['params']->value['md']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['lg']->getValue() === true) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-lg");
} elseif ($_smarty_tpl->tpl_vars['params']->value['lg']->getValue() !== false) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-lg-".((string)$_smarty_tpl->tpl_vars['params']->value['lg']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['xl']->getValue() === true) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-xl");
} elseif ($_smarty_tpl->tpl_vars['params']->value['xl']->getValue() !== false) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-xl-".((string)$_smarty_tpl->tpl_vars['params']->value['xl']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['order']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." order-".((string)$_smarty_tpl->tpl_vars['params']->value['order']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['order-sm']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." order-sm-".((string)$_smarty_tpl->tpl_vars['params']->value['order-sm']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['order-md']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." order-md-".((string)$_smarty_tpl->tpl_vars['params']->value['order-md']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['order-lg']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." order-lg-".((string)$_smarty_tpl->tpl_vars['params']->value['order-lg']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['order-xl']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." order-xl-".((string)$_smarty_tpl->tpl_vars['params']->value['order-xl']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['cols']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." col-".((string)$_smarty_tpl->tpl_vars['params']->value['cols']->getValue()));
}
if ($_smarty_tpl->tpl_vars['params']->value['align-self']->hasValue()) {?>
    <?php $_smarty_tpl->_assignInScope('class', ((string)$_smarty_tpl->tpl_vars['class']->value)." align-self-".((string)$_smarty_tpl->tpl_vars['params']->value['align-self']->getValue()));
}?>

<<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>

    class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
>
<?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

</<?php echo $_smarty_tpl->tpl_vars['params']->value['tag']->getValue();?>
>
<?php }
}
