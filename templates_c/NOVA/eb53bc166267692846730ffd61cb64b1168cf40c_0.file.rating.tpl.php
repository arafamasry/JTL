<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:26:33
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\productdetails\rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c123f9c077b7_43722048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb53bc166267692846730ffd61cb64b1168cf40c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\productdetails\\rating.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c123f9c077b7_43722048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96645762860c123f9bf9a64_47825321', 'productdetails-rating');
?>

<?php }
/* {block 'productdetails-rating-main'} */
class Block_160728799960c123f9bfca95_00957001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['link']->value))) {?>
            <a class="rating" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
#tab-votes" title="<?php echo $_smarty_tpl->tpl_vars['ratingLabelText']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
/5" aria-label=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'Votes'),$_smarty_tpl ) );?>
>
        <?php } else { ?>
            <span class="rating" title="<?php echo $_smarty_tpl->tpl_vars['ratingLabelText']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['stars']->value;?>
/5">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['stars']->value >= 5) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php } elseif ($_smarty_tpl->tpl_vars['stars']->value >= 4) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 4) {?><i class="fas fa-star-half-alt"></i><?php } else { ?><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 3) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 3) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 2) {?><i class="fas fa-star"></i><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 2) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star-"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value >= 1) {?><i class="fas fa-star"></i><?php if ($_smarty_tpl->tpl_vars['stars']->value > 1) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php } else { ?><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }
} elseif ($_smarty_tpl->tpl_vars['stars']->value > 0) {?><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['link']->value))) {?>
            </a>
        <?php } else { ?>
            </span>
        <?php }?>
        <?php
}
}
/* {/block 'productdetails-rating-main'} */
/* {block 'productdetails-rating'} */
class Block_96645762860c123f9bf9a64_47825321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productdetails-rating' => 
  array (
    0 => 'Block_96645762860c123f9bf9a64_47825321',
  ),
  'productdetails-rating-main' => 
  array (
    0 => 'Block_160728799960c123f9bfca95_00957001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['stars']->value > 0) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['total']->value)) && $_smarty_tpl->tpl_vars['total']->value > 1) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'averageProductRating','section'=>'product rating','assign'=>'ratingLabelText'),$_smarty_tpl ) );?>

        <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'productRating','section'=>'product rating','assign'=>'ratingLabelText'),$_smarty_tpl ) );?>

        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160728799960c123f9bfca95_00957001', 'productdetails-rating-main', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'productdetails-rating'} */
}
