<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:14:14
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\Banner\Banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e5f652ec83_82863785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4da437884e7d2daaf0fa85ff5d57206819af082' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\Banner\\Banner.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productdetails/price.tpl' => 1,
  ),
),false)) {
function content_60c1e5f652ec83_82863785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes(null,null,null,1,$_smarty_tpl->tpl_vars['portlet']->value->getPlaceholderImgUrl()));?>

<div style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
"
     class="banner <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
     <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>
>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'],'srcset'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcset'],'sizes'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcsizes'],'alt'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['alt'], ENT_QUOTES, 'utf-8', true),60 )),'title'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['title'],'fluid'=>true,'webp'=>true),$_smarty_tpl ) );?>

    <?php if (!$_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instance']->value->getProperty('zones'), 'zone');
$_smarty_tpl->tpl_vars['zone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zone']->value) {
$_smarty_tpl->tpl_vars['zone']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('product', null);?>
            <?php $_smarty_tpl->_assignInScope('title', '');?>
            <?php $_smarty_tpl->_assignInScope('url', '');?>
            <?php $_smarty_tpl->_assignInScope('desc', '');?>
            <?php if ($_smarty_tpl->tpl_vars['zone']->value['productId'] > 0) {?>
                <?php $_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['portlet']->value->getProduct($_smarty_tpl->tpl_vars['zone']->value['productId']));?>
                <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['product']->value->cName);?>
                <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['product']->value->cURLFull);?>
                <?php $_smarty_tpl->_assignInScope('desc', $_smarty_tpl->tpl_vars['product']->value->cKurzBeschreibung);?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['zone']->value['title'])) {?>
                <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['zone']->value['title']);?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['zone']->value['url'])) {?>
                <?php $_smarty_tpl->_assignInScope('url', $_smarty_tpl->tpl_vars['zone']->value['url']);?>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['zone']->value['desc'])) {?>
                <?php $_smarty_tpl->_assignInScope('desc', $_smarty_tpl->tpl_vars['zone']->value['desc']);?>
            <?php }?>
            <a class="area <?php if (empty($_smarty_tpl->tpl_vars['product']->value) && empty($_smarty_tpl->tpl_vars['desc']->value) && empty($_smarty_tpl->tpl_vars['title']->value)) {?>empty-popover<?php }?>
                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zone']->value['class'], ENT_QUOTES, 'utf-8', true);?>
"
               href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'utf-8', true);?>
"
               <?php if ($_smarty_tpl->tpl_vars['zone']->value['target']) {?>target="_blank"<?php }?>
               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'utf-8', true);?>
"
               style="left: <?php echo $_smarty_tpl->tpl_vars['zone']->value['left'];?>
%; top: <?php echo $_smarty_tpl->tpl_vars['zone']->value['top'];?>
%; width: <?php echo $_smarty_tpl->tpl_vars['zone']->value['width'];?>
%; height: <?php echo $_smarty_tpl->tpl_vars['zone']->value['height'];?>
%;">
                <div class="area-desc">
                    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value) > 0) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('src'=>$_smarty_tpl->tpl_vars['product']->value->cVorschaubildURL,'alt'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->cName, ENT_QUOTES, 'utf-8', true),60 )),'style'=>'display: block; margin-left: auto; margin-right: auto','fluid'=>true,'webp'=>true),$_smarty_tpl ) );?>

                        <?php $_smarty_tpl->_subTemplateRender('file:productdetails/price.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('Artikel'=>$_smarty_tpl->tpl_vars['product']->value,'tplscope'=>"box"), 0, true);
?>
                    <?php }?>
                    <?php if (strlen($_smarty_tpl->tpl_vars['desc']->value) > 0) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p>
                    <?php }?>
                </div>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div><?php }
}
