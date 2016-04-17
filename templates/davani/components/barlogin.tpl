                <div class="panel panel-default hidden-xs" id="panel-login">
                    <div class="panel panel-heading">
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class="panel-body">
                        <form id="form-login" action="javascript:enviarDatosAjax('{$ABSOLUTE_URL}acceso/login',$('#form-login').serialize(),'POST',$('#panel-login'),false)">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="{$USUARIO}" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" required />    
                            </div>
                            <div class="errorMessage" style="color:red;">{$MESSAGE}</div>
                            <div id="result-login">
                                <button class="btn btn-block btn-primary">
                                    Entrar
                                </button>
                            </div>
                        </form>
                        <a class="center-block text-center" href="{$ABSOLUTE_URL}recuperar-cuenta">¿ Olvidó su contraseña ?</a>
                        <a class="center-block text-center" href="{$ABSOLUTE_URL}crear-cuenta">Crear una cuenta</a>
                    </div>
                </div>