<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:40
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\layout\header_shop_nav_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d09d2d24_45146443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4441fc956fc09d8080619925079f6347dca08fe' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\layout\\header_shop_nav_account.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c117d09d2d24_45146443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5292038360c117d098bff9_77758040', 'layout-header-shop-nav-account');
?>

<?php }
/* {block 'layout-header-nav-account-form-email'} */
class Block_107879182560c117d09975a6_34187604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'emailadress'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
$_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"email_quick",'label'=>$_prefixVariable19));
$_block_repeat=true;
echo $_block_plugin42->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable19), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"email",'name'=>"email",'id'=>"email_quick",'size-class'=>"sm",'placeholder'=>" ",'required'=>true,'autocomplete'=>"email"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin42->render(array('label-for'=>"email_quick",'label'=>$_prefixVariable19), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-email'} */
/* {block 'layout-header-nav-account-form-password'} */
class Block_123297016460c117d099da27_00639160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'password'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('label-for'=>"password_quick",'label'=>$_prefixVariable20,'class'=>"account-icon-dropdown-pass"));
$_block_repeat=true;
echo $_block_plugin43->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable20,'class'=>"account-icon-dropdown-pass"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"password",'name'=>"passwort",'id'=>"password_quick",'size-class'=>"sm",'required'=>true,'placeholder'=>" ",'autocomplete'=>"current-password"),$_smarty_tpl ) );?>

                                    <?php $_block_repeat=false;
echo $_block_plugin43->render(array('label-for'=>"password_quick",'label'=>$_prefixVariable20,'class'=>"account-icon-dropdown-pass"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-password'} */
/* {block 'layout-header-nav-account-form-captcha'} */
class Block_50463499960c117d09a4394_68524745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['showLoginCaptcha']->value)) && $_smarty_tpl->tpl_vars['showLoginCaptcha']->value) {?>
                                        <?php $_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array('class'=>"simple-captcha-wrapper"));
$_block_repeat=true;
echo $_block_plugin44->render(array('class'=>"simple-captcha-wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['captchaMarkup'][0], array( array('getBody'=>true),$_smarty_tpl ) );?>

                                        <?php $_block_repeat=false;
echo $_block_plugin44->render(array('class'=>"simple-captcha-wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php }?>
                                <?php
}
}
/* {/block 'layout-header-nav-account-form-captcha'} */
/* {block 'layout-header-shop-nav-account-form-submit'} */
class Block_178798881060c117d09a9221_77856297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['formgroup'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'render'))) {
throw new SmartyException('block tag \'formgroup\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('formgroup', array());
$_block_repeat=true;
echo $_block_plugin45->render(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"login",'value'=>"1"),$_smarty_tpl ) );?>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['oRedirect']->value->cURL)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oRedirect']->value->oParameter_arr, 'oParameter');
$_smarty_tpl->tpl_vars['oParameter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oParameter']->value) {
$_smarty_tpl->tpl_vars['oParameter']->do_else = false;
?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>$_smarty_tpl->tpl_vars['oParameter']->value->Name,'value'=>$_smarty_tpl->tpl_vars['oParameter']->value->Wert),$_smarty_tpl ) );?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"r",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->nRedirect),$_smarty_tpl ) );?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['input'][0], array( array('type'=>"hidden",'name'=>"cURL",'value'=>$_smarty_tpl->tpl_vars['oRedirect']->value->cURL),$_smarty_tpl ) );?>

                                        <?php }?>
                                        <?php $_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['button'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['button'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'render'))) {
throw new SmartyException('block tag \'button\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('button', array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"));
$_block_repeat=true;
echo $_block_plugin46->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'login'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin46->render(array('type'=>"submit",'size'=>"sm",'id'=>"submit-btn",'block'=>true,'variant'=>"primary"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_block_repeat=false;
echo $_block_plugin45->render(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-submit'} */
/* {block 'layout-header-shop-nav-account-form-content'} */
class Block_120505515860c117d0996b19_06791737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <fieldset id="quick-login">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107879182560c117d09975a6_34187604', 'layout-header-nav-account-form-email', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123297016460c117d099da27_00639160', 'layout-header-nav-account-form-password', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50463499960c117d09a4394_68524745', 'layout-header-nav-account-form-captcha', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178798881060c117d09a9221_77856297', 'layout-header-shop-nav-account-form-submit', $this->tplIndex);
?>

                            </fieldset>
                        <?php
}
}
/* {/block 'layout-header-shop-nav-account-form-content'} */
/* {block 'layout-header-nav-account-link-forgot-password'} */
class Block_108586425060c117d09bb5d8_52595862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'pass.php'),$_smarty_tpl ) );
$_prefixVariable21=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );
$_prefixVariable22=ob_get_clean();
$_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable21,'rel'=>"nofollow",'title'=>$_prefixVariable22));
$_block_repeat=true;
echo $_block_plugin47->render(array('href'=>$_prefixVariable21,'rel'=>"nofollow",'title'=>$_prefixVariable22), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'forgotPassword'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin47->render(array('href'=>$_prefixVariable21,'rel'=>"nofollow",'title'=>$_prefixVariable22), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php
}
}
/* {/block 'layout-header-nav-account-link-forgot-password'} */
/* {block 'layout-header-nav-account-link-register'} */
class Block_4779530660c117d09c03a6_09307401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="dropdown-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'newHere'),$_smarty_tpl ) );?>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'registrieren.php'),$_smarty_tpl ) );
$_prefixVariable23=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );
$_prefixVariable24=ob_get_clean();
$_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['link'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['link'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'render'))) {
throw new SmartyException('block tag \'link\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('link', array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24));
$_block_repeat=true;
echo $_block_plugin48->render(array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'registerNow'),$_smarty_tpl ) );?>

                        <?php $_block_repeat=false;
