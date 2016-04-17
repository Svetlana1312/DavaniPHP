<div class="panel panel-default hidden-xs">
                        <div class="col-xs-12">
                            <h2>Iniciar sesión</h2>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                            <span class="glyphicon glyphicon-user" style="font-size:5em;"></span>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                            <form id="form-login" action="javascript:enviarDatosAjax('{$ABSOLUTE_URL}acceso/login',$('#form-login').serialize(),'POST',$('#result_login_content'),false)">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="" required />   
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" required />    
                                </div>
                                <div id="result_login_content">
                                    <button class="btn btn-block btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </form>
                            <a class="center-block text-center" href="{$ABSOLUTE_URL}recuperar-cuenta">¿ Olvidó su contraseña ?</a>
                            <a class="center-block text-center" href="{$ABSOLUTE_URL}crear-cuenta">Crear una cuenta</a>
                        </div>
                    </div>