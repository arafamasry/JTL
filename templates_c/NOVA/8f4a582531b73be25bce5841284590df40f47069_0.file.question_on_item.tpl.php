<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:12
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\question_on_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245ceebc54_98699899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4a582531b73be25bce5841284590df40f47069' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\question_on_item.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/form_group_simple.tpl' => 7,
    'file:snippets/checkbox.tpl' => 2,
  ),
),false)) {
function content_60c1245ceebc54_98699899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156356091560c1245ce6fc05_04443826', 'productdetails-question-on-item');
?>

<?php }
/* {block 'productdetails-question-on-item-alert'} */
class Block_57858843460c1245ce72670_53095633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['alert'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'render'))) {
throw new SmartyException('block tag \'alert\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('alert', array('dismissable'=>true,'variant'=>"danger"));
$_block_repeat=true;
echo $_block_plugin140->render(array('dismissable'=>true,'variant'=>"danger"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Artikelhinweise']->value, 'Artikelhinweis');
$_smarty_tpl->tpl_vars['Artikelhinweis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Artikelhinweis']->value) {
$_smarty_tpl->tpl_vars['Artikelhinweis']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['Artikelhinweis']->value;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_block_repeat=false;
echo $_block_plugin140->render(array('dismissable'=>true,'variant'=>"danger"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-alert'} */
/* {block 'productdetails-question-on-item-form-legend-contact'} */
class Block_2295530460c1245ce7cb46_91997871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'contact'),$_smarty_tpl ) );?>
</legend>
                <?php
}
}
/* {/block 'productdetails-question-on-item-form-legend-contact'} */
/* {block 'productdetails-question-on-item-form-salutation'} */
class Block_70811493760c1245ce81d14_22767523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin143->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutation','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable51=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'O') {
echo "<span class='optional'> - ";
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'optional'),$_smarty_tpl ) );
echo "</span>";
}
$_prefixVariable52=ob_get_clean();
$_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"salutation",'label'=>$_prefixVariable51.$_prefixVariable52));
$_block_repeat=true;
echo $_block_plugin144->render(array('label-for'=>"salutation",'label'=>$_prefixVariable51.$_prefixVariable52), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable53=ob_get_clean();
$_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['select'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['select'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'render'))) {
throw new SmartyException('block tag \'select\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('select', array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable53,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')));
$_block_repeat=true;
echo $_block_plugin145->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable53,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <option value="" <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y') {?>disabled<?php }?> selected>
                                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutation','section'=>'account data'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'noSalutation'),$_smarty_tpl ) );
}?>
                                        </option>
                                        <option value="w" <?php if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede)) && $_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede === 'w') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutationW'),$_smarty_tpl ) );?>
</option>
                                        <option value="m" <?php if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede)) && $_smarty_tpl->tpl_vars['Anfrage']->value->cAnrede === 'm') {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'salutationM'),$_smarty_tpl ) );?>
</option>
                                    <?php $_block_repeat=false;
echo $_block_plugin145->render(array('class'=>'custom-select','name'=>"anrede",'id'=>"salutation",'placeholder'=>$_prefixVariable53,'autocomplete'=>"honorific-prefix",'required'=>($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] === 'Y')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php $_block_repeat=false;
echo $_block_plugin144->render(array('label-for'=>"salutation",'label'=>$_prefixVariable51.$_prefixVariable52), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_block_repeat=false;
echo $_block_plugin143->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-salutation'} */
/* {block 'productdetails-question-on-item-form-name'} */
class Block_59165780760c1245cea2760_47162994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N') {?>
                                <?php $_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin146->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cVorname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable54 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firstName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable55 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','firstName','vorname',$_prefixVariable54,$_prefixVariable55,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'],null,'given-name')), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin146->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                                <?php $_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin147->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cNachname ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable56 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'lastName','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable57 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','lastName','nachname',$_prefixVariable56,$_prefixVariable57,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'],null,'family-name')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin147->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-name'} */
