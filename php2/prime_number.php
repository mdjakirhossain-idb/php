<center>
<form method='post'>
<h1>Enter a number</h1>
<input type="text" name="fname">
<input type="submit" name="submit">
</form>



<?php
$b=$_POST["fname"];
$c=0;

if(isset($_POST["submit"]))

{
if($b==0 || $b==1)
{
  echo "Not Prime or Composite";
  exit();
}


for($i=2;$i<$b;$i++)

{
  if($b%$i==0)
  $c++;
}
if($c==0)

echo "$b prime number";
else
  echo "$b not a prime number";
}?>



</center>