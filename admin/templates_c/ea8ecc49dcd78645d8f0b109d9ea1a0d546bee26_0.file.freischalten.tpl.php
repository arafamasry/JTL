<?php
/* Smarty version 3.1.39, created on 2021-06-11 15:51:09
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\freischalten.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c36a4d2d48a8_37352598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea8ecc49dcd78645d8f0b109d9ea1a0d546bee26' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\freischalten.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/language_switcher.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 8,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c36a4d2d48a8_37352598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('freischalten'),'cBeschreibung'=>__('freischaltenDesc'),'cDokuURL'=>__('freischaltenURL')), 0, false);
?>
<div id="content">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-xl-auto mb-sm-0 mb-3">
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/language_switcher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>'formSprachwechselSelect','action'=>'freischalten.php"'), 0, false);
?>
                </div>
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <form name="suche" method="post" action="freischalten.php">
                        <div class="row">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <div class="col-sm-6 col-xl-auto mb-sm-0 mb-3">
                                <div class="form-row">
                                    <label class="col-sm-auto col-form-label" for="search_type"><?php echo __('freischaltenSearchType');?>
:</label>
                                    <span class="col-sm-auto">
                                        <select class="custom-select" name="cSuchTyp" id="search_type">
                                            <option value="Bewertung"<?php if ((isset($_smarty_tpl->tpl_vars['cSuchTyp']->value)) && $_smarty_tpl->tpl_vars['cSuchTyp']->value === 'Bewertung') {?> selected<?php }?>><?php echo __('reviews');?>
</option>
                                            <option value="Livesuche"<?php if ((isset($_smarty_tpl->tpl_vars['cSuchTyp']->value)) && $_smarty_tpl->tpl_vars['cSuchTyp']->value === 'Livesuche') {?> selected<?php }?>><?php echo __('freischaltenLivesearch');?>
</option>
                                            <option value="Newskommentar"<?php if ((isset($_smarty_tpl->tpl_vars['cSuchTyp']->value)) && $_smarty_tpl->tpl_vars['cSuchTyp']->value === 'Newskommentar') {?> selected<?php }?>><?php echo __('freischaltenNewsComments');?>
</option>
                                            <option value="Newsletterempfaenger"<?php if ((isset($_smarty_tpl->tpl_vars['cSuchTyp']->value)) && $_smarty_tpl->tpl_vars['cSuchTyp']->value === 'Newsletterempfaenger') {?> selected<?php }?>><?php echo __('freischaltenNewsletterReceiver');?>
</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-auto mb-sm-0 mb-3">
                                <input type="hidden" name="Suche" value="1" />
                                <div class="form-row">
                                    <label for="search_key" class="col-sm-auto col-form-label sr-only"><?php echo __('freischaltenSearchItem');?>
</label>
                                    <span class="col-sm-auto mb-sm-0 mb-3">
                                        <input class="form-control" name="cSuche" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value))) {
echo $_smarty_tpl->tpl_vars['cSuche']->value;
}?>"
                                               id="search_key" placeholder="<?php echo __('freischaltenSearchItem');?>
">
                                    </span>
                                    <div class="col-sm-auto">
                                        <button name="submitSuche" type="submit" class="btn btn-primary btn-block"><i class="fal fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <nav class="tabs-nav">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'bewertungen') {?> active<?php }?>" data-toggle="tab" role="tab" href="#bewertungen">
                        <?php echo __('reviews');?>
 <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['oPagiBewertungen']->value->getItemCount();?>
</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'livesearch') {?> active<?php }?>" data-toggle="tab" role="tab" href="#livesearch">
                        <?php echo __('freischaltenLivesearch');?>
 <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['oPagiSuchanfragen']->value->getItemCount();?>
</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newscomments') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newscomments">
                        <?php echo __('freischaltenNewsComments');?>
 <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['oPagiNewskommentare']->value->getItemCount();?>
</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletter') {?> active<?php }?>" data-toggle="tab" role="tab" href="#newsletter">
                        <?php echo __('freischaltenNewsletterReceiver');?>
 <span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['oPagiNewsletterEmpfaenger']->value->getItemCount();?>
</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="tab-content">
            <div id="bewertungen" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === '' || $_smarty_tpl->tpl_vars['cTab']->value === 'bewertungen') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['ratings']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiBewertungen']->value,'cAnchor'=>'bewertungen'), 0, false);
?>
                    <form method="post" action="freischalten.php">
                        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                        <input type="hidden" name="freischalten" value="1" />
                        <input type="hidden" name="bewertungen" value="1" />
                        <input type="hidden" name="tab" value="bewertungen" />
                        <div>
                            <div class="subheading1"><?php echo __('reviews');?>
</div>
                            <hr class="mb-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="check"></th>
                                        <th class="text-left"><?php echo __('product');?>
</th>
                                        <th class="text-left"><?php echo __('freischaltenReviewsCustomer');?>
</th>
                                        <th class="text-center"><?php echo __('stars');?>
</th>
                                        <th class="text-center"><?php echo __('freischaltenReviewsDate');?>
</th>
                                        <th class="text-center"><?php echo __('actions');?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings']->value, 'rating');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kBewertung[]" type="checkbox" id="review-id-<?php echo $_smarty_tpl->tpl_vars['rating']->value->kBewertung;?>
" value="<?php echo $_smarty_tpl->tpl_vars['rating']->value->kBewertung;?>
" />
                                                    <label class="custom-control-label" for="review-id-<?php echo $_smarty_tpl->tpl_vars['rating']->value->kBewertung;?>
"></label>
                                                </div>
                                                <input type="hidden" name="kArtikel[]" value="<?php echo $_smarty_tpl->tpl_vars['rating']->value->kArtikel;?>
" />
                                                <input type="hidden" name="kBewertungAll[]" value="<?php echo $_smarty_tpl->tpl_vars['rating']->value->kBewertung;?>
" />
                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['shopURL']->value;?>
/index.php?a=<?php echo $_smarty_tpl->tpl_vars['rating']->value->kArtikel;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rating']->value->ArtikelName;?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['rating']->value->cName;?>
.</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['rating']->value->nSterne;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['rating']->value->Datum;?>
</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a class="btn btn-link px-2" title="<?php echo __('modify');?>
"
                                                       href="bewertung.php?a=editieren&kBewertung=<?php echo $_smarty_tpl->tpl_vars['rating']->value->kBewertung;?>
&nFZ=1&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                       data-toggle="tooltip"
                                                    >
                                                        <span class="icon-hover">
                                                            <span class="fal fa-edit"></span>
                                                            <span class="fas fa-edit"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-top-0">&nbsp;</td>
                                            <td class="border-top-0" colspan="6">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['rating']->value->cTitel;?>
</strong>
                                                <p><?php echo $_smarty_tpl->tpl_vars['rating']->value->cText;?>
</p>
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
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS1" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS1"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="freischaltenleoschen" type="submit" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="freischaltensubmit" type="submit" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('unlockMarked');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiBewertungen']->value,'cAnchor'=>'bewertungen','isBottom'=>true), 0, true);
?>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="livesearch" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'livesearch') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['searchQueries']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiSuchanfragen']->value,'cAnchor'=>'livesearch'), 0, true);
?>
                    <div>
                        <form method="post" action="freischalten.php">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="freischalten" value="1" />
                            <input type="hidden" name="suchanfragen" value="1" />
                            <input type="hidden" name="tab" value="livesearch" />
                            <?php if ((isset($_smarty_tpl->tpl_vars['nSort']->value))) {?>
                            <input type="hidden" name="nSort" value="<?php echo $_smarty_tpl->tpl_vars['nSort']->value;?>
" />
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['cSuche']->value)) && (isset($_smarty_tpl->tpl_vars['cSuchTyp']->value)) && $_smarty_tpl->tpl_vars['cSuche']->value && $_smarty_tpl->tpl_vars['cSuchTyp']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('cSuchStr', (((('Suche=1&cSuche=').($_smarty_tpl->tpl_vars['cSuche']->value)).('&cSuchTyp=')).($_smarty_tpl->tpl_vars['cSuchTyp']->value)).('&'));?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('cSuchStr', '');?>
                            <?php }?>
                            <div class="table-responsive">
                                <table class="list table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="check">&nbsp;</th>
                                        <th class="text-left">(<a href="freischalten.php?tab=livesearch&<?php echo $_smarty_tpl->tpl_vars['cSuchStr']->value;?>
nSort=1<?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 11) {?>1<?php }?>&token=<?php echo $_SESSION['jtl_token'];?>
" style="text-decoration: underline;"><?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 11) {?>Z...A<?php } else { ?>A...Z<?php }?></a>) <?php echo __('freischaltenLivesearchSearch');?>
</th>
                                        <th class="text-center">(<a href="freischalten.php?tab=livesearch&<?php echo $_smarty_tpl->tpl_vars['cSuchStr']->value;?>
nSort=2<?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 22) {?>2<?php }?>&token=<?php echo $_SESSION['jtl_token'];?>
" style="text-decoration: underline;"><?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 22) {?>1...9<?php } else { ?>9...1<?php }?></a>) <?php echo __('freischaltenLivesearchCount');?>
</th>
                                        <th class="text-center">(<a href="freischalten.php?tab=livesearch&<?php echo $_smarty_tpl->tpl_vars['cSuchStr']->value;?>
nSort=3<?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 33) {?>3<?php }?>&token=<?php echo $_SESSION['jtl_token'];?>
" style="text-decoration: underline;"><?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 33) {?>0...1<?php } else { ?>1...0<?php }?></a>) <?php echo __('freischaltenLivesearchHits');?>
</th>
                                        <th class="text-center"><?php echo __('freischaltenLiveseachDate');?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchQueries']->value, 'query');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                                        <tr>
                                            <td class="check">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="kSuchanfrage[]" type="checkbox" id="search-request-id-<?php echo $_smarty_tpl->tpl_vars['query']->value->kSuchanfrage;?>
" value="<?php echo $_smarty_tpl->tpl_vars['query']->value->kSuchanfrage;?>
" />
                                                    <label class="custom-control-label" for="search-request-id-<?php echo $_smarty_tpl->tpl_vars['query']->value->kSuchanfrage;?>
"></label>
                                                </div>
                                            </td>
                                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['query']->value->cSuche;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['query']->value->nAnzahlGesuche;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['query']->value->nAnzahlTreffer;?>
</td>
                                            <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['query']->value->dZuletztGesucht_de;?>
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
                                            <input class="custom-control-input"  name="ALLMSGS" id="ALLMSGS2" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS2"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <div class="input-group" data-toggle="tooltip" data-placement="bottom" title='<?php echo __('freischaltenMappingDesc');?>
'>
                                            <span class="input-group-addon d-none d-md-block">
                                                <label for="cMapping"><?php echo __('linkMarked');?>
:</label>
                                            </span>
                                            <input class="form-control" name="cMapping" id="cMapping" type="text" value="" />
                                            <span class="input-group-btn ml-1">
                                                <button name="submitMapping" type="submit" value="Verknüpfen" class="btn btn-primary"><?php echo __('linkVerb');?>
</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="freischaltenleoschen" type="submit" value="Markierte löschen" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="freischaltensubmit" type="submit" value="Markierte freischalten" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('unlockMarked');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiSuchanfragen']->value,'cAnchor'=>'livesearch','isBottom'=>true), 0, true);
?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="newscomments" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newscomments') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['comments']->value) > 0 && $_smarty_tpl->tpl_vars['comments']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiNewskommentare']->value,'cAnchor'=>'newscomments'), 0, true);
?>
                    <div>
                        <form method="post" action="freischalten.php">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="freischalten" value="1" />
                            <input type="hidden" name="newskommentare" value="1" />
                            <input type="hidden" name="tab" value="newscomments" />
                            <div class="table-responsive">
                                <table class="list table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="check">&nbsp;</th>
                                            <th class="text-left"><?php echo __('visitor');?>
</th>
                                            <th class="text-left"><?php echo __('text');?>
</th>
                                            <th class="text-center"><?php echo __('freischaltenNewsCommentsDate');?>
</th>
                                            <th class="text-center"><?php echo __('actions');?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                            <tr>
                                                <td class="check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" name="kNewsKommentar[]" id="ncid-<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNewsKommentar;?>
" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNewsKommentar;?>
" />
                                                        <label class="custom-control-label" for="ncid-<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNewsKommentar;?>
"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <label for="ncid-<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNewsKommentar;?>
">
                                                        <?php if (strlen($_smarty_tpl->tpl_vars['comment']->value->cVorname) > 0) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['comment']->value->cVorname;?>
 <?php echo $_smarty_tpl->tpl_vars['comment']->value->cNachname;?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['comment']->value->cName;?>

                                                        <?php }?>
                                                    </label>
                                                </td>
                                                <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->cBetreff,50,'...' ));?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['comment']->value->dErstellt_de;?>
</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-link px-2" title="<?php echo __('modify');?>
"
                                                           href="news.php?news=1&kNews=<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNews;?>
&kNewsKommentar=<?php echo $_smarty_tpl->tpl_vars['comment']->value->kNewsKommentar;?>
&nkedit=1&nFZ=1&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                           data-toggle="tooltip"
                                                        >
                                                            <span class="icon-hover">
                                                                <span class="fal fa-edit"></span>
                                                                <span class="fas fa-edit"></span>
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
                            </div>
                            <div class="save-wrapper">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-auto text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS4" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS4"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="freischaltenleoschen" type="submit" value="Markierte löschen" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="freischaltensubmit" type="submit" value="Markierte freischalten" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('unlockMarked');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiNewskommentare']->value,'cAnchor'=>'newscomments','isBottom'=>true), 0, true);
?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
            <div id="newsletter" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cTab']->value === 'newsletter') {?> active show<?php }?>">
                <?php if (count($_smarty_tpl->tpl_vars['recipients']->value) > 0) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiNewsletterEmpfaenger']->value,'cAnchor'=>'newsletter'), 0, true);
?>
                    <div>
                        <form method="post" action="freischalten.php">
                            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

                            <input type="hidden" name="freischalten" value="1" />
                            <input type="hidden" name="newsletterempfaenger" value="1" />
                            <input type="hidden" name="tab" value="newsletter" />
                            <?php if ((isset($_smarty_tpl->tpl_vars['nSort']->value))) {?>
                                <input type="hidden" name="nSort" value="<?php echo $_smarty_tpl->tpl_vars['nSort']->value;?>
" />
                            <?php }?>
                            <div class="table-responsive">
                                <table class="list table">
                                    <thead>
                                        <tr>
                                            <th class="check">&nbsp;</th>
                                            <th class="text-left"><?php echo __('email');?>
</th>
                                            <th class="text-left"><?php echo __('firstName');?>
</th>
                                            <th class="text-left"><?php echo __('lastName');?>
</th>
                                            <th class="text-center">(<a href="freischalten.php?tab=newsletter&<?php echo $_smarty_tpl->tpl_vars['cSuchStr']->value;?>
nSort=4<?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 44) {?>4<?php }?>&token=<?php echo $_SESSION['jtl_token'];?>
"><?php if (!(isset($_smarty_tpl->tpl_vars['nSort']->value)) || $_smarty_tpl->tpl_vars['nSort']->value != 44) {
echo __('old');?>
...<?php echo __('new');
} elseif ((isset($_smarty_tpl->tpl_vars['nSort']->value)) && $_smarty_tpl->tpl_vars['nSort']->value == 44) {
echo __('new');?>
...<?php echo __('old');
}?></a>) <?php echo __('date');?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recipients']->value, 'recipient');
$_smarty_tpl->tpl_vars['recipient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recipient']->value) {
$_smarty_tpl->tpl_vars['recipient']->do_else = false;
?>
                                            <tr>
                                                <td class="check">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" name="kNewsletterEmpfaenger[]" id="newsletter-recipient-id-<?php echo $_smarty_tpl->tpl_vars['recipient']->value->kNewsletterEmpfaenger;?>
" value="<?php echo $_smarty_tpl->tpl_vars['recipient']->value->kNewsletterEmpfaenger;?>
" />
                                                        <label class="custom-control-label" for="newsletter-recipient-id-<?php echo $_smarty_tpl->tpl_vars['recipient']->value->kNewsletterEmpfaenger;?>
"></label>
                                                    </div>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['recipient']->value->cEmail;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['recipient']->value->cVorname;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['recipient']->value->cNachname;?>
</td>
                                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['recipient']->value->dEingetragen_de;?>
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
                                            <input class="custom-control-input" name="ALLMSGS" id="ALLMSGS5" type="checkbox" onclick="AllMessages(this.form);" />
                                            <label class="custom-control-label" for="ALLMSGS5"><?php echo __('globalSelectAll');?>
</label>
                                        </div>
                                    </div>
                                    <div class="ml-auto col-sm-6 col-xl-auto">
                                        <button name="freischaltenleoschen" type="submit" value="Markierte löschen" class="btn btn-danger btn-block">
                                            <i class="fas fa-trash-alt"></i> <?php echo __('deleteSelected');?>

                                        </button>
                                    </div>
                                    <div class="col-sm-6 col-xl-auto">
                                        <button name="freischaltensubmit" type="submit" value="Markierte freischalten" class="btn btn-primary btn-block">
                                            <i class="fa fa-thumbs-up"></i> <?php echo __('unlockMarked');?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['oPagiNewsletterEmpfaenger']->value,'cAnchor'=>'newsletter','isBottom'=>true), 0, true);
?>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
