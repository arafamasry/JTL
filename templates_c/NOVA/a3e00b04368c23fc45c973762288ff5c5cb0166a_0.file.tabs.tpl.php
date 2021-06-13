<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:09
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245957fae5_27853202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3e00b04368c23fc45c973762288ff5c5cb0166a' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\tabs.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/mediafile.tpl' => 4,
    'file:productdetails/attributes.tpl' => 2,
    'file:productdetails/download.tpl' => 2,
    'file:productdetails/reviews.tpl' => 2,
    'file:productdetails/question_on_item.tpl' => 2,
    'file:productdetails/price_history.tpl' => 2,
    'file:productdetails/availability_notification_form.tpl' => 2,
  ),
),false)) {
function content_60c1245957fae5_27853202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139240904260c12459431c47_22039017', 'productdetails-tabs');
?>

<?php }
/* {block 'productdetails-tabs-settings'} */
class Block_209880195360c124594323c5_04429723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp-7\\htdocs\\jtl\\includes\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

        <?php $_smarty_tpl->_assignInScope('tabanzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_tabs_nutzen'] !== 'N');?>
        <?php $_smarty_tpl->_assignInScope('showProductWeight', false);?>
        <?php $_smarty_tpl->_assignInScope('showShippingWeight', false);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cArtikelgewicht)) && $_smarty_tpl->tpl_vars['Artikel']->value->fArtikelgewicht > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_artikelgewicht_anzeigen'] === 'Y') {?>
            <?php $_smarty_tpl->_assignInScope('showProductWeight', true);?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cGewicht)) && $_smarty_tpl->tpl_vars['Artikel']->value->fGewicht > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_gewicht_anzeigen'] === 'Y') {?>
            <?php $_smarty_tpl->_assignInScope('showShippingWeight', true);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('dimension', $_smarty_tpl->tpl_vars['Artikel']->value->getDimension());?>
        <?php $_smarty_tpl->_assignInScope('funcAttr', (($tmp = $_smarty_tpl->tpl_vars['Artikel']->value->FunktionsAttribute[(defined('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') ? constant('FKT_ATTRIBUT_ATTRIBUTEANHAENGEN') : null)] ?? null)===null||$tmp==='' ? 0 : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('showAttributesTable', ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['merkmale_anzeigen'] === 'Y' && !empty($_smarty_tpl->tpl_vars['Artikel']->value->oMerkmale_arr) || $_smarty_tpl->tpl_vars['showProductWeight']->value || $_smarty_tpl->tpl_vars['showShippingWeight']->value || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_abmessungen_anzeigen'] === 'Y' && (!empty($_smarty_tpl->tpl_vars['dimension']->value['length']) || !empty($_smarty_tpl->tpl_vars['dimension']->value['width']) || !empty($_smarty_tpl->tpl_vars['dimension']->value['height'])) || (isset($_smarty_tpl->tpl_vars['Artikel']->value->cMasseinheitName)) && (isset($_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge)) && $_smarty_tpl->tpl_vars['Artikel']->value->fMassMenge > 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cTeilbar !== 'Y' && ($_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 0 || $_smarty_tpl->tpl_vars['Artikel']->value->fAbnahmeintervall == 1) || ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_attribute_anhaengen'] === 'Y' || $_smarty_tpl->tpl_vars['funcAttr']->value == 1) && !empty($_smarty_tpl->tpl_vars['Artikel']->value->Attribute)));?>
        <?php $_smarty_tpl->_assignInScope('useDescriptionWithMediaGroup', ((($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['mediendatei_anzeigen'] === 'YA' && $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige !== 'tab') || $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige === 'beschreibung') && !empty($_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes())));?>
        <?php $_smarty_tpl->_assignInScope('useDescription', ((strlen($_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung) > 0) || $_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value || $_smarty_tpl->tpl_vars['showAttributesTable']->value));?>
        <?php $_smarty_tpl->_assignInScope('useDownloads', ((isset($_smarty_tpl->tpl_vars['Artikel']->value->oDownload_arr)) && count($_smarty_tpl->tpl_vars['Artikel']->value->oDownload_arr) > 0));?>
        <?php $_smarty_tpl->_assignInScope('useVotes', $_smarty_tpl->tpl_vars['Einstellungen']->value['bewertung']['bewertung_anzeigen'] === 'Y');?>
        <?php $_smarty_tpl->_assignInScope('useQuestionOnItem', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'Y');?>
        <?php $_smarty_tpl->_assignInScope('usePriceFlow', ($_smarty_tpl->tpl_vars['Einstellungen']->value['preisverlauf']['preisverlauf_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['bPreisverlauf']->value));?>
        <?php $_smarty_tpl->_assignInScope('useAvailabilityNotification', ($_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value !== 0));?>
        <?php $_smarty_tpl->_assignInScope('useMediaGroup', ((($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['mediendatei_anzeigen'] === 'YM' && $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige !== 'beschreibung') || $_smarty_tpl->tpl_vars['Artikel']->value->cMedienDateiAnzeige === 'tab') && !empty($_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes())));?>
        <?php $_smarty_tpl->_assignInScope('hasVotesHash', (isset($_GET['ratings_nPage'])) || (isset($_GET['bewertung_anzeigen'])) || (isset($_GET['ratings_nItemsPerPage'])) || (isset($_GET['ratings_nSortByDir'])) || (isset($_GET['btgsterne'])));?>
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_iterator'] = new Smarty_Variable(array());
if (true) {
for ($__section_iterator_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] = 1; $__section_iterator_0_iteration <= 9; $__section_iterator_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('tab', 'tab');?>
            <?php $_smarty_tpl->_assignInScope('tabname', (($_smarty_tpl->tpl_vars['tab']->value).((isset($_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] : null))).(" name"));?>
            <?php $_smarty_tpl->_assignInScope('tabinhalt', (($_smarty_tpl->tpl_vars['tab']->value).((isset($_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iterator']->value['index'] : null))).(" inhalt"));?>
            <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value])) && $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value] && $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabinhalt']->value]) {?>
                <?php ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tabname']->value,' ','-');
$_prefixVariable26 = ob_get_clean();
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tabname']->value,' ','-');
$_prefixVariable27 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabname']->value];
$_prefixVariable28 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->AttributeAssoc[$_smarty_tpl->tpl_vars['tabinhalt']->value];
$_prefixVariable29 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['separatedTabs']) ? $_smarty_tpl->tpl_vars['separatedTabs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_prefixVariable26] = array('id'=>$_prefixVariable27,'name'=>$_prefixVariable28,'content'=>$_prefixVariable29);
$_smarty_tpl->_assignInScope('separatedTabs', $_tmp_array);?>
            <?php }?>
        <?php
}
}
?>
        <?php $_smarty_tpl->_assignInScope('setActiveClass', array('description'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value),'downloads'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value),'separatedTabs'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value),'votes'=>($_smarty_tpl->tpl_vars['hasVotesHash']->value || !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value)),'questionOnItem'=>(!$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useVotes']->value),'priceFlow'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value),'availabilityNotification'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value && !$_smarty_tpl->tpl_vars['usePriceFlow']->value),'mediaGroup'=>(!$_smarty_tpl->tpl_vars['useVotes']->value && !$_smarty_tpl->tpl_vars['hasVotesHash']->value && !$_smarty_tpl->tpl_vars['useDescription']->value && !$_smarty_tpl->tpl_vars['useDownloads']->value && empty($_smarty_tpl->tpl_vars['separatedTabs']->value) && !$_smarty_tpl->tpl_vars['useQuestionOnItem']->value && !$_smarty_tpl->tpl_vars['usePriceFlow']->value && !$_smarty_tpl->tpl_vars['useAvailabilityNotification']->value)));?>
    <?php
}
}
/* {/block 'productdetails-tabs-settings'} */
/* {block 'tab-description-media-types'} */
class Block_22241347060c124594fcc74_63955310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_desc'),$_smarty_tpl ) );?>

                                            <div class="desc">
                                                <p><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung;?>
