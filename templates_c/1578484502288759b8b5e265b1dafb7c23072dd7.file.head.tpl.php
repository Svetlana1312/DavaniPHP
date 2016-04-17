<?php /* Smarty version Smarty-3.1.21, created on 2015-10-07 22:13:17
         compiled from "C:\wamp\www\davani\templates\davani\blocks\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27791561598fd05ba08-31074907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1578484502288759b8b5e265b1dafb7c23072dd7' => 
    array (
      0 => 'C:\\wamp\\www\\davani\\templates\\davani\\blocks\\head.tpl',
      1 => 1444236214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27791561598fd05ba08-31074907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATOS_PAGINA' => 0,
    'TEMPLATE_URL' => 0,
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_561598fd0a2a05_42367608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561598fd0a2a05_42367608')) {function content_561598fd0a2a05_42367608($_smarty_tpl) {?>        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['titulo'];?>
</title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['descripcion'];?>
">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['keywords'];?>
">
        <meta name="author" content="Angel Fraga Parodi">
        <!-- Jquery-ui CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
css/jquery-ui.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
css/bootstrap.min.css" rel="stylesheet">
        <!-- Magnify CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
css/magnify.css" rel="stylesheet">
        <!-- Main CSS -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
css/main.css" rel="stylesheet">
        <!-- favicon -->
        <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
img/favicon.ico" type="image/ico" >
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <!-- Framework -->
        <?php echo '<script'; ?>
>
        var ABSOLUTE_URL='<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
';
        <?php echo '</script'; ?>
>
        <!-- Jquery-ui CSS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Jquery-ui CSS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php }} ?>
