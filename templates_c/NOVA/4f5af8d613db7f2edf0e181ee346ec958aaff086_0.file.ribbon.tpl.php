<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:26:33
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\ribbon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c123f90a8168_81284186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5af8d613db7f2edf0e181ee346ec958aaff086' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\ribbon.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c123f90a8168_81284186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128007127960c123f90969b8_66589588', 'snippets-ribbon');
?>

<?php }
/* {block 'snippets-ribbon-content'} */
class Block_89099907860c123f90a10c4_73641966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>('ribbon-').($_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild->getType()),'section'=>'productOverview','printf'=>((($tmp = $_smarty_tpl->tpl_vars['sale']->value ?? null)===null||$tmp==='' ? '' : $tmp)).('%')),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'snippets-ribbon-content'} */
/* {block 'snippets-ribbon-main'} */
class Block_6805606060c123f909b535_47431149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="ribbon
            ribbon-<?php echo $_smarty_tpl->tpl_vars['Artikel']->value->oSuchspecialBild->getType();?>
 productbox-ribbon">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89099907860c123f90a10c4_73641966', 'snippets-ribbon-content', $this->tplIndex);
?>

        </div>
    <?php
}
}
/* {/block 'snippets-ribbon-main'} */
/* {block 'snippets-ribbon'} */
class Block_128007127960c123f90969b8_66589588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-ribbon' => 
  array (
    0 => 'Block_128007127960c123f90969b8_66589588',
  ),
  'snippets-ribbon-main' => 
  array (
    0 => 'Block_6805606060c123f909b535_47431149',
  ),
  'snippets-ribbon-content' => 
  array (
    0 => 'Block_89099907860c123f90a10c4_73641966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['Artikel']->value->Preise->Sonderpreis_aktiv)) {?>
        <?php $_smarty_tpl->_assignInScope('sale', $_smarty_tpl->tpl_vars['Artikel']->value->Preise->discountPercentage);?>
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6805606060c123f909b535_47431149', 'snippets-ribbon-main', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-ribbon'} */
}
