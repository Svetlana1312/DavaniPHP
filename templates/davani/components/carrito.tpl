
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</h5>
							</div>
							<div class="col-xs-6">
								<a href="{$ABSOLUTE_URL}" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continuar comprando
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Nombre del producto</strong></h4><h4><small>Descripcion del producto</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-danger btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Nombre del producto</strong></h4><h4><small>Descripcion del producto</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-danger btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Realizastes algún cambio?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-warning btn-sm btn-block">
									Actualizar carrito
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>50.00 €</strong></h4>
						</div>
						<div class="col-xs-3">
							{if $LOGIN==true}
							<a href="{$URL_ACTUAL}/finalizar" type="button" class="btn btn-success btn-block">
								Siguiente paso
							</a>
							{else}
							Por favor <a href="{$ABSOLUTE_URL}acceso">inicia sesion</a> o <a href="{$ABSOLUTE_URL}crear-cuenta">crea una cuenta</a>
							{/if}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>