
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
                echo $datosPatente['Patente_ID'].'<br>'.$datosPatente['nombre'].'<br>'.$datosPatente['direction'].'<br>'.$datosPatente['modelo'].'<br>'.$datosPatente['marca'].'<br>'.$datosPatente['year'];
                echo "</div>";

                $consultaMulta = "SELECT * FROM `multas` WHERE `Patente_ID` = '$patente'";
                $resultadoMulta = mysqli_query($conexion,$consultaMulta);
                if($resultadoMulta != false) $datosMulta = mysqli_fetch_array($resultado);
                else echo "ERROR";

                if($resultadoMulta){
                    echo '<div class="multa-data">';
                    echo "Multas: <br>";
                    echo $datosMulta['Multa_ID'].'<br>'.$datosMulta['Monto'].'$ <br>'.$datosMulta['Estado'].'<br>'.$datosMulta['Registro'].'<br>'.$datosMulta['Razon'];
                    echo "</div>";
                }
            }
            
        }
    ?>

    <footer></footer>
</body>
</html>