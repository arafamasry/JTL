<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:22:16
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\kontaktformular_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c203f8dfb0f6_68324431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06a5565ee3320f2cf9e68af181b967ed5b1705ff' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\kontaktformular_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60c203f8dfb0f6_68324431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('configureContactform'),'cBeschreibung'=>__('contanctformDesc'),'cDokuURL'=>__('cURL')), 0, false);
?>
<div id="content">
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'config') {?> active<?php }?>" data-toggle="tab" role="tab" href="#config">
                        <?php echo __('settings');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'subjects') {?> active<?php }?>" data-toggle="tab" role="tab" href="#subjects">
                        <?php echo __('subjects');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'content') {?> active<?php }?>" data-toggle="tab" role="tab" href="#contents">
                        <?php echo __('contents');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="config" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'config') {?> active show<?php }?>">
                <form name="einstellen" method="post" action="kontaktformular.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="einstellungen" value="1" />
                    <div class="settings">
                        <div class="subheading1"><?php echo __('settings');?>
</div>
                        <hr class="mb-3">
                        <div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Conf']->value, 'cnf');
$_smarty_tpl->tpl_vars['cnf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cnf']->value) {
$_smarty_tpl->tpl_vars['cnf']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cConf === 'Y') {?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['cnf']->value->cName;?>
:</label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'selectbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" class="custom-select combo">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ($_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;?>
" tabindex="1" />
                                            <?php }?>
                                        </div>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung)) {?>
                                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung),$_smarty_tpl ) );?>
</div>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                                        <?php echo __('saveWithIcon');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="subjects" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'subjects') {?> active show<?php }?>">
                <div class="alert alert-info"><?php echo __('contanctformSubjectDesc');?>
</div>
                <div>
                    <div class="subheading1"><?php echo __('subjects');?>
</div>
                    <hr class="mb-3">
                    <div>
                        <div class="table-responsive">
                            <table class="list table">
                                <thead>
                                <tr>
                                    <th class="text-left"><?php echo __('subject');?>
</th>
                                    <th class="text-left"><?php echo __('mail');?>
</th>
                                    <th><?php echo __('customerGroup');?>
</th>
                                    <th class="text-center"><?php echo __('actions');?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Betreffs']->value, 'Betreff');
$_smarty_tpl->tpl_vars['Betreff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Betreff']->value) {
$_smarty_tpl->tpl_vars['Betreff']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <a href="kontaktformular.php?kKontaktBetreff=<?php echo $_smarty_tpl->tpl_vars['Betreff']->value->kKontaktBetreff;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"><?php echo $_smarty_tpl->tpl_vars['Betreff']->value->cName;?>
</a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['Betreff']->value->cMail;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['Betreff']->value->Kundengruppen;?>
</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="kontaktformular.php?del=<?php echo $_smarty_tpl->tpl_vars['Betreff']->value->kKontaktBetreff;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   class="btn btn-link px-2 delete-confirm"
                                                   title="<?php echo __('delete');?>
"
                                                   data-toggle="tooltip"
                                                   data-modal-body="<?php echo $_smarty_tpl->tpl_vars['Betreff']->value->cName;?>
">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-trash-alt"></span>
                                                        <span class="fas fa-trash-alt"></span>
                                                    </span>
                                                </a>
                                                <a href="kontaktformular.php?kKontaktBetreff=<?php echo $_smarty_tpl->tpl_vars['Betreff']->value->kKontaktBetreff;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   class="btn btn-link px-2"
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
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer save-wrapper">
                        <div class="row">
                            <div class="ml-auto col-sm-6 col-xl-auto">
                                <a class="btn btn-primary btn-block" href="kontaktformular.php?neu=1&token=<?php echo $_SESSION['jtl_token'];?>
">
                                    <i class="fa fa-share"></i> <?php echo __('newSubject');?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contents" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'content') {?> active show<?php }?>">
                <form name="einstellen" method="post" action="kontaktformular.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="content" value="1" />
                    <div>
                        <div class="subheading1"><?php echo __('contents');?>
</div>
                        <hr class="mb-3">
                        <div>
                            <div class="settings">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                                    <?php $_smarty_tpl->_assignInScope('cISOcat', ($_smarty_tpl->tpl_vars['cISO']->value).('_titel'));?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('title');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):
                                        </label>
                                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <input class="form-control" type="text" name="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cTitle_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value])) {
echo $_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value];
}?>" tabindex="1" />
                                        </span>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                                    <?php $_smarty_tpl->_assignInScope('cISOcat', ($_smarty_tpl->tpl_vars['cISO']->value).('_oben'));?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="cContentTop_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('topContent');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):
                                        </label>
                                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <textarea class="ckeditor form-control" name="cContentTop_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cContentTop_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value])) {
echo $_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value];
}?></textarea>
                                        </span>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('cISO', $_smarty_tpl->tpl_vars['language']->value->getIso());?>
                                    <?php $_smarty_tpl->_assignInScope('cISOcat', ($_smarty_tpl->tpl_vars['cISO']->value).('_unten'));?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="cContentBottom_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
">
                                            <?php echo __('bottomContent');?>
 (<?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
):
                                        </label>
                                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                            <textarea class="ckeditor form-control" name="cContentBottom_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
" id="cContentBottom_<?php echo $_smarty_tpl->tpl_vars['cISO']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value])) {
echo $_smarty_tpl->tpl_vars['Content']->value[$_smarty_tpl->tpl_vars['cISOcat']->value];
}?></textarea>
                                        </span>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <?php echo __('saveWithIcon');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
