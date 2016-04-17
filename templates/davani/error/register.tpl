{if $REGISTER_ERROR=='empty'}
	<div class="alert alert-danger">
		<strong>Error</strong> Por favor rellene el campo {$FIELD}
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='email_existe'}
	<div class="alert alert-danger">
		<strong>Error</strong> El email {$FIELD} introducido ya está en uso 
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='email_no_valido'}
	<div class="alert alert-danger">
		<strong>Error</strong> {$FIELD} no es un email válido
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='mail_no_enviado'}
	<div class="alert alert-danger">
		<strong>Error</strong> El mensaje no se ha podido enviar
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='mail_enviado'}
	<div class="alert alert-danger">
		El proceso de registración se ha completado con exito!<br />
         Pronto recibirá un email con los datos de su cuenta.	
	</div>
	{literal}
	<script>
		setTimeout(function(){window.location.href = ABSOLUTE_URL;},2000);
	</script>
   {/literal}
	
{/if}
{if $REGISTER_ERROR=='usuario_existe'}
	<div class="alert alert-danger">
		<strong>Error</strong> Usuario con este nombre ya existe. Por favor, indique otro nombre de usuario.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='email_no_coincide'}
	<div class="alert alert-danger">
		<strong>Error</strong> El correo electrónico no coincide. Por favor, vuelva a introducirlo.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}
{if $REGISTER_ERROR=='password_no_coincide'}
	<div class="alert alert-danger">
		<strong>Error</strong> La contraseña no coincide. Por favor, vuelva a introducirla.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
{/if}