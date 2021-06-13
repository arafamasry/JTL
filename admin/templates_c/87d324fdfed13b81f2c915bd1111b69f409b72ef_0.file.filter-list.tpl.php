<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:20:56
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\filter-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c122a8951802_32304474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87d324fdfed13b81f2c915bd1111b69f409b72ef' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\filter-list.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c122a8951802_32304474 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
    <label><?php echo __($_smarty_tpl->tpl_vars['filter']->value['name']);?>
</label>
    <div class="filters-section">
        <div class="no-options" style="display: none">Keine Optionen</div>
        <div class="filters-section-inner">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <button type="button" class="filter-option" data-filter="<?php echo htmlentities(json_encode($_smarty_tpl->tpl_vars['option']->value));?>
"
                        title="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
)">
                    <i class="far fa-square"></i> <?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['option']->value['count'];?>
)
                </button>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
