<?php
    // configuracion de acceso a la base de datos , url absoluta etc
    //require 'config/config.php';
    ini_set("display_errors", true);
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    $mysqli=new mysqli('localhost','aclass_da_u', 'a64499446A', 'aclass_davani');
    if ($mysqli->connect_error) {
             die('Error de Conexión (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
        }
    $mysqli->set_charset("utf8");
         // termina 'config/config.php'


    define('ABSOLUTE_URL','http://localhost/davani_old/');//define('ABSOLUTE_URL','http://davani.aclass.pro/');
    define('TEMPLATE_URL',ABSOLUTE_URL.'templates/davani/');
    include 'config/functions.php';
    //incluimos la clase smarty para renderizar las vistas
	define('SMARTY_DIR', 'c:/xampp/htdocs/davani_old/libs/');
    require_once 'libs/Smarty.class.php';
    //iniciamos la instancia de smarty 
    $smarty = new Smarty();
    $smarty->force_compile = true;
    $smarty->debugging = true;
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;
    
    //url absoluta para elementos
    $smarty->assign("ABSOLUTE_URL",ABSOLUTE_URL, true);
    $smarty->assign("TEMPLATE_URL",TEMPLATE_URL);
    $smarty->assign('URL_ACTUAL',  substr(ABSOLUTE_URL,0,-12).$_SERVER['REQUEST_URI']);	//$smarty->assign('URL_ACTUAL',  substr(ABSOLUTE_URL,0,-1).$_SERVER['REQUEST_URI']);

    
  // include 'models/testPage.php';
if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
    $pagina=$mysqli->real_escape_string($_GET['pagina']);
}  else {
    $pagina='inicio';
}

$query="SELECT * FROM pagina WHERE nombre_url='$pagina' LIMIT 1";
$result=$mysqli->query($query);
$controlador='';
if($result->num_rows==0)
{
    header ('location:'.ABSOLUTE_URL);
}
else{
    $row=$result->fetch_array();
    $controlador=$row['controlador'];
    $smarty->assign('DATOS_PAGINA',$row);
}
  // termina models/testPage.php


    //url absoluta para acciones
    $smarty->assign('PUBLIC_CONTROLLERS',ABSOLUTE_URL.'controllers/public/');
    //añadimos datos comunes de la página (consultas paginas menu , menu categorias ... )
       
    //testLogin
    //include 'models/testLogin.php';
include 'models/paises.php';//carga los paises de la tabla paises

if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
    //include 'models/datos_cuenta.php';
    $query="SELECT * FROM tienda_usuarios WHERE id='".$_SESSION['usuario']."' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('DATOS_USUARIO',$result->fetch_array());
    $smarty->assign('LOGIN',true);
    //termina 'models/datos_cuenta.php';
    //include 'models/datos_facturacion.php'
    $query="SELECT * FROM direcciones WHERE usuario_id='".$_SESSION['usuario']."'  AND tipo='BT' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('DATOS_FACTURACION',$result->fetch_assoc());

    // termina 'models/datos_facturacion.php'
    // include 'models/datos_envio.php'
    //

    $query="SELECT  d.id as id,d.name as name,d.middle_name as middle_name,d.NIFDNINIE as NIFDNINIE,d.usuario_id  as usuario_id,
            d.address_1 as address_1,d.phone_1 as phone_1,d.fax as fax,d.title as title,d.city as city,
            c.name as pais,s.name as provincia FROM direcciones d left join countries c on d.virtuemart_country_id=c.id left join states s on d.virtuemart_state_id=s.id
            WHERE d.usuario_id='".$_SESSION['usuario']."' AND d.tipo='ST'";
    $result=$mysqli->query($query);
    if($result)
    {
        $smarty->assign('DATOS_ENVIO',$result);
        $smarty->assign('NUM_DIRECCIONES',$result->num_rows);
    }

    else
        echo "No esta asignado DATOS_ENVIO";


    // termina 'models/datos_envio.php'
}

// termina testLogin


    //obtener elementos menu y asignacion
    //include 'models/elementosmenu.php';
   $query="SELECT * FROM pagina WHERE menu=1 AND publicada ORDER BY posicion ASC";
   $result=$mysqli->query($query);
   $smarty->assign('MENU_LIST',$result,true);
   //termina 'models/elementosmenu.php';

    //elementos lista de categorias y asignacion
  //  include 'models/menucategorias.php';
//consulta categorias para el menu lateral

$smarty->assign('MENU_CATEGORIAS_LIST',damehijos(0));
//  termina 'models/menucategorias.php';

    //include sendero model
    // include 'models/sendero.php';
$smarty->assign('SENDERO',crearSendero());
// termina 'models/sendero.php';
    //obtenemos el usuario actual
    //getIdUsuario();
    if(!include('controllers/'.$controlador.'.php')){
        echo '<h1>Vista '.$controlador.' no encontrada</h1>';
    }
    //cerramos todas las conexiones 
    $mysqli->close();