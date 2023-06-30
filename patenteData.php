
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
       <a href="index.php"> <h1 class="title">Patentes VVVD</h1> </a>
       <a href="pagarMulta.php"><h2>Pagar Multa</h2></a>
    </header>

    <?php 
       if(isset($_POST['submit'])){
            include "conection.php";
            $patente = $_POST['patent'];
            $consulta = "SELECT * FROM `patentes` WHERE `Patente_ID` = '$patente'";
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado != false) $datosPatente = mysqli_fetch_array($resultado);
            else echo "ERROR";

            if($resultado){
                echo '<div class="patente-data">';
                    echo '<div class="patentes-data-column-group">';
                        echo '<div class="patentes-data-column"> Patente ID </div> <div class="patentes-data-column"> Nombre </div> <div class="patentes-data-column"> Dirección </div> <div class="patentes-data-column"> Modelo </div> <div class="patentes-data-column"> Marca </div> <div class="patentes-data-column"> Año </div>';
                    echo "</div>";
                    echo '<div class="patentes-data-row-group">';
                        echo '<div class="patentes-data-row">'.$datosPatente['Patente_ID'].'</div>'.'<div class="patentes-data-row">'.$datosPatente['nombre'].'</div> <div class="patentes-data-row">'.$datosPatente['direction'].'</div> <div class="patentes-data-row">'.$datosPatente['modelo'].'</div> <div class="patentes-data-row">'.$datosPatente['marca'].'</div> <div class="patentes-data-row">'.$datosPatente['year']."</div>";
                    echo "</div>";
                echo "</div>";

                $consultaMulta = "SELECT * FROM `multas` WHERE `Patente_ID` = '$patente'";
                $resultadoMulta = mysqli_query($conexion,$consultaMulta);
                if($resultadoMulta != false) $datosMulta = mysqli_fetch_array($resultadoMulta);
                else echo "ERROR";

                if($resultadoMulta && count($datosMulta) != 0){
                    echo '<div class="multa-data">';
                        echo '<div class="multa-data-column-group">';
                            echo '<div class="multa-data-column"> Multa ID </div> <div class="multa-data-column"> Monto </div> <div class="multa-data-column"> Estado </div> <div class="multa-data-column"> Lugar </div> <div class="multa-data-column"> Razon </div>';
                        echo "</div>";
                        echo '<div class="multa-data-row-group">';
                            echo '<div class="multa-data-row">'.$datosMulta['Multa_ID'].'</div> <div class="multa-data-row">'.$datosMulta['Monto'].'</div> <div class="multa-data-row">'.$datosMulta['Estado'].'</div> <div class="multa-data-row">'.$datosMulta['Registro'].'</div> <div class="multa-data-row">'.$datosMulta['Razon']."</div>";
                        echo "</div>";
                    echo "</div>";
                }
            }
            
        }
    ?>

    <footer></footer>
</body>
</html>