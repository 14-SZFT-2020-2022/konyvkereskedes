<?php

require_once './kapcsolat.php';
  
$status = $statusMsg = ''; 
if (isset($_POST['feltolt'])) { 
    $status = 'error'; 
    if (!empty($_FILES['borito']['name'])) {  
        $fileName = basename($_FILES['borito']['name']); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if (in_array($fileType, $allowTypes)) { 
            $image = $_FILES['borito']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // $sql = 'INSERT into images (image, uploaded) VALUES ('$imgContent', NOW())'

            $result = $db -> query($sql); 
             
            if($result === TRUE){ 
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

