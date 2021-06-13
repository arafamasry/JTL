<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:41:08
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\statusemail_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119545aadb1_13706359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e485bf19805fbf6d1a381b8f12ed9f496088b5d6' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\statusemail_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
  ),
),false)) {
function content_60c119545aadb1_13706359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('statusemail'),'cBeschreibung'=>__('statusemailDesc'),'cDokuURL'=>__('statusemailURL')), 0, false);
?>
<div id="content">
    <form name="einstellen" method="post" action="statusemail.php">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="einstellungen" value="1" />
        <div id="settings">
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('settings');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nAktiv"><?php echo __('statusemailUse');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select class="custom-select" name="nAktiv" id="nAktiv">
                                <option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nAktiv)) && $_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nAktiv == 1) {?>selected<?php }?>><?php echo __('yes');?>
</option>
                                <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nAktiv)) && $_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nAktiv == 0) {?>selected<?php }?>><?php echo __('no');?>
</option>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('statusemailUseDesc')),$_smarty_tpl ) );?>

                        </div>
                    </div>

                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cEmail"><?php echo __('statusemailEmail');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="cEmail" id="cEmail"
                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->cEmail))) {
echo $_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->cEmail;
}?>"
                                   tabindex="1">
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('statusemailEmailDesc')),$_smarty_tpl ) );?>

                        </div>
                    </div>

                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cIntervall"><?php echo __('statusemailIntervall');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="cIntervall_arr[]"
                                    id="cIntervall"
                                    multiple="multiple"
                                    class="selectpicker custom-select">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->cIntervallMoeglich_arr, 'nIntervallMoeglich', false, 'key');
$_smarty_tpl->tpl_vars['nIntervallMoeglich']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['nIntervallMoeglich']->value) {
$_smarty_tpl->tpl_vars['nIntervallMoeglich']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['nIntervallMoeglich']->value;?>
"
                                            <?php if (in_array($_smarty_tpl->tpl_vars['nIntervallMoeglich']->value,$_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nIntervall_arr)) {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('statusemailIntervallDesc')),$_smarty_tpl ) );?>

                        </div>
                    </div>

                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cInhalt"><?php echo __('statusemailContent');?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="cInhalt_arr[]"
                                    id="cInhalt"
                                    multiple="multiple"
                                    class="selectpicker custom-select"
                                    data-live-search="true"
                                    data-actions-box="true"
                                    data-selected-text-format="count > 1"
                                    data-size="7">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->cInhaltMoeglich_arr, 'nInhaltMoeglich', false, 'key');
$_smarty_tpl->tpl_vars['nInhaltMoeglich']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['nInhaltMoeglich']->value) {
$_smarty_tpl->tpl_vars['nInhaltMoeglich']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['nInhaltMoeglich']->value;?>
"
                                            <?php if (in_array($_smarty_tpl->tpl_vars['nInhaltMoeglich']->value,$_smarty_tpl->tpl_vars['oStatusemailEinstellungen']->value->nInhalt_arr)) {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('statusemailContentDesc')),$_smarty_tpl ) );?>

                        </div>
                    </div>
                </div>
                <div class="card-footer save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button type="submit" class="btn btn-outline-primary btn-block" name="action" value="sendnow">
                                <i class="far fa-envelope"></i> <?php echo __('sendEmail');?>

                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-auto">
                            <button type="submit" class="btn btn-primary btn-block">
                                <?php echo __('saveWithIcon');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div><?php }
}
