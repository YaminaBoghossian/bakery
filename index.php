<?php

include './Cake.php';
include_once './Cheesecake.php';
include_once './ApplePie.php';
include_once './RainbowCake.php';


$cakes = [new Cheesecake(), new RainbowCake(), new ApplePie()];


foreach ($cakes as $cake) {
    echo $cake . '<br/>';
    echo '<img src="' . $cake->picture . '" width = "100px"><br/>';
    
    }
    
    

 

    