</p>
                                                <?php if ($_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_22_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                                        <div class="h3"><?php echo $_smarty_tpl->tpl_vars['mediaType']->value->name;?>
</div>
                                                        <div class="media">
                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                        </div>
                                                    <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_22_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </div>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_desc'),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'tab-description-media-types'} */
/* {block 'productdetails-tabs-tab-description-include-attributes'} */
class Block_20900903760c124595003e3_45463720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/attributes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>'details','showProductWeight'=>$_smarty_tpl->tpl_vars['showProductWeight']->value,'showShippingWeight'=>$_smarty_tpl->tpl_vars['showShippingWeight']->value,'dimension'=>$_smarty_tpl->tpl_vars['dimension']->value,'showAttributesTable'=>$_smarty_tpl->tpl_vars['showAttributesTable']->value), 0, false);
?>
                                        <?php
}
}
/* {/block 'productdetails-tabs-tab-description-include-attributes'} */
/* {block 'productdetails-tabs-tab-content'} */
class Block_149181906260c124594fc869_87413608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22241347060c124594fcc74_63955310', 'tab-description-media-types', $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20900903760c124595003e3_45463720', 'productdetails-tabs-tab-description-include-attributes', $this->tplIndex);
?>

                                    <?php
}
}
/* {/block 'productdetails-tabs-tab-content'} */
/* {block 'productdetails-tabs-tab-description'} */
class Block_115753725060c124594fb0d9_09245632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"description",'section'=>"productDetails"),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
$_block_plugin76 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin76, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable30,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"));
$_block_repeat=true;
echo $_block_plugin76->render(array('title'=>$_prefixVariable30,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149181906260c124594fc869_87413608', 'productdetails-tabs-tab-content', $this->tplIndex);
?>

                                <?php $_block_repeat=false;
echo $_block_plugin76->render(array('title'=>$_prefixVariable30,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'id'=>"description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-description'} */
/* {block 'productdetails-tabs-tab-downloads'} */
class Block_3158634560c12459502543_18727360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"productDownloads",'key'=>"downloadSection"),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
$_block_plugin77 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin77, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable31,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"));
$_block_repeat=true;
echo $_block_plugin77->render(array('title'=>$_prefixVariable31,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/download.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin77->render(array('title'=>$_prefixVariable31,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'id'=>"downloads"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-downloads'} */
/* {block 'productdetails-tabs-tab-separated-tabs'} */
class Block_65623310260c12459504fb8_93674106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['separatedTabs']->value, 'separatedTab');
$_smarty_tpl->tpl_vars['separatedTab']->index = -1;
$_smarty_tpl->tpl_vars['separatedTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['separatedTab']->value) {
$_smarty_tpl->tpl_vars['separatedTab']->do_else = false;
$_smarty_tpl->tpl_vars['separatedTab']->index++;
$_smarty_tpl->tpl_vars['separatedTab']->first = !$_smarty_tpl->tpl_vars['separatedTab']->index;
$__foreach_separatedTab_23_saved = $_smarty_tpl->tpl_vars['separatedTab'];
?>
                                    <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['separatedTab']->value['name'] ));
$_prefixVariable32=ob_get_clean();
$_block_plugin78 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin78, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable32));
$_block_repeat=true;
echo $_block_plugin78->render(array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable32), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['content'];?>

                                    <?php $_block_repeat=false;
echo $_block_plugin78->render(array('title'=>$_smarty_tpl->tpl_vars['separatedTab']->value['name'],'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first,'id'=>$_prefixVariable32), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
$_smarty_tpl->tpl_vars['separatedTab'] = $__foreach_separatedTab_23_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-separated-tabs'} */
/* {block 'productdetails-tabs-tab-votes'} */
class Block_67098087560c12459508881_77918813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );
$_prefixVariable33=ob_get_clean();
$_block_plugin79 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin79, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable33,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"));
$_block_repeat=true;
echo $_block_plugin79->render(array('title'=>$_prefixVariable33,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin79->render(array('title'=>$_prefixVariable33,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'id'=>"votes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-votes'} */
/* {block 'productdetails-tabs-tab-question-on-item'} */
class Block_22510509860c1245950b176_93953771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"productQuestion",'section'=>"productDetails"),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_block_plugin80 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin80, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable34,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"));
$_block_repeat=true;
echo $_block_plugin80->render(array('title'=>$_prefixVariable34,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>"tab"), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin80->render(array('title'=>$_prefixVariable34,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'id'=>"questionOnItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-question-on-item'} */
/* {block 'productdetails-tabs-tab-price-flow'} */
class Block_163575806860c1245950d932_63016575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceFlow','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable35=ob_get_clean();
$_block_plugin81 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin81, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable35,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"));
$_block_repeat=true;
echo $_block_plugin81->render(array('title'=>$_prefixVariable35,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price_history.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin81->render(array('title'=>$_prefixVariable35,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'id'=>"priceFlow"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-price-flow'} */
/* {block 'productdetails-tabs-tab-availability-notification'} */
class Block_164193059560c1245950fc09_43050991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notifyMeWhenProductAvailableAgain'),$_smarty_tpl ) );
$_prefixVariable36=ob_get_clean();
$_block_plugin82 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin82, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>$_prefixVariable36,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"availabilityNotification"));
$_block_repeat=true;
echo $_block_plugin82->render(array('title'=>$_prefixVariable36,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"availabilityNotification"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/availability_notification_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'tab','tplscope'=>'artikeldetails'), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin82->render(array('title'=>$_prefixVariable36,'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'id'=>"availabilityNotification"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-availability-notification'} */
/* {block 'productdetails-tabs-tab-mediagroup'} */
class Block_132820200360c12459512637_70943196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_24_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                    <?php $_smarty_tpl->_assignInScope('cMedienTypId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['mediaType']->value->name )));?>
                                    <?php $_block_plugin83 = isset($_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tab'][0][0] : null;
if (!is_callable(array($_block_plugin83, 'render'))) {
throw new SmartyException('block tag \'tab\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)));
$_block_repeat=true;
echo $_block_plugin83->render(array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php $_block_repeat=false;
echo $_block_plugin83->render(array('title'=>((string)$_smarty_tpl->tpl_vars['mediaType']->value->name)." (".((string)$_smarty_tpl->tpl_vars['mediaType']->value->count).")",'active'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first,'id'=>((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_24_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
/* {/block 'productdetails-tabs-tab-mediagroup'} */
/* {block 'productdetails-tabs-tabs'} */
class Block_95533468160c124594f9f81_14369865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin74 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin74, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin74->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <nav class="tab-navigation">
                        <?php $_block_plugin75 = isset($_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['tabs'][0][0] : null;
if (!is_callable(array($_block_plugin75, 'render'))) {
throw new SmartyException('block tag \'tabs\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabs', array('id'=>"product-tabs"));
$_block_repeat=true;
echo $_block_plugin75->render(array('id'=>"product-tabs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['useDescription']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115753725060c124594fb0d9_09245632', 'productdetails-tabs-tab-description', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useDownloads']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3158634560c12459502543_18727360', 'productdetails-tabs-tab-downloads', $this->tplIndex);
?>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65623310260c12459504fb8_93674106', 'productdetails-tabs-tab-separated-tabs', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useVotes']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67098087560c12459508881_77918813', 'productdetails-tabs-tab-votes', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useQuestionOnItem']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22510509860c1245950b176_93953771', 'productdetails-tabs-tab-question-on-item', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['usePriceFlow']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163575806860c1245950d932_63016575', 'productdetails-tabs-tab-price-flow', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useAvailabilityNotification']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164193059560c1245950fc09_43050991', 'productdetails-tabs-tab-availability-notification', $this->tplIndex);
?>

                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['useMediaGroup']->value) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132820200360c12459512637_70943196', 'productdetails-tabs-tab-mediagroup', $this->tplIndex);
?>

                        <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin75->render(array('id'=>"product-tabs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </nav>
                    <?php $_block_repeat=false;
echo $_block_plugin74->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-tabs-tabs'} */
/* {block 'productdetails-tabs-description-include-mediafile'} */
class Block_111340195460c12459527bf7_28773776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                                        <?php
}
}
/* {/block 'productdetails-tabs-description-include-mediafile'} */
/* {block 'productdetails-tabs-card-description-content'} */
class Block_58797235360c12459523048_94537151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_desc'),$_smarty_tpl ) );?>

                                                        <div class="desc">
                                                            <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung;?>

                                                            <?php if ($_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value) {?>
                                                                <?php if (strlen($_smarty_tpl->tpl_vars['Artikel']->value->cBeschreibung) > 0) {?>
                                                                    <hr>
                                                                <?php }?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_25_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                                                    <div class="media">
                                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111340195460c12459527bf7_28773776', 'productdetails-tabs-description-include-mediafile', $this->tplIndex);
?>

                                                                    </div>
                                                                <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_25_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            <?php }?>
                                                        </div>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_desc'),$_smarty_tpl ) );?>

                                                    <?php
}
}
/* {/block 'productdetails-tabs-card-description-content'} */
/* {block 'productdetails-tabs-include-attributes'} */
class Block_96598866160c1245952ad65_58646992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                            <?php $_smarty_tpl->_subTemplateRender('file:productdetails/attributes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tplscope'=>'details','showProductWeight'=>$_smarty_tpl->tpl_vars['showProductWeight']->value,'showShippingWeight'=>$_smarty_tpl->tpl_vars['showShippingWeight']->value,'dimension'=>$_smarty_tpl->tpl_vars['dimension']->value,'showAttributesTable'=>$_smarty_tpl->tpl_vars['showAttributesTable']->value), 0, true);
?>
                                                        <?php
}
}
/* {/block 'productdetails-tabs-include-attributes'} */
/* {block 'productdetails-tabs-card-description-attributes'} */
class Block_144452644760c1245952a6b5_04956661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96598866160c1245952ad65_58646992', 'productdetails-tabs-include-attributes', $this->tplIndex);
?>

                                                    <?php
}
}
/* {/block 'productdetails-tabs-card-description-attributes'} */
/* {block 'productdetails-tabs-card-description'} */
class Block_44869224860c12459522834_24792623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58797235360c12459523048_94537151', 'productdetails-tabs-card-description-content', $this->tplIndex);
?>

                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144452644760c1245952a6b5_04956661', 'productdetails-tabs-card-description-attributes', $this->tplIndex);
?>

                                                <?php
}
}
/* {/block 'productdetails-tabs-card-description'} */
/* {block 'productdetails-tabs-description'} */
class Block_51380549660c1245951bcd0_36582794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin85 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin85, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin85->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['description']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable37=ob_get_clean();
$_block_plugin86 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin86, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable37,"controls"=>"tab-description")));
$_block_repeat=true;
echo $_block_plugin86->render(array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable37,"controls"=>"tab-description")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'description','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin86->render(array('id'=>"tab-description-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-description"),'aria'=>array("expanded"=>$_prefixVariable37,"controls"=>"tab-description")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin87 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin87, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")));
$_block_repeat=true;
echo $_block_plugin87->render(array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin88 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin88, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin88->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44869224860c12459522834_24792623', 'productdetails-tabs-card-description', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin88->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin87->render(array('id'=>"tab-description",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['description'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-description-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin85->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-description'} */
/* {block 'productdetails-tabs-include-download'} */
class Block_179373539960c12459538f77_22651601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/download.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-download'} */
/* {block 'productdetails-tabs-downloads'} */
class Block_31513949460c1245952f491_78078995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin89 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin89, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin89->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['downloads']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable38=ob_get_clean();
$_block_plugin90 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin90, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable38,"controls"=>"tab-downloads")));
$_block_repeat=true;
echo $_block_plugin90->render(array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable38,"controls"=>"tab-downloads")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>'productDownloads','key'=>'downloadSection'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin90->render(array('id'=>"tab-downloads-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-downloads"),'aria'=>array("expanded"=>$_prefixVariable38,"controls"=>"tab-downloads")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin91 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin91, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")));
$_block_repeat=true;
echo $_block_plugin91->render(array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin92 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin92, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin92->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179373539960c12459538f77_22651601', 'productdetails-tabs-include-download', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin92->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin91->render(array('id'=>"tab-downloads",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['downloads'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-downloads-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin89->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-downloads'} */
/* {block 'productdetails-tabs-separated-tabs'} */
class Block_24953121660c1245953c362_11340886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['separatedTabs']->value, 'separatedTab');
$_smarty_tpl->tpl_vars['separatedTab']->index = -1;
$_smarty_tpl->tpl_vars['separatedTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['separatedTab']->value) {
$_smarty_tpl->tpl_vars['separatedTab']->do_else = false;
$_smarty_tpl->tpl_vars['separatedTab']->index++;
$_smarty_tpl->tpl_vars['separatedTab']->first = !$_smarty_tpl->tpl_vars['separatedTab']->index;
$__foreach_separatedTab_26_saved = $_smarty_tpl->tpl_vars['separatedTab'];
?>
                                        <?php $_smarty_tpl->_assignInScope('separatedTabId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['separatedTab']->value['name'] )));?>
                                        <?php $_block_plugin93 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin93, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin93->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first) {
echo "true";
} else {
echo "false";
}
$_prefixVariable39=ob_get_clean();
$_block_plugin94 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin94, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable39,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))));
$_block_repeat=true;
echo $_block_plugin94->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable39,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['name'];?>

                                            <?php $_block_repeat=false;
echo $_block_plugin94->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)),'aria'=>array("expanded"=>$_prefixVariable39,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin95 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin95, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")));
$_block_repeat=true;
echo $_block_plugin95->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_block_plugin96 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin96, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin96->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo $_smarty_tpl->tpl_vars['separatedTab']->value['content'];?>

                                                <?php $_block_repeat=false;
echo $_block_plugin96->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin95->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['separatedTabs'] && $_smarty_tpl->tpl_vars['separatedTab']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['separatedTabId']->value)."-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin93->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
$_smarty_tpl->tpl_vars['separatedTab'] = $__foreach_separatedTab_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-separated-tabs'} */
/* {block 'productdetails-tabs-include-reviews'} */
class Block_171155055860c1245954cfa4_39104639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/reviews.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>$_smarty_tpl->tpl_vars['Artikel']->value->Bewertungen->oBewertungGesamt->fDurchschnitt), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-reviews'} */
/* {block 'productdetails-tabs-votes'} */
class Block_178541117560c12459545bf5_27566938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin97 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin97, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin97->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['votes']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable40=ob_get_clean();
$_block_plugin98 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin98, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable40,"controls"=>"tab-votes")));
$_block_repeat=true;
echo $_block_plugin98->render(array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable40,"controls"=>"tab-votes")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin98->render(array('id'=>"tab-votes-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-votes"),'aria'=>array("expanded"=>$_prefixVariable40,"controls"=>"tab-votes")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin99 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin99, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")));
$_block_repeat=true;
echo $_block_plugin99->render(array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin100 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin100, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin100->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171155055860c1245954cfa4_39104639', 'productdetails-tabs-include-reviews', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin100->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin99->render(array('id'=>"tab-votes",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['votes'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-votes-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin97->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-votes'} */
/* {block 'productdetails-tabs-include-question-on-item'} */
class Block_58071364360c1245955a8a4_94984535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>"tab"), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-question-on-item'} */
/* {block 'productdetails-tabs-question-on-item'} */
class Block_196195797760c12459550a68_17117195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin101 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin101, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin101->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable41=ob_get_clean();
$_block_plugin102 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin102, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-questionOnItem"),'aria'=>array("expanded"=>$_prefixVariable41,"controls"=>"tab-questionOnItem")));
$_block_repeat=true;
echo $_block_plugin102->render(array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-questionOnItem"),'aria'=>array("expanded"=>$_prefixVariable41,"controls"=>"tab-questionOnItem")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin102->render(array('id'=>"tab-question-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-questionOnItem"),'aria'=>array("expanded"=>$_prefixVariable41,"controls"=>"tab-questionOnItem")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin103 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin103, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-questionOnItem",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")));
$_block_repeat=true;
echo $_block_plugin103->render(array('id'=>"tab-questionOnItem",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin104->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58071364360c1245955a8a4_94984535', 'productdetails-tabs-include-question-on-item', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin104->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin103->render(array('id'=>"tab-questionOnItem",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['questionOnItem'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-question-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin101->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-question-on-item'} */
/* {block 'productdetails-tabs-include-price-history'} */
class Block_123785713660c12459563eb9_55349737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price_history.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-price-history'} */
/* {block 'productdetails-tabs-price-flow'} */
class Block_134302163460c1245955d1d0_82933220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin105->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable42=ob_get_clean();
$_block_plugin106 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin106, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable42,"controls"=>"tab-priceFlow")));
$_block_repeat=true;
echo $_block_plugin106->render(array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable42,"controls"=>"tab-priceFlow")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'priceFlow','section'=>'productDetails'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin106->render(array('id'=>"tab-priceFlow-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-priceFlow"),'aria'=>array("expanded"=>$_prefixVariable42,"controls"=>"tab-priceFlow")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin107 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin107, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")));
$_block_repeat=true;
echo $_block_plugin107->render(array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin108 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin108, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin108->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123785713660c12459563eb9_55349737', 'productdetails-tabs-include-price-history', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin108->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin107->render(array('id'=>"tab-priceFlow",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['priceFlow'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-priceFlow-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin105->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-price-flow'} */
/* {block 'productdetails-tabs-include-availability-notification-form'} */
class Block_187098788860c1245956ca37_36448363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:productdetails/availability_notification_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'tab','tplscope'=>'artikeldetails'), 0, true);
?>
                                                <?php
}
}
/* {/block 'productdetails-tabs-include-availability-notification-form'} */
/* {block 'productdetails-tabs-availability-notification'} */
class Block_175273622060c12459565ad9_31084025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin109 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin109, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin109->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification']) {
echo "true";
} else {
echo "false";
}
$_prefixVariable43=ob_get_clean();
$_block_plugin110 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin110, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable43,"controls"=>"tab-availabilityNotification")));
$_block_repeat=true;
echo $_block_plugin110->render(array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable43,"controls"=>"tab-availabilityNotification")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'notifyMeWhenProductAvailableAgain'),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin110->render(array('id'=>"tab-availabilityNotification-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-availabilityNotification"),'aria'=>array("expanded"=>$_prefixVariable43,"controls"=>"tab-availabilityNotification")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin111 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin111, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")));
$_block_repeat=true;
echo $_block_plugin111->render(array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php $_block_plugin112 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin112, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin112->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187098788860c1245956ca37_36448363', 'productdetails-tabs-include-availability-notification-form', $this->tplIndex);
?>

                                            <?php $_block_repeat=false;
echo $_block_plugin112->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin111->render(array('id'=>"tab-availabilityNotification",'visible'=>$_smarty_tpl->tpl_vars['setActiveClass']->value['availabilityNotification'],'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-availabilityNotification-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin109->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-availability-notification'} */
/* {block 'productdetails-tabs-include-mediafile'} */
class Block_118880495960c1245957b252_99612256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/mediafile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                                    <?php
}
}
/* {/block 'productdetails-tabs-include-mediafile'} */
/* {block 'productdetails-tabs-media-gorup'} */
class Block_212723172060c1245956f644_24088697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikel']->value->getMediaTypes(), 'mediaType');
$_smarty_tpl->tpl_vars['mediaType']->index = -1;
$_smarty_tpl->tpl_vars['mediaType']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mediaType']->value) {
$_smarty_tpl->tpl_vars['mediaType']->do_else = false;
$_smarty_tpl->tpl_vars['mediaType']->index++;
$_smarty_tpl->tpl_vars['mediaType']->first = !$_smarty_tpl->tpl_vars['mediaType']->index;
$__foreach_mediaType_27_saved = $_smarty_tpl->tpl_vars['mediaType'];
?>
                                        <?php $_smarty_tpl->_assignInScope('cMedienTypId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'seofy' ][ 0 ], array( $_smarty_tpl->tpl_vars['mediaType']->value->name )));?>
                                        <?php $_block_plugin113 = isset($_smarty_tpl->smarty->registered_plugins['block']['card'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['card'][0][0] : null;
if (!is_callable(array($_block_plugin113, 'render'))) {
throw new SmartyException('block tag \'card\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('card', array('no-body'=>true));
$_block_repeat=true;
echo $_block_plugin113->render(array('no-body'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php ob_start();
if ($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first) {
echo "true";
} else {
echo "false";
}
$_prefixVariable44=ob_get_clean();
$_block_plugin114 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardheader'][0][0] : null;
if (!is_callable(array($_block_plugin114, 'render'))) {
throw new SmartyException('block tag \'cardheader\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardheader', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable44,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))));
$_block_repeat=true;
echo $_block_plugin114->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable44,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php echo $_smarty_tpl->tpl_vars['mediaType']->value->name;?>

                                            <?php $_block_repeat=false;
echo $_block_plugin114->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head",'data'=>array("toggle"=>"collapse","target"=>"#tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)),'aria'=>array("expanded"=>$_prefixVariable44,"controls"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['collapse'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'render'))) {
throw new SmartyException('block tag \'collapse\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('collapse', array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")));
$_block_repeat=true;
echo $_block_plugin115->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                <?php $_block_plugin116 = isset($_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['cardbody'][0][0] : null;
if (!is_callable(array($_block_plugin116, 'render'))) {
throw new SmartyException('block tag \'cardbody\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('cardbody', array());
$_block_repeat=true;
echo $_block_plugin116->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118880495960c1245957b252_99612256', 'productdetails-tabs-include-mediafile', $this->tplIndex);
?>

                                                <?php $_block_repeat=false;
echo $_block_plugin116->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php $_block_repeat=false;
echo $_block_plugin115->render(array('id'=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value),'visible'=>($_smarty_tpl->tpl_vars['setActiveClass']->value['mediaGroup'] && $_smarty_tpl->tpl_vars['mediaType']->first),'data'=>array("parent"=>"#tabAccordion"),'aria'=>array("labelledby"=>"tab-".((string)$_smarty_tpl->tpl_vars['cMedienTypId']->value)."-head")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_repeat=false;
echo $_block_plugin113->render(array('no-body'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
$_smarty_tpl->tpl_vars['mediaType'] = $__foreach_mediaType_27_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
/* {/block 'productdetails-tabs-media-gorup'} */
/* {block 'productdetails-tabs-no-tabs'} */
class Block_59792589960c1245951b077_15035725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin84 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin84, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array());
$_block_repeat=true;
echo $_block_plugin84->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <div class="accordion" id="tabAccordion">
                            <?php if ($_smarty_tpl->tpl_vars['useDescription']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51380549660c1245951bcd0_36582794', 'productdetails-tabs-description', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useDownloads']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31513949460c1245952f491_78078995', 'productdetails-tabs-downloads', $this->tplIndex);
?>

                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24953121660c1245953c362_11340886', 'productdetails-tabs-separated-tabs', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useVotes']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178541117560c12459545bf5_27566938', 'productdetails-tabs-votes', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useQuestionOnItem']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196195797760c12459550a68_17117195', 'productdetails-tabs-question-on-item', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['usePriceFlow']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134302163460c1245955d1d0_82933220', 'productdetails-tabs-price-flow', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useAvailabilityNotification']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175273622060c12459565ad9_31084025', 'productdetails-tabs-availability-notification', $this->tplIndex);
?>

                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['useMediaGroup']->value) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212723172060c1245956f644_24088697', 'productdetails-tabs-media-gorup', $this->tplIndex);
?>

                            <?php }?>
                        </div>
                    <?php $_block_repeat=false;
echo $_block_plugin84->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'productdetails-tabs-no-tabs'} */
/* {block 'productdetails-tabs-content'} */
class Block_31589608660c124594f7797_65197511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ('useDescription' || $_smarty_tpl->tpl_vars['useDownloads']->value || $_smarty_tpl->tpl_vars['useDescriptionWithMediaGroup']->value || $_smarty_tpl->tpl_vars['useVotes']->value || $_smarty_tpl->tpl_vars['useQuestionOnItem']->value || $_smarty_tpl->tpl_vars['usePriceFlow']->value || $_smarty_tpl->tpl_vars['useAvailabilityNotification']->value || $_smarty_tpl->tpl_vars['useMediaGroup']->value || !empty($_smarty_tpl->tpl_vars['separatedTabs']->value)) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_tabs','inContainer'=>false),$_smarty_tpl ) );?>

            <?php if ($_smarty_tpl->tpl_vars['tabanzeige']->value && !$_smarty_tpl->tpl_vars['isMobile']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95533468160c124594f9f81_14369865', 'productdetails-tabs-tabs', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59792589960c1245951b077_15035725', 'productdetails-tabs-no-tabs', $this->tplIndex);
?>

            <?php }?>
        <?php }?>
    <?php
}
}
/* {/block 'productdetails-tabs-content'} */
/* {block 'productdetails-tabs'} */
class Block_139240904260c12459431c47_22039017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-tabs' => 
  array (
    0 => 'Block_139240904260c12459431c47_22039017',
  ),
  'productdetails-tabs-settings' => 
  array (
    0 => 'Block_209880195360c124594323c5_04429723',
  ),
  'productdetails-tabs-content' => 
  array (
    0 => 'Block_31589608660c124594f7797_65197511',
  ),
  'productdetails-tabs-tabs' => 
  array (
    0 => 'Block_95533468160c124594f9f81_14369865',
  ),
  'productdetails-tabs-tab-description' => 
  array (
    0 => 'Block_115753725060c124594fb0d9_09245632',
  ),
  'productdetails-tabs-tab-content' => 
  array (
    0 => 'Block_149181906260c124594fc869_87413608',
  ),
  'tab-description-media-types' => 
  array (
    0 => 'Block_22241347060c124594fcc74_63955310',
  ),
  'productdetails-tabs-tab-description-include-attributes' => 
  array (
    0 => 'Block_20900903760c124595003e3_45463720',
  ),
  'productdetails-tabs-tab-downloads' => 
  array (
    0 => 'Block_3158634560c12459502543_18727360',
  ),
  'productdetails-tabs-tab-separated-tabs' => 
  array (
    0 => 'Block_65623310260c12459504fb8_93674106',
  ),
  'productdetails-tabs-tab-votes' => 
  array (
    0 => 'Block_67098087560c12459508881_77918813',
  ),
  'productdetails-tabs-tab-question-on-item' => 
  array (
    0 => 'Block_22510509860c1245950b176_93953771',
  ),
  'productdetails-tabs-tab-price-flow' => 
  array (
    0 => 'Block_163575806860c1245950d932_63016575',
  ),
  'productdetails-tabs-tab-availability-notification' => 
  array (
    0 => 'Block_164193059560c1245950fc09_43050991',
  ),
  'productdetails-tabs-tab-mediagroup' => 
  array (
    0 => 'Block_132820200360c12459512637_70943196',
  ),
  'productdetails-tabs-no-tabs' => 
  array (
    0 => 'Block_59792589960c1245951b077_15035725',
  ),
  'productdetails-tabs-description' => 
  array (
    0 => 'Block_51380549660c1245951bcd0_36582794',
  ),
  'productdetails-tabs-card-description' => 
  array (
    0 => 'Block_44869224860c12459522834_24792623',
  ),
  'productdetails-tabs-card-description-content' => 
  array (
    0 => 'Block_58797235360c12459523048_94537151',
  ),
  'productdetails-tabs-description-include-mediafile' => 
  array (
    0 => 'Block_111340195460c12459527bf7_28773776',
  ),
  'productdetails-tabs-card-description-attributes' => 
  array (
    0 => 'Block_144452644760c1245952a6b5_04956661',
  ),
  'productdetails-tabs-include-attributes' => 
  array (
    0 => 'Block_96598866160c1245952ad65_58646992',
  ),
  'productdetails-tabs-downloads' => 
  array (
    0 => 'Block_31513949460c1245952f491_78078995',
  ),
  'productdetails-tabs-include-download' => 
  array (
    0 => 'Block_179373539960c12459538f77_22651601',
  ),
  'productdetails-tabs-separated-tabs' => 
  array (
    0 => 'Block_24953121660c1245953c362_11340886',
  ),
  'productdetails-tabs-votes' => 
  array (
    0 => 'Block_178541117560c12459545bf5_27566938',
  ),
  'productdetails-tabs-include-reviews' => 
  array (
    0 => 'Block_171155055860c1245954cfa4_39104639',
  ),
  'productdetails-tabs-question-on-item' => 
  array (
    0 => 'Block_196195797760c12459550a68_17117195',
  ),
  'productdetails-tabs-include-question-on-item' => 
  array (
    0 => 'Block_58071364360c1245955a8a4_94984535',
  ),
  'productdetails-tabs-price-flow' => 
  array (
    0 => 'Block_134302163460c1245955d1d0_82933220',
  ),
  'productdetails-tabs-include-price-history' => 
  array (
    0 => 'Block_123785713660c12459563eb9_55349737',
  ),
  'productdetails-tabs-availability-notification' => 
  array (
    0 => 'Block_175273622060c12459565ad9_31084025',
  ),
  'productdetails-tabs-include-availability-notification-form' => 
  array (
    0 => 'Block_187098788860c1245956ca37_36448363',
  ),
  'productdetails-tabs-media-gorup' => 
  array (
    0 => 'Block_212723172060c1245956f644_24088697',
  ),
  'productdetails-tabs-include-mediafile' => 
  array (
    0 => 'Block_118880495960c1245957b252_99612256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209880195360c124594323c5_04429723', 'productdetails-tabs-settings', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31589608660c124594f7797_65197511', 'productdetails-tabs-content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-tabs'} */
}
