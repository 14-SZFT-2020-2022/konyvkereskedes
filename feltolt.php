<?php

require_once './kapcsolat.php';
  
$status = $statusMsg = ''; 
if (isset($_POST['feltolt'])) { 
    $status = 'error'; 
    if (!empty($_FILES['image']['name'])) {  
        $fileName = basename($_FILES['image']['name']); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if (in_array($fileType, $allowTypes)) { 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            
            $szerzo = $_POST['szerzo'];
            $cim = $_POST['cim'];
            $kiado = $_POST['kiado'];
            $oldalSzam = $_POST['oldalSzam'];
            $isbn = $_POST['isbn'];

            $sql = 'INSERT into `libri` (`szerzo`, `cim`, `kiado`, `oldalakSzama`, `isbn`, `borito`) ';
            $sql .= 'VALUES ("' . $szerzo . '", "' . $cim . '", "' . $kiado . '", "' . $oldalSzam . '", "' . $isbn . '", "' . $imgContent . '") ';

            $result = $conn -> query($sql); 
             
            if($result === TRUE) { 
                $status = 'success'; 
                $statusMsg = 'Az információk sikeresen feltöltődtek.'; 
            } else { 
                $statusMsg = 'Nem sikerült a feltöltés!'; 
            }  
        } else { 
            $statusMsg = 'Bocsi, csak a következő formátumokat fogadjuk el: JPG, JPEG, PNG, & GIF.'; 
        } 
    } else { 
        $statusMsg = 'Kérjük töltse ki a táblázatot.'; 
    } 
} 
 
// echo $statusMsg; 

