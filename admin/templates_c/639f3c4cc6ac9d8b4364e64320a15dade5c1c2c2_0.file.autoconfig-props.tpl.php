<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:10:48
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\autoconfig-props.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c12048dc7c57_81526590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639f3c4cc6ac9d8b4364e64320a15dade5c1c2c2' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\autoconfig-props.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./autoconfig-props.tpl' => 3,
  ),
),false)) {
function content_60c12048dc7c57_81526590 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['props']->value, 'propdesc', false, 'propname');
$_smarty_tpl->tpl_vars['propdesc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['propdesc']->value) {
$_smarty_tpl->tpl_vars['propdesc']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['type'] ?? null)===null||$tmp==='' ? 'text' : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('required', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['required'] ?? null)===null||$tmp==='' ? false : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('width', round(((($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['width'] ?? null)===null||$tmp==='' ? 100 : $tmp))*12/100));?>
    <?php $_smarty_tpl->_assignInScope('rowWidthAccu', $_smarty_tpl->tpl_vars['rowWidthAccu']->value+$_smarty_tpl->tpl_vars['width']->value);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['order'])) {?>
        <?php $_smarty_tpl->_assignInScope('order', ('order-').($_smarty_tpl->tpl_vars['propdesc']->value['order']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('order', '');?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['instance']->value->hasProperty($_smarty_tpl->tpl_vars['propname']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['instance']->value->getProperty($_smarty_tpl->tpl_vars['propname']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('propval', (($tmp = $_smarty_tpl->tpl_vars['propDesc']->value['default'] ?? null)===null||$tmp==='' ? null : $tmp));?>
    <?php }?>

    <div class="col-<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'text' || $_smarty_tpl->tpl_vars['type']->value === 'email' || $_smarty_tpl->tpl_vars['type']->value === 'password' || $_smarty_tpl->tpl_vars['type']->value === 'number' || $_smarty_tpl->tpl_vars['type']->value === 'date' || $_smarty_tpl->tpl_vars['type']->value === 'time') {?>
            <div class="form-group">
                <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                            data-toggle="tooltip" title="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
                            data-placement="auto"
                        <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                        <i class="fas fa-info-circle fa-fw"></i>
                    <?php }?>
                </label>
                <input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
"
                       <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['placeholder'])) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propdesc']->value['placeholder'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['required']->value === true) {?>required<?php }?>>
                <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['help']))) {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['help'];?>
</span>
                <?php }?>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender((("./config.").($_smarty_tpl->tpl_vars['type']->value)).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['rowWidthAccu']->value >= 12) {?>
        <?php $_smarty_tpl->_assignInScope('rowWidthAccu', 0);?>

        </div><div class="row">
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['children']))) {?>
        <div id="children-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="col-12 collapse">
            <div class="row">
                <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['propdesc']->value['children']), 0, true);
?>
            </div>
        </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['childrenFor'], 'childProps', false, 'option');
$_smarty_tpl->tpl_vars['childProps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value => $_smarty_tpl->tpl_vars['childProps']->value) {
$_smarty_tpl->tpl_vars['childProps']->do_else = false;
?>
            <div id="childrenFor-<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
                 class="col-12 collapse childrenFor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
                <div class="row">
                    <?php $_smarty_tpl->_subTemplateRender('file:./autoconfig-props.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('props'=>$_smarty_tpl->tpl_vars['childProps']->value), 0, true);
?>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
