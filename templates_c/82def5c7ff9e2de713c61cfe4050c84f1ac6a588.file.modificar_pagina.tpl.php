<?php /* Smarty version Smarty-3.1.21, created on 2015-07-21 15:31:36
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/modificar_pagina.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21891215055ae49b81b4791-67178308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82def5c7ff9e2de713c61cfe4050c84f1ac6a588' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/modificar_pagina.tpl',
      1 => 1434119967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21891215055ae49b81b4791-67178308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INFO_PAGINA' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ae49b82b6d17_05018850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae49b82b6d17_05018850')) {function content_55ae49b82b6d17_05018850($_smarty_tpl) {?><div class="col-xs-12">
    <h4><b class="text-danger">Modificar pagina :</b> <?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['nombre'];?>
</h4>
    <form id="form-mod" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/guardar',$('#form-mod').serialize(),'POST',$('#result'),false)">
        <div class="col-xs-12 col-sm-6">
            <legend>Información básica</legend>
            <label>Nombre de página</label>
            <input type="text" required name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['nombre'];?>
" class="form-control" />
            <label>Url de página <small class="text-danger">(* debe ser única )</small></label>
            <input type="text" required name="nombre_url" value="<?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['nombre_url'];?>
" class="form-control" />
            <label>En el menú</label>
            <select required name="menu" class="form-control">
                <option disabled="true" >Elige una opción</option>
                <option <?php if ($_smarty_tpl->tpl_vars['INFO_PAGINA']->value['menu']==1) {?> selected <?php }?> value="1">Si</option>
                <option <?php if ($_smarty_tpl->tpl_vars['INFO_PAGINA']->value['menu']==0) {?> selected <?php }?> value="0">No</option>
            </select>
            <label>Publicar</label>
            <select required name="publicada" class="form-control">
                <option disabled="true" >Elige una opción</option>
                <option <?php if ($_smarty_tpl->tpl_vars['INFO_PAGINA']->value['publicada']==1) {?> selected <?php }?> value="1">Si</option>
                <option <?php if ($_smarty_tpl->tpl_vars['INFO_PAGINA']->value['publicada']==0) {?> selected <?php }?> value="0">No</option>
            </select>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['id'];?>
" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <legend>Posicionamiento en buscadores</legend>
            <label>Titulo de página</label>
            <input type="text" required name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['titulo'];?>
" class="form-control" />
            <label>Descripción de página <small>(* máx 70 carácteres.)</small></label>
            <textarea style="max-height:100px !important;height:100px;min-height:100px;" class="form-control" required name="descripcion"><?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['descripcion'];?>
</textarea>
            <label>Palabras claves de página <small>(* palabras o grupos de palabras separadas por coma.)</small></label>
            <textarea style="max-height:100px !important;height:100px;min-height:100px;" class="form-control" required name="keywords"><?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['keywords'];?>
</textarea>
        </div>
        <div class="col-xs-12">
            <label>Contenido</label>
            <textarea style="height:500px" class="form-control" id="editor"  name="contenido"><?php echo $_smarty_tpl->tpl_vars['INFO_PAGINA']->value['contenido'];?>
</textarea>
        </div>
        <div id="result" class="col-xs-12">
            <br>
            <button class="btn btn-warning">Modificar</button>
        </div>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../components/tinymce.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
