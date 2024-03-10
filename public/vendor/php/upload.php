<?php
$ruta_indexphp = dirname(realpath(__FILE__));
$extensiones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png');
$ruta_fichero_origen = $_FILES['imagen1']['tmp_name'];
$ruta_nuevo_destino = '../../products/' . $_FILES['imagen1']['name'];
if ( in_array($_FILES['imagen1']['type'], $extensiones) ) {
     echo 'Es una imagen'; 
          if( move_uploaded_file ( $ruta_fichero_origen, $ruta_nuevo_destino ) ) {
               echo 'Fichero guardado con éxito';
          } 
}
echo $ruta_fichero_origen
?>