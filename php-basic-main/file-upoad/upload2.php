<?php
if(isset($_POST['btnsubmit'])){
  $tmp_name=$_FILES["myfile"]["tmp_name"];
  $name=$_FILES['myfile']['name'];
  
	  copy($tmp_name,"image/".$name);
	  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
  <style>
    body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            padding: 50px;
            background-color: #ABA9B3;
        }

        form {
            display: inline-block;
            text-align: left;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #3944BC;
        }

        input {
            margin-bottom: 10px;
        }

  </style>
</head>

<body>
  <center>

<div style=" width:500px; margin:10px auto">

<form action="#" method="post" enctype="multipart/form-data">

<fieldset>

<input type="file" name="myfile"><br><br>
<input type="submit" name="btnsubmit"><br>


</fieldset>

</form>





</div>

</center>

</body>
<?php
if(isset($_POST['btnsubmit'])){

  echo "<img src='image/$name' width='300px'>";
}

?>
</html>

