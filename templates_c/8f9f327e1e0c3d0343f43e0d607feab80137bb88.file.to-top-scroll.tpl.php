<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 11:30:35
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/to-top-scroll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138628400155a3853bcec200-30251936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9f327e1e0c3d0343f43e0d607feab80137bb88' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/to-top-scroll.tpl',
      1 => 1433929360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138628400155a3853bcec200-30251936',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a3853bced895_25885507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3853bced895_25885507')) {function content_55a3853bced895_25885507($_smarty_tpl) {?><?php echo '<script'; ?>
>
    $(document).ready(function(){
       $('.to-top').click(function(e){
           e.preventDefault();
           $('body').animate({scrollTop:0},'1500','swing');
       });
    });
<?php echo '</script'; ?>
><?php }} ?>
