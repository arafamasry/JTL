<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:41
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\comparelist_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d1c07db7_63048396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b537c7e0c2d00c3ee4e8f2678eb3a953b5ea58ee' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\comparelist_dropdown.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117d1c07db7_63048396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14315063160c117d1952838_09234737', 'snippets-comparelist-dropdown');
?>

<?php }
/* {block 'snippets-comparelist-dropdown-products-image'} */
class Block_10970786860c117d195b974_69286446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin57 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin57, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin57->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('lazy'=>true,'webp'=>true,'src'=>$_smarty_tpl->tpl_vars['product']->value->image->cURLMini,'srcset'=>((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['product']->value->image->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w",'sizes'=>"45px",'alt'=>$_smarty_tpl->tpl_vars['product']->value->cName,'class'=>"img-sm"),$_smarty_tpl ) );?>

                                                <?php $_block_repeat=false;
echo $_block_plugin57->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-image'} */
/* {block 'snippets-comparelist-dropdown-products-title'} */
class Block_13032479860c117d1968de7_99156656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_block_plugin59 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin59, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull));
$_block_repeat=true;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value->cName;
$_block_repeat=false;
echo $_block_plugin59->render(array('href'=>$_smarty_tpl->tpl_vars['product']->value->cURLFull), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                            <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-title'} */
/* {block 'snippets-comparelist-dropdown-products-remove'} */
class Block_121515666560c117d196c120_28799213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('section'=>"comparelist",'key'=>"removeFromCompareList"),$_smarty_tpl ) );
$_prefixVariable36=ob_get_clean();
ob_start();?>{<?php $_prefixVariable37=ob_get_clean();
ob_start();
echo htmlspecialchars('"a"', ENT_QUOTES, 'utf-8', true);
$_prefixVariable38=ob_get_clean();
ob_start();?>}<?php $_prefixVariable39=ob_get_clean();
$_block_plugin60 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin60, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)));
$_block_repeat=true;
echo $_block_plugin60->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <i class="fas fa-times"></i>
                                        <?php $_block_repeat=false;
echo $_block_plugin60->render(array('href'=>"?vlplo=".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel),'class'=>"remove",'title'=>$_prefixVariable36,'data'=>array("name"=>"Vergleichsliste.remove","toggle"=>"product-actions","value"=>$_prefixVariable37.$_prefixVariable38.":".((string)$_smarty_tpl->tpl_vars['product']->value->kArtikel).$_prefixVariable39)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-remove'} */
/* {block 'snippets-comparelist-dropdown-products-body'} */
class Block_206096329260c117d1958e38_63657621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <tr>
                                <td class="w-100-util">
                                    <?php $_block_plugin55 = isset($_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formrow'][0][0] : null;
if (!is_callable(array($_block_plugin55, 'render'))) {
throw new SmartyException('block tag \'formrow\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formrow', array('class'=>"align-items-center-util"));
$_block_repeat=true;
echo $_block_plugin55->render(array('class'=>"align-items-center-util"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php $_block_plugin56 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin56, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array('class'=>"col-auto"));
$_block_repeat=true;
echo $_block_plugin56->render(array('class'=>"col-auto"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10970786860c117d195b974_69286446', 'snippets-comparelist-dropdown-products-image', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin56->render(array('class'=>"col-auto"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php $_block_plugin58 = isset($_smarty_tpl->smarty->registered_plugins['block']['col'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['col'][0][0] : null;
if (!is_callable(array($_block_plugin58, 'render'))) {
throw new SmartyException('block tag \'col\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('col', array());
$_block_repeat=true;
echo $_block_plugin58->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13032479860c117d1968de7_99156656', 'snippets-comparelist-dropdown-products-title', $this->tplIndex);
?>

                                        <?php $_block_repeat=false;
echo $_block_plugin58->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin55->render(array('class'=>"align-items-center-util"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                                <td  class="text-right-util text-nowrap-util">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121515666560c117d196c120_28799213', 'snippets-comparelist-dropdown-products-remove', $this->tplIndex);
?>

                                </td>
                            </tr>
                        <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products-body'} */
/* {block 'snippets-comparelist-dropdown-products'} */
class Block_79071518860c117d19534e8_91633662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="comparelist-dropdown-table table-responsive max-h-sm lg-max-h">
            <?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr)) {?>
                <table class="table table-vertical-middle table-striped table-img">
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['Vergleichsliste']->oArtikel_arr, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206096329260c117d1958e38_63657621', 'snippets-comparelist-dropdown-products-body', $this->tplIndex);
?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-products'} */
/* {block 'snippets-comparelist-dropdown-more-than-one'} */
class Block_9836311360c117d1c03ff7_19762732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productNumberHint','section'=>'comparelist'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-more-than-one'} */
/* {block 'snippets-comparelist-dropdown-hint-to-compare'} */
class Block_148069033760c117d1c05857_25546317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'vergleichsliste.php'),$_smarty_tpl ) );
$_prefixVariable40=ob_get_clean();
$_block_plugin61 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin61, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40));
$_block_repeat=true;
echo $_block_plugin61->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'gotToCompare'),$_smarty_tpl ) );?>

                    <?php $_block_repeat=false;
