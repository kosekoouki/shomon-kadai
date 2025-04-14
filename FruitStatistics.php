<?php
class FruitStatistics {
    private $prices;
    
    public function __construct($prices)
    {$this -> prices = $prices;}

    public function getMax(): int { 
        return max($this->prices); 
    }

    public function getMin(): int {
        return min($this->prices);
    }

    public function getAvg(): float {
        return round (array_sum($this->prices) / count($this->prices), 0);
    }
    
}
?>