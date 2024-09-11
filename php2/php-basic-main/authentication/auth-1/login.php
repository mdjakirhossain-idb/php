<?php session_start();
  
  if(isset($_POST["btnLogin"])){
	  
	  $username=$_POST["txtUsername"];
	  $password=$_POST["txtPassword"];
	  
	  $file=file("auth.txt");
	  
	  foreach($file as $line){
		  
		  list($_username,$_password)=explode(",",$line);
		  
		  if(trim($_username)==$username && trim($_password)==$password){
			  
			
			 $_SESSION["sname"]=$username;
			
			 header("location:demo.php");
			  
		  }else{
			  
			  $msg="Username or Password is incorrect!";
		  }
		  
	  }
	  
  }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<Style>
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
        input {
            margin-bottom: 10px;
        }
</Style>
</head>

<body>
 <?php
   echo isset($msg)?$msg:"";
 ?>
 <fieldset>
 <legend><h2>Pls Inter Your User/Password </h2></legend>
 <form action="#" method="post">
   <div>
    Username<br/>
    <input type="text" name="txtUsername" />
   </div>
   <div>
    Password<br/>
    <input type="password" name="txtPassword" />
   </div>
   <div>
    <input type="submit" value="Log In" name="btnLogin" />
   </div>
 </form>
 </fieldset>
</body>
</html>