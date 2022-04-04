<?php

if(isset($_FILES['file'])){
    if(count($_FILES['file']['tmp_name']) > 0){
        for($q=0;$q<count($_FILES['file']['tmp_name']);$q++){

            $extension = $_FILES['file']['name'];
            $ext = pathinfo($extension, PATHINFO_EXTENSION);

            if ($ext == 'text'){
                $ext = 'txt';
            }

            $filename = md5($_FILES['file']['name'][$q].time().rand(0,9999)).$ext;

            move_uploaded_file($_FILES['file']['tmp_name'][$q], 'files/'.$filename);

        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    Arquivo: <input type="file" name="file[]" id="file" multiple><br><br>
    <input type="submit" value="Enviar">
</form>