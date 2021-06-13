<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:43:28
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\bewertung_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c208f05a7840_58413518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7534c1e2661699ea05abbaa6a507e73de92ad1' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\bewertung_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 4,
  ),
),false)) {
function content_60c208f05a7840_58413518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('votesystem'),'cBeschreibung'=>__('votesystemDesc'),'cDokuURL'=>__('votesystemURL')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>'bewertung.php'), 0, false);
?>
        </div>
    </div>
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'freischalten') {?> active<?php }?>" data-toggle="tab" role="tab" href="#freischalten">
                        <?php echo __('ratingsInaktive');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten50') {?> active<?php }?>" data-toggle="tab" role="tab" href="#letzten50">
                        <?php echo __('ratingLast50');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'artikelbewertung') {?> active<?php }?>" data-toggle="tab" role="tab" href="#artikelbewertung">
                        <?php echo __('ratingForProduct');?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#einstellungen">
                        <?php echo __('settings');?>

                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="freischalten" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'freischalten') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['inactiveReviews']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiv']->value,'cAnchor'=>'freischalten'), 0, false);
?>
                    <form method="post" action="bewertung.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="bewertung_nicht_aktiv" value="1" />
                        <input type="hidden" name="tab" value="freischalten" />
                        <div>
                            <div class="subheading1"><?php echo __('ratingsInaktive');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table  class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inactiveReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_0_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                            <tr>
                                                <td class="check">
                                                    <input type="hidden" name="kArtikel[<?php echo $_smarty_tpl->tpl_vars['review']->index;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
"/>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" name="kBewertung[<?php echo $_smarty_tpl->tpl_vars['review']->index;?>
]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" />
                                                        <label class="custom-control-label" for="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label for="inactive-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                                    &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
" target="_blank"><i class="fas fa fa-external-link"></i></a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
.</td>
                                                <td><b><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="bewertung.php?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=freischalten&token=<?php echo $_SESSION['jtl_token'];?>
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
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="loeschen" type="submit" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('delete');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="aktivieren" type="submit" value="<?php echo __('activate');?>
" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('activate');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiInaktiv']->value,'cAnchor'=>'freischalten','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="letzten50" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'letzten50') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['activeReviews']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAktiv']->value,'cAnchor'=>'letzten50'), 0, true);
?>
                    <form name="letzten50" method="post" action="bewertung.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="bewertung_aktiv" value="1" />
                        <input type="hidden" name="tab" value="letzten50" />
                        <div>
                            <div class="subheading1"><?php echo __('ratingLast50');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center min-w-sm"><?php echo __('actions');?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_1_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kBewertung[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
">
                                                    <label class="custom-control-label" for="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                </div>
                                                <input type="hidden" name="kArtikel[]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
">
                                            </td>
                                            <td>
                                                <label for="l50-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
</td>
                                            <td>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</strong><br>
                                                <?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value->cAntwort)) {?>
                                                    <blockquote class="review-reply">
                                                        <strong><?php echo __('ratingReply');?>
</strong><br>
                                                        <?php echo $_smarty_tpl->tpl_vars['review']->value->cAntwort;?>

                                                    </blockquote>
                                                <?php }?>
                                            </td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                            <td class="text-center">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value->cAntwort)) {?>
                                                    <a href="bewertung.php?a=delreply&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=letzten50&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       class="btn btn-link px-2 delete-confirm"
                                                       title="<?php echo __('removeReply');?>
"
                                                       data-toggle="tooltip"
                                                       data-modal-body="<?php echo __('removeReply');?>
 | <?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
">
                                                        <span class="icon-hover">
                                                            <span class="fal fa-trash-alt"></span>
                                                            <span class="fas fa-trash-alt"></span>
                                                        </span>
                                                    </a>
                                                <?php }?>
                                                <a class="btn btn-link px-2"
                                                   href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
