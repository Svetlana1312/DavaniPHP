<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 13:37:27
         compiled from ".\templates\davani\components\form-delete-envio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:664565d9487d86035-20440973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af3f5e1e0c02faba2609408706fa751fb923358' => 
    array (
      0 => '.\\templates\\davani\\components\\form-delete-envio.tpl',
      1 => 1448969232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '664565d9487d86035-20440973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565d9487df46e1_18382766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565d9487df46e1_18382766')) {function content_565d9487df46e1_18382766($_smarty_tpl) {?><form id="datos_envio" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/delete-envio',$('#datos_envio').serialize(),'POST',false,false)">

    <input type="hidden" class="" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" />
    <div class="col-xs-12 col-sm-16">
             <p>Está segur@ que quiere borrar esta dirección de envio?</p>
              <h3><?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['res']->value['middle_name'];?>
</h3>
            <p>
                  <?php echo $_smarty_tpl->tpl_vars['res']->value['address_1'];?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['res']->value['city'];?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['res']->value['provincia'];?>
<br>
                  <?php echo $_smarty_tpl->tpl_vars['res']->value['pais'];?>

            </p>

    </div>
    <div id="result_envio" class="col-xs-12 col-sm-16">
        <button type="submit" class="btn btn-warning">Confirmar</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href=ABSOLUTE_URL + 'mi-cuenta/datos-personales'">Cancelar</button>
    </div>



</form>

<?php }} ?>
