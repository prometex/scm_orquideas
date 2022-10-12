<?php 
require '../config.php';
header('Content-Type: application/json');
$sql="SELECT * FROM `sanmarcos_nodo`";
$query = $mysqli->query($sql);
while($rows = $query->fetch_array()) {
		
    $response []= array(

                'nod_int_id' => $rows['nod_int_id'],
                'nod_txt_name' => $rows['nod_txt_name'],
                'nod_txt_description' => $rows['nod_txt_description'],
                'nod_txt_latitud' => $rows['nod_txt_latitud'],
                'nod_txt_longitud' => $rows['nod_txt_longitud'],
                'nod_txt_distrito' => $rows['nod_txt_distrito'],
                'nod_txt_provincia' => $rows['nod_txt_provincia'],
                'nod_txt_region'=> $rows['nod_txt_region'],
                'nod_txt_habilitado' => $rows['nod_txt_habilitado'],
                'nod_txt_registro' => $rows['nod_txt_registro'],
                'nod_txt_actualizacion' => $rows['nod_txt_actualizacion'],

                );
}

echo json_encode($response);