"
                                                   target="_blank"
                                                   title="<?php echo __('linkItemShop');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-external-link"></span>
                                                        <span class="fas fa-external-link"></span>
                                                    </span>
                                                </a>
                                                <a href="bewertung.php?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=letzten50&token=<?php echo $_SESSION['jtl_token'];?>
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
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS3" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS3"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="loeschen" type="submit" value="<?php echo __('delete');?>
" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiAktiv']->value,'cAnchor'=>'letzten50','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="artikelbewertung" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'artikelbewertung') {?> active show<?php }?>">
                <form name="artikelbewertung" method="post" action="bewertung.php">
                    <div class="mb-3">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <div class="form-row">
                            <label class="col-sm-auto col-form-label" for="content"><?php echo __('ratingcArtNr');?>
:</label>
                            <input type="hidden" name="bewertung_aktiv" value="1" />
                            <input type="hidden" name="tab" value="artikelbewertung" />
                            <div class="col-sm-auto mb-3">
                                <input class="form-control" name="cArtNr" type="text" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['cArtNr']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
" />
                            </div>
                            <span class="col-sm-auto">
                                <button name="submitSearch" type="submit" value="<?php echo __('search');?>
" class="btn btn-primary btn-block mb-3">
                                    <i class="fal fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['cArtNr']->value)) && strlen($_smarty_tpl->tpl_vars['cArtNr']->value) > 0) {?>
                            <div class="alert alert-info"><?php echo __('ratingSearchedFor');?>
: <?php echo $_smarty_tpl->tpl_vars['cArtNr']->value;?>
</div>
                        <?php }?>
                        <?php if (!((isset($_smarty_tpl->tpl_vars['filteredReviews']->value)) && count($_smarty_tpl->tpl_vars['filteredReviews']->value) > 0)) {?>
                            <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                        <?php }?>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['filteredReviews']->value)) && count($_smarty_tpl->tpl_vars['filteredReviews']->value) > 0) {?>
                        <div>
                            <div class="subheading1"><?php echo $_smarty_tpl->tpl_vars['cArtNr']->value;?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-align-top">
                                    <thead>
                                    <tr>
                                        <th class="th-1">&nbsp;</th>
                                        <th class="text-left"><?php echo __('productName');?>
</th>
                                        <th class="text-left"><?php echo __('customerName');?>
</th>
                                        <th class="text-left"><?php echo __('ratingText');?>
</th>
                                        <th class="th-5 text-center"><?php echo __('ratingStars');?>
</th>
                                        <th class="th-6 text-center"><?php echo __('date');?>
</th>
                                        <th class="th-7 text-center">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filteredReviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->index = -1;
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
$_smarty_tpl->tpl_vars['review']->index++;
$__foreach_review_2_saved = $_smarty_tpl->tpl_vars['review'];
?>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kBewertung[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
" id="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
">
                                                    <label class="custom-control-label" for="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"></label>
                                                </div>
                                                <input type="hidden" name="kArtikel[]" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
">
                                            </td>
                                            <td>
                                                <label for="filtered-<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
"><?php echo $_smarty_tpl->tpl_vars['review']->value->ArtikelName;?>
</label>
                                                &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?a=<?php echo $_smarty_tpl->tpl_vars['review']->value->kArtikel;?>
" target="_blank"><i class="fas fa fa-external-link"></i></a>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['review']->value->cName;?>
.</td>
                                            <td><b><?php echo $_smarty_tpl->tpl_vars['review']->value->cTitel;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['review']->value->cText;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->nSterne;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['review']->value->Datum;?>
</td>
                                            <td class="text-center">
                                                <a href="bewertung.php?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['review']->value->kBewertung;?>
&tab=artikelbewertung"
                                                   class="btn btn-link px-2"
                                                   title="<?php echo __('modify');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-edit"></span>
                                                        <span class="fas fa-edit"></span>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['review'] = $__foreach_review_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS2" type="checkbox" onclick="AllMessages(this.form);">
                                            <label class="custom-control-label" for="ALLMSGS2"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="loeschen" type="submit" class="btn btn-danger btn-block"><i class="fas fa-trash-alt"></i> <?php echo __('delete');?>
</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </form>
            </div>
            <div id="einstellungen" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'einstellungen') {?> active show<?php }?>">
                <form name="einstellen" method="post" action="bewertung.php">
                    <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                    <input type="hidden" name="einstellungen" value="1" />
                    <input type="hidden" name="tab" value="einstellungen" />
                    <div class="settings">
                        <span class="subheading1"><?php echo __('settings');?>
</span>
                        <hr class="mb-3">
                        <div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig_arr']->value, 'oConfig');
$_smarty_tpl->tpl_vars['oConfig']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oConfig']->value) {
$_smarty_tpl->tpl_vars['oConfig']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cConf === 'Y') {?>
                                    <div class="form-group form-row align-items-center">
                                        <label class="col col-sm-4 col-form-label text-sm-right" for="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cName;
if (strpos($_smarty_tpl->tpl_vars['oConfig']->value->cWertName,'_guthaben')) {?> <span id="EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"></span>:<?php } else { ?>:<?php }?>
                                        </label>
                                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'number') {?>config-type-number<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'selectbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" class="custom-select combo">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->cWert;?>
" <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert == $_smarty_tpl->tpl_vars['wert']->value->cWert) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wert']->value->cName;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'listbox') {?>
                                                <select name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
[]"
                                                        id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"
                                                        multiple="multiple"
                                                        class="selectpicker custom-select combo"
                                                        data-selected-text-format="count > 2"
                                                        data-size="5">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->ConfWerte, 'wert');
