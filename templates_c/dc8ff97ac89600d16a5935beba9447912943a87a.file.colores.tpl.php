<?php /* Smarty version Smarty-3.1.21, created on 2015-07-07 19:56:00
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/colores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1661370207559c12b0a34e27-55003346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc8ff97ac89600d16a5935beba9447912943a87a' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/colores.tpl',
      1 => 1434377823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661370207559c12b0a34e27-55003346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'LIST_COLORES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_559c12b0a87f92_23034308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c12b0a87f92_23034308')) {function content_559c12b0a87f92_23034308($_smarty_tpl) {?><div class="col-xs-12">
    <form id="form-add" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/alta_color',$('#form-add').serialize(),'POST',false,true)">
        <div class="col-xs-12 col-sm-6">
            <legend>Agregar un color</legend>
            <label>Nombre color</label>
            <input type="text" name="nombre" class="form-control" />
            <label>Imagen del color</label>
            <input type="text" onclick="openKCFinder(this)" name="imagen" class="form-control" />
            <button class="btn btn-info">Crear color</button>
        </div>
        <br><br>
        <div class="clearfix"></div>
    </form>
</div>
<div class="col-xs-12">
    <div class="table-responsive">
        <table class="table tabe-border">
            <thead>
                <tr class="bg-dark">
                    <th>Imagen</th>
                    <th>Color</th>
                    <th>Usado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_COLORES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <tr>
                        <td><img class="img-responsive thumbnail" style="height:50px" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
"/></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                        <td>0</td>
                        <td>
                            <button class="btn btn-warning">
                                <span class="glyphicon glyphicon-cog"></span>
                            </button>
                            <button class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
