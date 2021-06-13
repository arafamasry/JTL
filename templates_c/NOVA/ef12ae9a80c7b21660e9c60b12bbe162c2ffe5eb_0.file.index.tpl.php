<?php
/* Smarty version 3.1.39, created on 2021-06-09 21:34:49
  from 'C:\xampp-7\htdocs\jtl\templates\NOVA\selectionwizard\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c117d92ba465_13178009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef12ae9a80c7b21660e9c60b12bbe162c2ffe5eb' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\templates\\NOVA\\selectionwizard\\index.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:selectionwizard/form.tpl' => 1,
  ),
),false)) {
function content_60c117d92ba465_13178009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73693407660c117d929f6d2_01769332', 'selectionwizard-index');
?>

<?php }
/* {block 'selectionwizard-index-script'} */
class Block_169986689560c117d92a28b2_97453043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_block_plugin140 = isset($_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['inline_script'][0][0] : null;
if (!is_callable(array($_block_plugin140, 'inlineScript'))) {
throw new SmartyException('block tag \'inline_script\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo $_block_plugin140->inlineScript(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
                var nSelection_arr = [<?php echo implode(',',$_smarty_tpl->tpl_vars['AWA']->value->getSelections());?>
];

                function setSelectionWizardAnswerJS(kMerkmalWert)
                {
                    kMerkmalWert = parseInt(kMerkmalWert);
                    nSelection_arr.push(kMerkmalWert);

                    $.evo.io().call(
                        'setSelectionWizardAnswers',
                        [
                            '<?php echo $_smarty_tpl->tpl_vars['AWA']->value->getLocationKeyName();?>
',
                            <?php echo $_smarty_tpl->tpl_vars['AWA']->value->getLocationKeyId();?>
,
                            <?php echo $_SESSION['kSprache'];?>
,
                            nSelection_arr
                        ],
                        { },
                        function (error, data) {
                            resetSelectionWizardListeners();
                        }
                    );

                    return false;
                }

                function resetSelectionWizardAnswerJS(nFrage)
                {
                    nFrage = parseInt(nFrage);
                    nSelection_arr.splice(nFrage);

                    $.evo.io().call(
                        'setSelectionWizardAnswers',
                        [
                            '<?php echo $_smarty_tpl->tpl_vars['AWA']->value->getLocationKeyName();?>
',
                            <?php echo $_smarty_tpl->tpl_vars['AWA']->value->getLocationKeyId();?>
,
                            <?php echo $_SESSION['kSprache'];?>
,
                            nSelection_arr
                        ],
                        { },
                        function (error, data) {
                            resetSelectionWizardListeners();
                        }
                    );

                    return false;
                }

                function resetSelectionWizardListeners()
                {
                    $("[id^=kMerkmalWert]").on('change', function() {
                        return setSelectionWizardAnswerJS($(this).val());
                    } );
                    $(".question-edit").on('click', function() {
                        return resetSelectionWizardAnswerJS($(this).data('value'));
                    } );
                    $(".selection-wizard-answer").on('click', function() {
                        return setSelectionWizardAnswerJS($(this).data('value'));
                    } );
                }

                $(window).on("load", function() {
                    resetSelectionWizardListeners();
                } );
            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin140->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'selectionwizard-index-script'} */
/* {block 'selectionwizard-index-include-form'} */
class Block_87395562860c117d92b1300_02695473 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['AWA']->value)) && !empty($_smarty_tpl->tpl_vars['AWA']->value->getQuestions())) {?>
                <div id="selectionwizard" class="selection-wizard-wrapper <?php if ((($tmp = $_smarty_tpl->tpl_vars['container']->value ?? null)===null||$tmp==='' ? true : $tmp)) {?>container <?php }?>">
                    <?php $_smarty_tpl->_subTemplateRender('file:selectionwizard/form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('AWA'=>$_smarty_tpl->tpl_vars['AWA']->value), 0, false);
?>
                </div>
            <?php }?>
        <?php
}
}
/* {/block 'selectionwizard-index-include-form'} */
/* {block 'selectionwizard-index'} */
class Block_73693407660c117d929f6d2_01769332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'selectionwizard-index' => 
  array (
    0 => 'Block_73693407660c117d929f6d2_01769332',
  ),
  'selectionwizard-index-script' => 
  array (
    0 => 'Block_169986689560c117d92a28b2_97453043',
  ),
  'selectionwizard-index-include-form' => 
  array (
    0 => 'Block_87395562860c117d92b1300_02695473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['AWA']->value))) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['opcMountPoint'][0], array( array('id'=>'opc_before_selection_wizard','inContainer'=>false),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169986689560c117d92a28b2_97453043', 'selectionwizard-index-script', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87395562860c117d92b1300_02695473', 'selectionwizard-index-include-form', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'selectionwizard-index'} */
}
