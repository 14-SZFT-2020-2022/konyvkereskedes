<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Könyvkereskedés</title>
</head>
<body>
    <div class="container">
<?php
    $tabla = '<table>';
    $tabla = '<tr><th>Információk</th><th>Borítókép</th></tr>';
    $tabla .= '</table>';

    echo $tabla;
?>
    <br />
    <a href='./feltoltes.php'>Könyvek feltöltése</a>
    </div>

</body>
</html>