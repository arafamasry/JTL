<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:45:31
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c2096bdd0080_49573094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fa66b50265d247a0997f883bf29afccbca6680f' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\slider.tpl',
      1 => 1621413682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/slider_form.tpl' => 1,
    'file:tpl_inc/slider_slide_form.tpl' => 1,
    'file:tpl_inc/pagination.tpl' => 2,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_60c2096bdd0080_49573094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('slider'),'cBeschreibung'=>__('sliderDesc'),'cDokuURL'=>__('sliderURL')), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateBaseURL']->value;?>
js/slider.js" type="text/javascript"><?php echo '</script'; ?>
>
<div id="content">
    <?php if ($_smarty_tpl->tpl_vars['action']->value === 'new' || $_smarty_tpl->tpl_vars['action']->value === 'edit') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/slider_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value === 'slides') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/slider_slide_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div id="settings">
            <div class="card">
                <?php if (count($_smarty_tpl->tpl_vars['oSlider_arr']->value) == 0) {?>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
                    </div>
                <?php } else { ?>
                    <div class="card-header">
                        <div class="subheading1"><?php echo __('slider');?>
</div>
                        <hr class="mb-n3">
                    </div>
                    <div class="card-body">
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value), 0, false);
?>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th class="text-left" width="50%"><?php echo __('name');?>
</th>
                                    <th class="text-center" width="20%"><?php echo __('active');?>
</th>
                                    <th width="30%" class="text-center"><?php echo __('options');?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oSlider_arr']->value, 'oSlider');
$_smarty_tpl->tpl_vars['oSlider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['oSlider']->value) {
$_smarty_tpl->tpl_vars['oSlider']->do_else = false;
?>
                                    <tr>
                                        <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['oSlider']->value->cName;?>
</td>
                                        <td class="text-center">
                                            <?php if ($_smarty_tpl->tpl_vars['oSlider']->value->bAktiv == 1) {?>
                                                <i class="fal fa-check text-success"></i>
                                            <?php } else { ?>
                                                <i class="fal fa-times text-danger"></i>
                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-link px-2 delete-confirm"
                                                   href="slider.php?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->kSlider;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   title="<?php echo __('delete');?>
"
                                                   data-toggle="tooltip"
                                                   data-modal-body="<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->cName;?>
">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-trash-alt"></span>
                                                        <span class="fas fa-trash-alt"></span>
                                                    </span>
                                                </a>
                                                <a class="btn btn-link px-2 add"
                                                   href="slider.php?action=slides&id=<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->kSlider;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   title="<?php echo __('slides');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-images"></span>
                                                        <span class="fas fa-images"></span>
                                                    </span>
                                                </a>
                                                <a class="btn btn-link px-2"
                                                   href="slider.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oSlider']->value->kSlider;?>
&token=<?php echo $_SESSION['jtl_token'];?>
"
                                                   title="<?php echo __('modify');?>
"
                                                   data-toggle="tooltip">
                                                    <span class="icon-hover">
                                                        <span class="fal fa-edit"></span>
                                                        <span class="fas fa-edit"></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['pagination']->value,'isBottom'=>true), 0, true);
?>
                    </div>
                <?php }?>
                <div class="card-footer save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <a class="btn btn-primary btn-block" href="slider.php?action=new&token=<?php echo $_SESSION['jtl_token'];?>
">
                                <i class="fa fa-share"></i> <?php echo __('sliderCreate');?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
