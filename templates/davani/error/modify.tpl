{if $REGISTER_ERROR=='empty'}
	<div class="alert alert-danger">
		<strong>Error</strong> Por favor rellene los campos obligatorios
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
{/if}
{if $REGISTER_ERROR=='email_existe'}
	<div class="alert alert-danger">
		<strong>Error</strong> El email {$FIELD} introducido ya está en uso 
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
{/if}
{if $REGISTER_ERROR=='usuario_existe'}
	<div class="alert alert-danger">
		<strong>Error</strong> El usuario {$FIELD} introducido ya está en uso
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
{/if}
{if $REGISTER_ERROR=='email_no_valido'}
	<div class="alert alert-danger">
		<strong>Error</strong> {$FIELD} no es un email válido
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}

{if $REGISTER_ERROR=='password_no_coincide'}
	<div class="alert alert-danger">
		<strong>Error</strong> La contraseña no coincide. Por favor, vuelva a introducirla.
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
{/if}