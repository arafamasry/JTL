<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:16:28
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e67c8960b9_83888066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd572d02c2b85cba911c1699db5a8da6976c01b1' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.icon.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e67c8960b9_83888066 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <div id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-picker"></div>
    <input type="hidden" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
">
    <?php echo '<script'; ?>
>
        $(() => {
            $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-picker').append(opc.gui.iconpicker);
            opc.gui.iconpicker.find('.popover-title i').attr('class', <?php echo json_encode($_smarty_tpl->tpl_vars['propval']->value);?>
);
            opc.gui.iconpicker.show();
            opc.gui.iconpicker.data('iconpicker').setSourceValue(<?php echo json_encode($_smarty_tpl->tpl_vars['propval']->value);?>
);
            opc.gui.iconpicker.data('iconpicker').update();
            opc.gui.setIconPickerCallback(faClass => {
                $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').val(faClass);
                opc.gui.iconpicker.find('.popover-title i').attr('class', faClass);
            })
        });
    <?php echo '</script'; ?>
>
</div><?php }
}
