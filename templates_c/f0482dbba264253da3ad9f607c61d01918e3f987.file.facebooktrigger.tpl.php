<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\librarys\js\facebooktrigger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30643565dde313690d9-20975467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0482dbba264253da3ad9f607c61d01918e3f987' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\librarys\\js\\facebooktrigger.tpl',
      1 => 1442263664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30643565dde313690d9-20975467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde3136dd57_02443745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde3136dd57_02443745')) {function content_565dde3136dd57_02443745($_smarty_tpl) {?><div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
><?php }} ?>
