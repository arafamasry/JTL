<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:23:49
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\model_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20455208465_10080248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '283d7c8ccee25f73fa8f4d7d0df463137c7f7fee' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\model_list.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/config_section.tpl' => 1,
  ),
),false)) {
function content_60c20455208465_10080248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('pageTitle'),'cBeschreibung'=>__('pageDesc'),'cDokuURL'=>__('docURL')), 0, false);
$_smarty_tpl->_assignInScope('select', (($tmp = $_smarty_tpl->tpl_vars['select']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('edit', (($tmp = $_smarty_tpl->tpl_vars['edit']->value ?? null)===null||$tmp==='' ? true : $tmp));
$_smarty_tpl->_assignInScope('delete', (($tmp = $_smarty_tpl->tpl_vars['delete']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('save', (($tmp = $_smarty_tpl->tpl_vars['save']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('enable', (($tmp = $_smarty_tpl->tpl_vars['enable']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('disable', (($tmp = $_smarty_tpl->tpl_vars['disable']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('action', (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? (($_smarty_tpl->tpl_vars['shopURL']->value).($_SERVER['PHP_SELF'])) : $tmp));
$_smarty_tpl->_assignInScope('search', (($tmp = $_smarty_tpl->tpl_vars['search']->value ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('searchQuery', (($tmp = $_smarty_tpl->tpl_vars['searchQuery']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('pagination', (($tmp = $_smarty_tpl->tpl_vars['pagination']->value ?? null)===null||$tmp==='' ? null : $tmp));
$_smarty_tpl->_assignInScope('method', (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? 'post' : $tmp));?>

<div id="content">
    <div class="tabs">
        <nav class="tavs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'overview') {?> active<?php }?>" data-toggle="tab" role="tab" href="#overview">
                        <?php echo __('modelHeader');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'settings') {?> active<?php }?>" data-toggle="tab" role="tab" href="#config">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="overview" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value === 'overview') {?> active show<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['items']->value->count() > 0) {?>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value === true) {?>
                        <div class="search-toolbar mb-3">
                            <form name="datamodel" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                <input type="hidden" name="Suche" value="1" />
                                <div class="form-row">
                                    <label class="col-sm-auto col-form-label" for="modelsearch"><?php echo __('search');?>
:</label>
                                    <div class="col-sm-auto mb-2">
                                        <input class="form-control" name="cSuche" type="text" value="<?php if ($_smarty_tpl->tpl_vars['searchQuery']->value !== null) {
echo $_smarty_tpl->tpl_vars['searchQuery']->value;
}?>" id="modelsearch" />
                                    </div>
                                    <span class="col-sm-auto">
                                        <button name="submitSuche" type="submit" class="btn btn-primary btn-block"><i class="fal fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['searchQuery']->value !== null) {?>
                        <?php $_smarty_tpl->_assignInScope('params', array('cSuche'=>$_smarty_tpl->tpl_vars['searchQuery']->value));?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('params', null);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value !== null) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>$_smarty_tpl->tpl_vars['params']->value), 0, false);
?>
                    <?php }?>
                    <form name="modelform" id="modelform" method="<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="id" id="modelid" />
                        <?php if ($_smarty_tpl->tpl_vars['search']->value !== null) {?>
                            <input type="hidden" name="cSuche" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" />
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('first', $_smarty_tpl->tpl_vars['items']->value->first());?>
                        <div class="table-responsive">
                            <table class="table table-striped table-align-top">
                                <thead>
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                                        <th class="check">&nbsp;</th>
                                    <?php }?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['first']->value->getAttributes(), 'attr');
$_smarty_tpl->tpl_vars['attr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['attr']->value->getDataType());?>
                                        <?php if ($_smarty_tpl->tpl_vars['attr']->value->getInputConfig()->isHidden() === false && (strpos($_smarty_tpl->tpl_vars['type']->value,"\\") === false || !class_exists($_smarty_tpl->tpl_vars['type']->value))) {?>
                                            <th><?php ob_start();
echo $_smarty_tpl->tpl_vars['attr']->value->getName();
$_prefixVariable1 = ob_get_clean();
echo __($_prefixVariable1);?>
</th>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['edit']->value === true) {?>
                                        <th class="text-center">&nbsp;</th>
                                    <?php }?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->index = -1;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->index++;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
                                    <tr>
                                        <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="mid[<?php echo $_smarty_tpl->tpl_vars['item']->index;?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" id="mid-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
" />
                                                    <label class="custom-control-label" for="mid-<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"></label>
                                                </div>
                                            </td>
                                        <?php }?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getAttributes(), 'attr');
$_smarty_tpl->tpl_vars['attr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->do_else = false;
?>
                                            <?php $_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['attr']->value->getDataType());?>
                                            <?php if ($_smarty_tpl->tpl_vars['attr']->value->getInputConfig()->isHidden() === false && (strpos($_smarty_tpl->tpl_vars['type']->value,"\\") === false || !class_exists($_smarty_tpl->tpl_vars['type']->value))) {?>
                                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribValue($_smarty_tpl->tpl_vars['attr']->value->getName());?>
</td>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php if ($_smarty_tpl->tpl_vars['edit']->value === true) {?>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
?action=detail&id=<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
"
                                                       class="btn-prg btn btn-link px-2"
                                                       title="<?php echo __('modify');?>
"
                                                       data-toggle="tooltip">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-edit"></span>
                                                            <span class="fas fa-edit"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        <?php }?>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                        <div class="save-wrapper">
                            <div class="row">
                                <?php if ($_smarty_tpl->tpl_vars['select']->value === true) {?>
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['delete']->value === true) {?>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="model-delete" type="submit" value="1" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                        </button>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['save']->value === true) {?>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="model-save" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                            <i class="fal fa-save"></i> <?php echo __('save');?>

                                        </button>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['disable']->value === true) {?>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="model-disable" type="submit" value="<?php echo __('disable');?>
" class="btn btn-warning btn-block">
                                            <i class="fa fa-close"></i> <?php echo __('disable');?>

                                        </button>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['enable']->value === true) {?>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="model-enable" type="submit" value="<?php echo __('enable');?>
" class="btn btn-primary btn-block">
                                            <i class="fa fa-check"></i> <?php echo __('enable');?>

                                        </button>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </form>
                    <?php if ($_smarty_tpl->tpl_vars['pagination']->value !== null) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>$_smarty_tpl->tpl_vars['params']->value,'isBottom'=>true), 0, true);
?>
                    <?php }?>
                <?php } else { ?>
                    <div class="alert alert-info"><i class="fal fa-info-circle"></i> <?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="config" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['tab']->value === 'settings') {?> active show<?php }?>">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['settings']->value,'name'=>'einstellen','a'=>'saveSettings','action'=>'consent.php','buttonCaption'=>__('saveWithIcon'),'tab'=>'einstellungen','title'=>__('settings')), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php }
}
