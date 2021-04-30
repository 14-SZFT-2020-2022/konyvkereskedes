<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <title>Könyvkereskedés</title>
</head>
<body>
    <div class='container'>
        <form action='./feltolt.php' method='post' encrypt='multipart/form-data'>
            <div class='form-group'>
                <label for='szerzo'>Szerző</label>
                <input type='text' class='form-control' id='szerzo' name='szerzo' required='required' />
            </div>
            <div class='form-group'>
                <label for='cim'>Cím</label>
                <input type='text' class='form-control' id='cim' name='cim' required='required' />
            </div>
            <div class='form-group'>
                <label for='kiado'>Kiadó</label>
                <input type='text' class='form-control' id='kiado' name='kiado' required='required' />
            </div>
            <div class='form-group'>
                <label for='oldalSzam'>Oldalak száma</label>
                <input type='number' class='form-control' id='oldalSzam' name='oldalSzam' required='required' />
            </div>
            <div class='form-group'>
                <label for='isbn'>ISBN Szám</label>
                <input type='number' class='form-control' id='isbn' name='isbn' required='required' />
            </div>
            <div class='form-group'>
                <label for='borito'>Borítókép</label>
                <input type='file' class='form-control-file' id='borito' name='borito' required='required' />
            </div>
            <button type='submit' class='btn btn-primary'>Feltöltés</button>
        </form>
        <a href='./index.php'>Vissza a nyitóoldalra</a>
    </div>

</body>
</html>