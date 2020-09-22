<?php
    $x = $_POST['x'];
    $y = $_POST['y'];
    if(isset($x) && isset($y)){
        echo $x + $y;
    }
?>