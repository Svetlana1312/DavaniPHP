<?php 
// Frameworks 
// Desarrollado por Angel Fraga Parodi

// funcion capar listos
function capar(){
  $pos = strpos($_SERVER['HTTP_REFERER'],ABSOLUTE_URL);
    if($pos===false){
      return true;
    }else{
      if($pos==0){
        return false;
      }else{
        return true;
      }
    }
}


/* Tratar enlaces */
function UrlToName($str){
	$str=str_replace("-"," ",$str);
	$str=limpiarVariable($str);
	return $str;
}
function NameToUrl($str){
	$str=str_replace(" ","-",$str);
	return $str;
}
function limpiarVariable($str){
	$caracteres=array('\'',"\"",";","*",'?','´','`','^');
	foreach ($caracteres as $key) {
		$str=str_replace($key,'',$str);
	}
	return $str;
}

/* verificar pàgina */
function verificarPagina(){ 
    global $mysqli;
  // si la variable esta vacia o no existe 
  if(!isset($_GET['pagina'])||empty($_GET['pagina'])){
      // la manadamos a inicio
      header("location:".ABSOLUTE_URL."inicio.html");
  }else{
      $query="SELECT * FROM paginas WHERE nombre='".limpiarVariable(UrlToName($_GET['pagina']))."'";
      $result=$mysqli->query($query);
      $count=$result->num_rows;
      if($count==0){
        header("Location:".ABSOLUTE_URL.'404.html');
      }
    }
}
function getMetas(){
    global $mysqli;
    $query="SELECT * FROM paginas WHERE nombre='".UrlToName($_GET['pagina'])."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    include 'controladores_frontend/'.$row['controlador'].'/metas.php';
}
/* Paginas para el menu superior */
function getPaginasMenu(){
  global $mysqli;
  $menu="";
	$query="SELECT * FROM paginas WHERE menu=1 ORDER BY posicion";
	$result=$mysqli->query($query);
	while($row=$result->fetch_array()){
		$menu.='<li><a ';
    if($row['nombre']==UrlToName($_GET['pagina'])){
      $menu.=' class="active" ';
    }
    $menu.='href="'.ABSOLUTE_URL.NameToUrl($row['nombre']).'.html">'.$row['nombre'].'</a></li>';
	}
  return $menu;
}
/* Funciones para la  barra lateral  */
			// test recursive
            function getHijos($mysqli,$id){
              $query="SELECT * FROM categorias_productos WHERE categoria_id='$id'";
              $result=$mysqli->query($query);
              $count=$result->num_rows;
              if($count==0) return false;
              else return true;
            }
            // recursive tree DESC
            function getCategoriasBar($mysqli,$padre_id,$url,$texto){
              $query="SELECT * FROM categorias_productos WHERE categoria_id='$padre_id'";
              $result=$mysqli->query($query);
              while($row=$result->fetch_array()){
                $texto.="<h2 class='panel-title'> - <a href='".ABSOLUTE_URL."categorias".$url."/".NameToUrl($row['nombre']).".html'>".$row['nombre']."</a>";
                  if(getHijos($mysqli,$row['id'])){
                	$texto.="<span class='despegable glyphicon glyphicon-chevron-right' data-despegable-item='".$row['id']."'></span>
                	<div class='no-desplegado' data-despegable='".$row['id']."'>
                	".getCategoriasBar($mysqli,$row['id'],$url."/".NameToUrl($row['nombre']),"")."
                	</div>";
                	 }
              	$texto.="</h2>";
            	  }
              return $texto;
        	}
        /* Get Controlador pagina actual */
function getControlador($mysqli){
    $query="SELECT controlador ,contenido FROM paginas WHERE nombre='".UrlToName($_GET['pagina'])."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    if($row[0]!=''){
      if(file_exists('controladores_frontend/'.$row[0])){
             if(! include'controladores_frontend/'.$row[0].'/index.php')
              echo "No se ha podido cargar el controlador"; 
          }else{
            echo $row[1];
          }
    }else{
       echo $row[1];
    }
    
    
}
      /* contenido pagina sin controlador */
