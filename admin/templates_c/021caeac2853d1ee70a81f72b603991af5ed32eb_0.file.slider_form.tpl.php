<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:45:38
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\slider_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2097242b1f6_78876204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '021caeac2853d1ee70a81f72b603991af5ed32eb' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\slider_form.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seiten_liste.tpl' => 2,
  ),
),false)) {
function content_60c2097242b1f6_78876204 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="settings">
    <form action="slider.php?action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" accept-charset="iso-8859-1" id="slider" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
        <input type="hidden" name="kSlider" value="<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getID();?>
" />
        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('general');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <ul class="jtl-list-group">
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="cName"><?php echo __('internalName');?>
</label>
                        </div>
                        <div class="for">
                            <input type="text" name="cName" id="cName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getName();?>
" />
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bAktiv"><?php echo __('status');?>
</label>
                        </div>
                        <div class="for">
                            <select id="bAktiv" name="bAktiv" class="custom-select">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getIsActive() === false) {?> selected="selected"<?php }?>><?php echo __('deactivated');?>
</option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getIsActive() === true) {?> selected="selected"<?php }?>><?php echo __('activated');?>
</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bRandomStart"><?php echo __('randomStart');?>
</label>
                        </div>
                        <div class="for">
                            <select id="bRandomStart" name="bRandomStart" class="custom-select">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getRandomStart() === false) {?> selected="selected"<?php }?>><?php echo __('no');?>
</option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getRandomStart() === true) {?> selected="selected"<?php }?>><?php echo __('yes');?>
</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bPauseOnHover"><?php echo __('pauseOnHover');?>
</label>
                        </div>
                        <div class="for">
                            <select id="bPauseOnHover" name="bPauseOnHover" class="custom-select">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getPauseOnHover() === false) {?> selected="selected"<?php }?>><?php echo __('no');?>
</option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getPauseOnHover() === true) {?> selected="selected"<?php }?>><?php echo __('yes');?>
</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('presentation');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <ul class="jtl-list-group">
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bUseKB"><?php echo __('kenBurnsEffect');?>
</label>
                        </div>
                        <div class="for">
                            <select class="custom-select" id="bUseKB" name="bUseKB">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getUseKB() === false) {?> selected="selected"<?php }?>><?php echo __('deactivated');?>
</option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getUseKB() === true) {?> selected="selected"<?php }?>><?php echo __('activated');?>
</option>
                            </select>
                        </div>
                        <p><i class="fal fa-exclamation-triangle"></i> <?php echo __('overrideDescription');?>
</p>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bControlNav"><?php echo __('dotNavigation');?>
</label>
                        </div>
                        <div class="for">
                            <select class="custom-select" id="bControlNav" name="bControlNav">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getControlNav() === false) {?> selected="selected"<?php }?>><?php echo __('hide');?>

                                </option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getControlNav() === true) {?> selected="selected"<?php }?>><?php echo __('show');?>
</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bThumbnail"><?php echo __('thumbnailNavigation');?>
</label>
                        </div>
                        <div class="for">
                            <select class="custom-select" id="bThumbnail" name="bThumbnail">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getThumbnail() === false) {?> selected="selected"<?php }?>><?php echo __('deactivated');?>

                                </option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getThumbnail() === true) {?> selected="selected"<?php }?>><?php echo __('activated');?>
</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="bDirectionNav"><?php echo __('directionNavigation');?>
</label>
                        </div>
                        <div class="for">
                            <select class="custom-select" id="bDirectionNav" name="bDirectionNav">
                                <option value="0"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getDirectionNav() === false) {?> selected="selected"<?php }?>><?php echo __('hide');?>
</option>
                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getDirectionNav() === true) {?> selected="selected"<?php }?>><?php echo __('show');?>
</option>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <strong><?php echo __('effects');?>
</strong>
                        </div>
                        <div class="for">
                            <div class="custom-control custom-checkbox">
                                <input id="cRandomEffects" type="checkbox" value="random" class="custom-control-input random_effects" <?php if ((isset($_smarty_tpl->tpl_vars['checked']->value))) {
echo $_smarty_tpl->tpl_vars['checked']->value;?>
 <?php }?>name="cEffects" />
                                <label class="custom-control-label" for="cRandomEffects"><?php echo __('randomEffects');?>
