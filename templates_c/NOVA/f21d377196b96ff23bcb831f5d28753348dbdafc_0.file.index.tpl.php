<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:34
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\layout\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117ca5c2132_98132406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f21d377196b96ff23bcb831f5d28753348dbdafc' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\layout\\index.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/modal_header.tpl' => 1,
    'file:snippets/extension.tpl' => 1,
    'file:page/index.tpl' => 1,
    'file:page/shipping.tpl' => 1,
    'file:page/livesearch.tpl' => 1,
    'file:page/manufacturers.tpl' => 1,
    'file:page/newsletter_archive.tpl' => 1,
    'file:page/sitemap.tpl' => 1,
    'file:page/free_gift.tpl' => 1,
    'file:selectionwizard/index.tpl' => 1,
    'file:page/404.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/modal_footer.tpl' => 1,
  ),
),false)) {
function content_60c117ca5c2132_98132406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91753789060c117ca436885_54341981', 'layout-index');
?>

<?php }
/* {block 'layout-index-plugin-template'} */
class Block_75410379960c117ca4394e5_72097573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
}
/* {/block 'layout-index-plugin-template'} */
/* {block 'layout-index-include-header'} */
class Block_108210393860c117ca43b8a5_69069287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-header'} */
/* {block 'layout-index-heading'} */
class Block_85256716660c117ca4410c8_21554622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getTitle())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"));
$_block_repeat=true;
echo $_block_plugin6->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php echo $_smarty_tpl->tpl_vars['Link']->value->getTitle();?>
</h1>
                    <?php $_block_repeat=false;
echo $_block_plugin6->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) && $_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_heading','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"));
$_block_repeat=true;
echo $_block_plugin7->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <h1><?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getMetaTitle())) {
echo $_smarty_tpl->tpl_vars['Link']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['Link']->value->getName();
}?></h1>
                    <?php $_block_repeat=false;
echo $_block_plugin7->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"index-heading-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-heading'} */
/* {block 'layout-index-include-extension'} */
class Block_102023313960c117ca452988_19836654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:snippets/extension.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'layout-index-include-extension'} */
/* {block 'layout-index-link-content'} */
class Block_175088801360c117ca453e24_92611501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['Link']->value->getContent())) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_content','inContainer'=>false),$_smarty_tpl ) );?>

                    <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content"));
$_block_repeat=true;
echo $_block_plugin8->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['Link']->value->getContent();?>

                    <?php $_block_repeat=false;
echo $_block_plugin8->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid(),'class'=>"link-content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-content'} */
/* {block 'layout-index-link-type-tos'} */
class Block_72649440860c117ca4a5dd9_82841302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="tos" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_tos','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['AGB']->value !== false) {?>
                                <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()));
