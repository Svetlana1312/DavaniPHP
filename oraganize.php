<?php
    
    include 'config/config.php';
    $query="SELECT * FROM tqze7_virtuemart_vmuser_shoppergroups  ";
    $result=$mysqli->query($query);
    while($row=$result->fetch_array()){
        if($row['virtuemart_shoppergroup_id']=='3'){
            $query1="UPDATE tienda_usuarios SET tipo_usuario_id = '4' WHERE id='".$row['virtuemart_user_id']."'";
            $mysqli->query($query1);  
        }
    }
?>