<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:08:40
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\navigationsfilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c200c8e6cd52_19764756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d80232961f70dab6bb2b56a1376c2e546c503a9' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\navigationsfilter.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c200c8e6cd52_19764756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('navigationsfilter'),'cBeschreibung'=>__('navigationsfilterDesc'),'cDokuURL'=>__('navigationsfilterUrl')), 0, false);
?>

<?php echo '<script'; ?>
>
    var bManuell = false;

    $(function()
    {
        $('#einstellen').submit(validateFormData);
        $('#btn-add-range').on('click', function() { addPriceRange(); });
        $('.btn-remove-range').on('click', removePriceRange);

        selectCheck(document.getElementById('preisspannenfilter_anzeige_berechnung'));

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPreisspannenfilter_arr']->value, 'oPreisspanne', false, 'i');
$_smarty_tpl->tpl_vars['oPreisspanne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['oPreisspanne']->value) {
$_smarty_tpl->tpl_vars['oPreisspanne']->do_else = false;
?>
            addPriceRange(<?php echo $_smarty_tpl->tpl_vars['oPreisspanne']->value->nVon;?>
, <?php echo $_smarty_tpl->tpl_vars['oPreisspanne']->value->nBis;?>
);
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    });

    function addPriceRange(nVon, nBis)
    {
        var n = Math.floor(Math.random() * 1000000);

        nVon = nVon || 0;
        nBis = nBis || 0;

        $('#price-rows').append(
            '<div class="price-row row mx-0 justify-content-end">' +
                '<div class="col-5 col-md-4 px-1"><div class="input-group mb-3">' +
                '  <div class="input-group-prepend">' +
                '    <span class="input-group-text"><?php echo __('from');?>
</span>' +
                '  </div>' +
                '  <input id="nVon_' + n + '" class="form-control" name="nVon[]" type="text" value="' + nVon + '"> ' +
                '</div></div>' +
                '<div class="col-5 col-md-4 px-1"><div class="input-group mb-3">'+
                '  <div class="input-group-prepend">'+
                '    <span class="input-group-text"><?php echo __('to');?>
</span>'+
                '  </div>'+
                '  <input id="nBis_' + n + '" class="form-control" name="nBis[]" type="text" value="' + nBis + '"> '+
                '</div></div>' +
                '<div class="col-1 text-right"><button type="button" class="btn-remove-range btn btn-link btn-sm">' +
                '<span class="far fa-trash-alt"></span></button></div>' +
            '</div>'
        );

        $('.btn-remove-range').off('click').on('click', removePriceRange);
    }

    function removePriceRange()
    {
        $(this).closest('.price-row').remove();
    }

    function selectCheck(selectBox)
    {
        if (selectBox.selectedIndex === 1) {
            $('#Werte').show();
            bManuell = true;
        } else if (selectBox.selectedIndex === 0) {
            $('#Werte').hide();
            bManuell = false;
        }
    }

    function validateFormData(e)
    {
        if (bManuell === true) {
            var cFehler = '',
                $priceRows = $('.price-row'),
                lastUpperBound = 0,
                $errorAlert = $('#ranges-error-alert');

            $errorAlert.hide();

            $priceRows
                .sort(function(a, b) {
                    var aVon = parseFloat($(a).find('[id^=nVon_]').val()),
                        bVon = parseFloat($(b).find('[id^=nVon_]').val());
                    return aVon < bVon ? -1 : +1;
                })
                .each(function(i, row) {
                    $('#price-rows').append(row);
                });

            $priceRows.each(function(i, row) {
                var $row  = $(row),
                    $nVon = $row.find('[id^=nVon_]'),
                    $nBis = $row.find('[id^=nBis_]'),
                    nVon  = $nVon.val(),
                    nBis  = $nBis.val(),
                    fVon  = parseFloat(nVon),
                    fBis  = parseFloat(nBis);

                $row.removeClass('has-error');

                if(nVon === '' || nBis === '') {
                    cFehler += '<?php echo __('errorFillRequired');?>
' + '<br>';
                    $row.addClass('has-error');
                } else if(fVon >= fBis) {
                    cFehler += '<?php echo __('thePriceRangeIsInvalid');?>
 (' + fVon + ' <?php echo __('to');?>
 ' + fBis + ').<br>';
                    $row.addClass('has-error');
                } else if(fVon < lastUpperBound) {
                    cFehler += '<?php echo __('thePriceRangeOverlapps');?>
 (' + fVon + ' <?php echo __('to');?>
 ' + fBis + ').<br>';
                    $row.addClass('has-error');
                }

                lastUpperBound = fBis;
            });

            if(cFehler !== '') {
                $errorAlert.html(cFehler).show();
                e.preventDefault();
            }
        }
    }
<?php echo '</script'; ?>
>

<div id="content">
    <form name="einstellen" method="post" id="einstellen">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="speichern" value="1"/>
        <div id="settings">
            <?php $_smarty_tpl->_assignInScope('open', false);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig_arr']->value, 'oConfig');
$_smarty_tpl->tpl_vars['oConfig']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oConfig']->value) {
$_smarty_tpl->tpl_vars['oConfig']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cConf === 'Y') {?>
                    <div class="item form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cName;?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'number') {?>config-type-number<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'selectbox') {?>
                            <select id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                                    class="custom-select combo"
                                    <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cWertName === 'preisspannenfilter_anzeige_berechnung') {?>
                                        onChange="selectCheck(this);"
                                    <?php }?>>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>

                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        <?php } elseif ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'number') {?>
                            <div class="input-group form-counter">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                        <span class="fas fa-minus"></span>
                                    </button>
                                </div>
                                <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                               value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>"
                               tabindex="1">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                                   id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                                   value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>"
                                   tabindex="1">
                        <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung) {?>
                            <span class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['oConfig']->value->kEinstellungenConf),$_smarty_tpl ) );?>

                            </span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cWertName === 'preisspannenfilter_anzeige_berechnung') {?>
                    </div>
                    <div id="Werte" style="display: <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert === 'M') {?>block<?php } else { ?>none<?php }?>;">
                        <div id="ranges-error-alert" class="alert alert-danger" style="display: none;"></div>
                        <div id="price-rows" class="w-100"></div>
                        <div class="row">
                            <div class="ml-auto col-sm-6 col-lg-auto">
                                <button type="button" class="btn btn-primary btn-block" id="btn-add-range">
                                    <i class="fal fa-plus"></i> <?php echo __('addPriceRange');?>

                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="item input-group">
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cName) {?>
                        <?php if ($_smarty_tpl->tpl_vars['open']->value) {?>
                    </div>
                </div>
                        <?php }?>
                <div class="card">
                    <div class="card-header">
                        <div class="subheading1">
                            <?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cName;?>

                        </div>
                        <hr class="mb-n3">
                    </div>
                    <div class="card-body">
                        <?php $_smarty_tpl->_assignInScope('open', true);?>
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['open']->value) {?>
                    </div>
                </div>
            <?php }?>
        </div>
        <div class="submit card-footer save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <button name="speichern" class="btn btn-primary btn-block" type="submit" value="<?php echo __('save');?>
">
                        <?php echo __('saveWithIcon');?>

                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
