<?php

require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$course=$_POST["txtCourse"];
	$phone=$_POST["txtPhone"];	
	
		
   
		$student=new Student($id,$name,$course,$phone); 	
		$student->save();
	
       
  
    
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OOP- orianted form</title>
<style>
    form{
        background-color:#c0d6e4;
    }
</style>
</head>

<body style=background-color:#ABA9B3;>

    <fieldset>
        <legend style="text-align: center;">PHP OOP FORM</legend>
            <form action="#" method="post" >
            
                        <div style= "text-align: center ";>
                            ID:<br/>
                            <input type="number" name="txtId" /><br/>
                            Name<br/>
                            <input type="text" name="txtName" /><br/>
                            Course<br/>
                            <input type="text" name="txtCourse" /><br/>
                            Phone<br/>
                            <input type="number" name="txtPhone" /><br/><br/>
                            <input type="submit" name="btnSubmit" value="Submit" />
                        </div>
           
           </form>
        
    </fieldset>


    <?php
    Student::display_students();
    ?>

</body>
</html>