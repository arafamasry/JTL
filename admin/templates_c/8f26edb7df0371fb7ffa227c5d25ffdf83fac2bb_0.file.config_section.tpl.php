<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:11:14
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\config_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20162f27a94_89250653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f26edb7df0371fb7ffa227c5d25ffdf83fac2bb' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\config_section.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20162f27a94_89250653 (Smarty_Internal_Template $_smarty_tpl) {
?><form<?php if (!empty($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?> method="<?php if (!empty($_smarty_tpl->tpl_vars['method']->value)) {
echo $_smarty_tpl->tpl_vars['method']->value;
} else { ?>post<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['action']->value)) {?> action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

    <input type="hidden" name="einstellungen" value="1" />
    <?php if (!empty($_smarty_tpl->tpl_vars['a']->value)) {?>
        <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" />
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['tab']->value)) {?>
        <input type="hidden" name="tab" value="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" />
    <?php }?>
    <div class="settings">
        <?php if (!empty($_smarty_tpl->tpl_vars['title']->value)) {?>
            <span class="subheading1"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <hr class="mb-3">
        <?php }?>
        <div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value, 'configItem');
$_smarty_tpl->tpl_vars['configItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configItem']->value) {
$_smarty_tpl->tpl_vars['configItem']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['configItem']->value->cConf === 'Y') {?>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['configItem']->value->cName;?>
:
                        </label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'number') {?>config-type-number<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'selectbox') {?>
                                <select name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
" class="custom-select combo">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configItem']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ($_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'listbox') {?>
                                <select name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
[]"
                                        id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"
                                        multiple="multiple"
                                        class="selectpicker custom-select combo"
                                        data-selected-text-format="count > 2"
                                        data-size="7">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configItem']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert, 'gesetzterWert');
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gesetzterWert']->value) {
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = false;
if ($_smarty_tpl->tpl_vars['gesetzterWert']->value->cWert == $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'number') {?>
                                <div class="input-group form-counter">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                            <span class="fas fa-minus"></span>
                                        </button>
                                    </div>
                                    <input class="form-control"
                                           type="number"
                                           name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"
                                           id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert;
}?>"
                                           tabindex="1"
                                            <?php if (strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_bestandskundenguthaben') || strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_neukundenguthaben')) {?>
                                                onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
', this);"
                                            <?php }?> />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'selectkdngrp') {?>
                                <select name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
" class="custom-select combo">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configItem']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert, 'gesetzterWert');
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gesetzterWert']->value) {
$_smarty_tpl->tpl_vars['gesetzterWert']->do_else = false;
if ($_smarty_tpl->tpl_vars['gesetzterWert']->value->cWert == $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['configItem']->value->cInputTyp === 'pass') {?>
                                <input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"  value="<?php if ((isset($_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert;
}?>" />
                            <?php } else { ?>
                                <input class="form-control"
                                       type="text"
                                       name="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"
                                       id="<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"
                                       value="<?php if ((isset($_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['configItem']->value->gesetzterWert;
}?>"
                                       tabindex="1"
                                        <?php if (strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_bestandskundenguthaben') || strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_neukundenguthaben')) {?>
                                            onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
', this);"
                                        <?php }?> />
                            <?php }?>
                            <?php if (strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_bestandskundenguthaben') || strpos($_smarty_tpl->tpl_vars['configItem']->value->cWertName,'_neukundenguthaben')) {?>
                                <span id="EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['configItem']->value->cWertName;?>
"></span>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['configItem']->value->cBeschreibung) {?>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['configItem']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['configItem']->value->kEinstellungenConf),$_smarty_tpl ) );?>
</div>
                        <?php }?>
                    </div>
                <?php } elseif ((($tmp = $_smarty_tpl->tpl_vars['showNonConf']->value ?? null)===null||$tmp==='' ? false : $tmp)) {?>
                    <div class="subheading1 mt-6">
                        <?php echo $_smarty_tpl->tpl_vars['configItem']->value->cName;?>

                    </div>
                    <hr class="mb-3">
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="save-wrapper card-footer">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <button name="speichern" type="submit" class="btn btn-primary btn-block"><?php if (!empty($_smarty_tpl->tpl_vars['buttonCaption']->value)) {
echo $_smarty_tpl->tpl_vars['buttonCaption']->value;
} else {
echo __('saveWithIcon');
}?></button>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