function getContenidoPagina($mysqli,$pagina){
    $query="SELECT contenido FROM paginas WHERE nombre='".UrlToName($pagina)."' ";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    if(empty($row[0])){
      echo "Estamos trabajando para crear el contenido de esta sección";
    }else{
     echo $row[0]; 
    }
    
}
// obtener url actual para el sendero
function urlActual(){
  $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  return $url;
}
function urlAnterior($str){
      $url=urlActual();
      $nueva=split($str,$url);
      $nueva=$nueva[0].$str.'.html';
      return $nueva;
}
// obtener ip usuario
function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
function getIdUsuario(){
  global $mysqli;
  $ip=get_client_ip();
  if(!isset($_SESSION['usuario_id'])||empty($_SESSION['usuario_id'])
    ||!isset($_SESSION['tipo_usuario'])||empty($_SESSION['tipo_usuario'])){
    $query="SELECT * FROM tienda_usuarios WHERE ip='$ip' AND tipo_id='4' ";
    $result=$mysqli->query($query);
    $count=$result->num_rows;
    if($count!=0){
      $row=$result->fetch_array();
      $_SESSION['usuario_id']=$row['id'];
      $_SESSION['tipo_usuario']=4;
    }else{
      $query="INSERT INTO tienda_usuarios (tipo_id,ip) VALUES ('4','$ip') ";
      $mysqli->query($query);
      $query="SELECT * FROM tienda_usuarios WHERE ip='$ip' AND tipo_id='4' ";
      $result=$mysqli->query($query);
      $row=$result->fetch_array();
      $_SESSION['usuario_id']=$row['id'];
      $_SESSION['tipo_usuario']=4;
    }
  }else{
    // de tener todo lo actualizamos su fecha 
    actualizarFechaUsuario($_SESSION['usuario_id']);
  }
}
function getNombreUsuario($mysqli){
  $query="SELECT nombre_contacto FROM usuarios WHERE id='".$_SESSION['usuario_id']."'";
  $result=$mysqli->query($query);
  $row=$result->fetch_array();
  echo $row[0];
}
// actualizar fecha usuario 
function actualizarFechaUsuario($usuario_id){
  global $mysqli;
      if($tipo_usuario==4){
        $query="UPDATE usuarios SET registerDate='".DATE('Y-m-d H:i:s')."' WHERE  id='$usuario_id'";
        $mysqli->query($query);
      }else{
        $query="UPDATE datos_acceso SET  lastvisitDate='".DATE('Y-m-d H:i:s')."'  WHERE  usuario_id='$usuario_id' ";
        $mysqli->query($query);
      }
}
/* Borrar usuarios visitantes con mas de una hora de inactividad*/
function borrarVisitantesAntiguos($mysqli){
    $query="DELETE FROM usuarios WHERE tipo_id=4 AND TIMESTAMPDIFF(hour,fecha_crea,NOW())>=1";
    $mysqli->query($query);
}
/* Acciones panel de usuario , validacion y contenido */
function validarAccion($mysqli,$accion){

      $query="SELECT * FROM  v_acciones  WHERE nombre='$accion' AND
      usuario_id='".$_SESSION['usuario_id']."' AND tipo_id='".$_SESSION['tipo_usuario']."' ";
      $result=$mysqli->query($query);
      $count=$result->num_rows;
  if($count==0){
    echo "Pagina no encontrada ";
  }else{
    $row=$result->fetch_array();
    if(!include 'controladores_backend/'.$row['carpeta'].'/index.php')
      echo "Error al cargar el controlador";
  }
}
function getAccionesPanel($mysqli){
    global $mysqli;
    if(isset($_GET['accion'])||!empty($_GET['accion'])){
        validarAccion($mysqli,UrlToName($_GET['accion']));
    }else{
       //sacar acciones para cada tipo de usuario
      $query="SELECT * FROM v_acciones  WHERE
      usuario_id='".$_SESSION['usuario_id']."' AND tipo_id='".$_SESSION['tipo_usuario']."'";
      $result=$mysqli->query($query);
      return $result;
    }
}
// Funcion para devolver el numero de padres para modificar o no htacces
// Asi sabemos el numero en descendente dentro de la familia 
// para compararlo con el numero en descendente max de toda la familia
function numeroFamilia($mysqli,$table,$campo,$valor,$numero){
    $query="SELECT * FROM $table WHERE id='$valor' ";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    if($result->num_rows!=0){
      numeroFamilia($mysqli,$table,$campo,$row[$campo],$numero+1);
    }else{
      return $numero;
    }
}

// get ultima conexión del usuario
function getUltimaConexion(){
    global $mysqli;
    $query="SELECT * FROM datos_acceso WHERE usuario_id='".$_SESSION['usuario_id']."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    return $row['ultima_con'];
}

//get enum types
function getEnums($table_name, $column_name, $echo = false)
{   
   global $mysqli;
   $selectDropdown = "<select class='form-control' name='$column_name'>";
   $query ="SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
       WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'";
   $result=$mysqli->query($query);
   $row=$result->fetch_array();
   $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));
   return $enumList;
}
function getInfoSystem($str){
   global $mysqli;
   $query="SELECT valor FROM sistema WHERE nombre='$str'";
   $result=$mysqli->query($query);
   $row=$result->fetch_array();
   return $row['valor'];
}

