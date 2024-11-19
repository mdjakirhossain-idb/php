<?php 

interface User{ 
    public function getName();
   

}
interface roll{ 
  
    public function info();
    public function desplay();

}

class wdpf implements User,roll{ 
    public function getName(){ 
        echo "Done"."<br>";
    }
    public function info(){ 
        echo "second"."<br>";
    }
    public function desplay(){ 
        echo "third";
    }
}

$add = new wdpf;
$add->getName();
$add->info();
$add->desplay();
?>