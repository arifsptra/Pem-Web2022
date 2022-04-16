<?php
function addPhoto($addPhoto){
    $target_dir = "../Images/";
    $target_file = $target_dir . basename($addPhoto["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if(file_exists($target_file)){
        echo "<p>Sorry, file already exists.</p>";
        $uploadOk = 0;
    }
    if($addPhoto["size"] > 500000){
        echo "<p>Sorry, your file is too large.</p>";
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpeg"){
        echo "<p>Sorry, only JPG, PNG, JPEG & GIF files are allowed</p>";
        $uploadOk = 0;
    }
    if($uploadOk == 0){
        echo "<p>Sorry, your file was not uploaded.</p>";
    }else {
        if(move_uploaded_file($addPhoto["tmp_name"], $target_file)){
            return true;
        }else  {
            return false;
        }
    }
}
?>