$_block_repeat=true;
echo $_block_plugin9->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['AGB']->value->cAGBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['AGB']->value->cAGBContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin9->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_tos','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-tos'} */
/* {block 'layout-index-link-type-revocation'} */
class Block_195343447660c117ca56c668_21268458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-instruction" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()));
$_block_repeat=true;
echo $_block_plugin10->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cWRBContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin10->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation'} */
/* {block 'layout-index-link-type-revocation-form'} */
class Block_206739414760c117ca57a7c6_47406947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="revocation-form" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()));
$_block_repeat=true;
echo $_block_plugin11->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cWRBFormContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin11->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_revocation_form','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-revocation-form'} */
/* {block 'layout-index-link-type-data-privacy'} */
class Block_63298513960c117ca5841d2_52197826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="data-privacy" class="well well-sm">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                            <?php if ($_smarty_tpl->tpl_vars['WRB']->value !== false) {?>
                                <?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['container'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['container'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'render'))) {
throw new SmartyException('block tag \'container\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('container', array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()));
$_block_repeat=true;
echo $_block_plugin12->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php if ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['WRB']->value->cDSEContentHtml;?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText) {?>
                                        <?php echo nl2br($_smarty_tpl->tpl_vars['WRB']->value->cDSEContentText);?>

                                    <?php }?>
                                <?php $_block_repeat=false;
echo $_block_plugin12->render(array('fluid'=>$_smarty_tpl->tpl_vars['Link']->value->getIsFluid()), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_after_data_privacy','inContainer'=>false),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'layout-index-link-type-data-privacy'} */
/* {block 'layout-index-include-index'} */
class Block_104983349860c117ca592271_04099494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-index'} */
/* {block 'layout-index-include-shipping'} */
class Block_179046828660c117ca5968d2_62862054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/shipping.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-shipping'} */
/* {block 'layout-index-include-livesearch'} */
class Block_189019090560c117ca59ae02_50279635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/livesearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-livesearch'} */
/* {block 'layout-index-include-manufacturers'} */
class Block_74906716860c117ca59f726_04343842 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/manufacturers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-manufacturers'} */
/* {block 'layout-index-include-newsletter-archive'} */
class Block_130048552460c117ca5a4874_56140309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/newsletter_archive.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-newsletter-archive'} */
/* {block 'layout-index-include-sitemap'} */
class Block_58880058460c117ca5aa0f4_93590451 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-sitemap'} */
/* {block 'layout-index-include-free-gift'} */
class Block_117276549960c117ca5ae640_76889038 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/free_gift.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-free-gift'} */
/* {block 'layout-index-include-plugin'} */
class Block_11479696560c117ca5b3750_51924218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['cPluginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
}
/* {/block 'layout-index-include-plugin'} */
/* {block 'layout-index-include-selection-wizard'} */
class Block_168509358560c117ca5b7ed5_13486473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-selection-wizard'} */
/* {block 'layout-index-include-404'} */
class Block_144598293060c117ca5bc3d9_06823244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:page/404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'layout-index-include-404'} */
/* {block 'layout-index-link-types'} */
class Block_17483826660c117ca457b54_18163240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AGB') ? constant('LINKTYP_AGB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72649440860c117ca4a5dd9_82841302', 'layout-index-link-type-tos', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB') ? constant('LINKTYP_WRB') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195343447660c117ca56c668_21268458', 'layout-index-link-type-revocation', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_WRB_FORMULAR') ? constant('LINKTYP_WRB_FORMULAR') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206739414760c117ca57a7c6_47406947', 'layout-index-link-type-revocation-form', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63298513960c117ca5841d2_52197826', 'layout-index-link-type-data-privacy', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_STARTSEITE') ? constant('LINKTYP_STARTSEITE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104983349860c117ca592271_04099494', 'layout-index-include-index', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_VERSAND') ? constant('LINKTYP_VERSAND') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179046828660c117ca5968d2_62862054', 'layout-index-include-shipping', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_LIVESUCHE') ? constant('LINKTYP_LIVESUCHE') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189019090560c117ca59ae02_50279635', 'layout-index-include-livesearch', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_HERSTELLER') ? constant('LINKTYP_HERSTELLER') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74906716860c117ca59f726_04343842', 'layout-index-include-manufacturers', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_NEWSLETTERARCHIV') ? constant('LINKTYP_NEWSLETTERARCHIV') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130048552460c117ca5a4874_56140309', 'layout-index-include-newsletter-archive', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_SITEMAP') ? constant('LINKTYP_SITEMAP') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58880058460c117ca5aa0f4_93590451', 'layout-index-include-sitemap', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_GRATISGESCHENK') ? constant('LINKTYP_GRATISGESCHENK') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117276549960c117ca5ae640_76889038', 'layout-index-include-free-gift', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_PLUGIN') ? constant('LINKTYP_PLUGIN') : null) && empty($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11479696560c117ca5b3750_51924218', 'layout-index-include-plugin', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_AUSWAHLASSISTENT') ? constant('LINKTYP_AUSWAHLASSISTENT') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168509358560c117ca5b7ed5_13486473', 'layout-index-include-selection-wizard', $this->tplIndex);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['Link']->value->getLinkType() === (defined('LINKTYP_404') ? constant('LINKTYP_404') : null)) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144598293060c117ca5bc3d9_06823244', 'layout-index-include-404', $this->tplIndex);
?>

                <?php }?>
            <?php
}
}
/* {/block 'layout-index-link-types'} */
/* {block 'layout-index-content'} */
class Block_20001747760c117ca440642_14333162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85256716660c117ca4410c8_21554622', 'layout-index-heading', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102023313960c117ca452988_19836654', 'layout-index-include-extension', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175088801360c117ca453e24_92611501', 'layout-index-link-content', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17483826660c117ca457b54_18163240', 'layout-index-link-types', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'layout-index-content'} */
/* {block 'layout-index-include-footer'} */
class Block_86304472960c117ca5bf755_92637910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (!(isset($_smarty_tpl->tpl_vars['bAjaxRequest']->value)) || !$_smarty_tpl->tpl_vars['bAjaxRequest']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:layout/modal_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php
}
}
/* {/block 'layout-index-include-footer'} */
/* {block 'layout-index'} */
class Block_91753789060c117ca436885_54341981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-index' => 
  array (
    0 => 'Block_91753789060c117ca436885_54341981',
  ),
  'layout-index-plugin-template' => 
  array (
    0 => 'Block_75410379960c117ca4394e5_72097573',
  ),
  'layout-index-include-header' => 
  array (
    0 => 'Block_108210393860c117ca43b8a5_69069287',
  ),
  'layout-index-content' => 
  array (
    0 => 'Block_20001747760c117ca440642_14333162',
  ),
  'layout-index-heading' => 
  array (
    0 => 'Block_85256716660c117ca4410c8_21554622',
  ),
  'layout-index-include-extension' => 
  array (
    0 => 'Block_102023313960c117ca452988_19836654',
  ),
  'layout-index-link-content' => 
  array (
    0 => 'Block_175088801360c117ca453e24_92611501',
  ),
  'layout-index-link-types' => 
  array (
    0 => 'Block_17483826660c117ca457b54_18163240',
  ),
  'layout-index-link-type-tos' => 
  array (
    0 => 'Block_72649440860c117ca4a5dd9_82841302',
  ),
  'layout-index-link-type-revocation' => 
  array (
    0 => 'Block_195343447660c117ca56c668_21268458',
  ),
  'layout-index-link-type-revocation-form' => 
  array (
    0 => 'Block_206739414760c117ca57a7c6_47406947',
  ),
  'layout-index-link-type-data-privacy' => 
  array (
    0 => 'Block_63298513960c117ca5841d2_52197826',
  ),
  'layout-index-include-index' => 
  array (
    0 => 'Block_104983349860c117ca592271_04099494',
  ),
  'layout-index-include-shipping' => 
  array (
    0 => 'Block_179046828660c117ca5968d2_62862054',
  ),
  'layout-index-include-livesearch' => 
  array (
    0 => 'Block_189019090560c117ca59ae02_50279635',
  ),
  'layout-index-include-manufacturers' => 
  array (
    0 => 'Block_74906716860c117ca59f726_04343842',
  ),
  'layout-index-include-newsletter-archive' => 
  array (
    0 => 'Block_130048552460c117ca5a4874_56140309',
  ),
  'layout-index-include-sitemap' => 
  array (
    0 => 'Block_58880058460c117ca5aa0f4_93590451',
  ),
  'layout-index-include-free-gift' => 
  array (
    0 => 'Block_117276549960c117ca5ae640_76889038',
  ),
  'layout-index-include-plugin' => 
  array (
    0 => 'Block_11479696560c117ca5b3750_51924218',
  ),
  'layout-index-include-selection-wizard' => 
  array (
    0 => 'Block_168509358560c117ca5b7ed5_13486473',
  ),
  'layout-index-include-404' => 
  array (
    0 => 'Block_144598293060c117ca5bc3d9_06823244',
  ),
  'layout-index-include-footer' => 
  array (
    0 => 'Block_86304472960c117ca5bf755_92637910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['nFullscreenTemplate']->value)) && $_smarty_tpl->tpl_vars['nFullscreenTemplate']->value == 1) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75410379960c117ca4394e5_72097573', 'layout-index-plugin-template', $this->tplIndex);
?>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108210393860c117ca43b8a5_69069287', 'layout-index-include-header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20001747760c117ca440642_14333162', 'layout-index-content', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86304472960c117ca5bf755_92637910', 'layout-index-include-footer', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'layout-index'} */
}
