<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:41:12
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\bestellungen_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c119582f2cf9_89126969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a80b43076db9e80b9e65dfc048f9b31eeb19e7e' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\bestellungen_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
  ),
),false)) {
function content_60c119582f2cf9_89126969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('order'),'cBeschreibung'=>__('orderDesc'),'cDokuURL'=>__('orderURL')), 0, false);
?>
<div id="content">
    <?php if (count($_smarty_tpl->tpl_vars['orders']->value) > 0) {?>
        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('order');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="search-toolbar mb-3">
                    <form name="bestellungen" method="post" action="bestellungen.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="Suche" value="1" />
                        <div class="form-row">
                            <label class="col-sm-auto col-form-label" for="orderSearch"><?php echo __('orderSearchItem');?>
:</label>
                            <div class="col-sm-auto mb-2">
                                <input class="form-control" name="cSuche" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value))) {
echo $_smarty_tpl->tpl_vars['cSuche']->value;
}?>" id="orderSearch" />
                            </div>
                            <span class="col-sm-auto">
                                <button name="submitSuche" type="submit" class="btn btn-primary btn-block"><i class="fal fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>array('cSuche'=>$_smarty_tpl->tpl_vars['cSuche']->value)), 0, false);
?>
                <form name="bestellungen" method="post" action="bestellungen.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="zuruecksetzen" value="1" />
                    <?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value)) && strlen($_smarty_tpl->tpl_vars['cSuche']->value) > 0) {?>
                        <input type="hidden" name="cSuche" value="<?php echo $_smarty_tpl->tpl_vars['cSuche']->value;?>
" />
                    <?php }?>
                    <div class="table-responsive">
                        <table class="table table-striped table-align-top">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center"><?php echo __('orderNumber');?>
</th>
                                    <th class="text-left"><?php echo __('customer');?>
</th>
                                    <th class="text-center"><?php echo __('orderCostumerRegistered');?>
</th>
                                    <th class="text-left"><?php echo __('orderShippingName');?>
</th>
                                    <th class="text-left"><?php echo __('orderPaymentName');?>
</th>
                                    <th><?php echo __('orderWawiPickedUp');?>
</th>
                                    <th class="text-center"><?php echo __('status');?>
</th>
                                    <th><?php echo __('orderSum');?>
</th>
                                    <th class="text-right"><?php echo __('orderDate');?>
</th>
                                    <th class="text-right"><?php echo __('orderIpAddress');?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                <tr>
                                    <td class="check">
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->cAbgeholt === 'Y' && $_smarty_tpl->tpl_vars['order']->value->cZahlungsartName !== 'Amazon Payment' && $_smarty_tpl->tpl_vars['order']->value->oKunde !== null) {?>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="kBestellung[]" id="order-id-<?php echo $_smarty_tpl->tpl_vars['order']->value->kBestellung;?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->kBestellung;?>
" />
                                                <label class="custom-control-label" for="order-id-<?php echo $_smarty_tpl->tpl_vars['order']->value->kBestellung;?>
"></label>
                                            </div>
                                        <?php }?>
                                    </td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['order']->value->cBestellNr;?>
</td>
                                    <td>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['order']->value->oKunde->cVorname)) || (isset($_smarty_tpl->tpl_vars['order']->value->oKunde->cNachname)) || (isset($_smarty_tpl->tpl_vars['order']->value->oKunde->cFirma))) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->oKunde->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->oKunde->cNachname;?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['order']->value->oKunde->cFirma)) && strlen($_smarty_tpl->tpl_vars['order']->value->oKunde->cFirma) > 0) {?>
                                                (<?php echo $_smarty_tpl->tpl_vars['order']->value->oKunde->cFirma;?>
)
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php echo __('noAccount');?>

                                        <?php }?>
                                    </td>
                                    <td class="text-center"><?php if ((isset($_smarty_tpl->tpl_vars['order']->value->oKunde)) && $_smarty_tpl->tpl_vars['order']->value->oKunde->nRegistriert === 1) {
echo __('yes');
} else {
echo __('no');
}?></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value->cVersandartName;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value->cZahlungsartName;?>
</td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->cAbgeholt === 'Y') {?>
                                            <i class="fal fa-check text-success"></i>
                                        <?php } else { ?>
                                            <i class="fal fa-times text-danger"></i>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->cStatus == 1) {?>
                                            <?php echo __('new');?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->cStatus == 2) {?>
                                            <?php echo __('orderInProgress');?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->cStatus == 3) {?>
                                            <?php echo __('orderPayed');?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->cStatus == 4) {?>
                                            <?php echo __('orderShipped');?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->cStatus == 5) {?>
                                            <?php echo __('orderPartlyShipped');?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->cStatus == -1) {?>
                                            <?php echo __('orderCanceled');?>

                                        <?php }?>
                                    </td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['order']->value->WarensummeLocalized[0];?>
</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['order']->value->dErstelldatum_de;?>
</td>
                                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['order']->value->cIP;?>
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
                            <div class="col-sm-6 col-xl-auto text-left">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);" />
                                    <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                </div>
                            </div>
                            <div class="ml-auto col-sm-6 col-xl-auto">
                                <button name="zuruecksetzenBTN" type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-refresh"></i> <?php echo __('orderPickedUpResetBTN');?>

                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'cParam_arr'=>array('cSuche'=>$_smarty_tpl->tpl_vars['cSuche']->value),'isBottom'=>true), 0, true);
?>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-info"><i class="fal fa-info-circle"></i> <?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
