<?php

require_once './kapcsolat.php';

$sql = 'SELECT * FROM `libri`';

$result = $conn -> query($sql);

$sorok = '<div class="row">';

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        $sorok .= '<div class="col-sm-6">';
        $sorok .= '<div class="tarto">';
        $sorok .= '<img class="img-thumbnail" src="data:image/jpg;base64,' . base64_encode($row['borito']) . '" />';
        $sorok .= '<div class="belsoTarto"><p><b>Szerző: </b>' . $row['szerzo'] . '</p>';
        $sorok .= '<p><b>Cím: </b>' . $row['cim'] . '</p>';
        $sorok .= '<p><b>Kiadó: </b>' . $row['kiado'] . '</p>';
        $sorok .= '<p><b>Oldalszám: </b>' . $row['oldalakSzama'] . '</p>';
        $sorok .= '<p><b>ISBN: </b>' . $row['isbn'] . '</p></div>';
        $sorok .= '</div>';
        $sorok .= '</div>';
    }
}

$sorok .= '</div>';