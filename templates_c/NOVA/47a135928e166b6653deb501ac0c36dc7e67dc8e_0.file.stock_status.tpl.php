<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:07
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\stock_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c124577186c9_84064293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47a135928e166b6653deb501ac0c36dc7e67dc8e' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\stock_status.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c124577186c9_84064293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159568528760c1245770a4a0_53159162', 'snippets-stock-status');
?>

<?php }
/* {block 'snippets-stock-status-in-flowing'} */
class Block_196058003960c1245770e1e9_55054621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-1"><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->getBackorderString();?>
</span>
        <?php
}
}
/* {/block 'snippets-stock-status-in-flowing'} */
/* {block 'snippets-stock-status-supllier-stock-notice'} */
class Block_165580782660c12457713472_99777461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'supplierStockNotice','printf'=>$_smarty_tpl->tpl_vars['currentProduct']->value->fLieferzeit),$_smarty_tpl ) );?>
</span>
        <?php
}
}
/* {/block 'snippets-stock-status-supllier-stock-notice'} */
/* {block 'snippets-stock-status-exact'} */
class Block_154448649660c12457714d96_80559204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->nStatus;?>
">
                <span class="fas fa-truck status-icon"></span><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->cLagerhinweis[$_smarty_tpl->tpl_vars['anzeige']->value];?>

            </span>
        <?php
}
}
/* {/block 'snippets-stock-status-exact'} */
/* {block 'snippets-stock-status-traffic-light'} */
class Block_103023375360c12457716a24_51913983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="status status-<?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->nStatus;?>
">
                <span class="fas fa-truck status-icon"></span><?php echo $_smarty_tpl->tpl_vars['currentProduct']->value->Lageranzeige->AmpelText;?>

            </span>
        <?php
}
}
/* {/block 'snippets-stock-status-traffic-light'} */
/* {block 'snippets-stock-status'} */
class Block_159568528760c1245770a4a0_53159162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-stock-status' => 
  array (
    0 => 'Block_159568528760c1245770a4a0_53159162',
  ),
  'snippets-stock-status-in-flowing' => 
  array (
    0 => 'Block_196058003960c1245770e1e9_55054621',
  ),
  'snippets-stock-status-supllier-stock-notice' => 
  array (
    0 => 'Block_165580782660c12457713472_99777461',
  ),
  'snippets-stock-status-exact' => 
  array (
    0 => 'Block_154448649660c12457714d96_80559204',
  ),
  'snippets-stock-status-traffic-light' => 
  array (
    0 => 'Block_103023375360c12457716a24_51913983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('anzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikel_lagerbestandsanzeige']);?>
    <?php if ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && ($_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U') && $_smarty_tpl->tpl_vars['currentProduct']->value->getBackorderString() !== '' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] !== 'N') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196058003960c1245770e1e9_55054621', 'snippets-stock-status-in-flowing', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value !== 'nichts' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] !== 'N' && $_smarty_tpl->tpl_vars['currentProduct']->value->cLagerBeachten === 'Y' && $_smarty_tpl->tpl_vars['currentProduct']->value->fLagerbestand <= 0 && $_smarty_tpl->tpl_vars['currentProduct']->value->fLieferantenlagerbestand > 0 && $_smarty_tpl->tpl_vars['currentProduct']->value->fLieferzeit > 0 && ($_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'N' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'I' || $_smarty_tpl->tpl_vars['currentProduct']->value->cLagerKleinerNull === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferantenbestand_anzeigen'] === 'U')) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165580782660c12457713472_99777461', 'snippets-stock-status-supllier-stock-notice', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'verfuegbarkeit' || $_smarty_tpl->tpl_vars['anzeige']->value === 'genau') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154448649660c12457714d96_80559204', 'snippets-stock-status-exact', $this->tplIndex);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'ampel') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103023375360c12457716a24_51913983', 'snippets-stock-status-traffic-light', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-stock-status'} */
}
