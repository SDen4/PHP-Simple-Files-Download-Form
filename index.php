<?php

// var_dump($_FILES);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_FILES["picture"]["error"] == 0){
        $tmpName = $_FILES["picture"]["tmp_name"];
        if(move_uploaded_file($tmpName, "uploads/".time().".".pathinfo($_FILES["picture"]["name"])["extension"])){
            echo "File saved";
        }else{
            echo "Can not save this file!!!";
        };
    }else{
        echo "Upload error! Error code: ".$_FILES["picture"]["error"];
    };
};
?>

<h1>Загрузка файла пользователем</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
    <input type="file" name="picture">
    <button>Upload</button>
</form>