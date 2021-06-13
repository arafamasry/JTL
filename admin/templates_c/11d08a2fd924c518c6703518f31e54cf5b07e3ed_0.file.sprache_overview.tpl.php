<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:15:30
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\sprache_overview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20262606408_75695904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11d08a2fd924c518c6703518f31e54cf5b07e3ed' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\sprache_overview.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/csv_export_btn.tpl' => 1,
    'file:tpl_inc/csv_import_btn.tpl' => 1,
    'file:tpl_inc/filtertools.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
  ),
),false)) {
function content_60c20262606408_75695904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sprache_buttons' => 
  array (
    'compiled_filepath' => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates_c\\11d08a2fd924c518c6703518f31e54cf5b07e3ed_0.file.sprache_overview.tpl.php',
    'uid' => '11d08a2fd924c518c6703518f31e54cf5b07e3ed',
    'call_name' => 'smarty_template_function_sprache_buttons_47280319960c202624c38b6_79376400',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('lang'),'cBeschreibung'=>__('langDesc'),'cDokuURL'=>__('langURL')), 0, false);
$_smarty_tpl->_assignInScope('cSearchString', $_smarty_tpl->tpl_vars['oFilter']->value->getField(1)->getValue());
$_smarty_tpl->_assignInScope('bAllSections', ((int)$_smarty_tpl->tpl_vars['oFilter']->value->getField(0)->getValue() === 0));
echo '<script'; ?>
>
    function toggleTextarea(kSektion, cWertName)
    {
        $('#cWert_' + kSektion + '_' + cWertName).show();
        $('#cWert_caption_' + kSektion + '_' + cWertName).hide();
        $('#bChanged_' + kSektion + '_' + cWertName).val('1');
    }
    function resetVarText(kSektion, cWertName, cStandard)
    {
        $('#cWert_' + kSektion + '_' + cWertName).val($('#cStandard_' + kSektion + '_' + cWertName).text());
        toggleTextarea(kSektion, cWertName);
    }
<?php echo '</script'; ?>
>
<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-xl-auto mb-3">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'kSprache','action'=>'sprache.php'), 0, false);
?>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['oWert_arr']->value) > 0) {?>
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_export_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('exporterId'=>"langvars"), 0, false);
?>
                    </div>
                <?php }?>
                <div class="col-sm-6 col-xl-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/csv_import_btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('importerId'=>"langvars",'bCustomStrategy'=>true), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <nav class="tabs-nav" role="tablist">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'variables') {?>active<?php }?>" data-toggle="tab" href="#variables"><?php echo __('langVars');?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'notfound') {?>active<?php }?>" data-toggle="tab" href="#notfound"><?php echo __('notFoundVars');?>
</a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="variables" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'variables') {?>active show<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['bSpracheAktiv']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/filtertools.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oFilter'=>$_smarty_tpl->tpl_vars['oFilter']->value), 0, false);
?>
                    <hr>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>
                <?php }?>
                <div>
                    <form action="sprache.php" method="post">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <?php if (count($_smarty_tpl->tpl_vars['oWert_arr']->value) > 0) {?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <?php if ($_smarty_tpl->tpl_vars['bAllSections']->value) {?><th><?php echo __('section');?>
</th><?php }?>
                                            <th><?php echo __('variableName');?>
</th>
                                            <th><?php echo __('content');?>
</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oWert_arr']->value, 'oWert');
$_smarty_tpl->tpl_vars['oWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oWert']->value) {
$_smarty_tpl->tpl_vars['oWert']->do_else = false;
?>
                                            <tr>
                                                <?php if ($_smarty_tpl->tpl_vars['bAllSections']->value) {?><td><?php echo $_smarty_tpl->tpl_vars['oWert']->value->cSektionName;?>
</td><?php }?>
                                                <td onclick="toggleTextarea(<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
, '<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
');"
                                                    style="cursor:pointer;">
                                                    <label for="cWert_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
">
                                                        <?php if ($_smarty_tpl->tpl_vars['cSearchString']->value !== '') {?>
                                                            <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['oWert']->value->cName,"/(".((string)$_smarty_tpl->tpl_vars['cSearchString']->value).")/i","<mark>\$1</mark>");?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>

                                                        <?php }?>
                                                    </label>
                                                </td>
                                                <td onclick="toggleTextarea(<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
, '<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
');"
                                                    style="cursor:pointer;">
                                                    <span id="cWert_caption_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
">
                                                        <?php if ($_smarty_tpl->tpl_vars['cSearchString']->value !== '') {?>
                                                            <?php echo smarty_modifier_regex_replace(htmlspecialchars($_smarty_tpl->tpl_vars['oWert']->value->cWert, ENT_QUOTES, 'utf-8', true),"/(".((string)$_smarty_tpl->tpl_vars['cSearchString']->value).")/i","<mark>\$1</mark>");?>

                                                        <?php } else { ?>
                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oWert']->value->cWert, ENT_QUOTES, 'utf-8', true);?>

                                                        <?php }?>
                                                    </span>
                                                    <textarea id="cWert_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
