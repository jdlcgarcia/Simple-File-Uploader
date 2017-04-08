<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data" id="the-form">
    Nombre del fichero nuevo: <input type="text" name="name"><br /> 
    Fichero: <input type="file" name="fileToUpload" id="fileToUpload"><br /> 
    <input type="button" value="Upload Image" id="submit">
</form>

</body>
</html>

<script>
var form = document.getElementById('the-form');
var button = document.getElementById('submit');
var file = document.getElementById('fileToUpload');
button.onclick = function() {
    var formData = new FormData(form);
    var fileInput = document.getElementById('fileToUpload');
    var file = fileInput.files[0];
    formData.append('our-file', file);

    console.log(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.send(formData);

    return false;
}
</script>