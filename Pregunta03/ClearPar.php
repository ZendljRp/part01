<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearPar
 *
 * @author tres3
 */
class ClearPar {
    
    public $string = "";
    
    public function build($param) {
        $arr = explode("()", $param);
        for($i=0; $i<count($arr); $i++):
            if(empty($arr[$i])):
                $this->string .= "()";        
            endif;
        endfor;        
        return $this->string;
    }    
}

$operation = new ClearPar();
$result    = $operation->build("()())()");
echo var_dump($result);