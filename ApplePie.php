<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplePie
 *
 * @author boghossian
 */
class ApplePie extends Cake {
    //put your code here
    function __construct() {
        parent::__construct("apple pie", 350);
        $this->ingredients = ["apples", "nutella", "lotte"];
        $this->picture = "./index.jpeg";
        
    }
}
