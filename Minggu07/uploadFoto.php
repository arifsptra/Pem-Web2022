<?php
    function upload_foto($ft){
        $target_dir = "img/";
        $target_file = $target_dir. basename($ft["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // check if file already exist
        if(file_exists($target_file)){
            echo "File Already Exists";
            $uploadOk = 0;
        }
        // check file size
        if($ft["size"]>5000000){
            echo "Sorry File Size Too Large";
            $uploadOk = 0;
        }
        // allow certain file format
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
            echo "Sorry Only JPG, PNG, JPEG, and GIF Files Are Supported";
            $uploadOk = 0;
        }
        // check if $uploadOk is set to 0 by an error
        if($uploadOk == 0){
            echo "Error, File Was Not Uploaded";
        }else {
            if(move_uploaded_file($ft["tmp_name"], $target_file)){
                return true;
            }else {
                return false;
            }
        }
    }
?>