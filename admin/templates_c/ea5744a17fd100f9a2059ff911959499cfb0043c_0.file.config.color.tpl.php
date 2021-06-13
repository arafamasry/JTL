<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:10:49
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.color.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c120492b9c06_33643164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5744a17fd100f9a2059ff911959499cfb0043c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.color.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c120492b9c06_33643164 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['propid']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('propid', $_smarty_tpl->tpl_vars['propname']->value);
}?>
<div class="form-group no-pb">
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
                data-toggle="tooltip" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
"
                data-placement="auto"
            <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>

        <?php if (!empty($_smarty_tpl->tpl_vars['propdesc']->value['desc'])) {?>
            <i class="fas fa-info-circle fa-fw"></i>
        <?php }?>
    </label>
    <div class="input-group" id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
-group">
        <input type="text" class="form-control colorpicker-input" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value, ENT_QUOTES, 'utf-8', true);?>
"
               <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?> id="config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
" autocomplete="off"
               placeholder="<?php echo __('Default colour');?>
">
        <span class="input-group-append">
            <span class="input-group-text colorpicker-input-addon"><i></i></span>
        </span>
    </div>
    <?php echo '<script'; ?>
>
        $('#config-<?php echo $_smarty_tpl->tpl_vars['propid']->value;?>
-group').colorpicker({
            format: '<?php echo (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['colorFormat'] ?? null)===null||$tmp==='' ? 'rgba' : $tmp);?>
',
            fallbackColor: 'rgba(0,0,0,1.0)',
            autoInputFallback: false,
            extensions: [
                {
                    name: 'swatches',
                    options: {
                        colors: {
                            'green': '#098B1B',
                            'red': '#B90000',
                            'orange': '#F39932',
                            'yellow': '#F8BF00',
                            'darkgrey': '#525252',
                            'grey': '#707070',
                            'mediumgrey': '#9b9b9b',
                            'sand': '#EBEBEB',

                            'lightgreen': '#CDE1D6',
                            'lightred': '#E8CCD2',
                            'lightorange': '#F9F2DC',
                            'lightyellow': '#f8edc7',
                            'lightgrey': '#F5F7FA',
                            'coolwhite': '#F8F8F8',
                        },
                        namesAsValues: true
                    }
                }
            ]
        });
    <?php echo '</script'; ?>
>
</div><?php }
}
