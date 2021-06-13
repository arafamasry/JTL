<?php
/* Smarty version 3.1.39, created on 2021-06-09 22:36:43
  from 'C:\xampp-7\htdocs\jtl\includes\src\OPC\Portlets\ImageSlider\ImageSlider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c1265b8d0294_32648754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c632b0faa3930a494ee18eedce90122a63f59bb' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\includes\\src\\OPC\\Portlets\\ImageSlider\\ImageSlider.tpl',
      1 => 1621413686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c1265b8d0294_32648754 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isPreview']->value) {?>
    <?php $_smarty_tpl->_assignInScope('slides', $_smarty_tpl->tpl_vars['instance']->value->getProperty('slides'));?>
    <?php if (count($_smarty_tpl->tpl_vars['slides']->value) > 0) {?>
        <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['slides']->value[0]['url'],'',''));?>
    <?php }?>
    <div class="text-center opc-ImageSlider <?php if (count($_smarty_tpl->tpl_vars['slides']->value) > 0) {?>opc-ImageSlider-with-image<?php }?>"
         style="<?php if (count($_smarty_tpl->tpl_vars['slides']->value) > 0) {?>background-image: url('<?php echo $_smarty_tpl->tpl_vars['imgAttribs']->value['src'];?>
');<?php }?> <?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
">
        <div>
            <?php echo file_get_contents(($_smarty_tpl->tpl_vars['portlet']->value->getBasePath()).('icon.svg'));?>

            <span><?php echo __('Bilder-Slider');?>
</span>
        </div>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('uid', $_smarty_tpl->tpl_vars['instance']->value->getUid());?>

    <div style="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleString();?>
" class="<?php echo $_smarty_tpl->tpl_vars['instance']->value->getStyleClasses();?>
">
        <?php if (count($_smarty_tpl->tpl_vars['instance']->value->getProperty('slides')) > 0) {?>
            <div class="theme-<?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-theme');?>
">
                <div id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" class="nivoSlider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instance']->value->getProperty('slides'), 'slide', false, 'i');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['title']) || !empty($_smarty_tpl->tpl_vars['slide']->value['desc'])) {?>
                            <?php $_smarty_tpl->_assignInScope('slideTitle', ((('#').($_smarty_tpl->tpl_vars['uid']->value)).('_slide_caption_')).($_smarty_tpl->tpl_vars['i']->value));?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('slideTitle', '');?>
                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['url'])) {?>
                            <?php $_smarty_tpl->_assignInScope('imgAttribs', $_smarty_tpl->tpl_vars['instance']->value->getImageAttributes($_smarty_tpl->tpl_vars['slide']->value['url'],'',''));?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['link'])) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
"
                                   <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['title'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
                                   class="slide">
                            <?php } else { ?>
                                <div class="slide">
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['image'][0], array( array('srcset'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcset'],'sizes'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['srcsizes'],'src'=>$_smarty_tpl->tpl_vars['imgAttribs']->value['src'],'alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['imgAttribs']->value['alt'], ENT_QUOTES, 'utf-8', true),'title'=>htmlspecialchars($_smarty_tpl->tpl_vars['slideTitle']->value, ENT_QUOTES, 'utf-8', true),'data'=>array('desc'=>htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['desc'], ENT_QUOTES, 'utf-8', true))),$_smarty_tpl ) );?>

                            <?php if (empty($_smarty_tpl->tpl_vars['slide']->value['link'])) {?>
                                </div>
                            <?php } else { ?>
                                </a>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instance']->value->getProperty('slides'), 'slide', false, 'i');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['title']) || !empty($_smarty_tpl->tpl_vars['slide']->value['desc'])) {?>
                        <div id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
_slide_caption_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="htmlcaption" style="display: none">
                            <?php if (!empty($_smarty_tpl->tpl_vars['slide']->value['title'])) {?>
                                <strong class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'utf-8', true);?>
</strong>
                            <?php }?>
                            <p class="desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['desc'], ENT_QUOTES, 'utf-8', true);?>
</p>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
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
                <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-kenburns'))) {?>
                    // pauseTime must be set here
                    var pauseTime      = <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-pause');?>
;
                    // animSpeed must be set here
                    var animSpeed      = <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-speed');?>
;
                    // 30% zoom as default
                    var zoomFactor     = 30;
                    // firstslide pausetime adjustment factor
                    var durationFactor = 1.25;

                    function KBInit()
                    {
                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 img').css('visibility', 'hidden');
                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-nextNav').trigger('click');
                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 , .nivo-control').css('opacity', 1);

                        setTimeout(function () {
                            $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 , .nivo-control')
                                .animate({ opacity: 1 }, animSpeed);
                        }, 0);

                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-control').on('click', function () {
                            setTimeout(function () {
                                $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-main-image').css('opacity', 0);
                            }, 0);

                            durationFactor = 1.25;
                        });

                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-prevNav, #<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-nextNav').on('click', function () {
                            setTimeout(function () {
                                $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-main-image').css('opacity', 0);
                            }, 20);

                            durationFactor = 1.25;
                        });
                    }

                    function NivoKenBurns()
                    {
                        $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-main-image').css('opacity', 1);

                        setTimeout(function () {
                            $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
  .nivo-slice img').css('width', 100 + zoomFactor + '%');
                        }, 10);

                        setTimeout(function () {
                            var nivoWidth  = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 ').width();
                            var nivoHeight = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 ').height();
                            var xScope = nivoWidth * zoomFactor / 100;
                            var yScope = nivoHeight * zoomFactor / 105;
                            var xStart = -xScope * Math.floor(Math.random() * 2);
                            var yStart = -yScope * Math.floor(Math.random() * 2);

                            $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-slice img')
                                .css('left', xStart)
                                .css('top', yStart)
                                .animate(
                                    {
                                        width: '100%',
                                        left:  0,
                                        top:   0
                                    },
                                    pauseTime * durationFactor
                                );

                            durationFactor = 1.02;

                            $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 .nivo-main-image').css('cssText', 'left:0 !important;top:0 !important;');
                        }, 10);
                    }

                    var initImageSlider = function () {
                        var slider   = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
');
                        var endSlide = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
  img').length - 1;

                        $('a.slide').click(function () {
                            if (!this.href.match(new RegExp('^' + location.protocol + '\\/\\/' + location.host))) {
                                this.target = '_blank';
                            }
                        });

                        slider.nivoSlider({
                            effect:           'fade',
                            animSpeed:        animSpeed,
                            pauseTime:        pauseTime,
                            directionNav:     true,
                            controlNav:       false,
                            controlNavThumbs: false,
                            pauseOnHover:     false,
                            prevText:         'prev',
                            nextText:         'next',
                            manualAdvance:    false,
                            randomStart:      false,
                            startSlide:       endSlide,
                            slices:           1,
                            beforeChange:     function () {
                                NivoKenBurns();
                            },
                            afterLoad:        function () {
                                KBInit();
                                slider.addClass('loaded');
                            }
                        });
                    };
                <?php } else { ?>
                    var initImageSlider = function () {
                        var slider = $('#<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
');

                        $('a.slide').click(function () {
                            if (!this.href.match(new RegExp('^' + location.protocol + '\\/\\/' + location.host))) {
                                this.target = '_blank';
                            }
                        });

                        slider.nivoSlider({
                            effect:
                                <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-effects-random')) && $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-effects-random') === 'true') {?>
                                    'random',
                                <?php } else { ?>
                                    '<?php echo $_smarty_tpl->tpl_vars['portlet']->value->getEnabledEffectList($_smarty_tpl->tpl_vars['instance']->value);?>
',
                                <?php }?>
                            animSpeed:
                                <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-speed'))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-speed');?>
,
                                <?php } else { ?>
                                    500,
                                <?php }?>
                            pauseTime:
                                <?php if (!empty($_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-pause'))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-animation-pause');?>
,
                                <?php } else { ?>
                                    3000,
                                <?php }?>
                            directionNav:     <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-direction-navigation');?>
,
                            controlNav:       <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-navigation');?>
,
                            controlNavThumbs: false,
                            pauseOnHover:     <?php echo $_smarty_tpl->tpl_vars['instance']->value->getProperty('slider-pause');?>
,
                            prevText:         'prev',
                            nextText:         'next',
                            randomStart:      true,
                            afterLoad:        function () {
                                slider.addClass('loaded');
                            }
                        });
                    };
                <?php }?>

                $(initImageSlider);
            <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo $_block_plugin1->inlineScript(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
<?php }
}
}
