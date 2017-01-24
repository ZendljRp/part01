<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeString
 *
 * @author tres3
 */
class ChangeString {
    public $string = "";
    public $alphabet = array("a"=>"b", "b"=>"c", "c"=>"d", "d"=>"e", "e"=>"f", "f"=>"g", "g"=>"h", 
        "h"=>"i", "i"=>"j", "j"=>"k", "k"=>"l", "l"=>"m", "m"=>"n", "n"=>"ñ", "ñ"=>"o", "o"=>"p", "p"=>"q", 
        "q"=>"r", "r"=>"s", "s"=>"t", "t"=>"u", "u"=>"v", "v"=>"w", "w"=>"x", "x"=>"y", "y"=>"z", "z"=>"a",
        "A"=>"B", "B"=>"C", "C"=>"D", "D"=>"E", "E"=>"F", "F"=>"G", "G"=>"H", "H"=>"I", "I"=>"J", "J"=>"K",
        "K"=>"L", "L"=>"M", "M"=>"N", "N"=>"Ñ", "Ñ"=>"O", "O"=>"P", "P"=>"Q", "Q"=>"R", "R"=>"S", "S"=>"T", 
        "T"=>"U", "U"=>"V", "V"=>"W", "W"=>"X", "X"=>"Y", "Y"=>"Z", "Z"=>"A"
    );
    
    public function build($string) {
        $count = strlen($string);
        $alpha = $this->alphabet;
        for($i=0; $i<$count; $i++):
            if(!empty($string[$i])&& ctype_alpha($string[$i])):
                $this->string .= $alpha[$string[$i]];
            else:
                $this->string .= $string[$i];
            endif;
        endfor;
        return $this->string;        
    }
    
}

$operation = new ChangeString();
$result    = $operation->build("Casa 52Z");
echo $result;
