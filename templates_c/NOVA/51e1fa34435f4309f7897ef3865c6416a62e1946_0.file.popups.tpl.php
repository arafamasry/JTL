<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:12
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\popups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245cba8453_88595986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e1fa34435f4309f7897ef3865c6416a62e1946' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\popups.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/question_on_item.tpl' => 1,
    'file:productdetails/pushed.tpl' => 1,
  ),
),false)) {
function content_60c1245cba8453_88595986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121177275560c1245cb95d01_28660571', 'productdetails-popups');
?>

<?php }
/* {block 'productdetails-popups-include-question-on-item'} */
class Block_208839235560c1245cb9a6b3_41525035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable49 = ob_get_clean();
$_block_plugin138 = isset($_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['modal'][0][0] : null;
if (!is_callable(array($_block_plugin138, 'render'))) {
throw new SmartyException('block tag \'modal\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('modal', array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable49));
$_block_repeat=true;
echo $_block_plugin138->render(array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable49), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/question_on_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'popup'), 0, false);
?>
            <?php $_block_repeat=false;
echo $_block_plugin138->render(array('id'=>"question-popup-".((string)$_smarty_tpl->tpl_vars['kArtikel']->value),'title'=>$_prefixVariable49), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-popups-include-question-on-item'} */
/* {block 'productdetails-popups-include-pushed'} */
class Block_152202351060c1245cba0315_41995931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="popupa<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
" class="product-popup">
                <?php $_smarty_tpl->_subTemplateRender('file:productdetails/pushed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('oArtikel'=>$_smarty_tpl->tpl_vars['Artikel']->value,'fAnzahl'=>$_smarty_tpl->tpl_vars['bWarenkorbAnzahl']->value), 0, false);
?>
            </div>
        <?php
}
}
/* {/block 'productdetails-popups-include-pushed'} */
/* {block 'productdetails-popups-script'} */
class Block_42909589860c1245cba18a4_98849489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_block_plugin139 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin139, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin139->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            $(function() {
                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_benachrichtigung']->value)) && count($_smarty_tpl->tpl_vars['fehlendeAngaben_benachrichtigung']->value) > 0 && ($_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value == 2 || $_smarty_tpl->tpl_vars['verfuegbarkeitsBenachrichtigung']->value == 3)) {?>
                    show_popup('n<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'requestNotification'),$_smarty_tpl ) );?>
');
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value)) && count($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value) > 0 && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P') {?>
                    $('#question-popup-<?php echo $_smarty_tpl->tpl_vars['kArtikel']->value;?>
').modal('show');
                <?php }?>
            });

            function show_popup(item, title) {
                var html = $('#popup' + item).html();
                if (typeof title === 'undefined' || title.length === 0) {
                    title = $(html).find('h3').text();
                }
                eModal.alert({
                    message: html,
                    title: title
                });
            }
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin139->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-popups-script'} */
/* {block 'productdetails-popups'} */
class Block_121177275560c1245cb95d01_28660571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-popups' => 
  array (
    0 => 'Block_121177275560c1245cb95d01_28660571',
  ),
  'productdetails-popups-include-question-on-item' => 
  array (
    0 => 'Block_208839235560c1245cb9a6b3_41525035',
  ),
  'productdetails-popups-include-pushed' => 
  array (
    0 => 'Block_152202351060c1245cba0315_41995931',
  ),
  'productdetails-popups-script' => 
  array (
    0 => 'Block_42909589860c1245cba18a4_98849489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel);?>
    <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi > 0) {?>
        <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P') {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208839235560c1245cb9a6b3_41525035', 'productdetails-popups-include-question-on-item', $this->tplIndex);
?>

    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value)) && $_smarty_tpl->tpl_vars['bWarenkorbHinzugefuegt']->value) {?>
        <?php if (!(isset($_smarty_tpl->tpl_vars['kArtikel']->value))) {?>
            <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikel);?>
            <?php if ($_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi > 0) {?>
                <?php $_smarty_tpl->_assignInScope('kArtikel', $_smarty_tpl->tpl_vars['Artikel']->value->kArtikelVariKombi);?>
            <?php }?>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152202351060c1245cba0315_41995931', 'productdetails-popups-include-pushed', $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42909589860c1245cba18a4_98849489', 'productdetails-popups-script', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-popups'} */
}
