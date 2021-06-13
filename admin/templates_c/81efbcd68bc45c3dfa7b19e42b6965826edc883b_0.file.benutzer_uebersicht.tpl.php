<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:45:36
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\benutzer_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11a604b9c23_20456058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81efbcd68bc45c3dfa7b19e42b6965826edc883b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\benutzer_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60c11a604b9c23_20456058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
 <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('benutzer'),'cBeschreibung'=>__('benutzerDesc'),'cDokuURL'=>__('benutzerURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if (empty($_smarty_tpl->tpl_vars['cTab']->value) || $_smarty_tpl->tpl_vars['cTab']->value === 'account_view') {?> active<?php }?>" data-toggle="tab" role="tab" href="#account_view">
                        <?php echo __('benutzerTab');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'group_view') {?> active<?php }?>" data-toggle="tab" role="tab" href="#group_view">
                        <?php echo __('gruppenTab');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="account_view" class="tab-pane fade<?php if (empty($_smarty_tpl->tpl_vars['cTab']->value) || $_smarty_tpl->tpl_vars['cTab']->value === 'account_view') {?> active show<?php }?>">
                <div class="subheading1"><?php echo __('benutzerKategorie');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <table class="table table-align-top">
                        <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-center"><?php echo __('username');?>
</th>
                            <th class="text-center"><?php echo __('benutzer2FA');?>
</th>
                            <th class="text-center"><?php echo __('email');?>
</th>
                            <th class="text-center"><?php echo __('group');?>
</th>
                            <th class="text-center"><?php echo __('benutzerLoginVersuche');?>
</th>
                            <th class="text-center"><?php echo __('benutzerLetzterLogin');?>
</th>
                            <th class="text-center"><?php echo __('benutzerGueltigBis');?>
</th>
                            <th class="text-center" width="135"><?php echo __('action');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAdminList_arr']->value, 'oAdmin');
$_smarty_tpl->tpl_vars['oAdmin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oAdmin']->value) {
$_smarty_tpl->tpl_vars['oAdmin']->do_else = false;
?>
                            <tr>
                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->kAdminlogin;?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->cLogin;?>
</td>
                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['oAdmin']->value->b2FAauth) {
echo __('stateON');
} else {
echo __('stateOFF');
}?></td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->cMail;?>
</td>
                                <td class="text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['oAdmin']->value->kAdminlogingruppe > 1) {?>
                                        <form method="post" action="benutzerverwaltung.php">
                                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->kAdminlogingruppe;?>
" />
                                            <button type="submit" class="btn btn-default" name="action" value="group_edit"><?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->cGruppe;?>
</button>
                                        </form>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->cGruppe;?>

                                    <?php }?>
                                </td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->nLoginVersuch;?>
</td>
                                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['oAdmin']->value->dLetzterLogin && $_smarty_tpl->tpl_vars['oAdmin']->value->dLetzterLogin !== null) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oAdmin']->value->dLetzterLogin,'%d.%m.%Y %H:%M:%S');
} else { ?>---<?php }?></td>
                                <td class="text-center"><?php if (!$_smarty_tpl->tpl_vars['oAdmin']->value->bAktiv) {?>gesperrt<?php } else {
if ($_smarty_tpl->tpl_vars['oAdmin']->value->dGueltigBis && $_smarty_tpl->tpl_vars['oAdmin']->value->dGueltigBis !== null) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oAdmin']->value->dGueltigBis,'%d.%m.%Y %H:%M:%S');
} else { ?>---<?php }
}?></td>
                                <td class="text-center">
                                    <form method="post" action="benutzerverwaltung.php">
                                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->kAdminlogin;?>
" />
                                        <div class="btn-group">
                                            <?php if ($_smarty_tpl->tpl_vars['oAdmin']->value->bAktiv) {?>
                                                <button class="notext btn btn-link px-2" name="action" value="account_lock" title="<?php echo __('sperrenLabel');?>
" data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-lock"></span>
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </button>
                                            <?php } else { ?>
                                                <button class="notext btn btn-link px-2" name="action" value="account_unlock" title="<?php echo __('entsperrenLabel');?>
" data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-unlock"></span>
                                                        <span class="fas fa-unlock"></span>
                                                    </span>
                                                </button>
                                            <?php }?>
                                            <button type="submit"
                                                    class="notext btn btn-link px-2 delete-confirm"
                                                    name="action"
                                                    value="account_delete"
                                                    title="<?php echo __('delete');?>
"
                                                    data-toggle="tooltip"
                                                    data-modal-body="<?php echo __('sureDeleteUser');?>
 (<?php echo $_smarty_tpl->tpl_vars['oAdmin']->value->cLogin;?>
)">
                                                <span class="icon-hover">
                                                    <span class="fal fa-trash-alt"></span>
                                                    <span class="fas fa-trash-alt"></span>
                                                </span>
                                            </button>
                                            <button class="notext btn btn-link px-2" name="action" value="account_edit" title="<?php echo __('modify');?>
" data-toggle="tooltip">
                                                <span class="icon-hover">
                                                    <span class="fal fa-edit"></span>
                                                    <span class="fas fa-edit"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <form action="benutzerverwaltung.php" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                <input type="hidden" name="action" value="account_edit" />
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-share"></i> <?php echo __('benutzerNeu');?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="group_view" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'group_view') {?> active show<?php }?>">
                <div class="subheading1"><?php echo __('gruppenKategorie');?>
</div>
                <hr class="mb-3">
                <div class="table-responsive">
                    <table class="table table-align-top">
                        <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left"><?php echo __('group');?>
</th>
                            <th class="text-left"><?php echo __('description');?>
</th>
                            <th class="text-center"><?php echo __('user');?>
</th>
                            <th class="text-center"><?php echo __('action');?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oAdminGroup_arr']->value, 'oGroup');
$_smarty_tpl->tpl_vars['oGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oGroup']->value) {
$_smarty_tpl->tpl_vars['oGroup']->do_else = false;
?>
                            <tr>
                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->kAdminlogingruppe;?>
</td>
                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->cGruppe;?>
</td>
                                <td class="text-left"><?php echo __($_smarty_tpl->tpl_vars['oGroup']->value->cBeschreibung);?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['oGroup']->value->nCount;?>
</td>
                                <td class="text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['oGroup']->value->kAdminlogingruppe !== '1') {?>
                                        <form method="post" action="benutzerverwaltung.php">
                                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->kAdminlogingruppe;?>
" name="id" />
                                            <div class="btn-group">
                                                <button type="submit"
                                                        class="delete btn btn-link px-2 delete-confirm"
                                                        name="action" value="group_delete"
                                                        <?php if ((int)$_smarty_tpl->tpl_vars['oGroup']->value->nCount > 0) {?>title="<?php echo __('loeschenLabelDeaktiviert');?>
" disabled="disabled"<?php } else { ?>title="<?php echo __('delete');?>
"<?php }?>
                                                        data-toggle="tooltip"
                                                        data-modal-body="<?php echo __('sureDeleteGroup');?>
 (<?php echo $_smarty_tpl->tpl_vars['oGroup']->value->cGruppe;?>
)">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-trash-alt"></span>
                                                        <span class="fas fa-trash-alt"></span>
                                                    </span>
                                                </button>
                                                <button type="submit" class="edit btn btn-link px-2" name="action" value="group_edit" title="<?php echo __('modify');?>
" data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-edit"></span>
                                                        <span class="fas fa-edit"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <div class="save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <form action="benutzerverwaltung.php" method="post">
                                <input type="hidden" name="action" value="group_edit" />
                                <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-share"></i> <?php echo __('gruppeNeu');?>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