</label>
                            </div>
                            <div class="select_container row">
                                <div class="col-xs-12 col-md-6 select_box">
                                    <label for="cSelectedEffects"><?php echo __('selectedEffects');?>
</label>
                                    <select class="custom-select" id="cSelectedEffects" name="cSelectedEffects" size="10" multiple <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['cEffects']->value))) {
echo $_smarty_tpl->tpl_vars['cEffects']->value;
}?>
                                    </select>
                                    <input type="hidden" name="cEffects" value="<?php if ((isset($_smarty_tpl->tpl_vars['oSlider']->value))) {
echo $_smarty_tpl->tpl_vars['oSlider']->value->getEffects();
}?>" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
/>
                                    <button type="button" class="select_remove button remove btn btn-danger" value="entfernen" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
><?php echo __('remove');?>
</button>
                                </div>
                                <div class="col-xs-12 col-md-6 select_box">
                                    <label for="cAvaibleEffects"><?php echo __('availableEffects');?>
</label>
                                    <select class="custom-select" id="cAvaibleEffects" name="cAvaibleEffects" size="10" multiple <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                                        <option value="sliceDown"><?php echo __('sliceDown');?>
</option>
                                        <option value="sliceDownLeft"><?php echo __('sliceDownLeft');?>
</option>
                                        <option value="sliceUp"><?php echo __('sliceUp');?>
</option>
                                        <option value="sliceUpLeft"><?php echo __('sliceUpLeft');?>
</option>
                                        <option value="sliceUpDown"><?php echo __('sliceUpDown');?>
</option>
                                        <option value="sliceUpDownLeft"><?php echo __('sliceUpDownLeft');?>
</option>
                                        <option value="fold"><?php echo __('fold');?>
</option>
                                        <option value="fade"><?php echo __('fade');?>
</option>
                                        <option value="slideInRight"><?php echo __('slideInRight');?>
</option>
                                        <option value="slideInLeft"><?php echo __('slideInLeft');?>
</option>
                                        <option value="boxRandom"><?php echo __('boxRandom');?>
</option>
                                        <option value="boxRain"><?php echo __('boxRain');?>
</option>
                                        <option value="boxRainReverse"><?php echo __('boxRainReverse');?>
</option>
                                        <option value="boxRainGrow"><?php echo __('boxRainGrow');?>
</option>
                                        <option value="boxRainGrowReverse"><?php echo __('boxRainGrowReverse');?>
</option>
                                    </select>
                                    <button type="button" class="select_add button add btn btn-default" value="hinzufügen" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
><?php echo __('add');?>
</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item item">
                        <div class="name">
                            <label for="cTheme"><?php echo __('theme');?>
</label>
                        </div>
                        <div class="for">
                            <select id="cTheme" name="cTheme" class="custom-select">
                                <option value="default"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getTheme() === 'default') {?> selected="selected"<?php }?>><?php echo __('default');?>
</option>
                                <option value="bar"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getTheme() === 'bar') {?> selected="selected"<?php }?>><?php echo __('bar');?>
</option>
                                <option value="light"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getTheme() === 'light') {?> selected="selected"<?php }?>><?php echo __('light');?>
</option>
                                <option value="dark"<?php if ($_smarty_tpl->tpl_vars['oSlider']->value->getTheme() === 'dark') {?> selected="selected"<?php }?>><?php echo __('dark');?>
</option>
                            </select>
                        </div>
                    </li>

                    <li class="list-group-item item">
                        <div class="name">
                            <label for="nAnimationSpeed"><?php echo __('animationSpeed');?>
</label>
                        </div>
                        <div class="for">
                            <input type="text" name="nAnimationSpeed" id="nAnimationSpeed" value="<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getAnimationSpeed();?>
" class="form-control" />
                            <p id="nAnimationSpeedWarning" class="nAnimationSpeedWarningColor"><?php echo __('warningAnimationTimeLower');?>
</p>
                        </div>
                    </li>

                    <li class="list-group-item item">
                        <div class="name">
                            <label for="nPauseTime"><?php echo __('pauseTime');?>
</label>
                        </div>
                        <div class="for">
                            <input type="text" name="nPauseTime" id="nPauseTime" value="<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->getPauseTime();?>
