<?php  
if(isset($_POST["submit"])){
   $filename= $_FILES['filename']['name'];
    $tmp_loc= $_FILES['filename']['tmp_name'];

    $image_upload="image/";

    if(!empty($filename)){
       move_uploaded_file($tmp_loc,$image_upload.$filename);
       
    }else{
        echo "not upload";
    }

   


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <br><br>
        <input type="file" name="filename" ><br><br>
        <input type="submit" value="upload" name="submit">




    </form>
</body>
</html>