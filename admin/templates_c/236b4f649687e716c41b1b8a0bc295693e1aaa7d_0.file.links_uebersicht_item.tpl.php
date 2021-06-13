<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:43:54
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\links_uebersicht_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2090a04a9e6_50361986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236b4f649687e716c41b1b8a0bc295693e1aaa7d' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\links_uebersicht_item.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/links_uebersicht_item.tpl' => 2,
  ),
),false)) {
function content_60c2090a04a9e6_50361986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
if (!(isset($_smarty_tpl->tpl_vars['kPlugin']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('kPlugin', 0);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('missingLinkTranslations', $_smarty_tpl->tpl_vars['linkAdmin']->value->getMissingLinkTranslations($_smarty_tpl->tpl_vars['link']->value->getID()));?>
    <?php $_smarty_tpl->_assignInScope('isReference', $_smarty_tpl->tpl_vars['link']->value->getReference() > 0);?>
    <tr class="link-item<?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0 && $_smarty_tpl->tpl_vars['kPlugin']->value == $_smarty_tpl->tpl_vars['link']->value->getPluginID()) {?> highlight<?php }
if ($_smarty_tpl->tpl_vars['link']->value->getLevel() == 0) {?> main<?php }?>">
        <?php echo smarty_function_math(array('equation'=>"a * b",'a'=>$_smarty_tpl->tpl_vars['link']->value->getLevel()-1,'b'=>20,'assign'=>'fac'),$_smarty_tpl);?>

        <td style="width: 30%">
            <div style="margin-left:<?php if ($_smarty_tpl->tpl_vars['fac']->value > 0) {
echo $_smarty_tpl->tpl_vars['fac']->value;?>
px<?php } else { ?>0<?php }?>; padding-top: 7px" <?php if ($_smarty_tpl->tpl_vars['link']->value->getLevel() > 0 && $_smarty_tpl->tpl_vars['link']->value->getParent() > 0) {?>class="sub"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['isReference']->value === true) {?><i><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['link']->value->getDisplayName();?>

                <?php if ($_smarty_tpl->tpl_vars['isReference']->value === true) {?> (<?php echo __('Referenz');?>
)</i><?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['missingLinkTranslations']->value) > 0) {?>
                    <i title="<?php echo __('missingTranslations');?>
: <?php echo count($_smarty_tpl->tpl_vars['missingLinkTranslations']->value);?>
"
                       class="fal fa-exclamation-triangle text-warning"
                       data-toggle="tooltip"
                       data-placement="top"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['link']->value->hasDuplicateSpecialLink()) {?>
                    <i title="<?php echo sprintf(__('hasDuplicateSpecialLink'),'');?>
"
                       class="duplicate-special-link fal fa-exclamation-triangle text-danger"
                       data-toggle="tooltip"
                       data-placement="top"></i>
                <?php }?>
            </div>
        </td>
        <td class="text-center floatforms min-w-sm" style="width: 60%">
            <div class="row">
                <form class="navbar-form2 col-lg-4 col-md-12 left px-1" method="post" action="links.php"
                      name="aenderlinkgruppe_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="action" value="move-to-linkgroup" />
                    <input type="hidden" name="kLink" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
" />
                    <input type="hidden" name="kLinkgruppeAlt" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0) {?>
                        <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
" />
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['link']->value->getParent() === 0) {?>
                        <select title="<?php echo __('linkGroupMove');?>
" class="custom-select" name="kLinkgruppe" onchange="document.forms['aenderlinkgruppe_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'].submit();">
                            <option value="-1"><?php echo __('linkGroupMove');?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgruppen']->value, 'linkgruppeTMP');
$_smarty_tpl->tpl_vars['linkgruppeTMP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkgruppeTMP']->value) {
$_smarty_tpl->tpl_vars['linkgruppeTMP']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID() != $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID() > 0) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getName();?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php } else { ?>
                        <select title="<?php echo __('linkGroupMove');?>
" class="custom-select" disabled>
                            <option selected><?php echo __('linkModificationOnlyRoot');?>
</option>
                        </select>
                    <?php }?>
                </form>
                <form class="navbar-form2 col-lg-4 col-md-12 left px-1" method="post" action="links.php" name="kopiereinlinkgruppe_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="action" value="copy-to-linkgroup" />
                    <input type="hidden" name="kLink" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0) {?>
                        <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
" />
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value > 0) {?>
                        <?php if ($_smarty_tpl->tpl_vars['link']->value->getParent() === 0) {?>
                            <select title="<?php echo __('linkGroupCopy');?>
" class="custom-select" name="kLinkgruppe" onchange="document.forms['kopiereinlinkgruppe_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'].submit();">
                                <option value="-1"><?php echo __('linkGroupCopy');?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkgruppen']->value, 'linkgruppeTMP');
$_smarty_tpl->tpl_vars['linkgruppeTMP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkgruppeTMP']->value) {
$_smarty_tpl->tpl_vars['linkgruppeTMP']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID() !== $_smarty_tpl->tpl_vars['id']->value && $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID() > 0) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['linkgruppeTMP']->value->getName();?>
</option>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } else { ?>
                            <select title="<?php echo __('linkGroupCopy');?>
" class="custom-select" disabled>
                                <option><?php echo __('linkModificationOnlyRoot');?>
</option>
                            </select>
                        <?php }?>
                    <?php }?>
                </form>
                <form class="navbar-form2 col-lg-4 col-md-12 left px-1" method="post" action="links.php" name="aenderlinkvater_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="action" value="change-parent" />
                    <input type="hidden" name="kLink" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
