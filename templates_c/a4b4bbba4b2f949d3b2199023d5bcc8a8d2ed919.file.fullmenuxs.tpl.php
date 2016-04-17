<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 11:30:35
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/fullmenuxs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27047367355a3853bce1542-86468943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4b4bbba4b2f949d3b2199023d5bcc8a8d2ed919' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/librarys/js/fullmenuxs.tpl',
      1 => 1433929359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27047367355a3853bce1542-86468943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a3853bce5a57_09330011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3853bce5a57_09330011')) {function content_55a3853bce5a57_09330011($_smarty_tpl) {?><?php echo '<script'; ?>
>
            $('.navbar-toggle').click(function(){
                if(!$('.navbar').hasClass('active')){
                    $(this).children('span').removeClass('glyphicon-menu-hamburger');
                    $(this).children('span').addClass('glyphicon-remove');
                    $('.navbar').slideDown('slow',function(){
                        $(this).addClass('active');         
                    });   
                }else{
                    $(this).children('span').removeClass('glyphicon-remove');
                    $(this).children('span').addClass('glyphicon-menu-hamburger');
                    $('.navbar').removeClass('active');
                }
            });
        <?php echo '</script'; ?>
><?php }} ?>
