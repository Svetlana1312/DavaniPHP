<?php

        $uri=explode('/',$_SERVER['REQUEST_URI']);
        $uri=explode('?',end($uri));
        $url_categoria=$mysqli->real_escape_string($uri[0]);
        $parametros=end($uri);
        $parametros= explode('&',$parametros);
        $parametros=crear_array_index($parametros,'=');
        $smarty->assign('PARAMETROS',$parametros);