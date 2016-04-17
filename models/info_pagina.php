<?php
   
   $pagina=$mysqli->real_escape_string($_GET['opt1']);
   $query="SELECT * FROM pagina WHERE nombre_url='$pagina'";
   $result=$mysqli->query($query);
   $smarty->assign('INFO_PAGINA',$result->fetch_array());