" class="form-control"
                                                              name="cWert_arr[<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
][<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
]"
                                                              style="display:none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oWert']->value->cWert, ENT_QUOTES, 'utf-8', true);?>
</textarea>
                                                    <input type="hidden" id="bChanged_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
"
                                                           name="bChanged_arr[<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
][<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
]"
                                                           value="0">
                                                    <span style="display:none;"
                                                          id="cStandard_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
_<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oWert']->value->cStandard, ENT_QUOTES, 'utf-8', true);?>
</span>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <?php if ($_smarty_tpl->tpl_vars['oWert']->value->bSystem === '0') {?>
                                                            <a href="sprache.php?token=<?php echo $_SESSION['jtl_token'];?>
&action=delvar&kSprachsektion=<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
&cName=<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
"
                                                               class="btn btn-link px-2 delete-confirm"
                                                               title="<?php echo __('delete');?>
"
                                                               data-toggle="tooltip"
                                                               data-modal-body="<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
">
                                                                <span class="icon-hover">
                                                                    <span class="fal fa-trash-alt"></span>
                                                                    <span class="fas fa-trash-alt"></span>
                                                                </span>
                                                            </a>
                                                        <?php }?>
                                                        <button type="button"
                                                                class="btn btn-link px-2"
                                                                onclick="resetVarText(<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
, '<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
');"
                                                                data-toggle="tooltip"
                                                                title="<?php echo __('reset');?>
">
                                                            <span class="icon-hover">
                                                                <span class="fal fa-refresh"></span>
                                                                <span class="fas fa-refresh"></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['bSpracheAktiv']->value) {?>
                            <div class="alert alert-info" role="alert"><?php echo __('noFilterResults');?>
</div>
                        <?php } else { ?>
                            <div class="alert alert-info" role="alert"><?php echo __('notImportedYet');?>
</div>
                        <?php }?>
                        <div class="save-wrapper">
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sprache_buttons', array(), true);?>

                        </div>
                    </form>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['bSpracheAktiv']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'isBottom'=>true), 0, true);
?>
                <?php }?>
            </div>
            <div id="notfound" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['tab']->value === 'notfound') {?>active show<?php }?>">
                <div class="table-responsive">
                    <?php if (count($_smarty_tpl->tpl_vars['oNotFound_arr']->value) > 0) {?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><?php echo __('section');?>
</th>
                                    <th><?php echo __('variableName');?>
</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oNotFound_arr']->value, 'oWert');
$_smarty_tpl->tpl_vars['oWert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oWert']->value) {
$_smarty_tpl->tpl_vars['oWert']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['oWert']->value->cSektion;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
</td>
                                        <td>
                                            <div class="btn-group right">
                                                <a href="sprache.php?token=<?php echo $_SESSION['jtl_token'];?>
&action=newvar&kSprachsektion=<?php echo $_smarty_tpl->tpl_vars['oWert']->value->kSprachsektion;?>
&cName=<?php echo $_smarty_tpl->tpl_vars['oWert']->value->cName;?>
&tab=notfound"
                                                   class="btn btn-link px-2"
                                                   title="<?php echo __('create');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-plus"></span>
                                                        <span class="fas fa-plus"></span>
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
                    <?php } else { ?>
                        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                    <?php }?>
                </div>
                <div class="save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <a href="sprache.php?token=<?php echo $_SESSION['jtl_token'];?>
&action=clearlog&tab=notfound" class="btn btn-danger btn-block">
                                <i class="fa fa-refresh"></i>
                                <?php echo __('btnResetLog');?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
/* smarty_template_function_sprache_buttons_47280319960c202624c38b6_79376400 */
if (!function_exists('smarty_template_function_sprache_buttons_47280319960c202624c38b6_79376400')) {
function smarty_template_function_sprache_buttons_47280319960c202624c38b6_79376400(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="row">
        <div class="ml-auto col-sm-6 col-xl-auto">
            <a class="btn btn-outline-primary btn-block" href="sprache.php?token=<?php echo $_SESSION['jtl_token'];?>
&action=newvar">
                <i class="fa fa-share"></i>
                <?php echo __('btnAddVar');?>

            </a>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['oWert_arr']->value) > 0) {?>
            <div class="col-sm-6 col-xl-auto">
                <button type="submit" class="btn btn-primary btn-block" name="action" value="saveall">
                    <?php echo __('saveWithIcon');?>

                </button>
            </div>
        <?php }?>
    </div>
<?php
}}
/*/ smarty_template_function_sprache_buttons_47280319960c202624c38b6_79376400 */
}
