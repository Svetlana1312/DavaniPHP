<div id="header" class="row">
                <div class="col-xs-12 col-sm-3">
                    <a href="{$ABSOLUTE_URL}">
                        <img class="img-responsive center-block" alt="" src="{$ABSOLUTE_URL}img/logo.png" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-12 text-right ">
                            <br class="visible-xs">
                            ningún producto en la cesta (0)
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <b class="">|</b>
                            <span class="text-muted">Cambiar idioma</span>
                            <select>
                                <option>Español</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 pull-right">
                            <div class="input-group">
                                <input type="text" onkeyup="enviarDatosAjax('{$ABSOLUTE_URL}buscar/',{literal}{{/literal}word:$(this).val({literal}}{/literal},'POST','#result_busqueda',false)" class="form-control" placeholder="Buscar productos...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                            <div id="result_busqueda">
                                
                            </div>
                        </div>
                        <div class="col-xs-12 hidden-sm">
                           <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                            </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <ul class="nav navbar-nav">
                                                {foreach item=list from=$MENU_LIST}
                                                    <li><a href="{$ABSOLUTE_URL}{$list.nombre_url}">{$list.nombre}</a></li>
                                                {/foreach}
                                            </ul>
                                    </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                           <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                            </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <ul class="nav navbar-nav">
                                                {foreach name=outher from=$MENU_LIST item=list}
                                                    <li><a href="{$ABSOLUTE_URL}{$list.url}">{$list.name}</a></li>
                                                {/foreach}
                                            </ul>
                                    </div><!-- /.navbar-collapse -->
                            </nav>
                    </div>
            </div>