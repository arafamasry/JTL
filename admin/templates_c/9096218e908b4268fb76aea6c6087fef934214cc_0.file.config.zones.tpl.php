<?php
/* Smarty version 3.1.39, created on 2021-06-10 12:14:15
  from 'C:\xampp-7\htdocs\jtl\admin\opc\tpl\config\config.zones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1e5f794d1f3_52861878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9096218e908b4268fb76aea6c6087fef934214cc' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\opc\\tpl\\config\\config.zones.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1e5f794d1f3_52861878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('src', $_smarty_tpl->tpl_vars['instance']->value->getProperty($_smarty_tpl->tpl_vars['propdesc']->value['srcProp']));?>

<input type="hidden" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="<?php echo htmlentities(json_encode($_smarty_tpl->tpl_vars['propval']->value));?>
"
       data-prop-type="json">

<?php if (empty($_smarty_tpl->tpl_vars['src']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('imgsrc', null);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('imgsrc', (((\JTL\Shop::getURL()).('/')).((defined('STORAGE_OPC') ? constant('STORAGE_OPC') : null))).($_smarty_tpl->tpl_vars['src']->value));
}?>

<div <?php if (empty($_smarty_tpl->tpl_vars['imgsrc']->value)) {?>style="display: none"<?php }?> id="banner-editor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
    <div class="form-group">
        <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
        <div style="position: relative">
            <img src="<?php echo $_smarty_tpl->tpl_vars['imgsrc']->value;?>
" alt="Banner Zones"
                 id="banner-image-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="img-fluid">
            <div id="banner-zones-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="banner-zones"></div>
        </div>
    </div>

    <div class="form-group">
        <button type="button" class="opc-btn-primary opc-medium-btn" id="banner-add-zone"><?php echo __('zoneNew');?>
</button>
        <button type="button" class="opc-btn-secondary opc-medium-btn" id="banner-del-zone" style="display: none">
            <?php echo __('zoneDelete');?>

        </button>
    </div>

    <div id="zone-props-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" style="display: none" class="zone-props">
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" id="zone-title-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" placeholder="<?php echo __('title');?>
">
            </div>
            <div class="col-6">
                <input type="text" class="form-control" id="zone-url-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" placeholder="<?php echo __('url');?>
">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" id="zone-class-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" placeholder="<?php echo __('cssClass');?>
">
            </div>
            <div class="col-6">
                <div class="input-group">
                    <input type="text" class="form-control" id="zone-product-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" placeholder="<?php echo __('products');?>
">
                    <div class="input-group-append">
                        <button type="button" class="btn primary" id="banner-del-product">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="checkbox" class="form-control" id="zone-target-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="1">
                    <label for="zone-target-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
">
                        <?php echo __('targetBlank');?>

                    </label>
                </div>
            </div>
        </div>
        <textarea class="form-control" id="zone-desc-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" placeholder="<?php echo __('description');?>
"></textarea>
    </div>
</div>

<div id="banner-zone-blueprint-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="banner-zone" style="display: none;">
    <div id="banner-zone-resizer-blueprint-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
         class="zone-resizer"></div>
</div>

<?php echo '<script'; ?>
>
    (function () {
        var nextZoneId    = 0;
        var hiddenInput   = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var bannerEditor  = $('#banner-editor-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var bannerImg     = $('#banner-image-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var bannerZones   = $('#banner-zones-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneBlueprint = $('#banner-zone-blueprint-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneProps     = $('#zone-props-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneTitle     = $('#zone-title-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneDesc      = $('#zone-desc-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneUrl       = $('#zone-url-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneClass     = $('#zone-class-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneProduct   = $('#zone-product-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var zoneTarget    = $('#zone-target-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
        var dragging      = false;
        var resizing      = false;
        var editorw       = 0;
        var editorh       = 0;
        var startx        = 0;
        var starty        = 0;
        var draggedZone   = null;
        var selectedZone  = null;
        var startLeft     = 0;
        var startTop      = 0;
        var startWidth    = 0;
        var startHeight   = 0;

        deserializeZones().forEach(function(zoneData) {
            addZone(zoneData);
        });

        function delZone()
        {
            selectedZone.remove();
            zoneProps.hide();
            $('#banner-del-zone').hide();
            serializeZones();
        }

        function addZone(data = null)
        {
            var newZone = zoneBlueprint.clone();
            var resizer = newZone.find('#banner-zone-resizer-blueprint-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');

            var zoneData = data || {
                zoneId: nextZoneId,
                title: '',
                desc: '',
                url: '',
                class: '',
                target: false,
                productId: 0,
                productName: '',
                left: 50,
                top: 50,
                width: 25,
                height: 25,
            };

            if (data === null) {
                nextZoneId++;
            }

            newZone.show().appendTo(bannerZones);

            newZone
                .attr('id', '')
                .data('zone', zoneData)
                .css({
                    left:   zoneData.left + '%',
                    top:    zoneData.top + '%',
                    width:  zoneData.width + '%',
                    height: zoneData.height + '%',
                })
                .on('mousedown', function(e) {
                    dragging    = true;
                    startx      = e.clientX;
                    starty      = e.clientY;
                    editorw     = bannerZones.width();
                    editorh     = bannerZones.height();
                    draggedZone = newZone;
                    startLeft   = parseFloat(draggedZone[0].style.left);
                    startTop    = parseFloat(draggedZone[0].style.top);
                    selectZone(newZone);

                    e.preventDefault();
                });

            resizer
                .attr('id', '')
                .on('mousedown', function(e) {
                    resizing    = true;
                    startx      = e.clientX;
                    starty      = e.clientY;
                    draggedZone = newZone;
                    editorw     = bannerZones.width();
                    editorh     = bannerZones.height();
                    startWidth  = parseFloat(draggedZone[0].style.width);
                    startHeight = parseFloat(draggedZone[0].style.height);
                    selectZone(newZone);

                    e.preventDefault();
                    e.stopPropagation();
                });

            if (data === null) {
                serializeZones();
                selectZone(newZone);
            }
        }

        function selectZone(zone)
        {
            var zoneData = zone.data('zone');

            selectedZone = zone;
            bannerZones.find('.selected').removeClass('selected');
            selectedZone.addClass('selected');
            zoneProduct.val(zoneData.productName);
            zoneTitle.val(zoneData.title);
            zoneDesc.val(zoneData.desc);
            zoneUrl.val(zoneData.url);
            zoneClass.val(zoneData.class);
            zoneTarget.prop('checked', zoneData.target);
            zoneProps.show();
            $('#banner-del-zone').show();
        }

        function moveSelected(newx, newy)
        {
            var zoneData = draggedZone.data('zone');
            var curw = parseFloat(draggedZone[0].style.width);
            var curh = parseFloat(draggedZone[0].style.height);

            newx = Math.max(0, Math.min(100 - curw, newx));
            newy = Math.max(0, Math.min(100 - curh, newy));

            draggedZone[0].style.left = newx + "%";
            draggedZone[0].style.top  = newy + "%";

            zoneData.left = newx;
            zoneData.top  = newy;

            draggedZone.data('zone', zoneData);
            serializeZones();
        }

        function resizeSelected(neww, newh)
        {
            var zoneData = draggedZone.data('zone');
            var curx = parseFloat(draggedZone[0].style.left);
            var cury = parseFloat(draggedZone[0].style.top);

            neww = Math.max(5, Math.min(100 - curx, neww));
            newh = Math.max(5, Math.min(100 - cury, newh));

            draggedZone[0].style.width  = neww + "%";
            draggedZone[0].style.height = newh + "%";

            zoneData.width  = neww;
            zoneData.height = newh;

            draggedZone.data('zone', zoneData);
            serializeZones();
        }

        function serializeZones()
        {
            var zonesData = [];

            bannerZones.children().each(function(i, zone) {
                zonesData.push($(zone).data('zone'));
            });

            hiddenInput.val(JSON.stringify(zonesData));
        }

        function deserializeZones()
        {
            return JSON.parse(hiddenInput.val());
        }

        function delProduct()
        {
            var zoneData = selectedZone.data('zone');

            zoneProduct.val('');
            zoneData.productId   = 0;
            zoneData.productName = '';
            selectedZone.data('zone', zoneData);
            serializeZones();
        }

        zoneTitle.on('input', function() { changeZoneProp('title', $(this).val()); });
        zoneDesc.on('input', function() { changeZoneProp('desc', $(this).val()); });
        zoneUrl.on('input', function() { changeZoneProp('url', $(this).val()); });
        zoneClass.on('input', function() { changeZoneProp('class', $(this).val()); });
        zoneTarget.on('input', function() { changeZoneProp('target', $(this).prop('checked')); });

        function changeZoneProp(name, val)
        {
            var zoneData = selectedZone.data('zone');
            zoneData[name] = val;
            selectedZone.data('zone', zoneData);
            serializeZones();
        }

        enableTypeahead('#zone-product-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
', 'getProducts', 'cName', null, function (e, item) {
            var zoneData = selectedZone.data('zone');

            zoneData.productId   = item.kArtikel;
            zoneData.productName = item.cName;
            selectedZone.data('zone', zoneData);
            serializeZones();
        });

        opc.setImageSelectCallback(function (url, propName, absUrl)
        {
            bannerEditor.show();
            bannerImg.attr('src', absUrl);
        });

        $(document)
            .on('mouseup', function(e) {
                dragging = false;
                resizing = false;
            });

        $(document)
            .on('mousemove', function(e) {
                if (dragging || resizing) {
                    let deltax        = e.clientX - startx;
                    let deltay        = e.clientY - starty;
                    let deltaxpercent = deltax * 100 / editorw;
                    let deltaypercent = deltay * 100 / editorh;

                    if (dragging) {
                        moveSelected(startLeft + deltaxpercent, startTop + deltaypercent);
                        e.preventDefault();
                    } else if(resizing) {
                        resizeSelected(startWidth + deltaxpercent, startHeight + deltaypercent);
                        e.preventDefault();
                    }
                }
            });

        $('#banner-add-zone').on('click', function() { addZone(); });
        $('#banner-del-zone').on('click', delZone);
        $('#banner-del-product').on('click', delProduct)
    })();
<?php echo '</script'; ?>
>
<?php }
}
