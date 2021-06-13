<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:26
  from 'C:\xampp-7\htdocs\jtl\includes\vendor\jtlshop\scc\src\scc\templates\card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119a2bb29d0_37619857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c9b0a25b0b0eb1daebfd504ac3c85e55465e94' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\jtlshop\\scc\\src\\scc\\templates\\card.tpl',
      1 => 1621413696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c119a2bb29d0_37619857 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card <?php echo $_smarty_tpl->tpl_vars['params']->value['class']->getValue();?>

    <?php if ($_smarty_tpl->tpl_vars['params']->value['text-variant']->hasValue()) {?>text-<?php echo $_smarty_tpl->tpl_vars['params']->value['text-variant']->getValue();
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['border-variant']->hasValue()) {?>border-<?php echo $_smarty_tpl->tpl_vars['params']->value['border-variant']->getValue();
}?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['bg-variant']->hasValue()) {?>bg-<?php echo $_smarty_tpl->tpl_vars['params']->value['bg-variant']->getValue();
}?>"
    <?php if ($_smarty_tpl->tpl_vars['params']->value['id']->hasValue()) {?>id="<?php echo $_smarty_tpl->tpl_vars['params']->value['id']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['style']->hasValue()) {?>style="<?php echo $_smarty_tpl->tpl_vars['params']->value['style']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title']->hasValue()) {?> title="<?php echo $_smarty_tpl->tpl_vars['params']->value['title']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemprop']->hasValue()) {?>itemprop="<?php echo $_smarty_tpl->tpl_vars['params']->value['itemprop']->getValue();?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['itemscope']->getValue() === true) {?>itemscope<?php }?>
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
?>aria-<?php echo $_smarty_tpl->tpl_vars['ariaKey']->value;?>
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
?>data-<?php echo $_smarty_tpl->tpl_vars['dataKey']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['dataVal']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['img-src']->hasValue()) {?>
        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['params']->value['img-src'];?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['img-alt'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['header']->hasValue()) {?>
        <<?php echo $_smarty_tpl->tpl_vars['params']->value['header-tag'];?>
 class="card-header
            <?php if ($_smarty_tpl->tpl_vars['params']->value['header-bg-variant']->hasValue()) {?>bg-<?php echo $_smarty_tpl->tpl_vars['params']->value['header-bg-variant']->getValue();
}?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['header-text-variant']->hasValue()) {?>text-<?php echo $_smarty_tpl->tpl_vars['params']->value['header-text-variant']->getValue();
}?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['header-border-variant']->hasValue()) {?>border-<?php echo $_smarty_tpl->tpl_vars['params']->value['header-border-variant']->getValue();
}?>"
        >
            <?php echo $_smarty_tpl->tpl_vars['params']->value['header'];?>

        </<?php echo $_smarty_tpl->tpl_vars['params']->value['header-tag'];?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['no-body']->getValue() === false) {?>
        <div class="card-body<?php if ($_smarty_tpl->tpl_vars['params']->value['overlay']->getValue() === true) {?> card-img-overlay<?php }?>">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['title-text']->hasValue()) {?>
        <<?php echo $_smarty_tpl->tpl_vars['params']->value['title-tag']->getValue();?>
 class="card-title"><?php echo $_smarty_tpl->tpl_vars['params']->value['title-text'];?>
</<?php echo $_smarty_tpl->tpl_vars['params']->value['title-tag']->getValue();?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['subtitle']->hasValue()) {?>
        <<?php echo $_smarty_tpl->tpl_vars['params']->value['subtitle-tag']->getValue();?>
 class="card-subtitle mb-2 text-muted">
            <?php echo $_smarty_tpl->tpl_vars['params']->value['subtitle'];?>

        </<?php echo $_smarty_tpl->tpl_vars['params']->value['subtitle-tag']->getValue();?>
>
    <?php }?>
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['blockContent']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>

    <?php if ($_smarty_tpl->tpl_vars['params']->value['no-body']->getValue() === false) {?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['params']->value['footer']->hasValue()) {?>
        <<?php echo $_smarty_tpl->tpl_vars['params']->value['footer-tag'];?>
 class="card-footer
            <?php if ($_smarty_tpl->tpl_vars['params']->value['footer-bg-variant']->hasValue()) {?>bg-<?php echo $_smarty_tpl->tpl_vars['params']->value['footer-bg-variant']->getValue();
}?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['footer-text-variant']->hasValue()) {?>text-<?php echo $_smarty_tpl->tpl_vars['params']->value['footer-bg-variant']->getValue();
}?>
            <?php if ($_smarty_tpl->tpl_vars['params']->value['footer-border-variant']->hasValue()) {?>border-<?php echo $_smarty_tpl->tpl_vars['params']->value['footer-border-variant']->getValue();
}?>"
        >
            <?php echo $_smarty_tpl->tpl_vars['params']->value['footer'];?>

        </<?php echo $_smarty_tpl->tpl_vars['params']->value['footer-tag'];?>
>
    <?php }?>
</div>
<?php }
}