echo $_block_plugin48->render(array('href'=>$_prefixVariable23,'rel'=>"nofollow",'title'=>$_prefixVariable24), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
}
/* {/block 'layout-header-nav-account-link-register'} */
/* {block 'layout-header-shop-nav-account-logged-out'} */
class Block_179931662660c117d09933a9_43562867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="dropdown-body lg-min-w-lg">
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable18=ob_get_clean();
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'render'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('action'=>$_prefixVariable18,'method'=>"post",'class'=>"jtl-validate",'slide'=>true));
$_block_repeat=true;
echo $_block_plugin41->render(array('action'=>$_prefixVariable18,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120505515860c117d0996b19_06791737', 'layout-header-shop-nav-account-form-content', $this->tplIndex);
?>

                    <?php $_block_repeat=false;
echo $_block_plugin41->render(array('action'=>$_prefixVariable18,'method'=>"post",'class'=>"jtl-validate",'slide'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108586425060c117d09bb5d8_52595862', 'layout-header-nav-account-link-forgot-password', $this->tplIndex);
?>

                </div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4779530660c117d09c03a6_09307401', 'layout-header-nav-account-link-register', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-out'} */
/* {block 'layout-header-shop-nav-account-logged-in'} */
class Block_114683710460c117d09c3192_61111218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable25=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable26=ob_get_clean();
$_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26));
$_block_repeat=true;
echo $_block_plugin49->render(array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin49->render(array('href'=>$_prefixVariable25,'rel'=>"nofollow",'title'=>$_prefixVariable26), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable27=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable28=ob_get_clean();
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable27."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable28));
$_block_repeat=true;
echo $_block_plugin50->render(array('href'=>$_prefixVariable27."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable28), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myOrders'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin50->render(array('href'=>$_prefixVariable27."?bestellungen=1",'rel'=>"nofollow",'title'=>$_prefixVariable28), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable29=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable30=ob_get_clean();
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable29."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable30));
$_block_repeat=true;
echo $_block_plugin51->render(array('href'=>$_prefixVariable29."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable30), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myPersonalData'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin51->render(array('href'=>$_prefixVariable29."?editRechnungsadresse=1",'rel'=>"nofollow",'title'=>$_prefixVariable30), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable31=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable32=ob_get_clean();
$_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable31."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable32));
$_block_repeat=true;
echo $_block_plugin52->render(array('href'=>$_prefixVariable31."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable32), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myWishlists'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin52->render(array('href'=>$_prefixVariable31."#my-wishlists",'rel'=>"nofollow",'title'=>$_prefixVariable32), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dropdowndivider'][0], array( array(),$_smarty_tpl ) );?>

                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_static_route'][0], array( array('id'=>'jtl.php','secure'=>true),$_smarty_tpl ) );
$_prefixVariable33=ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );
$_prefixVariable34=ob_get_clean();
$_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['dropdownitem'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'render'))) {
throw new SmartyException('block tag \'dropdownitem\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('dropdownitem', array('href'=>$_prefixVariable33."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable34,'class'=>"account-icon-dropdown-logout"));
$_block_repeat=true;
echo $_block_plugin53->render(array('href'=>$_prefixVariable33."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable34,'class'=>"account-icon-dropdown-logout"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'logOut'),$_smarty_tpl ) );?>

                <?php $_block_repeat=false;
echo $_block_plugin53->render(array('href'=>$_prefixVariable33."?logout=1",'rel'=>"nofollow",'title'=>$_prefixVariable34,'class'=>"account-icon-dropdown-logout"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
}
/* {/block 'layout-header-shop-nav-account-logged-in'} */
/* {block 'layout-header-shop-nav-account'} */
class Block_5292038360c117d098bff9_77758040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout-header-shop-nav-account' => 
  array (
    0 => 'Block_5292038360c117d098bff9_77758040',
  ),
  'layout-header-shop-nav-account-logged-out' => 
  array (
    0 => 'Block_179931662660c117d09933a9_43562867',
  ),
  'layout-header-shop-nav-account-form-content' => 
  array (
    0 => 'Block_120505515860c117d0996b19_06791737',
  ),
  'layout-header-nav-account-form-email' => 
  array (
    0 => 'Block_107879182560c117d09975a6_34187604',
  ),
  'layout-header-nav-account-form-password' => 
  array (
    0 => 'Block_123297016460c117d099da27_00639160',
  ),
  'layout-header-nav-account-form-captcha' => 
  array (
    0 => 'Block_50463499960c117d09a4394_68524745',
  ),
  'layout-header-shop-nav-account-form-submit' => 
  array (
    0 => 'Block_178798881060c117d09a9221_77856297',
  ),
  'layout-header-nav-account-link-forgot-password' => 
  array (
    0 => 'Block_108586425060c117d09bb5d8_52595862',
  ),
  'layout-header-nav-account-link-register' => 
  array (
    0 => 'Block_4779530660c117d09c03a6_09307401',
  ),
  'layout-header-shop-nav-account-logged-in' => 
  array (
    0 => 'Block_114683710460c117d09c3192_61111218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'myAccount'),$_smarty_tpl ) );
$_prefixVariable17 = ob_get_clean();
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['navitemdropdown'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'render'))) {
throw new SmartyException('block tag \'navitemdropdown\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('navitemdropdown', array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable17),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"));
$_block_repeat=true;
echo $_block_plugin40->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable17),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (empty($_SESSION['Kunde']->kKunde)) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179931662660c117d09933a9_43562867', 'layout-header-shop-nav-account-logged-out', $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114683710460c117d09c3192_61111218', 'layout-header-shop-nav-account-logged-in', $this->tplIndex);
?>

        <?php }?>
    <?php $_block_repeat=false;
echo $_block_plugin40->render(array('tag'=>"li",'aria'=>array('expanded'=>'false'),'router-aria'=>array('label'=>$_prefixVariable17),'no-caret'=>true,'right'=>true,'text'=>'<span class="fas fa-user"></span>','class'=>"account-icon-dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'layout-header-shop-nav-account'} */
}
