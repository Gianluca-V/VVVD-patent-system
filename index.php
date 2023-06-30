<!-- Proposito: Este sistema debe permitir ver datos de patentes y pagar multas almacenadas en bases de datos -->

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
       <a href="pagarMulta.php"><h2>Pagar Multas</h2></a>
    </header>

    <div class="form-container">
        <form action="patenteData.php" method="post">
            <div class="input-group">
                <label for="patent">Patente:</label>
                <input type="text" name="patent" id="patent">
            </div>
            <input type="submit" value="Buscar" name="submit">
        </form>
    </div>

    <footer></footer>
</body>
</html>