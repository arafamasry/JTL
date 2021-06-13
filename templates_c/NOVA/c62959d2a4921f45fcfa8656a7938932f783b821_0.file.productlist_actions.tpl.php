<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:26:33
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productlist\productlist_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c123f93167a7_70674764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c62959d2a4921f45fcfa8656a7938932f783b821' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productlist\\productlist_actions.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/comparelist_button.tpl' => 1,
    'file:snippets/wishlist_button.tpl' => 1,
  ),
),false)) {
function content_60c123f93167a7_70674764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139795515160c123f92ff0d9_88110254', 'productlist-productlist-actions');
?>

<?php }
/* {block 'productlist-productlist-actions-include-comparelist-button'} */
class Block_160849517960c123f9304040_08893052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/comparelist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-productlist-actions-include-comparelist-button'} */
/* {block 'productlist-productlist-actions-include-wishlist-button'} */
class Block_211609800060c123f9306512_89466393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:snippets/wishlist_button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'productlist-productlist-actions-include-wishlist-button'} */
/* {block 'productlist-productlist-actions-buttons'} */
class Block_55909622660c123f9301388_71625727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!($_smarty_tpl->tpl_vars['Artikel']->value->nIstVater && $_smarty_tpl->tpl_vars['Artikel']->value->kVaterArtikel === 0)) {?>
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_vergleichsliste_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['vergleichsliste']['vergleichsliste_anzeigen'] === 'Y') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160849517960c123f9304040_08893052', 'productlist-productlist-actions-include-comparelist-button', $this->tplIndex);
?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['global']['global_wunschliste_anzeigen'] === 'Y' && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeluebersicht']['artikeluebersicht_wunschzettel_anzeigen'] === 'Y') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211609800060c123f9306512_89466393', 'productlist-productlist-actions-include-wishlist-button', $this->tplIndex);
?>

                <?php }?>
            <?php }?>
        <?php
}
}
/* {/block 'productlist-productlist-actions-buttons'} */
/* {block 'productlist-productlist-actions-input-hidden'} */
class Block_10263101360c123f9307cb7_08838977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
$_prefixVariable2 = ob_get_clean();
ob_start();
if (!empty($_prefixVariable2)) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kVariKindArtikel;
} else {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel;
}
$_prefixVariable3=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_prefixVariable3),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'productlist-productlist-actions-input-hidden'} */
/* {block 'productlist-productlist-actions'} */
class Block_139795515160c123f92ff0d9_88110254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productlist-productlist-actions' => 
  array (
    0 => 'Block_139795515160c123f92ff0d9_88110254',
  ),
  'productlist-productlist-actions-buttons' => 
  array (
    0 => 'Block_55909622660c123f9301388_71625727',
  ),
  'productlist-productlist-actions-include-comparelist-button' => 
  array (
    0 => 'Block_160849517960c123f9304040_08893052',
  ),
  'productlist-productlist-actions-include-wishlist-button' => 
  array (
    0 => 'Block_211609800060c123f9306512_89466393',
  ),
  'productlist-productlist-actions-input-hidden' => 
  array (
    0 => 'Block_10263101360c123f9307cb7_08838977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")));
$_block_repeat=true;
echo $_block_plugin6->render(array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55909622660c123f9301388_71625727', 'productlist-productlist-actions-buttons', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10263101360c123f9307cb7_08838977', 'productlist-productlist-actions-input-hidden', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin6->render(array('action'=>"#",'method'=>"post",'class'=>"product-actions actions-small d-flex",'data'=>array("toggle"=>"product-actions")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'productlist-productlist-actions'} */
}
