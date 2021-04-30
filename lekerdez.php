<?php

require_once './kapcsolat.php';

$sql = 'SELECT * FROM `libri`';

$result = $conn -> query($sql);

$sorok = '<div class="row">';

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        $sorok .= '<div class="col-sm-6">';
        $sorok .= '<div class="tarto">';
        $sorok .= '<img src="data:image/jpg;base64,' . base64_encode($row['borito']) . '" />';
        $sorok .= '</div>';
        $sorok .= '</div>';
    }
}

$sorok .= '</div>';