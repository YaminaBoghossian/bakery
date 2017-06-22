<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RainbowCake
 *
 * @author boghossian
 */
class RainbowCake extends Cake {
    //put your code here
    function __construct() {
        parent::__construct("rainbow cake", 30);
        $this->ingredients = ["flour", "eggs", "sugar",];
        $this->picture = "./rainbow.jpg";
           
    }
}
