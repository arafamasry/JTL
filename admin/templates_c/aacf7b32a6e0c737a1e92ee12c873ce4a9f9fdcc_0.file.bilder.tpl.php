<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:50:34
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\bilder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20a9a7bf988_06137912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aacf7b32a6e0c737a1e92ee12c873ce4a9f9fdcc' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\bilder.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:snippets/colorpicker.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c20a9a7bf988_06137912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('imageTitle'),'cBeschreibung'=>__('bilderDesc'),'cDokuURL'=>__('bilderURL')), 0, false);
?>
<div id="content">
    <form method="post" action="bilder.php">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <input type="hidden" name="speichern" value="1">
        <div id="settings">
            <div class="card">
                <div class="card-header">
                    <div class="subheading1"><?php echo __('imageSizes');?>
</div>
                    <hr class="mb-n3">
                </div>
                <div class="table-responsive card-body">
                    <table class="list table table-border-light table-images">
                        <thead>
                        <tr>
                            <th class="text-left"><?php echo __('type');?>
</th>
                            <th class="text-center"><?php echo __('xs');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                            <th class="text-center"><?php echo __('sm');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                            <th class="text-center"><?php echo __('md');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                            <th class="text-center"><?php echo __('lg');?>
 <small><?php echo __('widthXHeight');?>
</small></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['indices']->value, 'name', false, 'idx');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idx']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                        <tr>
                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
$_smarty_tpl->tpl_vars['size']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->do_else = false;
?>
                            <td class="text-center">
                                <div class="input-group form-counter min-w-sm">
                                    <?php $_smarty_tpl->_assignInScope('optIdx', (((('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_')).($_smarty_tpl->tpl_vars['size']->value)).('_breite'));?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['oConfig']->value[$_smarty_tpl->tpl_vars['optIdx']->value]))) {?>
                                        <?php $_smarty_tpl->_assignInScope('optIdx', (('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_breite'));?>
                                    <?php }?>
                                    <input size="4" class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['optIdx']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value[$_smarty_tpl->tpl_vars['optIdx']->value];?>
" />
                                </div>
                                <span class="cross-sign text-center">x</span>
                                <div class="input-group form-counter min-w-sm">
                                    <?php $_smarty_tpl->_assignInScope('optIdx', (((('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_')).($_smarty_tpl->tpl_vars['size']->value)).('_hoehe'));?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['oConfig']->value[$_smarty_tpl->tpl_vars['optIdx']->value]))) {?>
                                        <?php $_smarty_tpl->_assignInScope('optIdx', (('bilder_').($_smarty_tpl->tpl_vars['idx']->value)).('_hoehe'));?>
                                    <?php }?>
                                    <input size="4" class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['optIdx']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value[$_smarty_tpl->tpl_vars['optIdx']->value];?>
" />
                                </div>
                            </td>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php $_smarty_tpl->_assignInScope('open', false);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig_arr']->value, 'cnf');
$_smarty_tpl->tpl_vars['cnf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cnf']->value) {
$_smarty_tpl->tpl_vars['cnf']->do_else = false;
?>
            <?php if (strpos($_smarty_tpl->tpl_vars['cnf']->value->cWertName,'hoehe') === false && strpos($_smarty_tpl->tpl_vars['cnf']->value->cWertName,'breite') === false) {?>
                <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cConf === 'Y') {?>
                    <div class="form-group form-row align-items-center<?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value)) && $_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenConf == $_smarty_tpl->tpl_vars['cSuche']->value) {?> highlight<?php }?>">
                        <label class="col col-sm-4 col-form-label text-sm-right order-1" for="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
"><?php echo $_smarty_tpl->tpl_vars['cnf']->value->cName;?>
:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'number') {?>config-type-number<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'selectbox') {?>
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
                        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'pass') {?>
                            <input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
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
" value="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;?>
" tabindex="1" />
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                        <span class="fas fa-plus"></span>
                                    </button>
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['cnf']->value->cInputTyp === 'color') {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:snippets/colorpicker.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cpID'=>"config-".((string)$_smarty_tpl->tpl_vars['cnf']->value->cWertName),'cpName'=>$_smarty_tpl->tpl_vars['cnf']->value->cWertName,'cpValue'=>$_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert), 0, true);
?>
                        <?php } else { ?>
                            <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->cWertName;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cnf']->value->gesetzterWert;?>
" tabindex="1" />
                        <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung) {?>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['cnf']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['cnf']->value->kEinstellungenConf),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['open']->value) {?></div></div><?php }?>
                    <div class="card">
                        <div class="card-header">
                            <div class="subheading1"><?php echo $_smarty_tpl->tpl_vars['cnf']->value->cName;?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['cnf']->value->cSektionsPfad)) && strlen($_smarty_tpl->tpl_vars['cnf']->value->cSektionsPfad) > 0) {?>
                                <span class="path"><strong><?php echo __('settingspath');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['cnf']->value->cSektionsPfad;?>
</span>
                            <?php }?>
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
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <?php }?>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto submit">
                        <button name="speichern" type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block">
                            <?php echo __('saveWithIcon');?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
