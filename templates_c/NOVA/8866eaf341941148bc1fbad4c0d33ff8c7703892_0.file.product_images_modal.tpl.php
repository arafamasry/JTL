<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:05
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\product_images_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c12455e43407_11502531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8866eaf341941148bc1fbad4c0d33ff8c7703892' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\product_images_modal.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c12455e43407_11502531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29836117160c12455e355c6_63550993', 'productdetails-product-images-modal');
?>

<?php }
/* {block 'productdetails-product-images-modal-header'} */
class Block_38111395160c12455e35d06_29819062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <?php
}
}
/* {/block 'productdetails-product-images-modal-header'} */
/* {block 'productdetails-product-images-modal-image'} */
class Block_67546915560c12455e379d5_64757457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="square square-image">
                                <div class="inner">
                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->galleryJSON, ENT_QUOTES, 'utf-8', true);
$_prefixVariable5=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->cAltAttribut, ENT_QUOTES, 'utf-8', true),'class'=>"product-image",'fluid'=>true,'lazy'=>true,'webp'=>true,'src'=>((string)$_smarty_tpl->tpl_vars['Artikel']->value->Bilder[0]->cURLNormal),'srcset'=>((string)$_smarty_tpl->tpl_vars['image']->value->cURLMini)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_mini_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLKlein)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_klein_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLNormal)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_normal_breite'])."w,
                                                            ".((string)$_smarty_tpl->tpl_vars['image']->value->cURLGross)." ".((string)$_smarty_tpl->tpl_vars['Einstellungen']->value['bilder']['bilder_artikel_gross_breite'])."w",'sizes'=>"auto",'data'=>array("list"=>$_prefixVariable5,"index"=>$_smarty_tpl->tpl_vars['image']->index)),$_smarty_tpl ) );?>

                                </div>
                            </div>
                        <?php
}
}
/* {/block 'productdetails-product-images-modal-image'} */
/* {block 'productdetails-product-images-modal-body'} */
class Block_72160189160c12455e366e9_29898475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="modal-body">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->index++;
$__foreach_image_7_saved = $_smarty_tpl->tpl_vars['image'];
?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67546915560c12455e379d5_64757457', 'productdetails-product-images-modal-image', $this->tplIndex);
?>

                    <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php
}
}
/* {/block 'productdetails-product-images-modal-body'} */
/* {block 'productdetails-product-images-modal'} */
class Block_29836117160c12455e355c6_63550993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-product-images-modal' => 
  array (
    0 => 'Block_29836117160c12455e355c6_63550993',
  ),
  'productdetails-product-images-modal-header' => 
  array (
    0 => 'Block_38111395160c12455e35d06_29819062',
  ),
  'productdetails-product-images-modal-body' => 
  array (
    0 => 'Block_72160189160c12455e366e9_29898475',
  ),
  'productdetails-product-images-modal-image' => 
  array (
    0 => 'Block_67546915560c12455e379d5_64757457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal modal-fullview fade" id="productImagesModal" tabindex="-1" role="dialog" aria-labelledby="productImagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38111395160c12455e35d06_29819062', 'productdetails-product-images-modal-header', $this->tplIndex);
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72160189160c12455e366e9_29898475', 'productdetails-product-images-modal-body', $this->tplIndex);
?>

        </div>
    </div>
</div>
<?php
}
}
/* {/block 'productdetails-product-images-modal'} */
}
