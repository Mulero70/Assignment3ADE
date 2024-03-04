
<?php
    $Alpha = array();
    for($i=0; $i<50; $i++) {
        if($i < 25) {
            $Alpha[$i] = pow($i, 2); 
        } else {
            $Alpha[$i] = $i * 3; 
        }
    }
    
    
    foreach($Alpha as $key => $value) {
        echo "Alpha[{$key}] = $value<br>";
    }
?>