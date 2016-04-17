<?php
	if($_GET['opt1']){
		foreach ($_POST as $key => $value) {
			$$key=$mysqli->real_escape_string($value);
		}
		switch ($_GET['opt1']) {
			case 'delete':
				$query="DELETE FROM slider WHERE id='$id'";
				if($mysqli->query($query)){
					echo "Borrado con éxito";
				}else{
					echo "Hubo algún error";
				}
			break;
			case 'crear':
				$query="INSERT INTO slider (titulo,enlace,descripcion,texto,imagen) VALUES ('$titulo','$enlace','$descripcion','$texto','$imagen')";
				if($mysqli->query($query)){
					echo "Insertado con éxito";
				}else{
					echo "Hubo algún error";
				}
			break;
			case 'modificar':
				$query="UPDATE slider SET titulo='$titulo',enlace='$enlace',descripcion='$descripcion',texto='$texto',imagen='$imagen' WHERE id='$id'";
				if($mysqli->query($query)){
					echo "Modificado con éxito";
				}else{
					echo "Hubo algún error";
				}
			break;
		}
		exit();
	}else{
	 	include 'models/slider.php';
	    $list_templates[0]='../components/sendero.tpl';
	    $list_templates[1]='../components/form.slider.tpl';
	    $list_templates[2]='../components/lista.slider.tpl';	
	}
   
