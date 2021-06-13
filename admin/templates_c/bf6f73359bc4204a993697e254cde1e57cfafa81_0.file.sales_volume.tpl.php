<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:36:49
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\widgets\sales_volume.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11851695f01_19661791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf6f73359bc4204a993697e254cde1e57cfafa81' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\sales_volume.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/linechart_inc.tpl' => 1,
  ),
),false)) {
function content_60c11851695f01_19661791 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="widget-custom-data">
    <div class="widget-custom-data">
        <?php if ($_smarty_tpl->tpl_vars['linechart']->value) {?>
            <?php ob_start();
echo __('sales');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/linechart_inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linechart'=>$_smarty_tpl->tpl_vars['linechart']->value,'headline'=>'','id'=>'linechart_sales_volume','width'=>'100%','height'=>'320px','ylabel'=>$_prefixVariable2,'href'=>false,'ymin'=>0,'legend'=>false), 0, false);
?>
        <?php } else { ?>
            <div class="widget-container"><div class="alert alert-info"><?php echo __('noStatisticsThisMonth');?>
</div></div>
        <?php }?>
    </div>
</div>
<?php }
}
