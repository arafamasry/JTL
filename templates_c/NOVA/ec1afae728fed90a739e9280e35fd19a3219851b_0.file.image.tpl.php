<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:38
  from 'C:\xampp-7\htdocs\jtl\includes\vendor\jtlshop\scc\src\scc\templates\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117ce892464_82398263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1afae728fed90a739e9280e35fd19a3219851b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\image.tpl',
      1 => 1621413696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117ce892464_82398263 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_assignInScope('rounded', '');
$_smarty_tpl->_assignInScope('useWebP', $_smarty_tpl->tpl_vars['params']->value['webp']->getValue() === true && \JTL\Media\Image::hasWebPSupport());
if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() !== false) {?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue() === true) {?>
        <?php $_smarty_tpl->_assignInScope('rounded', 'rounded');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('rounded', ('rounded-').($_smarty_tpl->tpl_vars['params']->value['rounded']->getValue()));?>
    <?php }
}?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();
$_prefixVariable9 = ob_get_clean();
if (strpos($_prefixVariable9,'keinBild.gif') !== false) {?>
<img class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
 <?php echo $_smarty_tpl->tpl_vars['rounded']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> img-fluid w-100<?php }?>"
     height="<?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();
} elseif ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();
} else { ?>auto<?php }?>"
     width="<?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();
} elseif ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {
echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();
} else { ?>auto<?php }?>"
     <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
     src="<?php echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();?>
">
<?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['useWebP']->value) {?>
    <picture>
        <source
            <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue()) {?>
                <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?>data-<?php }?>srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['params']->value['srcset']->getValue(),"/\.(?i)(jpg|jpeg|png)/",".webp");?>
"
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?>data-<?php }?>srcset="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['params']->value['src']->getValue(),"/\.(?i)(jpg|png)/",".webp");?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {
if ($_smarty_tpl->tpl_vars['params']->value['sizes']->getValue() === 'auto') {?>data-<?php }?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            type="image/webp">
    <?php }?>
        <img
            src="<?php echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();?>
