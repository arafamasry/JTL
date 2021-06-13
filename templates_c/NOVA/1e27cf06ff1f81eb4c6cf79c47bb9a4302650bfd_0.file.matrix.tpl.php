<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:09
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\matrix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c124592ab705_27490373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e27cf06ff1f81eb4c6cf79c47bb9a4302650bfd' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\matrix.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/matrix_list.tpl' => 1,
    'file:productdetails/matrix_classic.tpl' => 1,
  ),
),false)) {
function content_60c124592ab705_27490373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169128407360c124592a58b2_16407448', 'productdetails-matrix');
?>

<?php }
/* {block 'productdetails-index-include-matrix-list'} */
class Block_210125036360c124592a9327_89929806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="matrix-list-wrapper">
                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/matrix_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                <?php
}
}
/* {/block 'productdetails-index-include-matrix-list'} */
/* {block 'productdetails-index-include-matrix-classic'} */
class Block_128121177060c124592aa385_74451499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="matrix-classic-wrapper">
                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/matrix_classic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                <?php
}
}
/* {/block 'productdetails-index-include-matrix-classic'} */
/* {block 'productdetails-matrix'} */
class Block_169128407360c124592a58b2_16407448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-matrix' => 
  array (
    0 => 'Block_169128407360c124592a58b2_16407448',
  ),
  'productdetails-index-include-matrix-list' => 
  array (
    0 => 'Block_210125036360c124592a9327_89929806',
  ),
  'productdetails-index-include-matrix-classic' => 
  array (
    0 => 'Block_128121177060c124592aa385_74451499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showMatrix']->value) {?>
        <div class="product-matrix clearfix">
            <div class="product-matrix-title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productMatrixTitle','section'=>'productDetails'),$_smarty_tpl ) );?>

            </div>
            <p class="product-matrix-desc">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productMatrixDesc','section'=>'productDetails'),$_smarty_tpl ) );?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['Einstellungen']->value['artikeldetails']['artikeldetails_warenkorbmatrix_anzeigeformat'] === 'L' && $_smarty_tpl->tpl_vars['Artikel']->value->nIstVater == 1 && count($_smarty_tpl->tpl_vars['Artikel']->value->oVariationKombiKinderAssoc_arr) > 0) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210125036360c124592a9327_89929806', 'productdetails-index-include-matrix-list', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128121177060c124592aa385_74451499', 'productdetails-index-include-matrix-classic', $this->tplIndex);
?>

            <?php }?>
         </div>
    <?php }
}
}
/* {/block 'productdetails-matrix'} */
}
