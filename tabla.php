<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Tablas</title>
</head>
<body>
<table border="1">
<thead>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido Ma</th>
    <th>Apellido Pa</th>
  </tr>
</thead>
<?php 
      $personas=array(
	                        "0"=>array ("id" => "0",
	                                 "nombre" => "juan",
	                                 "ap" => "hernandez",
	                                 "am" => "arana" ),

                          "1"=>array ( "id" => "1",
                          	          "nombre"=> "alberto",
                          	          "ap" => "barajas", 
                          	          "am" => "patria"),

                          "2"=>array ( "id" => "2",
                                       "nombre" => "brenda",
                                       "ap" => "damian",
                                       "am" =>"gonzalez"),

                          "3"=>array ( "id" => "3",
                                       "nombre" => "mario",
                                        "ap" => "garcia",
                                        "am" => "beltran"),

                          "4"=>array ("id" => "4",
                                        "nombre" => "jimena",
                                        "ap" => "guzman",
                                        "am" => "baltazar")
                        ); 
 ?>
 
<?php 
   
foreach ($personas as $k => $persona) { ?>

  <tr>
  <td><?php echo $persona ["id"]; ?></td>
  <td><?php echo $persona ["nombre"]; ?></td>
  <td><?php echo $persona ["ap"]; ?></td>
  <td><?php echo $persona ["am"]; ?></td>
 </tr>
 
 <?php } ?>

</body>
</table>
</html>