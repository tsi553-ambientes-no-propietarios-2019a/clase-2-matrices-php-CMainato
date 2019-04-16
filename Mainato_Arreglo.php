<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
 
<body>
 
<?php
$datos=array(
    array("Carlos","Granda","32"),
    array("Juan","Martinez","31"),
    array("Maria","Jimenez","22")
);
 
// rellenamos los colores sin significado
for($i=0;$i<count($datos);$i++){
    if($datos[$i][2]=="" && array_key_exists($datos[$i][3]))
    {
    }
}
?>
 
<table border="2" align="center">
    <thead>
        <tr>
            <?php
              $array = array("Nombre ","Apellido ","Edad ");
                foreach ($array as $encabezado) {
                  echo '<th>'.$encabezado.'</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        // obtenemos los colores
        foreach ($datos as $array){
            echo "<tr>";
                foreach($array as $contenido)
                {
                    echo "<td>".$contenido."</td>";
                }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
 
</body>
</html>