<?php 
    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/nav.php");
?>

<?php 
$conn = mysqli_connect('localhost','root','','pos_project1');
if  (isset($_GET['id'])){ 
    $getid = $_GET['id'];
   $sql = "SELECT * FROM category WHERE id=$getid";
   $query = mysqli_query($conn, $sql);
   $data = mysqli_fetch_assoc($query);
   $id = $data['id'];
   $catname = $data['catname'];
}



if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $catname = $_POST['catname'];
    
 $sql1 = "UPDATE category SET catname='$catname' where id = '$id' ";
 if(mysqli_query($conn, $sql1) == TRUE){ 
    header('location:view_category.php');
    echo "DATA update";
 }else{ 
    echo $sqli1. "Data not update";
 }
}


?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


   <div class="container"> 
   <center>  
    <div class="row">
    
        <div class="col-sm-3"></div>
       
        <div class="col-sm-6 pt-4 mt-4 bg-dark text-white">
            
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
        Category Name:<br>
        <input type ="text" name ="catname" value="<?php echo $catname; ?>"><br><br>
        <input type ="text" name ="id" value =" <?php echo $id ?>" hidden><br><br>
        <input type ="submit" name ="edit" value="Edit" class="btn btn-info"><br><br>
    </form>
   
    </div>
    
        <div class="col-sm-3"></div>
    </div>
    </center>
   </div>
   
<?php 
    include("includes/footer.php");