/* {block 'productdetails-question-on-item-form-firm'} */
class Block_86774958860c1245ceab7e6_44226351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin148->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cFirma ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable58 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'firm','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable59 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('text','company','firma',$_prefixVariable58,$_prefixVariable59,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'],null,'organization')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin148->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-firm'} */
/* {block 'productdetails-question-on-item-form-email'} */
class Block_110061257960c1245ceaeeb9_13151986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12));
$_block_repeat=true;
echo $_block_plugin149->render(array('cols'=>12), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMail ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable60 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'email','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable61 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('email','question_email','email',$_prefixVariable60,$_prefixVariable61,true,null,'email')), 0, true);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin149->render(array('cols'=>12), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'productdetails-question-on-item-form-email'} */
/* {block 'productdetails-question-on-item-form-mobil'} */
class Block_92141980760c1245ceb2d20_42354243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N') {?>
                                <?php $_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin150->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cTel ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable62 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'tel','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable63 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','tel','tel',$_prefixVariable62,$_prefixVariable63,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'],null,'home tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin150->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
                                <?php $_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('cols'=>12,'md'=>6));
$_block_repeat=true;
echo $_block_plugin151->render(array('cols'=>12,'md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable64 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'mobile','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable65 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','mobile','mobil',$_prefixVariable64,$_prefixVariable65,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'],null,'mobile tel')), 0, true);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin151->render(array('cols'=>12,'md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php }?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-mobil'} */
/* {block 'productdetails-question-on-item-form-fax'} */
class Block_191097432560c1245cebc355_18883330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>6));
$_block_repeat=true;
echo $_block_plugin152->render(array('md'=>6), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['Anfrage']->value->cMobil ?? null)===null||$tmp==='' ? null : $tmp);
$_prefixVariable66 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fax','section'=>'account data'),$_smarty_tpl ) );
$_prefixVariable67 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:snippets/form_group_simple.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>array('tel','fax','fax',$_prefixVariable66,$_prefixVariable67,$_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'],null,'fax tel')), 0, true);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin152->render(array('md'=>6), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fax'} */
/* {block 'productdetails-question-on-item-form-fieldset-contact'} */
class Block_100265322260c1245ce7ba02_81440278 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <fieldset>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2295530460c1245ce7cb46_91997871', 'productdetails-question-on-item-form-legend-contact', $this->tplIndex);
?>

                <?php $_block_plugin142 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin142, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin142->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_anrede'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70811493760c1245ce81d14_22767523', 'productdetails-question-on-item-form-salutation', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_vorname'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_nachname'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59165780760c1245cea2760_47162994', 'productdetails-question-on-item-form-name', $this->tplIndex);
?>

                        <div class="w-100-util"></div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_firma'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86774958860c1245ceab7e6_44226351', 'productdetails-question-on-item-form-firm', $this->tplIndex);
?>

                    <?php }?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110061257960c1245ceaeeb9_13151986', 'productdetails-question-on-item-form-email', $this->tplIndex);
?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_tel'] !== 'N' || $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_mobil'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92141980760c1245ceb2d20_42354243', 'productdetails-question-on-item-form-mobil', $this->tplIndex);
?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_fax'] !== 'N') {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191097432560c1245cebc355_18883330', 'productdetails-question-on-item-form-fax', $this->tplIndex);
?>

                    <?php }?>
                <?php $_block_repeat=false;
echo $_block_plugin142->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-contact'} */
/* {block 'productdetails-question-on-item-form-legend-product-question'} */
class Block_136248373260c1245cecb9e1_82033257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <legend><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>
</legend>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-legend-product-question'} */
/* {block 'productdetails-question-on-item-form-textarea'} */
class Block_33397805460c1245cece4f3_78272772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'question','section'=>'productDetails'),$_smarty_tpl ) );
$_prefixVariable68=ob_get_clean();
$_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"question",'label'=>$_prefixVariable68));
$_block_repeat=true;
echo $_block_plugin153->render(array('label-for'=>"question",'label'=>$_prefixVariable68), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'])) && $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {?>
                        <div class="form-error-msg"><i class="fas fa-exclamation-triangle"></i> <?php if ($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'fillOut'),$_smarty_tpl ) );
}?></div>
                    <?php }?>
                    <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'])) && $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['nachricht'] > 0) {
