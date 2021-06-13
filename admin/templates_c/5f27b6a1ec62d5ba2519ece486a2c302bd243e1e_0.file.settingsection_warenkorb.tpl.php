<?php
/* Smarty version 3.1.39, created on 2021-06-10 14:21:57
  from 'C:\xampp-7\htdocs\jtl\admin\templates\bootstrap\tpl_inc\settingsection_warenkorb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c203e544f177_59963852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f27b6a1ec62d5ba2519ece486a2c302bd243e1e' => 
    array (
      0 => 'C:\\xampp-7\\htdocs\\jtl\\admin\\templates\\bootstrap\\tpl_inc\\settingsection_warenkorb.tpl',
      1 => 1621413684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c203e544f177_59963852 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    
    $(document).ready(function() {
        var $praefix       = $('#bestellabschluss_bestellnummer_praefix'),
            $anfangsnummer = $('#bestellabschluss_bestellnummer_anfangsnummer'),
            $suffix        = $('#bestellabschluss_bestellnummer_suffix'),
            $all           = $('#bestellabschluss_bestellnummer_praefix, #bestellabschluss_bestellnummer_anfangsnummer, #bestellabschluss_bestellnummer_suffix'),
            force          = false;

        $praefix.on('focus', function(e) {
            this.maxLength = 20 - $anfangsnummer.val().length - $suffix.val().length;
        });
        $anfangsnummer.on('focus', function(e) {
            this.maxLength = 20 - $praefix.val().length - $suffix.val().length;
        });
        $suffix.on('focus', function(e) {
            this.maxLength = 20 - $anfangsnummer.val().length - $praefix.val().length;
        });

        $all.tooltip({trigger:'manual'})
            .blur(function(e) {
                $(this).tooltip('hide');
                var value = $(this).val();
                if (value.length > this.maxLength) {
                    $(this).val(value.substr(0, this.maxLength));
                }
            })
            .focus(function(e) {
                updateBestellnummer(this);
            })
            .keyup(function(e) {
                updateBestellnummer(this);
            });

        $all.closest('form').on('submit', function(e) {
            var praefix       = $praefix.val(),
                anfangsnummer = isNaN(parseInt($anfangsnummer.val())) ? 0 : parseInt($anfangsnummer.val()),
                suffix        = $suffix.val(),
                maxValLength  = 20 - praefix.length - suffix.length,
                maxValStr     = '9'.repeat(maxValLength),
                maxVal        = parseInt(maxValStr);

            if (anfangsnummer > maxVal) {
                $all.closest('.input-group').addClass('has-error has-feedback');
                showNotify('warning', 'Bestellnumer nicht zulässig', 'Die max. mögliche Bestellnummer ist kleiner als die Anfangsnummer!');

                return false;
            }
            if (!force && (maxVal - anfangsnummer) < 10000) {
                $anfangsnummer.closest('.input-group').addClass('has-warning has-feedback');
                var $notify = createNotify({
                    title: 'Bestellnummerbereich zu gering',
                    message: 'Es sind nur max. ' + (maxVal - anfangsnummer) + ' Bestellnummern im Format ' + praefix + maxValStr + suffix + ' möglich! <button id="forceSave" class="pull-right btn btn-warning"><i class="fa fa-save"></i>Trotzdem speichern!</button>'
                }, {
                    type: 'info',
                    delay: 12000,
                    allow_dismiss: true
                });
                $('#forceSave').on('click', function(e) {
                    $notify.close();
                    force = true;
                    $all.closest('form')[0].submit();
                });

                return false;
            }

            return true;
        });

        function updateBestellnummer(elem) {
            var praefix       = $praefix.val(),
                anfangsnummer = isNaN(parseInt($anfangsnummer.val())) ? 0 : parseInt($anfangsnummer.val()),
                suffix        = $suffix.val(),
                maxValLength  = 20 - praefix.length - suffix.length,
                maxValStr     = '9'.repeat(maxValLength),
                maxVal        = parseInt(maxValStr);

            var result = '<?php echo __('preview');?>
: ' + praefix + maxValStr + suffix;

            $(elem).attr('title', result)
                .tooltip('fixTitle')
                .tooltip('show');
            if ((maxVal - anfangsnummer) < 10000) {
                $(elem).closest('.input-group').addClass('has-warning has-feedback');
            } else {
                $all.closest('.input-group').removeClass('has-warning has-feedback');
            }
        }
    });
    
<?php echo '</script'; ?>
><?php }
}
