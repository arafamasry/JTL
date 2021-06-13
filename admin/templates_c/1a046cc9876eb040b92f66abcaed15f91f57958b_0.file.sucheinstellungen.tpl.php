<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:11:19
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\sucheinstellungen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20167d3d1e2_57548832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a046cc9876eb040b92f66abcaed15f91f57958b' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\sucheinstellungen.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/einstellungen_bearbeiten.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c20167d3d1e2_57548832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/einstellungen_bearbeiten.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>__('Sucheinstellungen')), 0, false);
if ($_smarty_tpl->tpl_vars['createIndex']->value !== false) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        var createIndex = '<?php echo $_smarty_tpl->tpl_vars['createIndex']->value;?>
';
        var createCount = 0;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function showIndexNotification(pResult) {
            var type = 'info';
            var msg  = '';

            if (pResult && pResult.error) {
                type = 'danger';
                msg  = pResult.error.message;
            } else if (pResult && pResult.hinweis) {
                msg  = pResult.hinweis;
                createCount++;
            } else {
                return null;
            }

            createNotify({
                title: '<?php echo __('useFulltextSearch');?>
',
                message: msg
            }, {
                type: type
            });

            if (createCount >= 2) {
                $('.alert.alert-danger').hide(300);
                updateNotifyDrop();
                ioCall('clearSearchCache', [], showCacheNotification, showCacheNotification);
            }
        }

        function showCacheNotification(pResult) {
            var isError = pResult && pResult.error;
            createNotify({
                title: '<?php echo __('searchSettingsChange');?>
',
                message: isError ? pResult.error.message : pResult.hinweis
            }, {
                type: isError ? 'danger' : 'info'
            });
        }

        ioCall('createSearchIndex', ['tartikel', createIndex], showIndexNotification, showIndexNotification);
        ioCall('createSearchIndex', ['tartikelsprache', createIndex], showIndexNotification, showIndexNotification);
    <?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['supportFulltext']->value === false) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#suche_fulltext').val('N')
            .prop('disabled', 'disabled')
            .prop('title', '<?php echo __('fulltextSearchMysql');?>
');
    });
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
