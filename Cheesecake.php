<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cheesecake
 *
 * @author boghossian
 */
class Cheesecake extends Cake{
    
    function __construct() {
        parent::__construct("Cheesecake", 26);
        $this->ingredients = ['cheese', 'caramel', 'sugar'];
        $this->picture = './cheesecake.jpg';
    }
    




    //put your code here
}
