<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:55:46
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\Flipcard\Flipcard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c11cc2048d19_24772871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceddcb405984273975568c7eecc194dae87f8257' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\Flipcard\\Flipcard.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c11cc2048d19_24772871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['instance']->value->getUid());
$_smarty_tpl->_assignInScope('trigger', $_smarty_tpl->tpl_vars['instance']->value->getProperty('flip-trigger'));?>

<div id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationDataAttributeString();?>

     class="opc-Flipcard opc-Flipcard-<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('flip-dir');?>

            <?php echo $_smarty_tpl->tpl_vars['instance']->value->getAnimationClass();?>
 <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
"
     style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
    <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
        <a href="#" class="opc-Flipcard-flip-btn opc-no-disable">
            <span class="opc-Flipcard-label opc-Flipcard-label-front active"><?php echo __('flipcardFront');?>
</span>
            <i class="fas fa-exchange-alt"></i>
            <span class="opc-Flipcard-label opc-Flipcard-label-back"><?php echo __('flipcardBack');?>
</span>
        </a>
    <?php }?>
    <div class="opc-Flipcard-inner">
        <div class="opc-Flipcard-face opc-Flipcard-front <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>opc-area<?php }?>"
             <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>data-area-id="front"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml("front");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml("front");?>

            <?php }?>
        </div>
        <div class="opc-Flipcard-face opc-Flipcard-back <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>opc-area<?php }?>"
             <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>data-area-id="back"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaPreviewHtml("back");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['instance']->value->getSubareaFinalHtml("back");?>

            <?php }?>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        document.getElementById('<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
').updateFlipcardHeight = updateHeight_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
;

        function initFlipcard_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
()
        {
            var flipcard      = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
');
            var flipcardInner = flipcard.find('.opc-Flipcard-inner');

            <?php if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
                flipcard.find('.opc-Flipcard-flip-btn').on('click', flipCard);
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['trigger']->value === 'click') {?>
                    flipcard.on('click', flipCard);
                <?php } else { ?>
                    flipcard.on('mouseenter mouseleave', flipCard);
                <?php }?>
            <?php }?>

            setTimeout(() => updateHeight_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
());

            function flipCard(e)
            {
                <?php if ($_smarty_tpl->tpl_vars['trigger']->value === 'click') {?>
                    let isLink = e.target.tagName === 'A' && typeof e.target.href === 'string'
                        || e.target.tagName === 'BUTTON';

                    if(!isLink) {
                <?php }?>
                        flipcardInner.toggleClass('opc-Flipcard-flipped');
                        flipcard.find('.opc-Flipcard-label-front').toggleClass('active');
                        flipcard.find('.opc-Flipcard-label-back').toggleClass('active');
                        updateHeight_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
();
                        e.preventDefault();
                <?php if ($_smarty_tpl->tpl_vars['trigger']->value === 'click') {?>
                    }
                <?php }?>
            }
        }

        function updateHeight_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
()
        {
            let flipcard      = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
');
            let flipcardInner = flipcard.find('.opc-Flipcard-inner');
            let flipcardFaces = flipcardInner.find('.opc-Flipcard-face');
            let height        = 0;

            flipcardInner.css('height', 'auto');
            flipcardFaces.css('height', 'auto');

            flipcardInner.find('.opc-Flipcard-face').each((i, elm) => {
                height = Math.max(height, $(elm).height());
            });

            flipcardInner.height(height);
            flipcardFaces.height(height);
        }
    <?php echo '</script'; ?>
>

    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin1->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        $(initFlipcard_<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
);
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin1->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div><?php }
}
