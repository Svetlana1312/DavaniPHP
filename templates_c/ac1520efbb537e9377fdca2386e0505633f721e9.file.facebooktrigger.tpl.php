<?php /* Smarty version Smarty-3.1.21, created on 2015-09-13 00:46:46
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/facebooktrigger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8998911055f4ab5677e0b1-26112018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1520efbb537e9377fdca2386e0505633f721e9' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/facebooktrigger.tpl',
      1 => 1433929359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8998911055f4ab5677e0b1-26112018',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f4ab567aa203_25538669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4ab567aa203_25538669')) {function content_55f4ab567aa203_25538669($_smarty_tpl) {?><div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }} ?>
