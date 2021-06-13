<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:14
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245e8e5e45_58674490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec38bd95ee0bcf47713f99e10d88a9e405aca240' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\checkbox.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1245e8e5e45_58674490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113364775460c1245e8d1920_78888197', 'snippets-checkbox');
?>

<?php }
/* {block 'snippets-checkbox-checkbox-name'} */
class Block_154536133760c1245e8de0d8_62154613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                               <?php echo $_smarty_tpl->tpl_vars['cb']->value->cName;?>

                            <?php
}
}
/* {/block 'snippets-checkbox-checkbox-name'} */
/* {block 'snippets-checkbox-checkbox-more-link'} */
class Block_180122050260c1245e8df930_42454575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <span class='moreinfo'>
                                        (<?php $_block_plugin167 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin167, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['cb']->value->cLinkURL,'class'=>'popup checkbox-popup'));
$_block_repeat=true;
echo $_block_plugin167->render(array('href'=>$_smarty_tpl->tpl_vars['cb']->value->cLinkURL,'class'=>'popup checkbox-popup'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'read','section'=>'account data'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin167->render(array('href'=>$_smarty_tpl->tpl_vars['cb']->value->cLinkURL,'class'=>'popup checkbox-popup'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>)
                                    </span>
                                <?php
}
}
/* {/block 'snippets-checkbox-checkbox-more-link'} */
/* {block 'snippets-checkbox-checkbox-optional'} */
class Block_95529109960c1245e8e1ea1_17623374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <span class='optional'> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'optional'),$_smarty_tpl ) );?>
</span>
                                <?php
}
}
/* {/block 'snippets-checkbox-checkbox-optional'} */
/* {block 'snippets-checkbox-checkbox'} */
class Block_180127412460c1245e8d8759_14713568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
if ((isset($_smarty_tpl->tpl_vars['cIDPrefix']->value))) {
echo (string)$_smarty_tpl->tpl_vars['cIDPrefix']->value;
echo "_";
}
$_prefixVariable77=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['cb']->value->cID;
$_prefixVariable78 = ob_get_clean();
$_block_plugin166 = isset($_smarty_tpl->smarty->registered_plugins['block']['checkbox'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['checkbox'][0][0] : null;
if (!is_callable(array($_block_plugin166, 'render'))) {
throw new SmartyException('block tag \'checkbox\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('checkbox', array('id'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['cb']->value->cID),'name'=>$_prefixVariable78,'required'=>$_smarty_tpl->tpl_vars['cb']->value->nPflicht === 1,'checked'=>$_smarty_tpl->tpl_vars['cb']->value->isActive));
$_block_repeat=true;
echo $_block_plugin166->render(array('id'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['cb']->value->cID),'name'=>$_prefixVariable78,'required'=>$_smarty_tpl->tpl_vars['cb']->value->nPflicht === 1,'checked'=>$_smarty_tpl->tpl_vars['cb']->value->isActive), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154536133760c1245e8de0d8_62154613', 'snippets-checkbox-checkbox-name', $this->tplIndex);
?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['cb']->value->cLinkURL)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180122050260c1245e8df930_42454575', 'snippets-checkbox-checkbox-more-link', $this->tplIndex);
?>

                            <?php }?>
                            <?php if (empty($_smarty_tpl->tpl_vars['cb']->value->nPflicht)) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95529109960c1245e8e1ea1_17623374', 'snippets-checkbox-checkbox-optional', $this->tplIndex);
?>

                            <?php }?>
                        <?php $_block_repeat=false;
echo $_block_plugin166->render(array('id'=>$_prefixVariable77.((string)$_smarty_tpl->tpl_vars['cb']->value->cID),'name'=>$_prefixVariable78,'required'=>$_smarty_tpl->tpl_vars['cb']->value->nPflicht === 1,'checked'=>$_smarty_tpl->tpl_vars['cb']->value->isActive), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'snippets-checkbox-checkbox'} */
/* {block 'snippets-checkbox-checkboxes'} */
class Block_106712340760c1245e8d5339_33938129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkboxes']->value, 'cb');
$_smarty_tpl->tpl_vars['cb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cb']->value) {
$_smarty_tpl->tpl_vars['cb']->do_else = false;
?>
                <?php ob_start();
if (!empty($_smarty_tpl->tpl_vars['cb']->value->cBeschreibung)) {
echo (string)$_smarty_tpl->tpl_vars['cb']->value->cBeschreibung;
}
$_prefixVariable76=ob_get_clean();
$_block_plugin165 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin165, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"snippets-checkbox-wrapper exclude-from-label-slide",'label-for'=>" ",'description'=>$_prefixVariable76));
$_block_repeat=true;
echo $_block_plugin165->render(array('class'=>"snippets-checkbox-wrapper exclude-from-label-slide",'label-for'=>" ",'description'=>$_prefixVariable76), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180127412460c1245e8d8759_14713568', 'snippets-checkbox-checkbox', $this->tplIndex);
?>

                <?php $_block_repeat=false;
echo $_block_plugin165->render(array('class'=>"snippets-checkbox-wrapper exclude-from-label-slide",'label-for'=>" ",'description'=>$_prefixVariable76), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'snippets-checkbox-checkboxes'} */
/* {block 'snippets-checkbox'} */
class Block_113364775460c1245e8d1920_78888197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-checkbox' => 
  array (
    0 => 'Block_113364775460c1245e8d1920_78888197',
  ),
  'snippets-checkbox-checkboxes' => 
  array (
    0 => 'Block_106712340760c1245e8d5339_33938129',
  ),
  'snippets-checkbox-checkbox' => 
  array (
    0 => 'Block_180127412460c1245e8d8759_14713568',
  ),
  'snippets-checkbox-checkbox-name' => 
  array (
    0 => 'Block_154536133760c1245e8de0d8_62154613',
  ),
  'snippets-checkbox-checkbox-more-link' => 
  array (
    0 => 'Block_180122050260c1245e8df930_42454575',
  ),
  'snippets-checkbox-checkbox-optional' => 
  array (
    0 => 'Block_95529109960c1245e8e1ea1_17623374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (empty($_smarty_tpl->tpl_vars['cPost_arr']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('cPost_arr', null);?>
    <?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['cPost_arr']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('cPost_arr', $_POST);?>
    <?php }?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getCheckBoxForLocation'][0], array( array('nAnzeigeOrt'=>$_smarty_tpl->tpl_vars['nAnzeigeOrt']->value,'cPlausi_arr'=>$_smarty_tpl->tpl_vars['cPlausi_arr']->value,'cPost_arr'=>$_smarty_tpl->tpl_vars['cPost_arr']->value,'assign'=>'checkboxes'),$_smarty_tpl ) );?>

    <?php if (!empty($_smarty_tpl->tpl_vars['checkboxes']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106712340760c1245e8d5339_33938129', 'snippets-checkbox-checkboxes', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-checkbox'} */
}
