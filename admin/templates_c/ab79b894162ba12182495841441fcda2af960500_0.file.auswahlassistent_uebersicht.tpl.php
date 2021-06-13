<?php
/* Smarty version 3.1.39, created on 2021-06-11 15:46:01
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\auswahlassistent_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c36919124be7_33906099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab79b894162ba12182495841441fcda2af960500' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\auswahlassistent_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c36919124be7_33906099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('auswahlassistent'),'cBeschreibung'=>__('auswahlassistentDesc'),'cDokuURL'=>__('auswahlassistentURL')), 0, false);
?>

<div id="content">
    <?php if (!(isset($_smarty_tpl->tpl_vars['noModule']->value)) || !$_smarty_tpl->tpl_vars['noModule']->value) {?>
        <div class="card">
            <div class="card-body">
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>'auswahlassistent.php'), 0, false);
?>
            </div>
        </div>
        <div class="tabs">
            <nav class="tavs-nav">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'uebersicht') {?> active<?php }?>" data-toggle="tab" role="tab" href="#overview">
                            <?php echo __('aaOverview');?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#config">
                            <?php echo __('settings');?>

                        </a>
                    </li>
                </ul>
            </nav>
            <div class="tab-content">
                <div id="overview" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'uebersicht') {?> active show<?php }?>">
                    <form name="uebersichtForm" method="post" action="auswahlassistent.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="tab" value="uebersicht" />
                        <div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value)) && count($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value) > 0) {?>
                                <div class="table-responsive">
                                    <table class="list table">
                                        <thead>
                                            <tr>
                                                <th class="check" style="width:35px">&nbsp;</th>
                                                <th class="text-center"><?php echo __('active');?>
</th>
                                                <th class="text-left"><?php echo __('name');?>
</th>
                                                <th><?php echo __('aaLocation');?>
</th>
                                                <th class="text-center">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value, 'oAuswahlAssistentGruppe');
$_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value) {
$_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->do_else = false;
?>
                                                <tr<?php if (!$_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->nAktiv) {?> class="text-danger"<?php }?>>
                                                    <td class="check">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" name="kAuswahlAssistentGruppe_arr[]" type="checkbox"
                                                               value="<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"
                                                               id="group-<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"/>
                                                            <label class="custom-control-label" for="group-<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if (!$_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->nAktiv) {?>
                                                            <i class="fal fa-times text-danger"></i>
                                                        <?php } else { ?>
                                                            <i class="fal fa-check text-success"></i>
                                                        <?php }?>
                                                    </td>
                                                    <td class="text-left">
                                                        <label for="group-<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->cName;?>

                                                        </label>
                                                    </td>
                                                    <td>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentOrt_arr, 'oAuswahlAssistentOrt', true);
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->iteration = 0;
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->value) {
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->do_else = false;
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->iteration++;
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->last = $_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->iteration === $_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->total;
$__foreach_oAuswahlAssistentOrt_1_saved = $_smarty_tpl->tpl_vars['oAuswahlAssistentOrt'];
?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->value->cOrt;
if (!$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt']->last) {?>, <?php }?>
                                                        <?php
$_smarty_tpl->tpl_vars['oAuswahlAssistentOrt'] = $__foreach_oAuswahlAssistentOrt_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </td>
                                                    <td class="text-center" width="265">
                                                        <div class="btn-group">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentFrage_arr)) && count($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentFrage_arr) > 0) {?>
                                                                <a href="#" class="btn btn-link px-2 down"
                                                                   id="btn_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"
                                                                   title="<?php echo __('showQuestions');?>
"
                                                                   data-toggle="tooltip">
                                                                    <span class="icon-hover">
                                                                        <span class="fal fa-question-circle"></span>
                                                                        <span class="fas fa-question-circle"></span>
                                                                    </span>
                                                                </a>
                                                            <?php }?>
                                                            <a href="auswahlassistent.php?a=editGrp&g=<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                               class="btn btn-link px-2 edit"
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
                                                </tr>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentFrage_arr)) && count($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentFrage_arr) > 0) {?>
                                                    <tr>
                                                        <td class="text-left" colspan="5"
                                                            id="row_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"
                                                            style="display: none;">
                                                            <div id="rowdiv_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
"
                                                                 style="display: none;">
                                                                <table class="list table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center"></th>
                                                                            <th class="text-left"><?php echo __('question');?>
</th>
                                                                            <th class="text-center"><?php echo __('attribute');?>
</th>
                                                                            <th class="text-center"><?php echo __('sorting');?>
</th>
                                                                            <th class="text-center">&nbsp;</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->oAuswahlAssistentFrage_arr, 'oAuswahlAssistentFrage');
$_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value) {
$_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->do_else = false;
?>
                                                                        <tr<?php if (!$_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->nAktiv) {?> class="text-danger"<?php }?>>
                                                                            <td><?php if (!$_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->nAktiv) {?><i class="fal fa-times"></i><?php }?></td>
                                                                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->cFrage;?>
</td>
                                                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->cName;?>
</td>
                                                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->nSort;?>
</td>
                                                                            <td class="text-center">
                                                                                <div class="btn-group">
                                                                                    <a href="auswahlassistent.php?a=delQuest&q=<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->kAuswahlAssistentFrage;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                                                       class="btn btn-link px-2 remove delete-confirm"
                                                                                       data-toggle="tooltip"
                                                                                       data-modal-body="<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->cFrage;?>
"
                                                                                       title="<?php echo __('delete');?>
">
                                                                                        <span class="icon-hover">
                                                                                            <span class="fal fa-trash-alt"></span>
                                                                                            <span class="fas fa-trash-alt"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                    <a href="auswahlassistent.php?a=editQuest&q=<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentFrage']->value->kAuswahlAssistentFrage;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                                                       class="btn btn-link px-2 edit"
                                                                                       data-toggle="tooltip"
                                                                                       title="<?php echo __('edit');?>
">
                                                                                        <span class="icon-hover">
                                                                                            <span class="fal fa-edit"></span>
                                                                                            <span class="fas fa-edit"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php echo '<script'; ?>
>
                                                        $("#btn_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
").on('click', function () {
                                                            $("#row_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
").slideToggle(100, 'linear');
                                                            $("#rowdiv_toggle_<?php echo $_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe']->value->kAuswahlAssistentGruppe;?>
").slideToggle(100, 'linear');
                                                        });
                                                    <?php echo '</script'; ?>
>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                            <?php }?>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value)) && count($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value) > 0) {?>
                                        <div class="ml-auto col-sm-6 col-xl-auto submit">
                                            <button type="submit" name="a" value="delGrp" class="btn btn-danger btn-block">
                                                <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                            </button>
                                        </div>
                                    <?php }?>
                                    <div class="<?php if (!((isset($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value)) && count($_smarty_tpl->tpl_vars['oAuswahlAssistentGruppe_arr']->value) > 0)) {?>ml-auto<?php }?> col-sm-6 col-xl-auto submit">
                                        <button type="submit" name="a" value="newQuest" class="btn btn-outline-primary btn-block">
                                            <i class="fa fa-share"></i> <?php echo __('aaQuestion');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto submit">
                                        <button type="submit" name="a" value="newGrp" class="btn btn-primary btn-block">
                                            <i class="fa fa-share"></i> <?php echo __('aaGroup');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- #overview -->
                <div id="config" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['oConfig_arr']->value,'name'=>'einstellen','a'=>'saveSettings','action'=>'auswahlassistent.php','buttonCaption'=>__('saveWithIcon'),'tab'=>'einstellungen','title'=>__('settings')), 0, false);
?>
                </div>
                <!-- #config -->
            </div>
        </div>
        <!-- .tab-content -->
    <?php } else { ?>
        <div class="alert alert-danger"><?php echo __('noModuleAvailable');?>
</div>
    <?php }?>
</div><!-- #content -->

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
