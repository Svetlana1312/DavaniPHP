<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:41:03
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/tinymce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77917928755e9e5bf6aee38-91241406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b47d6727f00aa7f71553021393e26ab4108f3ce' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/tinymce.tpl',
      1 => 1434372943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77917928755e9e5bf6aee38-91241406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e5bf6b6f81_27435344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e5bf6b6f81_27435344')) {function content_55e9e5bf6b6f81_27435344($_smarty_tpl) {?><?php echo '<script'; ?>
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
