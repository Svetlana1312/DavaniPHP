<?php
    $path=explode('?', $_SERVER['REQUEST_URI']);

    $path=$path[1];// coge la parte que viene detras del ?
    $previous=explode('/',$path);
    $previous=array_slice($previous,0,count($previous)-1);
    $previous=implode('/',$previous);
    $upload_folder='files/';
    $actual_folder=$upload_folder.$path;
    if(empty($path)) // quitamos la barra incilnada si no hay subcarpeta
         $actual_folder=substr($actual_folder,0,-1);
    $dir=opendir($actual_folder) or die('Cannot open folder:'.$actual_folder);
    $archivos=null;
    $contador=0;
    function checkImage($url,$ext){
        //imagenes permitidas
        $images=['png','ico','jpg','gif','bmp','JPG','jpeg'];
        foreach ($images as $key){
            if($ext==$key) return $url;
        } // si coincide la extención, defuelve el url
        // si no, ?????
        return ABSOLUTE_URL.'img/files/'.$ext.'.ico';
    }
    $images=['jpg','png','ico','JPG','PNG','ICO']; //????
    while($file=readdir($dir)){
        if($file!='.'){
            if(!is_file($actual_folder.'/'.$file)){
                if($file=='..'){
                    if(!empty($path)){
                        $archivos[$contador]['tipo']='carpeta';
                        $archivos[$contador]['nombre']='Subir carpeta';
                        $archivos[$contador]['extension']='none';
                        $archivos[$contador]['icono']=ABSOLUTE_URL.'img/files/folder_up.png';
                        $archivos[$contador]['url']=ABSOLUTE_URL.'mi-cuenta/explorador-de-archivos?'.$previous;
                        $contador++; 
                    }
                }else{
                    $archivos[$contador]['tipo']='carpeta';
                    $archivos[$contador]['nombre']=$file;
                    $archivos[$contador]['extension']='none';
                    $archivos[$contador]['icono']=ABSOLUTE_URL.'img/files/folder.png';
                    $archivos[$contador]['path']=$actual_folder.'/'.$file;
                    if(empty($path)){
                        $archivos[$contador]['url']='?'.$file;
                    }else{
                        $archivos[$contador]['url']=$_SERVER['REQUEST_URI'].'/'.$file;
                   }
                    $contador++;
                }
            }else{
                $archivos[$contador]['tipo']='archivo';
                $archivos[$contador]['nombre']=$file;
                $parts=explode('.',$file);
                $archivos[$contador]['extension']=end($parts);
                $archivos[$contador]['icono']=checkImage(ABSOLUTE_URL.$actual_folder.'/'.$file,end($parts));
                $archivos[$contador]['path']=$actual_folder.'/'.$file;
                $archivos[$contador]['url']=ABSOLUTE_URL.$actual_folder.'/'.$file;
                $contador++; 
            }
        }
    }
    closedir($dir);
    $smarty->assign('ARCHIVOS',json_encode($archivos));
    $smarty->assign('PATH',$actual_folder);