"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?>
                srcset="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBzdHlsZT0ibWFyZ2luOiBhdXRvOyBiYWNrZ3JvdW5kOiBub25lOyBkaXNwbGF5OiBibG9jazsgc2hhcGUtcmVuZGVyaW5nOiBhdXRvOyIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaWRZTWlkIj4KPHJlY3QgeD0iMTkiIHk9IjI4IiB3aWR0aD0iMTIiIGhlaWdodD0iNDQiIGZpbGw9IiNjN2M3YzciPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InkiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiBkdXI9IjJzIiBjYWxjTW9kZT0ic3BsaW5lIiBrZXlUaW1lcz0iMDswLjU7MSIgdmFsdWVzPSIxNzsyODsyOCIga2V5U3BsaW5lcz0iMCAwLjUgMC41IDE7MCAwLjUgMC41IDEiIGJlZ2luPSItMC40cyI+PC9hbmltYXRlPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImhlaWdodCIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMnMiIGNhbGNNb2RlPSJzcGxpbmUiIGtleVRpbWVzPSIwOzAuNTsxIiB2YWx1ZXM9IjY2OzQ0OzQ0IiBrZXlTcGxpbmVzPSIwIDAuNSAwLjUgMTswIDAuNSAwLjUgMSIgYmVnaW49Ii0wLjRzIj48L2FuaW1hdGU+CjwvcmVjdD4KPHJlY3QgeD0iNDQiIHk9IjI4IiB3aWR0aD0iMTIiIGhlaWdodD0iNDQiIGZpbGw9IiNlZGVkZWQiPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InkiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiBkdXI9IjJzIiBjYWxjTW9kZT0ic3BsaW5lIiBrZXlUaW1lcz0iMDswLjU7MSIgdmFsdWVzPSIxOS43NTsyODsyOCIga2V5U3BsaW5lcz0iMCAwLjUgMC41IDE7MCAwLjUgMC41IDEiIGJlZ2luPSItMC4ycyI+PC9hbmltYXRlPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImhlaWdodCIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMnMiIGNhbGNNb2RlPSJzcGxpbmUiIGtleVRpbWVzPSIwOzAuNTsxIiB2YWx1ZXM9IjYwLjU7NDQ7NDQiIGtleVNwbGluZXM9IjAgMC41IDAuNSAxOzAgMC41IDAuNSAxIiBiZWdpbj0iLTAuMnMiPjwvYW5pbWF0ZT4KPC9yZWN0Pgo8cmVjdCB4PSI2OSIgeT0iMjgiIHdpZHRoPSIxMiIgaGVpZ2h0PSI0NCIgZmlsbD0iI2M3YzdjNyI+CiAgPGFuaW1hdGUgYXR0cmlidXRlTmFtZT0ieSIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMnMiIGNhbGNNb2RlPSJzcGxpbmUiIGtleVRpbWVzPSIwOzAuNTsxIiB2YWx1ZXM9IjE5Ljc1OzI4OzI4IiBrZXlTcGxpbmVzPSIwIDAuNSAwLjUgMTswIDAuNSAwLjUgMSI+PC9hbmltYXRlPgogIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9ImhlaWdodCIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIGR1cj0iMnMiIGNhbGNNb2RlPSJzcGxpbmUiIGtleVRpbWVzPSIwOzAuNTsxIiB2YWx1ZXM9IjYwLjU7NDQ7NDQiIGtleVNwbGluZXM9IjAgMC41IDAuNSAxOzAgMC41IDAuNSAxIj48L2FuaW1hdGU+CjwvcmVjdD4KPCEtLSBbbGRpb10gZ2VuZXJhdGVkIGJ5IGh0dHBzOi8vbG9hZGluZy5pby8gLS0+PC9zdmc+"
                <?php if ($_smarty_tpl->tpl_vars['params']->value['srcset']->hasValue()) {?>
                    data-srcset="<?php echo $_smarty_tpl->tpl_vars['params']->value['srcset']->getValue();?>
"
                <?php } else { ?>
                    data-srcset="<?php echo $_smarty_tpl->tpl_vars['params']->value['src']->getValue();?>
"
                <?php }?>
            <?php } else { ?>
                srcset="<?php echo $_smarty_tpl->tpl_vars['params']->value['srcset']->getValue();?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['sizes']->hasValue()) {
if ($_smarty_tpl->tpl_vars['params']->value['sizes']->getValue() === 'auto') {?>data-<?php }?>sizes="<?php echo $_smarty_tpl->tpl_vars['params']->value['sizes']->getValue();?>
"<?php }?>
            class="<?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>
 <?php echo $_smarty_tpl->tpl_vars['rounded']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['params']->value['fluid']->getValue() === true) {?> img-fluid<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['fluid-grow']->getValue() === true) {?> img-fluid w-100<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['thumbnail']->getValue() === true) {?> img-thumbnail<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['left']->getValue() === true) {?> float-left<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['right']->getValue() === true) {?> float-right<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['center']->getValue() === true) {?> mx-auto d-block<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['lazy']->getValue() === true) {?> lazyload<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?>title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['alt']->hasValue()) {?>alt="<?php echo $_smarty_tpl->tpl_vars['params']->value['alt']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['width']->hasValue()) {?>width="<?php echo $_smarty_tpl->tpl_vars['params']->value['width']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['height']->hasValue()) {?>height="<?php echo $_smarty_tpl->tpl_vars['params']->value['height']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemtype']->hasValue()) {?>itemtype="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemtype']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['itemid']->hasValue()) {?>itemid="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemid']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['role']->hasValue()) {?>role="<?php echo $_smarty_tpl->tpl_vars['params']->value['role']->getValue();?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['aria']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['aria']->getValue(), 'ariaVal', false, 'ariaKey');
$_smarty_tpl->tpl_vars['ariaVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ariaKey']->value => $_smarty_tpl->tpl_vars['ariaVal']->value) {
$_smarty_tpl->tpl_vars['ariaVal']->do_else = false;
?> aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['ariaVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['data']->hasValue()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value['data']->getValue(), 'dataVal', false, 'dataKey');
$_smarty_tpl->tpl_vars['dataVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataKey']->value => $_smarty_tpl->tpl_vars['dataVal']->value) {
$_smarty_tpl->tpl_vars['dataVal']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        >
    <?php if ($_smarty_tpl->tpl_vars['useWebP']->value) {?>
    </picture>
    <?php }
}
}
}
