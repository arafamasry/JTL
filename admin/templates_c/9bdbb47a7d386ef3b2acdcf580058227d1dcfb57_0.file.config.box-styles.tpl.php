<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:10:49
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.box-styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c120493d6939_05790724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bdbb47a7d386ef3b2acdcf580058227d1dcfb57' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.box-styles.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./config.select.tpl' => 1,
    'file:./config.color.tpl' => 1,
  ),
),false)) {
function content_60c120493d6939_05790724 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box-styles row">
    <div class="box-config col-8">
        <div class="outer-box">
            <div class="top-row">
                <div>
                    <?php echo __('margin');?>
 (px)
                </div>
                <label class="mid-top-col">
                    <input id="margin-top-input" class="form-control" tabindex="1"
                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[margin-top]" value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['margin-top'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                </label>
                <div class="one-third"></div>
            </div>
            <div class="mid-row">
                <label>
                    <input id="margin-left-input" class="form-control" tabindex="4"
                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[margin-left]" value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['margin-left'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                </label>
                <div class="border-box">
                    <div class="top-row">
                        <div>
                            <?php echo __('border');?>
 (px)
                        </div>
                        <label class="mid-top-col">
                            <input id="border-top-input" class="form-control" tabindex="5"
                                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[border-top-width]"
                                   value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-top-width'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                        </label>
                        <div class="one-third"></div>
                    </div>
                    <div class="mid-row">
                        <label>
                            <input id="border-left-input" class="form-control" tabindex="8"
                                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[border-left-width]"
                                   value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-left-width'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                        </label>
                        <div class="padding-box">
                            <div class="top-row">
                                <div>
                                    <?php echo __('padding');?>
 (px)
                                </div>
                                <label class="mid-top-col">
                                    <input id="padding-top-input" class="form-control" tabindex="9"
                                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[padding-top]"
                                           value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['padding-top'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                                </label>
                                <div class="one-third"></div>
                            </div>
                            <div class="mid-row">
                                <label>
                                    <input id="padding-left-input" class="form-control" tabindex="12"
                                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[padding-left]"
                                           value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['padding-left'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                                </label>
                                <div class="content-box"></div>
                                <label>
                                    <input id="padding-right-input" class="form-control" tabindex="10"
                                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[padding-right]"
                                           value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['padding-right'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                                </label>
                            </div>
                            <label class="bottom-row">
                                <input id="padding-bottom-input" class="form-control" tabindex="11"
                                       name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[padding-bottom]"
                                       value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['padding-bottom'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                            </label>
                        </div>
                        <label>
                            <input id="border-right-input" class="form-control" tabindex="6"
                                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[border-right-width]"
                                   value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-right-width'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                        </label>
                    </div>
                    <label class="bottom-row">
                        <input id="border-bottom-input" class="form-control" tabindex="7"
                               name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[border-bottom-width]"
                               value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-bottom-width'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                    </label>
                </div>
                <label>
                    <input id="margin-right-input" class="form-control" tabindex="2"
                           name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[margin-right]"
                           value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['margin-right'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
                </label>
            </div>
            <label class="bottom-row">
                <input id="margin-bottom-input" class="form-control" tabindex="3"
                       name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[margin-bottom]"
                       value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['margin-bottom'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
            </label>
        </div>
    </div>
    <div class="border-config col-4">
        <?php $_smarty_tpl->_subTemplateRender("file:./config.select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('propname'=>((string)$_smarty_tpl->tpl_vars['propname']->value)."[border-style]",'propid'=>((string)$_smarty_tpl->tpl_vars['propname']->value)."-border-style",'propval'=>(($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-style'] ?? null)===null||$tmp==='' ? '' : $tmp),'propdesc'=>array('label'=>__('Border style'),'options'=>array(''=>__('unset'),'dotted'=>__('dotted'),'dashed'=>__('dashed'),'solid'=>__('solid')))), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:./config.color.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('propname'=>((string)$_smarty_tpl->tpl_vars['propname']->value)."[border-color]",'propid'=>((string)$_smarty_tpl->tpl_vars['propname']->value)."-border-color",'propval'=>(($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-color'] ?? null)===null||$tmp==='' ? '' : $tmp),'propdesc'=>array('label'=>__('Border colour'))), 0, false);
?>
        <div class='form-group'>
            <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-border-radius"
                   data-toggle="tooltip" title="<?php echo __('cssNumericDesc');?>
" data-placement="auto">
                <?php echo __('Border radius');?>

                <i class="fas fa-info-circle fa-fw"></i>
            </label>
            <input type="text" class="form-control" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-border-radius"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[border-radius]"
                   value="<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['propval']->value['border-radius'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
        </div>
    </div>
</div><?php }
}
