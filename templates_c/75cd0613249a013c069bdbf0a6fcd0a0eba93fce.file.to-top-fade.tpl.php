<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 11:30:35
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/to-top-fade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139919307455a3853bce8079-25065815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75cd0613249a013c069bdbf0a6fcd0a0eba93fce' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/to-top-fade.tpl',
      1 => 1433929360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139919307455a3853bce8079-25065815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a3853bce9c57_11869991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3853bce9c57_11869991')) {function content_55a3853bce9c57_11869991($_smarty_tpl) {?><?php echo '<script'; ?>
>
    $(document).ready(function(){
        $(document).scroll(function(){
            if($(window).width()<768){
                if($(document).scrollTop()>$(window).height()/2){
                    $('.to-top').fadeIn('slow',function(){
                        $(this).css({display:'block'});
                    });
                }else{
                    $('.to-top').fadeOut('slow',function(){
                        $(this).css({display:'none'});
                    });
                }   
            }else{
                $('.to-top').css({display:'block'});
            }
        });
    });
<?php echo '</script'; ?>
><?php }} ?>
