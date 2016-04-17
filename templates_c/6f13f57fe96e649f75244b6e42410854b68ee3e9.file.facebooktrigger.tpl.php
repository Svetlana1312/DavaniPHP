<?php /* Smarty version Smarty-3.1.21, created on 2015-10-07 22:13:17
         compiled from "C:\wamp\www\davani\templates\librarys\js\facebooktrigger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31516561598fd0b1fe1-01066737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f13f57fe96e649f75244b6e42410854b68ee3e9' => 
    array (
      0 => 'C:\\wamp\\www\\davani\\templates\\librarys\\js\\facebooktrigger.tpl',
      1 => 1442263664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31516561598fd0b1fe1-01066737',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_561598fd0b6df8_96519144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561598fd0b6df8_96519144')) {function content_561598fd0b6df8_96519144($_smarty_tpl) {?><div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }} ?>