echo "has-error";
}
$_prefixVariable69=ob_get_clean();
$_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['textarea'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'render'))) {
throw new SmartyException('block tag \'textarea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable69));
$_block_repeat=true;
echo $_block_plugin154->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable69), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_smarty_tpl->tpl_vars['Anfrage']->value))) {
echo $_smarty_tpl->tpl_vars['Anfrage']->value->cNachricht;
}
$_block_repeat=false;
echo $_block_plugin154->render(array('name'=>"nachricht",'id'=>"question",'rows'=>"8",'required'=>true,'placeholder'=>" ",'class'=>$_prefixVariable69), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin153->render(array('label-for'=>"question",'label'=>$_prefixVariable68), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-textarea'} */
/* {block 'productdetails-question-on-item-form-include-checkbox'} */
class Block_103205689060c1245cedb574_73497703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value))) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nAnzeigeOrt'=>(defined('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') ? constant('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') : null),'cPlausi_arr'=>$_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value,'cPost_arr'=>null), 0, false);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:snippets/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nAnzeigeOrt'=>(defined('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') ? constant('CHECKBOX_ORT_FRAGE_ZUM_PRODUKT') : null),'cPlausi_arr'=>null,'cPost_arr'=>null), 0, true);
?>
                <?php }?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-include-checkbox'} */
/* {block 'productdetails-question-on-item-form-fieldset-product-question'} */
class Block_197447283460c1245cecabe7_39801773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <fieldset>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136248373260c1245cecb9e1_82033257', 'productdetails-question-on-item-form-legend-product-question', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33397805460c1245cece4f3_78272772', 'productdetails-question-on-item-form-textarea', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103205689060c1245cedb574_73497703', 'productdetails-question-on-item-form-include-checkbox', $this->tplIndex);
?>


        </fieldset>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-fieldset-product-question'} */
