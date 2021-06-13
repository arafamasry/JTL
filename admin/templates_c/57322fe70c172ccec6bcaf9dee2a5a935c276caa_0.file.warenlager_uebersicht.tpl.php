<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:15:00
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\warenlager_uebersicht.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c20244c09ed1_53343552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57322fe70c172ccec6bcaf9dee2a5a935c276caa' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\warenlager_uebersicht.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c20244c09ed1_53343552 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('.edit').on('click', function () {
            var kWarenlager = $(this).attr('id').replace('btn_', ''),
                row = $('.row_' + kWarenlager);
            if (row.css('display') === 'none') {
                row.fadeIn();
            } else {
                row.fadeOut();
            }
        });
    });
<?php echo '</script'; ?>
>


<div id="content">
    <?php if (count($_smarty_tpl->tpl_vars['warehouses']->value) > 0) {?>
        <form method="post" action="warenlager.php">
            <?php echo $_smarty_tpl->tpl_vars['jtl_token']->value;?>

            <input name="a" type="hidden" value="update" />
            <div class="card">
                <div class="card-header">
                    <span class="subheading1"><?php echo __('warenlager');?>
</span>
                    <hr class="mb-n3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="list table">
                            <thead>
                            <tr>
                                <th class="checkext"><?php echo __('warenlagerActive');?>
</th>
                                <th><?php echo __('warenlagerIntern');?>
</th>
                                <th><?php echo __('description');?>
</th>
                                <th class="text-center"><?php echo __('options');?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warehouses']->value, 'warehouse');
$_smarty_tpl->tpl_vars['warehouse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->do_else = false;
?>
                                <tr>
                                    <td class="checkext">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" name="kWarenlager[]" type="checkbox" id="store-id-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
" value="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
"<?php if ($_smarty_tpl->tpl_vars['warehouse']->value->nAktiv == 1) {?> checked<?php }?> />
                                            <label class="custom-control-label" for="store-id-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
"></label>
                                        </div>
                                    </td>
                                    <td class="large"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->cName;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['warehouse']->value->cBeschreibung;?>
</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a class="btn btn-link px-2"
                                               data-toggle="collapse"
                                               href="#collapse-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
"
                                               title="<?php echo __('edit');?>
"
                                               aria-expanded="false">
                                                <span class="fal fa-chevron-circle-down rotate-180 font-size-lg"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="collapse" id="collapse-<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
">
                                    <td colspan="4" class="border-top-0">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableLanguages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                        <?php $_smarty_tpl->_assignInScope('kSprache', $_smarty_tpl->tpl_vars['language']->value->getId());?>
                                        <div class="form-group form-row align-items-center mb-5 mb-md-3">
                                            <label class="col col-sm-4 col-form-label text-sm-right order-1" for="cNameSprache[<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
][<?php echo $_smarty_tpl->tpl_vars['kSprache']->value;?>
]"><?php echo $_smarty_tpl->tpl_vars['language']->value->getLocalizedName();?>
:</label>
                                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                                                <input id="cNameSprache[<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
][<?php echo $_smarty_tpl->tpl_vars['kSprache']->value;?>
]"
                                                       name="cNameSprache[<?php echo $_smarty_tpl->tpl_vars['warehouse']->value->kWarenlager;?>
][<?php echo $_smarty_tpl->tpl_vars['kSprache']->value;?>
]"
                                                       type="text"
                                                       value="<?php if ((isset($_smarty_tpl->tpl_vars['warehouse']->value->cSpracheAssoc_arr[$_smarty_tpl->tpl_vars['kSprache']->value]))) {
echo $_smarty_tpl->tpl_vars['warehouse']->value->cSpracheAssoc_arr[$_smarty_tpl->tpl_vars['kSprache']->value];
}?>"
                                                       class="form-control large" />
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button name="update" type="submit" title="<?php echo __('update');?>
" class="btn btn-primary btn-block">
                                <?php echo __('saveWithIcon');?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-info" role="alert"><?php echo __('noDataAvailable');?>
</div>
    <?php }?>
</div>
<?php }
}
