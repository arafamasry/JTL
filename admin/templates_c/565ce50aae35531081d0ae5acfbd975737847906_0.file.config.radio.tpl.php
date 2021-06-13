<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:10:49
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1204916b150_24894116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '565ce50aae35531081d0ae5acfbd975737847906' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.radio.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1204916b150_24894116 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
" data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <div class="radio" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propdesc']->value['options'], 'name', false, 'value');
$_smarty_tpl->tpl_vars['name']->index = -1;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->index++;
$__foreach_name_4_saved = $_smarty_tpl->tpl_vars['name'];
?>
            <div>
                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"
                       <?php if ($_smarty_tpl->tpl_vars['propval']->value == $_smarty_tpl->tpl_vars['value']->value) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>>
                <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['name']->index;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</label>
            </div>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['propdesc']->value['childrenFor']))) {?>
    <?php echo '<script'; ?>
>
        var selectElm = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var option = selectElm.find(':checked').val();

        selectElm.on('change', function() {
            var option = selectElm.find(':checked').val();

            $('.childrenFor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('hide');
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });

        $(function() {
            $('#childrenFor-' + option + '-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').collapse('show');
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
