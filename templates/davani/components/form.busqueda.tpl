<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<legend>Formulario de búsqueda</legend>
	<div class="input-group">
        <div class="input-group-btn search-panel">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            	<span id="search_concept">Filtrar categorias</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              {foreach item=item from=$MENU_CATEGORIAS_LIST}
              		<li><a href="">{$item.nombre}</a></li>
              {/foreach}
            </ul>
        </div>
        <input type="hidden" name="search_param" value="all" id="search_param">         
        <input type="text" class="form-control" name="x" placeholder="Search term...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
</div>