" />
                    <input type="hidden" name="kLinkgruppe" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                    <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0) {?>
                        <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
" />
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value > 0) {?>
                        <select title="<?php echo __('linkMove');?>
" class="custom-select" name="kVaterLink" onchange="document.forms['aenderlinkvater_<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'].submit();">
                            <option value="-1"><?php echo __('linkMove');?>
</option>
                            <option value="0">-- Root --</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'linkTMP');
$_smarty_tpl->tpl_vars['linkTMP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkTMP']->value) {
$_smarty_tpl->tpl_vars['linkTMP']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['linkTMP']->value->getID() !== $_smarty_tpl->tpl_vars['link']->value->getID() && $_smarty_tpl->tpl_vars['linkTMP']->value->getID() !== $_smarty_tpl->tpl_vars['link']->value->getParent()) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['linkTMP']->value->getID();?>
"><?php echo $_smarty_tpl->tpl_vars['linkTMP']->value->getName();?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    <?php }?>
                </form>
            </div>
        </td>
        <td class="text-center" style="width: 10%;min-width: 160px;">
            <form method="post" action="links.php">
                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['kPlugin']->value > 0) {?>
                    <input type="hidden" name="kPlugin" value="<?php echo $_smarty_tpl->tpl_vars['kPlugin']->value;?>
" />
                <?php }?>
                <input type="hidden" name="kLinkgruppe" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
                <input type="hidden" name="kLink" value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getID();?>
" />
                <div class="btn-group">
                    <?php $_smarty_tpl->_assignInScope('deleteCount', (($tmp = $_smarty_tpl->tpl_vars['linkGroupCountByLinkID']->value[$_smarty_tpl->tpl_vars['link']->value->getID()] ?? null)===null||$tmp==='' ? 1 : $tmp));?>
                    <button type="submit"
                            name="action"
                            value="delete-link"
                            class="btn btn-link px-2<?php if ($_smarty_tpl->tpl_vars['link']->value->getPluginID() > 0) {?> disabled<?php } else { ?> delete-confirm<?php }?>"
                            <?php if ($_smarty_tpl->tpl_vars['link']->value->getPluginID() === 0) {?> data-modal-body="<?php echo __('sureDeleteLink');?>
"<?php }?>
                            title="<?php if ($_smarty_tpl->tpl_vars['deleteCount']->value > 1) {
ob_start();
echo __('dangerLinkWillGetDeleted');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['deleteCount']->value;
$_prefixVariable2 = ob_get_clean();
echo sprintf($_prefixVariable1,$_prefixVariable2);
} else {
echo __('delete');
}?>"
                            <?php if ($_smarty_tpl->tpl_vars['link']->value->isSystem()) {?> disabled<?php }?>
                            data-toggle="tooltip">
                        <span class="icon-hover">
                            <span class="fal fa-trash-alt"></span>
                            <span class="fas fa-trash-alt"></span>
                        </span>
                        <?php if ($_smarty_tpl->tpl_vars['deleteCount']->value > 1) {?> (<?php echo $_smarty_tpl->tpl_vars['deleteCount']->value;?>
)<?php }?>
                    </button>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value > 0) {?>
                        <button name="action"
                                value="remove-linklfrom-linkgroup"
                                class="btn btn-link px-2"
                                title="<?php echo __('linkGroupRemove');?>
"
                                data-toggle="tooltip">
                            <span class="icon-hover">
                                <span class="fal fa-unlink"></span>
                                <span class="fas fa-unlink"></span>
                            </span>
                        </button>
                        <button name="action" value="edit-link" class="btn btn-link px-2" title="<?php echo __('modify');?>
"
                                data-toggle="tooltip">
                            <span class="icon-hover">
                                <span class="fal fa-edit"></span>
                                <span class="fas fa-edit"></span>
                            </span>
                        </button>
                    <?php }?>
                </div>
            </form>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['link']->value->getChildLinks()->count() > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/links_uebersicht_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['link']->value->getChildLinks(),'id'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
