<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOZU</title>
</head>
<body>
    
</body>
</html>
<?php 

require '../config.php';
header('Content-Type: application/json');
$sql=sprintf("SELECT * FROM sanmarcos_nodo");
$query = $mysqli->query($sql);
$response = array();
while($rows = $query->fetch_array()) {
		
    $response []= array(

                'nod_int_iu' => $rows['nod_int_id'],
                'nod_txt_name' => $rows['nod_txt_name'],
                'nod_txt_description' => $rows['nod_txt_description'],
                'nod_txt_latitud' => $rows['nod_double_latitud'],
                'nod_txt_longitud' => $rows['nod_double_longitud'],
                'nod_txt_distrito' => $rows['nod_txt_distrito'],
                'nod_txt_provincia' => $rows['nod_txt_provincia'],
                'nod_txt_region'=> $rows['nod_txt_region'],
                'nod_txt_habilitado' => $rows['nod_int_habilitado'],
                'nod_txt_registro' => $rows['nod_date_registro'],
                'nod_txt_actualizacion' => $rows['nod_date_actualizacion']

                );
}

echo json_encode($response);