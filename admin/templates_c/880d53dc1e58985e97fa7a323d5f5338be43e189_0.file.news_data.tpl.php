<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:36:56
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\widgets\news_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11858abb728_02524130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880d53dc1e58985e97fa7a323d5f5338be43e189' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\widgets\\news_data.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11858abb728_02524130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (is_object($_smarty_tpl->tpl_vars['oNews_arr']->value) && !empty($_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item)) {?>
    <ul class="linklist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNews_arr']->value->channel->item, 'oNews');
$_smarty_tpl->tpl_vars['oNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oNews']->value) {
$_smarty_tpl->tpl_vars['oNews']->do_else = false;
?><li><p><a class="" href="<?php echo urldecode($_smarty_tpl->tpl_vars['oNews']->value->link);?>
" target="_blank" rel="noopener"><span class="date label label-default pull-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oNews']->value->pubDate,'%d.%m.%Y');?>
</span><?php echo $_smarty_tpl->tpl_vars['oNews']->value->title;?>
</a></p></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <div class="widget-container"><div class="alert alert-error"><?php echo __('noDataAvailable');?>
</div></div>
<?php }
}
}
