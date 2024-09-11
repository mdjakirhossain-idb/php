<?php 
 session_start();

 if(!isset($_SESSION["sname"])){
	 header("location:login.php");
  }
// Step 2: Include the Student class file
require_once("student_class.php");

// Check if the form is submitted
if (isset($_POST["btnSubmit"])) {
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];
    $course = $_POST["txtCourse"];
    $phone = $_POST["txtPhone"];
    $tmp_name=$_FILES["myfile"]["tmp_name"];
    $namex=$_FILES['myfile']['name'];
    $ja="image/";
	  copy($tmp_name,$ja.$namex);

    // Validate phone number
    if (preg_match("/^[0-9+]{11,14}$/", $phone)) {
        // Create a new Student object
        $student = new Student($id, $name, $course, $phone);
        // Save the student data
        $student->save();
        echo "Success!";
    } else {
        echo "Invalid Phone";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            padding: 20px;
            background-color: #ABA9B3;
        }

        form {
            display: inline-block;
            text-align: left;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px #3944BC;
        }

        input {
            margin-bottom: 10px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 40%;
        }

        table, th, td {
            border: 1px solid black;
        }

        fieldset {
            background-color: #AEA9D0;
            text-align: center;
            border: 2px solid teal;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            width: 30%;
            height: 350px;
        }
    </style>
</head>
<body>

<fieldset>
    <legend><h2>Student Information Form</h2></legend>
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            ID:<br/>
            <input type="number" name="txtId"/>
        </div>

        <div>
            Name<br/>
            <input type="text" name="txtName"/>
        </div>

        <div>
            Course<br/>
            <input type="text" name="txtCourse"/>
        </div>

        <div>
            Phone<br/>
            <input type="number" name="txtPhone"/>
        </div>

		<div>
            <input type="file" name="myfile"><br>
            <input type="submit" name="btnSubmit" value="Submit"/>
			<button><a href="logout.php">Logout</a></button>
        </div>

    </form>
</fieldset>

<?php
Student::display_students();
?>

</body>
<?php

if (isset($_POST["btnSubmit"])) {
  echo "<img src='$ja/$namex' width='300px' height='300px'>";
}

?>
</html>