<!-- Proposito: Este sistema debe permitir ver datos de patentes y pagar multas almacenadas en bases de datos -->

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
        <form action="patenteData.php" method="post">
            <div class="input-group ">
                <label for="patent">Patente:</label>
                <input type="text" name="patent" id="patent" class="patente-form">
            </div>
            <input type="submit" value="Buscar" name="submit" class="button-50">
        </form>
    </div>

    <footer></footer>
</main>
</body>
</html>