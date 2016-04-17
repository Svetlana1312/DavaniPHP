<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\davani\components\tinymce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24229565dde31586551-42302856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f88f5cf2fc07c75199aec36fa969dd273351d1' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\tinymce.tpl',
      1 => 1442263659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24229565dde31586551-42302856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde315b4d61_84009536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde315b4d61_84009536')) {function content_565dde315b4d61_84009536($_smarty_tpl) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
/libs/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
        tinymce.init({
            selector: "#editor",
            file_browser_callback : 
                function(field_name, url, type, win){
                
                    var filebrowser = "<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/explorador-de-archivos/input";
                
                    filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
                    tinymce.activeEditor.windowManager.open({
                    title : "Insertar fichero",
                    width : 520,
                    height : 400,
                    url : filebrowser
                    }, {
                    window : win,
                    input : field_name
                    });
                    return false;
                },
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
            language : 'es',
            selector: "#editor",
            convert_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste ",
                "textcolor colorpicker"
            ],
            toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontselect fontsizeselect forecolor backcolor | undo redo "
        });
            
<?php echo '</script'; ?>
>
<?php }} ?>
