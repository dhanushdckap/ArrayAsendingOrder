<?php


   
$input = [4,5,1,2];
$result = [];

for($i=0;$i < count($input)-1;$i++){
    if($input[$i] < $input[$i+1]){
        $new = $input[$i];
        $input[$i] = $input[$i+1];
        $input[$i+1] = $new;
        $result[] = $input;
        print_r(json_encode($input));
        echo "\n";
    }
}



  
  


?>