/* {block 'productdetails-question-on-item-form-captcha'} */
class Block_154664421960c1245cee0fe9_14167305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_block_plugin155 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin155, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin155->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value['captcha'])) {
echo "has-error";
}
$_prefixVariable70=ob_get_clean();
$_block_plugin156 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin156, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>$_prefixVariable70));
$_block_repeat=true;
echo $_block_plugin156->render(array('class'=>$_prefixVariable70), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin156->render(array('class'=>$_prefixVariable70), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin155->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-captcha'} */
/* {block 'productdetails-question-on-item-form-privacy'} */
class Block_72300932060c1245cee4911_01595253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p class="privacy text-muted-util small">
                    <?php $_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"));
$_block_repeat=true;
echo $_block_plugin157->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'privacyNotice'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin157->render(array('href'=>$_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]->getURL(),'class'=>"popup"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </p>
            <?php
}
}
/* {/block 'productdetails-question-on-item-form-privacy'} */
/* {block 'productdetails-question-on-item-form-submit'} */
class Block_73618854060c1245cee6a09_84558862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"a",'value'=>$_smarty_tpl->tpl_vars['Artikel']->value->kArtikel),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"show",'value'=>"1"),$_smarty_tpl ) );?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"fragezumprodukt",'value'=>"1"),$_smarty_tpl ) );?>

            <?php $_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['row'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['row'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'render'))) {
throw new SmartyException('block tag \'row\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('row', array());
$_block_repeat=true;
echo $_block_plugin158->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('md'=>'auto','class'=>"ml-auto-util"));
$_block_repeat=true;
echo $_block_plugin159->render(array('md'=>'auto','class'=>"ml-auto-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true));
$_block_repeat=true;
echo $_block_plugin160->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'sendQuestion','section'=>'productDetails'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin160->render(array('type'=>"submit",'value'=>"1",'variant'=>"primary",'block'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo $_block_plugin159->render(array('md'=>'auto','class'=>"ml-auto-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_block_repeat=false;
echo $_block_plugin158->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'productdetails-question-on-item-form-submit'} */
/* {block 'productdetails-question-on-item-form'} */
class Block_119961439260c1245ce75899_23205554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->cURLFull)) {
echo (string)$_smarty_tpl->tpl_vars['Artikel']->value->cURLFull;
if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'Y') {
echo "#tab-questionOnItem";
}
} else {
echo (string)$_smarty_tpl->tpl_vars['ShopURL']->value;
echo "/";
}
$_prefixVariable50=ob_get_clean();
$_block_plugin141 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin141, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable50,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin141->render(array('action'=>$_prefixVariable50,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100265322260c1245ce7ba02_81440278', 'productdetails-question-on-item-form-fieldset-contact', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197447283460c1245cecabe7_39801773', 'productdetails-question-on-item-form-fieldset-product-question', $this->tplIndex);
?>

        <?php if ((!(isset($_SESSION['bAnti_spam_already_checked'])) || $_SESSION['bAnti_spam_already_checked'] !== true) && (isset($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'])) && $_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['produktfrage_abfragen_captcha'] !== 'N' && empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154664421960c1245cee0fe9_14167305', 'productdetails-question-on-item-form-captcha', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_fragezumprodukt_anzeigen'] === 'P' && (isset($_smarty_tpl->tpl_vars['oSpezialseiten_arr']->value[(defined('LINKTYP_DATENSCHUTZ') ? constant('LINKTYP_DATENSCHUTZ') : null)]))) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72300932060c1245cee4911_01595253', 'productdetails-question-on-item-form-privacy', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73618854060c1245cee6a09_84558862', 'productdetails-question-on-item-form-submit', $this->tplIndex);
?>

    <?php $_block_repeat=false;
echo $_block_plugin141->render(array('action'=>$_prefixVariable50,'method'=>"post",'id'=>"article_question",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'productdetails-question-on-item-form'} */
/* {block 'productdetails-question-on-item'} */
class Block_156356091560c1245ce6fc05_04443826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-question-on-item' => 
  array (
    0 => 'Block_156356091560c1245ce6fc05_04443826',
  ),
  'productdetails-question-on-item-alert' => 
  array (
    0 => 'Block_57858843460c1245ce72670_53095633',
  ),
  'productdetails-question-on-item-form' => 
  array (
    0 => 'Block_119961439260c1245ce75899_23205554',
  ),
  'productdetails-question-on-item-form-fieldset-contact' => 
  array (
    0 => 'Block_100265322260c1245ce7ba02_81440278',
  ),
  'productdetails-question-on-item-form-legend-contact' => 
  array (
    0 => 'Block_2295530460c1245ce7cb46_91997871',
  ),
  'productdetails-question-on-item-form-salutation' => 
  array (
    0 => 'Block_70811493760c1245ce81d14_22767523',
  ),
  'productdetails-question-on-item-form-name' => 
  array (
    0 => 'Block_59165780760c1245cea2760_47162994',
  ),
  'productdetails-question-on-item-form-firm' => 
  array (
    0 => 'Block_86774958860c1245ceab7e6_44226351',
  ),
  'productdetails-question-on-item-form-email' => 
  array (
    0 => 'Block_110061257960c1245ceaeeb9_13151986',
  ),
  'productdetails-question-on-item-form-mobil' => 
  array (
    0 => 'Block_92141980760c1245ceb2d20_42354243',
  ),
  'productdetails-question-on-item-form-fax' => 
  array (
    0 => 'Block_191097432560c1245cebc355_18883330',
  ),
  'productdetails-question-on-item-form-fieldset-product-question' => 
  array (
    0 => 'Block_197447283460c1245cecabe7_39801773',
  ),
  'productdetails-question-on-item-form-legend-product-question' => 
  array (
    0 => 'Block_136248373260c1245cecb9e1_82033257',
  ),
  'productdetails-question-on-item-form-textarea' => 
  array (
    0 => 'Block_33397805460c1245cece4f3_78272772',
  ),
  'productdetails-question-on-item-form-include-checkbox' => 
  array (
    0 => 'Block_103205689060c1245cedb574_73497703',
  ),
  'productdetails-question-on-item-form-captcha' => 
  array (
    0 => 'Block_154664421960c1245cee0fe9_14167305',
  ),
  'productdetails-question-on-item-form-privacy' => 
  array (
    0 => 'Block_72300932060c1245cee4911_01595253',
  ),
  'productdetails-question-on-item-form-submit' => 
  array (
    0 => 'Block_73618854060c1245cee6a09_84558862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('fehlendeAngaben', $_smarty_tpl->tpl_vars['fehlendeAngaben_fragezumprodukt']->value);?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['position']->value)) && $_smarty_tpl->tpl_vars['position']->value === 'popup') {?>
        <?php if (count($_smarty_tpl->tpl_vars['Artikelhinweise']->value) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57858843460c1245ce72670_53095633', 'productdetails-question-on-item-alert', $this->tplIndex);
?>

        <?php }?>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119961439260c1245ce75899_23205554', 'productdetails-question-on-item-form', $this->tplIndex);
?>

<?php
}
}
/* {/block 'productdetails-question-on-item'} */
}
