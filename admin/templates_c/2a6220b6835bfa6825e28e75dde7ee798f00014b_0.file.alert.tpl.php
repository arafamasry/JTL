<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:48:11
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\snippets\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11afbabf863_86561821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6220b6835bfa6825e28e75dde7ee798f00014b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\snippets\\alert.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11afbabf863_86561821 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getCssType();?>
 align-items-center"
    data-fade-out="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getFadeOut();?>
"
    data-key="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getKey();?>
"
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getId()) {?>id="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getId();?>
"<?php }?>
>
    <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'danger' || $_smarty_tpl->tpl_vars['alert']->value->getIcon() === 'warning') {?>
        <?php $_smarty_tpl->_assignInScope('icon', 'exclamation-triangle');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['alert']->value->getIcon());?>
    <?php }?>
    <div class="row">
        <div class="col">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getIcon()) {?><i class="fal fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 mr-2"></i><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</a>
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['alert']->value->getLinkHref()) && !empty($_smarty_tpl->tpl_vars['alert']->value->getLinkText())) {?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkHref();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>

            <?php }?>
        </div>
        <div class="col-auto ml-auto">
            <?php if ($_smarty_tpl->tpl_vars['alert']->value->getDismissable()) {?><div class="close">&times;</div><?php }?>
        </div>
    </div>
</div>
<?php }
}
