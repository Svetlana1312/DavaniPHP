<div class="col-xs-12">
    <form id="form-add" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/alta_color',$('#form-add').serialize(),'POST',false,true)">
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
                {foreach item=item from=$LIST_COLORES}
                    <tr>
                        <td><img class="img-responsive thumbnail" style="height:50px" src="{$item.imagen}"/></td>
                        <td>{$item.nombre}</td>
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
                {/foreach}
            </tbody>
        </table>
    </div>
</div>