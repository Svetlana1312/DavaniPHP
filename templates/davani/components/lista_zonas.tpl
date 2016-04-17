<form action="javascript:alert('Opcion no activada');">
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
                {foreach item=item from=$ZONAS}
                    <tr>
                        <td>{$item.nombre}</td>
                        <td style="word-break: all;max-width: 120px">{$item.descripcion}</td>
                        <th>{$item.paises}</th>
                        <td>
                            {if $item.publicada==1}
                                <span class="glyphicon glyphicon-ok text-success"></span>
                            {else}
                                <span class="glyphicon glyphicon-remove text-danger"></span>
                            {/if}
                        </td>
                        <td>
                            <a href="{$URL_ACTUAL}/modificar/{$item.id}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-cog"></span>
                            </a>
                            {if $item.paises==0}
                                <a href="{$URL_ACTUAL}/delete/{$item.id}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>  
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>    
</div>
