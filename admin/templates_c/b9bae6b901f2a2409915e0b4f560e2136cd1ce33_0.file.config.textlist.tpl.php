<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:08:48
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.textlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e4b054fd51_06067295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bae6b901f2a2409915e0b4f560e2136cd1ce33' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.textlist.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e4b054fd51_06067295 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
    <label><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propval']->value, 'text', false, 'i');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
        <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></label>
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn"
                        onclick="removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(this);">
                    <i class="fas fa-times fa-fw"></i>
                </button>
            </div>
            <input type="text" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'utf-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <label class="sr-only" for="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-new"></label>
    <div class="input-group" id="new-input-group-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
        <div class="input-group-prepend">
            <button type="button" class="btn primary"
                    onclick="addNewLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()">
                <i class="fas fa-plus fa-fw"></i>
            </button>
        </div>
        <input type="text" class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-new" disabled>
    </div>
</div>
<?php echo '<script'; ?>
>
    function removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(elm)
    {
        $(elm).closest('.input-group').remove();
    }

    function addNewLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        var newInputGroup      = $('#new-input-group-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var newInputGroupClone = newInputGroup.clone();

        newInputGroupClone.attr('id', '');
        newInputGroupClone.find('button')
            .removeClass('primary')
            .attr('onclick', 'removeLine_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(this);');
        newInputGroupClone.find('i.fas')
            .removeClass('fa-plus')
            .addClass('fa-times');
        newInputGroupClone.find('input')
            .prop('disabled', false)
            .attr('name', '<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[]');
        newInputGroupClone.insertBefore(newInputGroup);
    }
<?php echo '</script'; ?>
><?php }
}
