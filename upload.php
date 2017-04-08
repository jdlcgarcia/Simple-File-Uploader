<?php
echo upload('our-file');
var_dump($_POST);
function upload($name){
    $target_dir = "files/";
    if (!is_dir($target_dir))
    {
        mkdir($target_dir);
    }

    $target_file = $target_dir . $_POST['name'].basename($_FILES[$name]["name"]);
    $uploadOk = 1;

    if ($uploadOk == 0) {
        return json_encode(array("success" => false,"message" => "Error on uploading"));

    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            return json_encode(array("success" => true,"message" => $_FILES[$name]["name"]));
        } else {
            return json_encode(array("success" => false,"message" => "Error on moving the file"));
        }
    }
}
?>