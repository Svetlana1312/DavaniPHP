{if $ERROR_LOGIN==true}
	<button class="btn btn-block btn-primary" onclick="window.location.href='{$URL_VUELTA}';">
        Entrar
    </button>
	<div class="alert alert-danger">Datos no válidos</div>
{else}
	<b class="text-success">Iniciando sesión</b>
	<script>
			window.location.href='{$URL_VUELTA}';
	</script>
{/if}