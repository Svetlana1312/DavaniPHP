<?php /* Smarty version Smarty-3.1.21, created on 2015-09-13 00:46:46
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157652241255f4ab567f9645-84043892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2778fa09d0eb4bd40f1d538951fbf8408e9113f' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barmenu.tpl',
      1 => 1433929340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157652241255f4ab567f9645-84043892',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'level' => 0,
    'data' => 0,
    'entry' => 0,
    'ABSOLUTE_URL' => 1,
    'url' => 0,
    'nurl' => 0,
    'MENU_CATEGORIAS_LIST' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f4ab56844296_10394424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4ab56844296_10394424')) {function content_55f4ab56844296_10394424($_smarty_tpl) {?>    <div class="panel panel-default">
                        <div class="panel-heading">
                            Catálogo <span data-toggle="collapse" data-target="#product-bar" class="glyphicon glyphicon-menu-hamburger visible-xs pull-right"></span>
                        </div> 
                        <div id="product-bar" class="panel-body collapse in">
                            <?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                <ul id="l<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['level']->value!='0') {?> class="collapse"<?php }?>>
                                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                                      <?php if (tieneHijos('categorias','categoria_id',$_smarty_tpl->tpl_vars['entry']->value['id'])) {?>
                                        <li class="dropdown">
                                            <a   href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['entry']->value['nombre_url'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['entry']->value['nombre'];?>
 </h2></a>
                                            <span data-toggle="collapse" href="#l<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" aria-expanded="false" 
                                                  aria-controls="collapseExample"  class="glyphicon glyphicon-chevron-down"></span>
                                            <?php $_smarty_tpl->tpl_vars['nurl'] = new Smarty_variable((($_smarty_tpl->tpl_vars['url']->value).($_smarty_tpl->tpl_vars['entry']->value['nombre_url'])).('/'), null, 0);?>
                                            <?php smarty_template_function_menu($_smarty_tpl,array('data'=>damehijos($_smarty_tpl->tpl_vars['entry']->value['id']),'level'=>$_smarty_tpl->tpl_vars['entry']->value['id'],'url'=>$_smarty_tpl->tpl_vars['nurl']->value));?>

                                        </li>
                                      <?php } else { ?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;
echo $_smarty_tpl->tpl_vars['url']->value;
echo $_smarty_tpl->tpl_vars['entry']->value['nombre_url'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['entry']->value['nombre'];?>
</h2></a>
                                        </li>
                                      <?php }?>
                                    </li>
                                <?php } ?>
                                </ul>
                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                            <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['MENU_CATEGORIAS_LIST']->value,'level'=>0,'url'=>'catalogo/'));?>

                        </div>
                    </div><?php }} ?>
