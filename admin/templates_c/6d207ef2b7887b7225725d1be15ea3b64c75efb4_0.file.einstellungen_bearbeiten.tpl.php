<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:42:43
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\einstellungen_bearbeiten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119b379d570_54304484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d207ef2b7887b7225725d1be15ea3b64c75efb4' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\einstellungen_bearbeiten.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60c119b379d570_54304484 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['Sektion']->value)) && $_smarty_tpl->tpl_vars['Sektion']->value) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['cSearch']->value)) && strlen($_smarty_tpl->tpl_vars['cSearch']->value) > 0) {?>
        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['cSearch']->value);?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>$_smarty_tpl->tpl_vars['title']->value,'cBeschreibung'=>$_smarty_tpl->tpl_vars['cPrefDesc']->value,'cDokuURL'=>$_smarty_tpl->tpl_vars['cPrefURL']->value), 0, false);
}
$_smarty_tpl->_assignInScope('search', (isset($_smarty_tpl->tpl_vars['cSuche']->value)) && !empty($_smarty_tpl->tpl_vars['cSuche']->value));?>

<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
    <?php echo '<script'; ?>
>
        $(function() {
            var $element = $('.input-group.highlight');
            if ($element.length > 0) {
                var height = $element.height(),
                    offset = $element.offset().top,
                    wndHeight = $(window).height();
                if (height < wndHeight) {
                    offset = offset - ((wndHeight / 2) - (height / 2));
                }

                $('html, body').stop().animate({ scrollTop: offset }, 400);
            }
        });
    <?php echo '</script'; ?>
>
<?php }?>
<div id="content">
    <div id="settings">
        <?php if ((isset($_smarty_tpl->tpl_vars['Conf']->value)) && count($_smarty_tpl->tpl_vars['Conf']->value) > 0) {?>
        <form name="einstellen" method="post" action="<?php echo (($tmp = $_smarty_tpl->tpl_vars['action']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" class="settings navbar-form">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="einstellungen_bearbeiten" value="1" />
            <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
                <input type="hidden" name="cSuche" value="<?php echo $_smarty_tpl->tpl_vars['cSuche']->value;?>
" />
                <input type="hidden" name="einstellungen_suchen" value="1" />
            <?php }?>
            <input type="hidden" name="kSektion" value="<?php echo $_smarty_tpl->tpl_vars['kEinstellungenSektion']->value;?>
" />
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Conf']->value, 'cnf');
$_smarty_tpl->tpl_vars['cnf']->index = -1;
$_smarty_tpl->tpl_vars['cnf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cnf']->value) {
$_smarty_tpl->tpl_vars['cnf']->do_else = false;
$_smarty_tpl->tpl_vars['cnf']->index++;
$__foreach_cnf_0_saved = $_smarty_tpl->tpl_vars['cnf'];
?>
                <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cConf === 'Y') {?>
                    <div class="form-group form-row align-items-center <?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value)) && $_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenConf == $_smarty_tpl->tpl_vars['cSuche']->value) {?> highlight<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['cnf']->value->cName;?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'number') {?>config-type-number<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'selectbox') {?>
                                <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cWertName === 'kundenregistrierung_standardland' || $_smarty_tpl->tpl_vars['cnf']->value->cWertName === 'lieferadresse_abfragen_standardland') {?>
                                    <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->getISO();?>
" <?php if ($_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert == $_smarty_tpl->tpl_vars['country']->value->getISO()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['country']->value->getName();?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                <?php } else { ?>
                                    <select class="custom-select" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
">
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
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'listbox') {?>
                                <select name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
[]"
                                id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
"
                                multiple="multiple"
                                class="selectpicker custom-select combo"
                                data-selected-text-format="count > 2"
                                data-size="7">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert, 'gesetzterWert');
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gesetzterWert']->value) {
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = false;
if ($_smarty_tpl->tpl_vars['gesetzterWert']->value->cWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'pass') {?>
                                <input class="form-control" autocomplete="off" type="password" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;?>
" tabindex="1" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'number') {?>
                                <div class="input-group form-counter">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                            <span class="fas fa-minus"></span>
                                        </button>
                                    </div>
                                    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;
}?>" tabindex="1" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;
}?>" tabindex="1" />
                            <?php }?>
                        </div>
                        <?php if (!empty($_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung)) {?>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenConf),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['oSections']->value[$_smarty_tpl->tpl_vars['kEinstellungenSektion']->value])) && $_smarty_tpl->tpl_vars['oSections']->value[$_smarty_tpl->tpl_vars['kEinstellungenSektion']->value]->hasValueMarkup) {?>
                                                    <?php }?>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['cnf']->index !== 0) {?>
                        </div>
                    </div>
                    <?php }?>
                    <div class="card">
                        <div class="card-header">
                            <span class="subheading1" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['cnf']->value->cName;?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['cnf']->value->cSektionsPfad)) {?>
                                    <span class="path float-right">
                                        <strong><?php echo __('settingspath');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['cnf']->value->cSektionsPfad;?>

                                    </span>
                                <?php }?>
                            </span>
                            <?php if ((isset($_smarty_tpl->tpl_vars['oSections']->value[$_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenSektion])) && $_smarty_tpl->tpl_vars['oSections']->value[$_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenSektion]->hasSectionMarkup) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['oSections']->value[$_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenSektion]->getSectionMarkup();?>

                            <?php }?>
                            <hr class="mb-n3">
                        </div>
                        <div class="card-body">
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['cnf'] = $__foreach_cnf_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <div class="save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <button type="submit" value="<?php echo __('savePreferences');?>
" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
        <?php } else { ?>
            <div class="alert alert-info"><?php echo __('noSearchResult');?>
</div>
        <?php }?>
    </div>
</div>
<?php }
}
