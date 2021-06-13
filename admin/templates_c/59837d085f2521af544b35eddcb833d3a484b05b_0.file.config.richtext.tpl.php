<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:13:32
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e5ccaaf333_62237697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59837d085f2521af544b35eddcb833d3a484b05b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.richtext.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e5ccaaf333_62237697 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <textarea name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" id="textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value);?>

    </textarea>
    <?php echo '<script'; ?>
>
        var adminLang = '<?php echo Shop::Container()->getGetText()->getLanguage();?>
'.toLowerCase();

        if(!CKEDITOR.lang.languages.hasOwnProperty(adminLang)) {
            adminLang = adminLang.split('-')[0]
        }

        CKEDITOR.replace(
            'textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
',
            {
                baseFloatZIndex: 9000,
                language: adminLang,
                filebrowserBrowseUrl: 'elfinder.php?ckeditor=1&token=' + JTL_TOKEN + '&mediafilesType=image',
            },
        );

        $.each(CKEDITOR.dtd.$removeEmpty, key => {
            CKEDITOR.dtd.$removeEmpty[key] = false;
        });

        opc.once('save-config', () => {
            $('#textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').val(CKEDITOR.instances['textarea-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
'].getData());
        });
    <?php echo '</script'; ?>
>
</div><?php }
}
