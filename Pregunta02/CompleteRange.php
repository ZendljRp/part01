<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor 
 */

/**
 * Description of CompleteRange
 *
 * @author tres3
 */
class CompleteRange {
    public $range = array();

    public function build($range) {
        $min = $this->_getMin($range);
        $max = $this->_getMax($range);
        while($min <= $max):
            array_push($this->range,$min);
            $min++;                    
        endwhile;
        return $this->range;
    }
    
    public function _getMin($getMin) {
        return min($getMin);
    }
    
    public function _getMax($getMax) {
        return max($getMax);
    }
    
    
}

$operation = new CompleteRange();
$result    = $operation->build(array(20,25,29));
?>
<pre><?php echo var_dump($result); ?></pre>