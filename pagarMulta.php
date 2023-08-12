
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/logo_afip.png">
    <title>Document</title>
</head>
<body>
<div class="background"> </div>
<main>
<header class="header">
        <h1 class="title">Patentes VVVD</h1>
        <nav class="nav">
            <ul class="nav__ul">
                <a href="index.php"> <li class="nav__li">Patente</li> </a>
                <a href="pagarMulta.php"><li class="nav__li">Pagar Multas</li></a>
            </ul>
        </nav>
    </header>

    <div class="form-container">
        <form action="#" method="post">
            <div class="input-group">
                <label for="multa">ID de multa:</label>
                <input type="text" name="multa" id="multa">
            </div>
            <input type="submit" value="Pagar" name="submit"  class="button-50">
        </form>
    </div>

    <footer></footer>

    <?php 
       if(isset($_POST['submit'])){
        include "conection.php";
        $multa = $_POST['multa'];
    
        $consulta = 'UPDATE multas SET Estado = "Pagado" WHERE Multa_ID = "'.$multa.'"';
        $resultado = mysqli_query($conexion, $consulta);
        
        if($resultado === false) {
            echo "ERROR";
        } else {
            if(mysqli_affected_rows($conexion) > 0) {
                echo '<div class="multa-result"> Multa pagada </div>';

                echo '<div class="multa-ticket"> MULTA: '.$multa.' fue pagada el dia '.date("Y-m-d H:i:s").' </div>';
            } else {
                echo '<div class="multa-result"> Error: Multa no encontrada </div>';
            }
        }
            
        }
    ?>
     </main>
</body>
</html>