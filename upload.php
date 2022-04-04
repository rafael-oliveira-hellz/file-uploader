<?php

// Upload de um único arquivo

// $file = $_FILES['file'];

// if(isset($file['tmp_name']) && !empty($file['tmp_name'])){

//     $extension = $_FILES['file']['name'];
//     $extension = explode('.', $extension);
//     $extension[1];

//     $filename = md5(time().rand(0,9999)).'.'.$extension[1];

//     move_uploaded_file($file['tmp_name'], 'files/'.$filename);
// }

// Upload de múltiplos arquivos

if(isset($_FILES['file'])){
    if(count($_FILES['file']['tmp_name']) > 0){
        for($q=0; $q<count($_FILES['file']['tmp_name']); $q++){

            $extension = $_FILES['file']['name'];
            $extension = explode('.', $extension);
            $extension[1];

            $filename = md5($_FILES['file']['name'][$q].time().rand(0,9999)).'.'.$extension[1];

            move_uploaded_file($_FILES['file']['tmp_name'][$q], 'files/'.$filename);

        }
    }
}

?>