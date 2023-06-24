
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

    <div class="form-container">
        <form action="#" method="post">
            <div class="input-group">
                <label for="multa">ID de multa:</label>
                <input type="text" name="multa" id="multa">
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>

    <footer></footer>

    <?php 
       if(isset($_POST['submit'])){
            include "conection.php";
            $multa = $_POST['multa'];
            $consulta = 'UPDATE multas SET Estado = "Pagado" WHERE Multa_ID = "'.$multa.'"';
            $resultado = mysqli_query($conexion,$consulta);
            if($resultado == false) echo "ERROR";

            if($resultado){
                echo "multa pagada";
            }
            
        }
    ?>
</body>
</html>