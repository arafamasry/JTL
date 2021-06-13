<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:15:30
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\csv_export_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20262b6c263_87357344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '388cb3f8b40821074f379797449ad91feb2a6053' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\csv_export_btn.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20262b6c263_87357344 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
 ()
    {
        window.location = window.location.pathname + '?exportcsv=<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
&token=<?php echo $_SESSION['jtl_token'];?>
';
    }
<?php echo '</script'; ?>
>
<button type="button" class="btn btn-outline-primary btn-block" onclick="onClickCsvExport_<?php echo $_smarty_tpl->tpl_vars['exporterId']->value;?>
()">
    <i class="fa fa-download"></i> <?php echo __('exportCsv');?>

</button><?php }
}