$_smarty_tpl->tpl_vars['wert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wert']->value) {
$_smarty_tpl->tpl_vars['wert']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wert']->value->kKundengruppe;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert, 'gesetzterWert');
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['oConfig']->value->cInputTyp === 'number') {?>
                                                <div class="input-group form-counter">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                                            <span class="fas fa-minus"></span>
                                                        </button>
                                                    </div>
                                                    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"  value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>" tabindex="1"<?php if (strpos($_smarty_tpl->tpl_vars['oConfig']->value->cWertName,"_guthaben")) {?> onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
', this);"<?php }?> />
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                                            <span class="fas fa-plus"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
" id="<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
"  value="<?php if ((isset($_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert))) {
echo $_smarty_tpl->tpl_vars['oConfig']->value->gesetzterWert;
}?>" tabindex="1"<?php if (strpos($_smarty_tpl->tpl_vars['oConfig']->value->cWertName,"_guthaben")) {?> onKeyUp="setzePreisAjax(false, 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
', this);"<?php }?> />
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung) {?>
                                            <div class="col-auto ml-sm-n4 order-2 order-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['oConfig']->value->kEinstellungenConf),$_smarty_tpl ) );?>
</div>
                                        <?php }?>
                                    </div>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung) {?>
                                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHelpDesc'][0], array( array('cDesc'=>$_smarty_tpl->tpl_vars['oConfig']->value->cBeschreibung,'cID'=>$_smarty_tpl->tpl_vars['oConfig']->value->kEinstellungenConf),$_smarty_tpl ) );?>

                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="card-footer save-wrapper">
                            <div class="row">
                                <div class="ml-auto col-sm-6 col-xl-auto">
                                    <button type="submit" value="<?php echo __('save');?>
" class="btn btn-primary btn-block"><?php echo __('saveWithIcon');?>
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

<?php echo '<script'; ?>
 type="text/javascript">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oConfig_arr']->value, 'oConfig');
$_smarty_tpl->tpl_vars['oConfig']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oConfig']->value) {
$_smarty_tpl->tpl_vars['oConfig']->do_else = false;
?>
        <?php if (strpos($_smarty_tpl->tpl_vars['oConfig']->value->cWertName,'_guthaben')) {?>
            ioCall(
                'getCurrencyConversion',
                [0, $('#<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
').val(), 'EinstellungAjax_<?php echo $_smarty_tpl->tpl_vars['oConfig']->value->cWertName;?>
'],
                undefined,
                undefined,
                undefined,
                true
            );
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
