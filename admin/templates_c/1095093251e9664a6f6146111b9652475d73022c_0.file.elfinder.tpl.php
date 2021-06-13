<?php
/* Smarty version 3.1.39, created on 2021-06-10 11:49:23
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\elfinder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e02383af67_54116359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1095093251e9664a6f6146111b9652475d73022c' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\elfinder.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e02383af67_54116359 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
		<title><?php echo $_smarty_tpl->tpl_vars['mediafilesSubdir']->value;?>
 - Media Browser</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/css/jquery-ui.theme.min.css">
        <style>
            body, html {
                margin: 0;
                padding: 0;
                height: 100%;
                overflow: hidden;
            }
        </style>
		<?php echo '<script'; ?>
 data-main="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/js/elfinder.client.js" src="<?php echo $_smarty_tpl->tpl_vars['templateUrl']->value;?>
/js/require.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			define('elFinderConfig', {
			    elementId: 'elfinder',
				// Documentation for elFinder client options:
                // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
				options: {
                    // connector URL (REQUIRED)
					url : 'elfinder.php',
                    defaultView: 'icons',
                    height: '100%',
                    resizable: false,
                    customData: {
                        token: '<?php echo $_SESSION['jtl_token'];?>
',
                        jtl_token: '<?php echo $_SESSION['jtl_token'];?>
',
                        mediafilesType: '<?php echo $_smarty_tpl->tpl_vars['mediafilesType']->value;?>
',
                    },
					commandsOptions : {
					    upload: {
					        ui: 'uploadbutton',
                        },
					},
                    uiOptions: {
					    toolbar: [
                            ['mkdir'],
					        ['info', 'quicklook', 'upload'],
                            ['rm', 'duplicate', 'rename'],
                            ['view'],
                            ['help']
                        ]
                    },
                    contextmenu: {
                        navbar: [],
                        cwd: ['reload', 'back', '|', 'upload', 'paste', '|', 'info'],
                        files: [
                            'getfile', 'quicklook', '|', 'download', '|', 'duplicate', 'rm', 'rename', '|', 'info'
                        ],
                    },
                    getFileCallback: function(file, fm) {
					    <?php if ($_smarty_tpl->tpl_vars['isCKEditor']->value) {?>
                            window.opener.CKEDITOR.tools.callFunction(<?php echo $_smarty_tpl->tpl_vars['CKEditorFuncNum']->value;?>
, file.url);
                        <?php } else { ?>
                            window.opener.elfinder.getFileCallback(file, '<?php echo $_smarty_tpl->tpl_vars['mediafilesBaseUrlPath']->value;?>
');
                        <?php }?>
                        window.close();
                    },
                },
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <!-- Element where elFinder will be created (REQUIRED) -->
        <div id="elfinder"></div>
    </body>
</html><?php }
}
