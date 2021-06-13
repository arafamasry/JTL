<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:09:31
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\shoplogouploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c200fb7d0e41_43754297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98b327cada1c96fda0412eed050a40ad08f0060' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\shoplogouploader.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/fileupload.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c200fb7d0e41_43754297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('shoplogouploader'),'cBeschreibung'=>__('shoplogouploaderDesc'),'cDokuURL'=>__('shoplogouploaderURL')), 0, false);
?>
<div id="content">
    <form name="uploader" method="post" action="shoplogouploader.php" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

        <div class="card shoplogouploader">
            <div class="card-header">
                <span class="subheading1"><?php echo __('yourLogo');?>
</span>
            </div>
            <div class="card-body">
                <input type="hidden" name="upload" value="1" />
                <?php $_smarty_tpl->_assignInScope('allowedExtensions', array('jpg','jpeg','jpe','gif','png','bmp','svg','webp'));?>
                <div class="col-xs-12">
                    <?php ob_start();
echo __('successLogoUpload');
$_prefixVariable1=ob_get_clean();
ob_start();
echo __('errorLogoUpload',implode(', ',$_smarty_tpl->tpl_vars['allowedExtensions']->value),(defined('PFAD_SHOPLOGO') ? constant('PFAD_SHOPLOGO') : null));
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:tpl_inc/fileupload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('fileAllowedExtensions'=>$_smarty_tpl->tpl_vars['allowedExtensions']->value,'fileID'=>'shoplogo-upload','fileName'=>'shopLogo','fileUploadUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php?token=".((string)$_SESSION['jtl_token']),'fileDeleteUrl'=>((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php?token=".((string)$_SESSION['jtl_token']),'fileBrowseClear'=>true,'initialPreviewShowDelete'=>true,'fileSuccessMsg'=>$_prefixVariable1,'fileErrorMsg'=>$_prefixVariable2,'fileInitialPreview'=>"[
                                '<img src=\"".((string)$_smarty_tpl->tpl_vars['ShopLogoURL']->value)."\" class=\"file-preview-image img-fluid\" alt=\"Logo\" title=\"Logo\" />'
                            ]",'fileInitialPreviewConfig'=>"[
                                "."{
                                    "."url: '".((string)$_smarty_tpl->tpl_vars['adminURL']->value)."/shoplogouploader.php',
                                    extra: "."{
                                    "."action: 'deleteLogo',
                                    logo: '".((string)$_smarty_tpl->tpl_vars['ShopLogo']->value)."',
                                    jtl_token: '".((string)$_SESSION['jtl_token'])."'
                                    }
                                }
                            ]"), 0, false);
?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
