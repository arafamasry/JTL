<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:07
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c124573204c5_35433819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c9a2939e28cf7c7c37bfb88cec74f69171ba98' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\stock.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/stock_status.tpl' => 1,
  ),
),false)) {
function content_60c124573204c5_35433819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147653176560c12457285827_60366072', 'productdetails-stock');
?>

<?php }
/* {block 'productdetails-stock-include-stock-status'} */
class Block_66657383160c12457299187_10379854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/stock_status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentProduct'=>$_smarty_tpl->tpl_vars['Artikel']->value), 0, false);
?>
                                <?php
}
}
/* {/block 'productdetails-stock-include-stock-status'} */
/* {block 'productdetails-stock-availability'} */
class Block_104703823760c12457294790_30758506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->inWarenkorbLegbar === (defined('INWKNICHTLEGBAR_UNVERKAEUFLICH') ? constant('INWKNICHTLEGBAR_UNVERKAEUFLICH') : null)) {?>
                                <span class="status"><small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productUnsaleable','section'=>'productDetails'),$_smarty_tpl ) );?>
</small></span>
                            <?php } elseif (!$_smarty_tpl->tpl_vars['Artikel']->value->nErscheinendesProdukt) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66657383160c12457299187_10379854', 'productdetails-stock-include-stock-status', $this->tplIndex);
?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['anzeige']->value === 'verfuegbarkeit' || $_smarty_tpl->tpl_vars['anzeige']->value === 'genau' && $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0) {?>
                                    <span class="status status-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Lageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Lageranzeige->cLagerhinweis[$_smarty_tpl->tpl_vars['anzeige']->value];?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['anzeige']->value === 'ampel' && $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0) {?>
                                    <span class="status status-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Lageranzeige->nStatus;?>
"><?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Lageranzeige->AmpelText;?>
</span>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-stock-availability'} */
/* {block 'productdetails-stock-rich-availability'} */
class Block_57738302860c124572caad1_16470867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten === 'N' || $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'Y') {?>
                                <link itemprop="availability" href="http://schema.org/InStock" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->nErscheinendesProdukt && $_smarty_tpl->tpl_vars['Artikel']->value->Erscheinungsdatum_de !== '00.00.0000' && $_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_erscheinende_kaeuflich'] === 'Y') {?>
                                <link itemprop="availability" href="http://schema.org/PreOrder" />
                            <?php } elseif ($_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten === 'Y' && $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'N' && $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand <= 0) {?>
                                <link itemprop="availability" href="http://schema.org/OutOfStock" />
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-stock-rich-availability'} */
/* {block 'productdetails-stock-delivery-status'} */
class Block_159154061260c124572ff591_76598848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="delivery-status"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'deliveryStatus'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cLieferstatus;?>
</div>
                            <?php
}
}
/* {/block 'productdetails-stock-delivery-status'} */
/* {block 'productdetails-stock-shipping-time'} */
class Block_18234322360c12457293f04_72636465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <li>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104703823760c12457294790_30758506', 'productdetails-stock-availability', $this->tplIndex);
?>

                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57738302860c124572caad1_16470867', 'productdetails-stock-rich-availability', $this->tplIndex);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['Artikel']->value->cLieferstatus)) && ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferstatus_anzeigen'] === 'Y' || ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferstatus_anzeigen'] === 'L' && $_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand == 0 && $_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten === 'Y') || ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_lieferstatus_anzeigen'] === 'A' && ($_smarty_tpl->tpl_vars['Artikel']->value->fLagerbestand > 0 || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerKleinerNull === 'Y' || $_smarty_tpl->tpl_vars['Artikel']->value->cLagerBeachten !== 'Y')))) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159154061260c124572ff591_76598848', 'productdetails-stock-delivery-status', $this->tplIndex);
?>

                        <?php }?>
                    </li>
                <?php
}
}
/* {/block 'productdetails-stock-shipping-time'} */
/* {block 'productdetails-stock-estimated-delivery'} */
class Block_159764337460c12457302106_82129542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->cEstimatedDelivery) {?>
                    <li>
                        <div class="estimated-delivery"
                            <?php if ((isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]))) {?>
                                data-toggle="popover"
                                data-placement="top"
                                data-content="<?php if ($_smarty_tpl->tpl_vars['Firma']->value->country !== null) {
echo sprintf(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingInformation','section'=>'productDetails'),$_smarty_tpl ) ),$_smarty_tpl->tpl_vars['Firma']->value->country->getName(),$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL(),$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)]->getURL());
}?>"
                            <?php }?>>
                            <?php if (!(isset($_smarty_tpl->tpl_vars['shippingTime']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingTime'),$_smarty_tpl ) );?>
:<?php }?>
                            <span class="a<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->Lageranzeige->nStatus;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['Artikel']->value->cEstimatedDelivery;?>

                                <span class="estimated-delivery-info">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'shippingInfoIcon','section'=>'productDetails'),$_smarty_tpl ) );?>
)</span>
                            </span>
                        </div>
                    </li>
                <?php }?>
            <?php
}
}
/* {/block 'productdetails-stock-estimated-delivery'} */
/* {block 'productdetails-stock-stock-info'} */
class Block_54167905260c124572925f4_05680058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="list-unstyled">
            <?php if (!(isset($_smarty_tpl->tpl_vars['shippingTime']->value))) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18234322360c12457293f04_72636465', 'productdetails-stock-shipping-time', $this->tplIndex);
?>

            <?php }?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['availability']->value))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159764337460c12457302106_82129542', 'productdetails-stock-estimated-delivery', $this->tplIndex);
?>

            <?php }?>
        </ul>
    <?php
}
}
/* {/block 'productdetails-stock-stock-info'} */
/* {block 'productdetails-stock'} */
class Block_147653176560c12457285827_60366072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-stock' => 
  array (
    0 => 'Block_147653176560c12457285827_60366072',
  ),
  'productdetails-stock-stock-info' => 
  array (
    0 => 'Block_54167905260c124572925f4_05680058',
  ),
  'productdetails-stock-shipping-time' => 
  array (
    0 => 'Block_18234322360c12457293f04_72636465',
  ),
  'productdetails-stock-availability' => 
  array (
    0 => 'Block_104703823760c12457294790_30758506',
  ),
  'productdetails-stock-include-stock-status' => 
  array (
    0 => 'Block_66657383160c12457299187_10379854',
  ),
  'productdetails-stock-rich-availability' => 
  array (
    0 => 'Block_57738302860c124572caad1_16470867',
  ),
  'productdetails-stock-delivery-status' => 
  array (
    0 => 'Block_159154061260c124572ff591_76598848',
  ),
  'productdetails-stock-estimated-delivery' => 
  array (
    0 => 'Block_159764337460c12457302106_82129542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('anzeige', $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikel_lagerbestandsanzeige']);?>
    <div class="delivery-status">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54167905260c124572925f4_05680058', 'productdetails-stock-stock-info', $this->tplIndex);
?>

    </div>
<?php
}
}
/* {/block 'productdetails-stock'} */
}
