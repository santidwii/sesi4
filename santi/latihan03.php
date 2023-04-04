<?php
    $path = "upgambar/";
    if (isset($_POST["Uploadfile"])){
       
        if($_Files["FIGAMBAR"]["error"]==0){
            $flame = $path . basename($_Files["FIGAMBAR"]["name"]);
            move_uploaded_file($_Files["FIGAMBAR"]["tmp_name"], $flame);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="latihan03.php" method="POST" enctype="multipart/form-data">
         <div>
             Upload Gambar
             <input type="file" name="FIGAMBAR">
        </div>

         <div>
            <input type="hidden" name="Uploadfile" value="OK">
            <button type="submit">upload Gambar</button>
        </div>

    </form>

</body>
</html>