" class="form-control" />
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="subheading1"><?php echo __('displayOptions');?>
</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="kSprache"><?php echo __('language');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select id="kSprache" name="kSprache" class="custom-select">
                            <option value="0"><?php echo __('all');?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->kSprache)) && (int)$_smarty_tpl->tpl_vars['oExtension']->value->kSprache === $_smarty_tpl->tpl_vars['language']->value->getId()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="kKundengruppe"><?php echo __('customerGroup');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select id="kKundengruppe" name="kKundengruppe" class="custom-select">
                            <option value="0"><?php echo __('all');?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customerGroups']->value, 'customerGroup');
$_smarty_tpl->tpl_vars['customerGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customerGroup']->value) {
$_smarty_tpl->tpl_vars['customerGroup']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getID();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->kKundengruppe)) && $_smarty_tpl->tpl_vars['oExtension']->value->kKundengruppe == $_smarty_tpl->tpl_vars['customerGroup']->value->getID()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['customerGroup']->value->getName();?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="nSeitenTyp"><?php echo __('pageType');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->nSeite))) {?>
                            <select class="custom-select" id="nSeitenTyp" name="nSeitenTyp"> <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nPage'=>$_smarty_tpl->tpl_vars['oExtension']->value->nSeite), 0, false);
?></select>
                        <?php } else { ?>
                            <select class="custom-select" id="nSeitenTyp" name="nSeitenTyp"> <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seiten_liste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nPage'=>0), 0, true);
?></select>
                        <?php }?>
                    </div>
                </div>
                <div id="type2" class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cKey"><?php echo __('filter');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select class="custom-select" name="cKey" id="cKey">
                            <option value="" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === '') {?> selected="selected"<?php }?>>
                                <?php echo __('noFilter');?>

                            </option>
                            <option value="kMerkmalWert" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert') {?> selected="selected"<?php }?>>
                                <?php echo __('attribute');?>

                            </option>
                            <option value="kKategorie" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie') {?> selected="selected"<?php }?>>
                                <?php echo __('category');?>

                            </option>
                            <option value="kHersteller" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller') {?> selected="selected"<?php }?>>
                                <?php echo __('manufacturer');?>

                            </option>
                            <option value="cSuche" <?php if ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'cSuche') {?> selected="selected"<?php }?>>
                                <?php echo __('searchTerm');?>

                            </option>
                        </select>
                    </div>
                </div>
                <div id="keykArtikel" class="form-group form-row align-items-center key">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="article_name"><?php echo __('product');?>
:</label>
                    <input type="hidden" name="article_key" id="article_key"
                           value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kArtikel') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kArtikel')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="article_name" id="article_name">
                        <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadProduct')),$_smarty_tpl ) );?>

                    </div>
                    <?php echo '<script'; ?>
>
                        enableTypeahead('#article_name', 'getProducts', 'cName', null, function(e, item) {
                            $('#article_name').val(item.cName);
                            $('#article_key').val(item.kArtikel);
                        }, $('#keykArtikel .fa-spinner'));
                        <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kArtikel') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kArtikel')) {?>
                            ioCall('getProducts', [[$('#article_key').val()]], function (data) {
                                $('#article_name').val(data[0].cName);
                            });
                        <?php }?>
                    <?php echo '</script'; ?>
>
                </div>
                <div id="keykLink" class="form-group form-row align-items-center key">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="link_name"><?php echo __('pageSelf');?>
:</label>
                    <input type="hidden" name="link_key" id="link_key"
                           value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kLink') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kLink')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="link_name" id="link_name">
                        <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadPages')),$_smarty_tpl ) );?>

                    </div>
                    <?php echo '<script'; ?>
>
                        enableTypeahead('#link_name', 'getPages', 'cName', null, function(e, item) {
                            $('#link_name').val(item.cName);
                            $('#link_key').val(item.kLink);
                        }, $('#keykLink .fa-spinner'));
                        <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kLink') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kLink')) {?>
                            ioCall('getPages', [[$('#link_key').val()]], function (data) {
                                $('#link_name').val(data[0].cName);
                            });
                        <?php }?>
                    <?php echo '</script'; ?>
>
                </div>
                <div id="keykMerkmalWert" class="form-group form-row align-items-center key">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="attribute_name"><?php echo __('attribute');?>
