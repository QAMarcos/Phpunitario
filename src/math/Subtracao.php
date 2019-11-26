<?php
namespace marcos\math;

class Subtracao {
    
    private $num1;
    private $num2;

    public function subtrair(){

       return 10;

    }

    /**
     * Get the value of num1
     */ 
    public function getNum1()
    {
        return $this->num1;
    }

    /**
     * Set the value of num1
     *
     * @return  self
     */ 
    public function setNum1($num1)
    {
        $this->num1 = $num1;

        return $this;
    }

    /**
     * Get the value of num2
     */ 
    public function getNum2()
    {
        return $this->num2;
    }

    /**
     * Set the value of num2
     *
     * @return  self
     */ 
    public function setNum2($num2)
    {
        $this->num2 = $num2;

        return $this;
    }
    
}