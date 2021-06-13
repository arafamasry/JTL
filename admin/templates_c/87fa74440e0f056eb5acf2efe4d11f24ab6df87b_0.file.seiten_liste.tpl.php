<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:14:29
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\seiten_liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20225737047_77022209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87fa74440e0f056eb5acf2efe4d11f24ab6df87b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\seiten_liste.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20225737047_77022209 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['validPageTypes']->value, 'validPagetype');
$_smarty_tpl->tpl_vars['validPagetype']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['validPagetype']->value) {
$_smarty_tpl->tpl_vars['validPagetype']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageID'];
$_prefixVariable9 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['nPage']->value == $_prefixVariable9) {?>selected="selected"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['validPagetype']->value['pageID'] === 0) {?>
            <?php echo __('allPages');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['validPagetype']->value['pageName'];?>

        <?php }?>
    </option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
