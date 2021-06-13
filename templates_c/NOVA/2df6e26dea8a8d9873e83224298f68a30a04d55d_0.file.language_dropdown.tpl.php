<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:38
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\language_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117ce61c5b3_98169568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df6e26dea8a8d9873e83224298f68a30a04d55d' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\language_dropdown.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117ce61c5b3_98169568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166596138860c117ce5bdd10_67287640', 'snippets-language-dropdown');
?>

<?php }
/* {block 'snippets-language-dropdown-text'} */
class Block_183930057560c117ce5c53b1_23089688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'snippets-language-dropdown-text'} */
/* {block 'snippets-language-dropdown-item'} */
class Block_161128970060c117ce616655_34302618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])));
$_block_repeat=true;
echo $_block_plugin28->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value->iso639, 'utf-8');?>

                    <?php $_block_repeat=false;
echo $_block_plugin28->render(array('href'=>((string)$_smarty_tpl->tpl_vars['language']->value->cURL),'class'=>"link-lang",'data'=>array("iso"=>$_smarty_tpl->tpl_vars['language']->value->cISO),'rel'=>"nofollow",'active'=>($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-language-dropdown-item'} */
/* {block 'snippets-language-dropdown'} */
class Block_166596138860c117ce5bdd10_67287640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-language-dropdown' => 
  array (
    0 => 'Block_166596138860c117ce5bdd10_67287640',
  ),
  'snippets-language-dropdown-text' => 
  array (
    0 => 'Block_183930057560c117ce5c53b1_23089688',
  ),
  'snippets-language-dropdown-item' => 
  array (
    0 => 'Block_161128970060c117ce616655_34302618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_SESSION['Sprachen'])) && count($_SESSION['Sprachen']) > 1) {?>
        <?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['dropdownClass']->value ?? null)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable7=ob_get_clean();
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
echo "
                ";
if ($_smarty_tpl->tpl_vars['language']->value->kSprache == $_SESSION['kSprache']) {
echo "
                    ";
echo "
                        ";
echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value->iso639, 'utf-8');
echo "
                    ";
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183930057560c117ce5c53b1_23089688', 'snippets-language-dropdown-text', $this->tplIndex);
echo "
                ";
}
echo "
            ";
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable8=ob_get_clean();
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('class'=>"language-dropdown ".$_prefixVariable7,'right'=>true,'text'=>"
            ".$_prefixVariable8));
$_block_repeat=true;
echo $_block_plugin27->render(array('class'=>"language-dropdown ".$_prefixVariable7,'right'=>true,'text'=>"
            ".$_prefixVariable8), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Sprachen'], 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161128970060c117ce616655_34302618', 'snippets-language-dropdown-item', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_block_repeat=false;
echo $_block_plugin27->render(array('class'=>"language-dropdown ".$_prefixVariable7,'right'=>true,'text'=>"
            ".$_prefixVariable8), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
}
}
/* {/block 'snippets-language-dropdown'} */
}
