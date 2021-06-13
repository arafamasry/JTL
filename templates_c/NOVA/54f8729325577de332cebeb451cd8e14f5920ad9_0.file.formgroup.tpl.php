<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:41
  from 'C:\xampp-7\htdocs\jtl\includes\vendor\jtlshop\scc\src\scc\templates\formgroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d1166b99_33943947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54f8729325577de332cebeb451cd8e14f5920ad9' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\formgroup.tpl',
      1 => 1621413696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117d1166b99_33943947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['params']->value['id']->getValue() ?? null)===null||$tmp==='' ? uniqid() : $tmp));
$_smarty_tpl->_assignInScope('breakPoint', $_smarty_tpl->tpl_vars['params']->value['breakpoint']->getValue());
if ($_smarty_tpl->tpl_vars['params']->value['label-for']->hasValue()) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" aria-labelledby="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-group <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
        role="<?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();
} else { ?>group<?php }?>"
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
    >
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            <div class="form-row">
                <label id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" for="<?php echo $_smarty_tpl->tpl_vars['params']->value['label-for']->getValue();?>
" class="col-form-label pt-0 col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();
if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </label>
                <div class="col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo 12-$_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();?>
">
                    <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                        <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                    <?php }?>
                </div>
            </div>
        <?php } else { ?>
            <div class="d-flex flex-column-reverse">
                <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                    <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                <label id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" for="<?php echo $_smarty_tpl->tpl_vars['params']->value['label-for']->getValue();?>
" class="col-form-label pt-0<?php if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?>">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </label>
            </div>
        <?php }?>
    </div>
<?php } else { ?>
    <fieldset class="form-group <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
"
        id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
        <?php if ($_smarty_tpl->tpl_vars['params']->value['label']->hasValue()) {?>aria-labelledby="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
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
    >
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            <div class="form-row">
        <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['label']->hasValue()) {?>
                <legend
                        id="form-group-label-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                        class="col-form-label<?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?> col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();
}
if ($_smarty_tpl->tpl_vars['params']->value['label-size']->hasValue()) {?> col-form-label-<?php echo $_smarty_tpl->tpl_vars['params']->value['label-size']->getValue();
}?> pt-0">
                    <?php echo $_smarty_tpl->tpl_vars['params']->value['label']->getValue();?>

                </legend>
            <?php }?>
            <div<?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?> class="col-<?php echo $_smarty_tpl->tpl_vars['breakPoint']->value;?>
-<?php echo 12-$_smarty_tpl->tpl_vars['params']->value['label-cols']->getValue();?>
"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['params']->value['description']->hasValue()) {?>
                    <small id="form-group-description-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['params']->value['description']->getValue();?>
</small>
                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['horizontal']->getValue() === true) {?>
            </div>
        <?php }?>
    </fieldset>
<?php }
}
}
