<?php


   
$input = [1,2,5];
$result = [];

for($i=0;$i < count($input);$i++){
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
