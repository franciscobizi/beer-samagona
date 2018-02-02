<?php

namespace App\Classes;

use App\Classes\Samagona;
use App\Classes\Validation;

/**
* Builder Class to build another class
* Author : Francisco Bizi, <taylorsoft28@gmail.com> 
*
* PHP 7
*
* Methods : create, setIngredients and build
*
* Return : an object class
*/ 

class Builder extends Validation
{
    private $water, $sugar, $fire, $pipe;

    // Static method to instance the class
    static public function create() {

        return new static;
    }
    /**
    * Method for setting the ingredients
    * 
    * @param int $water, $sugar, $fire, $pipe
    * @return object $this
    */
    public function setIngredients($water, $sugar, $fire, $pipe) {

        $this->water = $water; 
        $this->sugar = $sugar;
        $this->fire = $fire;
        $this->pipe = $pipe;

        $ingridients = [$this->water, $this->sugar, $this->fire, $this->pipe];

        if(!parent::isEmpty($ingridients)) {
            
            return $this;

        }else{

            echo "Missing an ingredient!";
            exit;
        }
        
    }
    /**
    * Method for building another class
    * @return instance of object
    */
    public function build() {

        return new Samagona($this->water, $this->sugar, $this->fire, $this->pipe);
    }
    
}

