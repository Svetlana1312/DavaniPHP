<?php /* Smarty version Smarty-3.1.21, created on 2015-07-07 19:54:45
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista_zonas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585794259559c1265ca5cc0-87442495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d9d06d7bb83c5e97a092a1020a80ba71cf238b' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista_zonas.tpl',
      1 => 1434367831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585794259559c1265ca5cc0-87442495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ZONAS' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_559c1265cc91a0_27365069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c1265cc91a0_27365069')) {function content_559c1265cc91a0_27365069($_smarty_tpl) {?><form action="javascript:alert('Opcion no activada');">
    <div class="col-xs-12">
        <legend>Agregar una nueva zona</legend>
        <label>Nombre</label>
        <input required type="text" name="nombre" class="form-control">
        <label>Descripcion</label>
        <textarea  required name="descripcion" class="form-control"></textarea>
        <label>Publicada</label>
        <select name="publicada" class="form-control">
            <option value="1">Si</option>
            <option  value="0">No</option>
        </select>
        <br>
        <button type="submit" class="btn btn-info">Agregar Zona</button>
        <br>
        
    </div>
    <div class="clearfix"></div>
</form>
<div class="col-xs-12">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-dark">
                <tr>
                    <th>Nombre Zona</th>
                    <th>Descripcion</th>
                    <th>Paises</th>
                    <th>Publicada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ZONAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                        <td style="word-break: all;max-width: 120px"><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
</td>
                        <th><?php echo $_smarty_tpl->tpl_vars['item']->value['paises'];?>
</th>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['publicada']==1) {?>
                                <span class="glyphicon glyphicon-ok text-success"></span>
                            <?php } else { ?>
                                <span class="glyphicon glyphicon-remove text-danger"></span>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-warning">
                                <span class="glyphicon glyphicon-cog"></span>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['paises']==0) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>  
                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>    
</div>
<?php }} ?>
