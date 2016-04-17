<?php /* Smarty version Smarty-3.1.21, created on 2016-04-17 13:34:12
         compiled from "C:\xampp\htdocs\davani_old\templates\librarys\js\facebooktrigger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26947571374b491b537-37611237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db3e307d0d3adebb186249dcdf6ca6daa027116c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\davani_old\\templates\\librarys\\js\\facebooktrigger.tpl',
      1 => 1442263664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26947571374b491b537-37611237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_571374b494a347_96260130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571374b494a347_96260130')) {function content_571374b494a347_96260130($_smarty_tpl) {?><div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }} ?>
