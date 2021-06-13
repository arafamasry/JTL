<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:28:14
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\snippets\simple_captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1245ecad548_73919057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56ec0bbd74be085dba1de8f51176262c80ec927' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\snippets\\simple_captcha.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1245ecad548_73919057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182042735460c1245ecaa904_67931399', 'snippets-simple-captcha');
?>

<?php }
/* {block 'snippets-simple-captcha-msg'} */
class Block_193868541960c1245ecac3a2_05274222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="simple-captcha form-error-msg">
                <i class="fas fa-exclamation-triangle"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'invalidToken'),$_smarty_tpl ) );?>

            </div>
        <?php
}
}
/* {/block 'snippets-simple-captcha-msg'} */
/* {block 'snippets-simple-captcha'} */
class Block_182042735460c1245ecaa904_67931399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'snippets-simple-captcha' => 
  array (
    0 => 'Block_182042735460c1245ecaa904_67931399',
  ),
  'snippets-simple-captcha-msg' => 
  array (
    0 => 'Block_193868541960c1245ecac3a2_05274222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['captchaToken']->value,'value'=>$_smarty_tpl->tpl_vars['captchaCode']->value),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['bAnti_spam_failed']->value)) && $_smarty_tpl->tpl_vars['bAnti_spam_failed']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193868541960c1245ecac3a2_05274222', 'snippets-simple-captcha-msg', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'snippets-simple-captcha'} */
}
