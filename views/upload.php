<?php 
    if(isset($_POST['submit'])){
        $data = new ClientController();
        $client = $data->upload();
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader un fichier</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upload_file"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