echo $_block_plugin61->render(array('class'=>"comparelist-dropdown-table-body-button btn btn-block btn-primary btn-sm",'id'=>'nav-comparelist-goto','href'=>$_prefixVariable40), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint-to-compare'} */
/* {block 'snippets-comparelist-dropdown-hint'} */
class Block_93772946160c117d1bfcc98_57881165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="comparelist-dropdown-table-body dropdown-body">
            <?php if (!empty($_SESSION['Vergleichsliste']->oArtikel_arr) && count($_SESSION['Vergleichsliste']->oArtikel_arr) <= 1) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9836311360c117d1c03ff7_19762732', 'snippets-comparelist-dropdown-more-than-one', $this->tplIndex);
?>

            <?php } else { ?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148069033760c117d1c05857_25546317', 'snippets-comparelist-dropdown-hint-to-compare', $this->tplIndex);
?>

            <?php }?>
        </div>
    <?php
}
}
/* {/block 'snippets-comparelist-dropdown-hint'} */
/* {block 'snippets-comparelist-dropdown'} */
class Block_14315063160c117d1952838_09234737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-comparelist-dropdown' => 
  array (
    0 => 'Block_14315063160c117d1952838_09234737',
  ),
  'snippets-comparelist-dropdown-products' => 
  array (
    0 => 'Block_79071518860c117d19534e8_91633662',
  ),
  'snippets-comparelist-dropdown-products-body' => 
  array (
    0 => 'Block_206096329260c117d1958e38_63657621',
  ),
  'snippets-comparelist-dropdown-products-image' => 
  array (
    0 => 'Block_10970786860c117d195b974_69286446',
  ),
  'snippets-comparelist-dropdown-products-title' => 
  array (
    0 => 'Block_13032479860c117d1968de7_99156656',
  ),
  'snippets-comparelist-dropdown-products-remove' => 
  array (
    0 => 'Block_121515666560c117d196c120_28799213',
  ),
  'snippets-comparelist-dropdown-hint' => 
  array (
    0 => 'Block_93772946160c117d1bfcc98_57881165',
  ),
  'snippets-comparelist-dropdown-more-than-one' => 
  array (
    0 => 'Block_9836311360c117d1c03ff7_19762732',
  ),
  'snippets-comparelist-dropdown-hint-to-compare' => 
  array (
    0 => 'Block_148069033760c117d1c05857_25546317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79071518860c117d19534e8_91633662', 'snippets-comparelist-dropdown-products', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93772946160c117d1bfcc98_57881165', 'snippets-comparelist-dropdown-hint', $this->tplIndex);
?>

<?php
}
}
/* {/block 'snippets-comparelist-dropdown'} */
}