//pagination
function paginate($item_per_page, $current_page, $total_records, $total_pages, $page_url)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link
        
        if($current_page > 1){
            $previous_link = ($previous==0)?1:$previous;
            $previous_link=intval($previous_link);
            $pagination .= '<li class="first"><a href="'.$page_url.'?page=1" title="First">&laquo;</a></li>'; //first link
            $pagination .= '<li><a href="'.$page_url.'?page='.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
                for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<li><a href="'.$page_url.'?page='.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; //set first link to false
        }
        
        if($first_link){ //if current active page is first link
            $pagination .= '<li class="first active"><a>'.$current_page.'</a></li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<li class="last active"><a>'.$current_page.'</a></li>';
        }else{ //regular current link
            $pagination .= '<li class="active"><a>'.$current_page.'</a></li>';
        }
        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li><a href="'.$page_url.'?page='.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
                $next_link = ($i > $total_pages)? $total_pages : $i;
                $pagination .= '<li><a href="'.$page_url.'?page='.intval($next_link).'" >&gt;</a></li>'; //next link
                $pagination .= '<li class="last"><a href="'.$page_url.'?page='.intval($total_pages).'" title="Last">&raquo;</a></li>'; //last link
        }
        $pagination .= '</ul>'; 
    }
    return $pagination; //return pagination links
}
function crear_array_index($array,$delimitador){
    foreach($array as $key){
            $subarray=explode($delimitador,$key);
            $string_index=$subarray[0];
            $string_value=$subarray[1];
            $array[$string_index]=$string_value;
        }
    return $array;
}
    function tieneHijos($table,$campopadre,$id){
        global $mysqli;
        $query="SELECT * FROM $table WHERE $campopadre='$id'";
        $result=$mysqli->query($query);
        if($result->num_rows==0) return false;
        return true;
    }
    function damehijos($id){
        global $mysqli;
        $query="SELECT * FROM categorias WHERE publicada=1 AND categoria_id='$id' ORDER BY   posicion ASC";
        $result=$mysqli->query($query);
        return $result;
    }
    function generarHash($qtd){ 
    //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
    $Caracteres = 'abcdefghijklmopqrstuvxwyzABCDEFGHIJKLMOPQRSTUVXWYZ0123456789?'; 
    $QuantidadeCaracteres = strlen($Caracteres); 
    $QuantidadeCaracteres--; 

    $Hash=NULL; 
        for($x=1;$x<=$qtd;$x++){ 
            $Posicao = rand(0,$QuantidadeCaracteres); 
            $Hash .= substr($Caracteres,$Posicao,1); 
        } 

    return $Hash; 
    } 
    function RestarHoras($horaini,$horafin)
    {
      $horai=substr($horaini,0,2);
      $mini=substr($horaini,3,2);
      $segi=substr($horaini,6,2);
     
      $horaf=substr($horafin,0,2);
      $minf=substr($horafin,3,2);
      $segf=substr($horafin,6,2);
     
      $ini=((($horai*60)*60)+($mini*60)+$segi);
      $fin=((($horaf*60)*60)+($minf*60)+$segf);
     
      $dif=$fin-$ini;
     
      $difh=floor($dif/3600);
      $difm=floor(($dif-($difh*3600))/60);
      $difs=$dif-($difm*60)-($difh*3600);
      return date("H-i-s",mktime($difh,$difm,$difs));
    }
    function crearSendero(){
      $uri=$_SERVER['REQUEST_URI'];
      $uri_list=explode('/',substr($uri,1));
      $links=null;
      $contador=0;
      $rest=ABSOLUTE_URL;
      foreach ($uri_list as $key) {

         /* if($contador==0)
            $rest.=$key;
          else*/
          if ($contador==0){
              $contador++;
              continue;
          }
          if(strpos($key,'?'))
          { // sirve para separar explorador-de-archivos de la subcarpeta de files que se ha elegido
              $key_a=explode('?',$key); // asi no se juntan en el sendero y tiene mejor imagen el sendero
              $links[$contador]['nombre']=$key_a[0];
              if($contador==1)
                  $rest.=$key_a[0];
              else
                  $rest.='/'.$key_a[0];
              $links[$contador]['enlace']=$rest;
              $contador++;
              $key=$key_a[1];
              $links[$contador]['nombre']=$key;
              if($contador==1)
                  $rest.=$key;
              else
                  $rest.='?'.$key;
              $links[$contador]['enlace']=$rest; // para que salga ? en el url

              $contador+=1;
              continue;

          }

          $links[$contador]['nombre']=$key;

          if($contador==1)
            $rest.=$key;
          else
            $rest.='/'.$key;
          $links[$contador]['enlace']=$rest;

          $contador+=1;
      }
      return $links;
    }
    
    function testAccion($accion,$tipo){
        global $mysqli;
        if(!is_numeric($accion)){
            $query="SELECT id FROM acciones WHERE url='$accion'";
            $result=$mysqli->query($query);
            $row=$result->fetch_array();
            $accion=$row[0];
        }
        $query="SELECT * FROM permisos WHERE accion_id='$accion' AND tipo_usuario_id='$tipo'";
        $result=$mysqli->query($query);
        if($result->num_rows==0) return false;
        else return true;
        
   }
   function makeSafety_url($str){
       $str= str_replace('##http##','http://', $str);
       $str= str_replace('##https##','https://', $str);
       return $str;
   }
?>