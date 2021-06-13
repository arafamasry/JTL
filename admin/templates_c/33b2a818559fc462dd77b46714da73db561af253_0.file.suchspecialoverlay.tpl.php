<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:13:56
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\suchspecialoverlay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20204f008f2_83278449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b2a818559fc462dd77b46714da73db561af253' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\suchspecialoverlay.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/fileupload.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c20204f008f2_83278449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('suchspecialoverlay'),'cBeschreibung'=>__('suchspecialoverlayDesc'),'cDokuURL'=>__('suchspecialoverlayUrl')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>'suchspecialoverlay.php'), 0, false);
?>
                </div>
                <div class="col-md-auto">
                    <form name="suchspecialoverlay" method="post" action="suchspecialoverlay.php" class="inline_block">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <div class="form-row">
                            <label class="col-sm-auto col-form-label" for="<?php echo __('suchspecial');?>
"><?php echo __('suchspecial');?>
:</label>
                            <input type="hidden" name="suchspecialoverlay" value="1" />
                            <div class="col-sm-auto">
                                <select name="kSuchspecialOverlay" class="custom-select selectBox" id="<?php echo __('suchspecial');?>
" onchange="document.suchspecialoverlay.submit();">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSuchspecialOverlay_arr']->value, 'oSuchspecialOverlayTMP');
$_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->value) {
$_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->value->getType();?>
" <?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->value->getType() == $_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getType()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['oSuchspecialOverlayTMP']->value->getName();?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getType() > 0) {?>
        <form name="einstellen" method="post" action="suchspecialoverlay.php" enctype="multipart/form-data" onsubmit="checkfile(event)">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input type="hidden" name="suchspecialoverlay" value="1" />
            <input type="hidden" name="kSuchspecialOverlay" value="<?php echo $_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getType();?>
" />
            <input type="hidden" name="speicher_einstellung" value="1" />

            <div class="clearall">
                <div class="no_overflow card" id="settings">
                    <div class="card-body">
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="nAktiv"><?php echo __('suchspecialoverlayActive');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <select name="nAktiv" id="nAktiv" class="custom-select combo">
                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getActive() == 1) {?> selected<?php }?>><?php echo __('yes');?>

                                    </option>
                                    <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getActive() == 0) {?> selected<?php }?>><?php echo __('no');?>

                                    </option>
                                </select>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlayActiveDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>

                        <div class="form-group form-row align-items-center file-input">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="cSuchspecialOverlayBild"><?php echo __('suchspecialoverlayFileName');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileID'=>'cSuchspecialOverlayBild','fileShowRemove'=>true,'fileInitialPreview'=>"[
                                            '<img src=\"".((string)$_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getURL((defined('IMAGE_SIZE_SM') ? constant('IMAGE_SIZE_SM') : null)))."?rnd=".((string)$_smarty_tpl->tpl_vars['cRnd']->value)."\" class=\"mb-3\" />'
                                        ]"), 0, false);
?>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlayFileNameDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="nPrio"><?php echo __('suchspecialoverlayPrio');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <select id="nPrio" name="nPrio" class="custom-select combo">
                                    <option value="-1"></option>
                                    <?php
$__section_prios_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nSuchspecialOverlayAnzahl']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_prios_0_start = min(1, $__section_prios_0_loop);
$__section_prios_0_total = min(($__section_prios_0_loop - $__section_prios_0_start), $__section_prios_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_prios'] = new Smarty_Variable(array());
if ($__section_prios_0_total !== 0) {
for ($__section_prios_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index'] = $__section_prios_0_start; $__section_prios_0_iteration <= $__section_prios_0_total; $__section_prios_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index']++){
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index'] : null);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index'] : null) == $_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPriority()) {?> selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prios']->value['index'] : null);?>
</option>
                                    <?php
}
}
?>
                                </select>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlayPrioDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="nTransparenz"><?php echo __('transparency');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <select name="nTransparenz" class="custom-select combo" id="nTransparenz">
                                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_transparenz'] = new Smarty_Variable(array());
if (true) {
for ($__section_transparenz_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index'] = 0; $__section_transparenz_1_iteration <= 101; $__section_transparenz_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index']++){
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index'] : null);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index'] : null) == $_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getTransparance()) {?> selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_transparenz']->value['index'] : null);?>
</option>
                                    <?php
}
}
?>
                                </select>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlayClarityDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="nGroesse"><?php echo __('suchspecialoverlaySize');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <div class="input-group form-counter config-type-number">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                            <span class="fas fa-minus"></span>
                                        </button>
                                    </div>
                                    <input id="nGroesse" class="form-control" name="nGroesse" type="number" value="<?php echo $_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getSize();?>
" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlaySizeDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="nPosition"><?php echo __('position');?>
:</label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                <select name="nPosition" id="nPosition" class="combo custom-select <?php if (!empty($_smarty_tpl->tpl_vars['isDeprecated']->value)) {?> disabled="disabled"<?php }?>>
                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 1) {?> selected<?php }?>>
                                        <?php echo __('topLeft');?>

                                    </option>
                                    <option value="2"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 2) {?> selected<?php }?>>
                                        <?php echo __('top');?>

                                    </option>
                                    <option value="3"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 3) {?> selected<?php }?>>
                                        <?php echo __('topRight');?>

                                    </option>
                                    <option value="4"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 4) {?> selected<?php }?>>
                                        <?php echo __('right');?>

                                    </option>
                                    <option value="5"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 5) {?> selected<?php }?>>
                                        <?php echo __('bottomRight');?>

                                    </option>
                                    <option value="6"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 6) {?> selected<?php }?>>
                                        <?php echo __('bottom');?>

                                    </option>
                                    <option value="7"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 7) {?> selected<?php }?>>
                                        <?php echo __('bottomLeft');?>

                                    </option>
                                    <option value="8"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 8) {?> selected<?php }?>>
                                        <?php echo __('left');?>

                                    </option>
                                    <option value="9"<?php if ($_smarty_tpl->tpl_vars['oSuchspecialOverlay']->value->getPosition() === 9) {?> selected<?php }?>>
                                        <?php echo __('centered');?>

                                    </option>
                                </select>
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('suchspecialoverlayPositionDesc')),$_smarty_tpl ) );?>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer save-wrapper">
                        <div class="submit">
                            <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary">
                                <?php echo __('saveWithIcon');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php }?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    
    var file2large = false;

    function checkfile(e){
        e.preventDefault();
        if (!file2large){
            document.einstellen.submit();
        }
    }

    $(document).ready(function () {
        $('form #cSuchspecialOverlayBild').on('change', function(e){
            $('form div.alert').slideUp();
            var filesize= this.files[0].size;
            
            var maxsize = <?php echo $_smarty_tpl->tpl_vars['nMaxFileSize']->value;?>
;
            
            if (filesize >= maxsize) {
                $('.input-group.file-input').after('<div class="alert alert-danger"><i class="fal fa-exclamation-triangle"></i><?php echo __('errorUploadSizeLimit');?>
</div>').slideDown();
                file2large = true;
            } else {
                $('form div.alert').slideUp();
                file2large = false;
            }
        });
    });
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
