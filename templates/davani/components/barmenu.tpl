    <div class="panel panel-default">
                        <div class="panel-heading">
                            Catálogo <span data-toggle="collapse" data-target="#product-bar" class="glyphicon glyphicon-menu-hamburger visible-xs pull-right"></span>
                        </div> 
                        <div id="product-bar" class="panel-body collapse in">
                            {function menu}
                                <ul id="l{$entry.id}" {if $level!='0'} class="collapse"{/if}>
                                {foreach $data as $entry}
                                      {if tieneHijos('categorias','categoria_id',$entry.id)}
                                        <li class="dropdown">
                                            <a   href="{$ABSOLUTE_URL}{$url}{$entry.nombre_url}"><h2>{$entry.nombre} </h2></a>
                                            <span data-toggle="collapse" href="#l{$entry.id}" aria-expanded="false" 
                                                  aria-controls="collapseExample"  class="glyphicon glyphicon-chevron-down"></span>
                                            {assign var="nurl" value="$url{$entry.nombre_url}/"}
                                            {menu data=damehijos($entry.id) level=$level+1 url=$nurl}
                                        </li>
                                      {else}
                                        <li>
                                            <a href="{$ABSOLUTE_URL}{$url}{$entry.nombre_url}"><h2>{$entry.nombre}</h2></a>
                                        </li>
                                      {/if}
                                    </li>
                                {/foreach}
                                </ul>
                            {/function}
                            {menu data=$MENU_CATEGORIAS_LIST level=0 url='catalogo/'}
                        </div>
                    </div>