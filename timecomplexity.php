<?php




funciton recursionln($x){
    
    if ($x == 0) {
        return 0 ;
    }else{
        echo $x."<br>";
        recursionln($x -1);
    }


}

recursionln(4);



?>