:</label>
                    <input type="hidden" name="attribute_key" id="attribute_key"
                           value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kMerkmalWert') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="attribute_name" id="attribute_name">
                        <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadAttribute')),$_smarty_tpl ) );?>

                    </div>
                    <?php echo '<script'; ?>
>
                        enableTypeahead('#attribute_name', 'getAttributes', 'cWert', null, function(e, item) {
                            $('#attribute_name').val(item.cWert);
                            $('#attribute_key').val(item.kMerkmalWert);
                        }, $('#keykMerkmalWert .fa-spinner'));
                        <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kMerkmalWert') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kMerkmalWert')) {?>
                            ioCall('getAttributes', [[$('#attribute_key').val()]], function (data) {
                                $('#attribute_name').val(data[0].cWert);
                            });
                        <?php }?>
                    <?php echo '</script'; ?>
>
                </div>
                <div id="keykKategorie" class="form-group form-row align-items-center key">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="categories_name"><?php echo __('category');?>
:</label>
                    <input type="hidden" name="categories_key" id="categories_key"
                           value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kKategorie') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="categories_name" id="categories_name">
                        <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadCategory')),$_smarty_tpl ) );?>

                    </div>
                    <?php echo '<script'; ?>
>
                        enableTypeahead('#categories_name', 'getCategories', function(item) {
                            var parentName = '';
                            if (item.parentName !== null) {
                                parentName = ' (' + item.parentName + ')';
                            }
                            return item.cName + parentName;
                        }, null, function(e, item) {
                            $('#categories_name').val(item.cName);
                            $('#categories_key').val(item.kKategorie);
                        }, $('#keykKategorie .fa-spinner'));
                        <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kKategorie') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kKategorie')) {?>
                            ioCall('getCategories', [[$('#categories_key').val()]], function (data) {
                                $('#categories_name').val(data[0].cName);
                            });
                        <?php }?>
                    <?php echo '</script'; ?>
>
                </div>
                <div id="keykHersteller" class="form-group form-row align-items-center key">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="manufacturer_name"><?php echo __('manufacturer');?>
:</label>
                    <input type="hidden" name="manufacturer_key" id="manufacturer_key"
                           value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kHersteller') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller')) {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}?>">
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="manufacturer_name" id="manufacturer_name">
                        <i class="fas fa-spinner fa-pulse typeahead-spinner"></i>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('typeAheadAttribute')),$_smarty_tpl ) );?>

                    </div>
                <?php echo '<script'; ?>
>
                        enableTypeahead('#manufacturer_name', 'getManufacturers', 'cName', null, function(e, item) {
                            $('#manufacturer_name').val(item.cName);
                            $('#manufacturer_key').val(item.kHersteller);
                        }, $('#keykHersteller .fa-spinner'));
                        <?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'kHersteller') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'kHersteller')) {?>
                            ioCall('getManufacturers', [[$('#manufacturer_key').val()]], function (data) {
                                $('#manufacturer_name').val(data[0].cName);
                            });
                        <?php }?>
                    <?php echo '</script'; ?>
>
                </div>
                <div id="keycSuche" class="key form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right order-1" for="ikeycSuche"><?php echo __('searchTerm');?>
:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" id="ikeycSuche" name="keycSuche"
                               value="<?php if (((isset($_smarty_tpl->tpl_vars['cKey']->value)) && $_smarty_tpl->tpl_vars['cKey']->value === 'cSuche') || ((isset($_smarty_tpl->tpl_vars['oExtension']->value->cKey)) && $_smarty_tpl->tpl_vars['oExtension']->value->cKey === 'cSuche')) {
if ((isset($_smarty_tpl->tpl_vars['keycSuche']->value)) && $_smarty_tpl->tpl_vars['keycSuche']->value !== '') {
echo $_smarty_tpl->tpl_vars['keycSuche']->value;
} else {
echo $_smarty_tpl->tpl_vars['oExtension']->value->cValue;
}
}?>">
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>__('enterSearchTerm')),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <button type="button" class="btn btn-default btn-block" onclick="window.location.href = 'slider.php';" value="zurück">
                        <?php echo __('cancelWithIcon');?>

                    </button>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <button type="submit" class="btn btn-primary btn-block" value="<?php echo __('save');?>
">
                        <?php echo __('saveWithIcon');?>

                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }
}
