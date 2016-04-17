<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:49:12
         compiled from ".\templates\davani\components\lista_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3036565ddd98cd3732-84352828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63b9378bb33360e1f696e084467932337b49ea1' => 
    array (
      0 => '.\\templates\\davani\\components\\lista_usuarios.tpl',
      1 => 1448841269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3036565ddd98cd3732-84352828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FILTER' => 0,
    'URL_ACTUAL' => 0,
    'LISTA_USUARIOS' => 0,
    'item' => 0,
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565ddd98e81e98_80469567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ddd98e81e98_80469567')) {function content_565ddd98e81e98_80469567($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['FILTER']->value==false) {?>
<div class="col-xs-12">
    <div class="table-responsive">

        <table class="table table-bordered table-hover" style="font-size:1em;">
            <tr >
                <td colspan="7">
                        <div class="form-inline">
                          <input type="text" name="word"  
                        onkeyup="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/filter',{word:$(this).val()},'POST',$('#table-user-list'),false)" 
                        
                        class="form-control" /> 
                            <select class="text-danger input-group-btn form-control">
                                <option value="10">10</option>
                                <option value="10">20</option>
                                <option value="10">50</option>
                            </select>
                        </div><!-- /input-group -->
                </td>
            </tr>
            <tr class="bg-dark">
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>P.Realizados</th>
                <th>P.Pendientes</th>
                <th>Block</th>
                <th>Acciones</th>
            </tr>
            <tbody id="table-user-list">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_USUARIOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['bloqueado']==1) {?> class="bg-danger" <?php }?>>
                    <?php } else { ?>
                            <tr class="bg-gold">
                    <?php }?>
                    <td class="<?php if ($_smarty_tpl->tpl_vars['item']->value['tipo']=='mayorista') {?>bg-info<?php }
if ($_smarty_tpl->tpl_vars['item']->value['tipo']=='cliente') {?>bg-warning<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['tipo'];?>
</b></td>
                        <td style="max-width:80px;word-break: break-all;"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                        <td style="max-width:150px;word-break: break-all;"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                            <td class="bg-success"><?php echo $_smarty_tpl->tpl_vars['item']->value['pedidos'];?>
</td>
                            <td class="bg-warning">0</td>
                        <?php } else { ?>
                            <td></td>
                            <td></td>
                        <?php }?>
                        <td style="max-width:30px;">
                        	<?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                            <div class="checkbox" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
		                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['bloqueado']==1) {?> checked <?php }?> />
		                        <label></label>
		                    </div>
		                    <?php }?>
                        </td>
                        <td style="min-width:135px;">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  class="btn btn-warning btn-circle">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/usuarios/delete',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
},'POST',false,false)" class="btn btn-danger btn-circle">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                                <a  class="btn btn-info btn-circle">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php } else { ?>
                 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_USUARIOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['item']->value['bloqueado']==1) {?> class="bg-danger" <?php }?>>
                    <?php } else { ?>
                            <tr class="bg-gold">
                    <?php }?>
                    <td class="<?php if ($_smarty_tpl->tpl_vars['item']->value['tipo']=='mayorista') {?>bg-info<?php }
if ($_smarty_tpl->tpl_vars['item']->value['tipo']=='cliente') {?>bg-warning<?php }?>"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['tipo'];?>
</b></td>
                        <td style="max-width:80px;word-break: break-all;"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                        <td style="max-width:150px;word-break: break-all;"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                            <td class="bg-success"><?php echo $_smarty_tpl->tpl_vars['item']->value['pedidos'];?>
</td>
                            <td class="bg-warning">0</td>
                        <?php } else { ?>
                            <td></td>
                            <td></td>
                        <?php }?>
                        <td style="max-width:30px;">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                        	<div class="checkbox" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
		                        <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['bloqueado']==1) {?> checked <?php }?> />
		                        <label></label>
		                    </div>
		                <?php }?>
                        </td>
                        <td style="min-width:135px;">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['owner']!=1) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/usuarios/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  class="btn btn-warning btn-circle">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/usuarios/delete',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
},'POST',false,false)" class="btn btn-danger btn-circle">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                                <a  class="btn btn-info btn-circle">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
<?php }?><?php }} ?>
