<?php
class IntegerArrayProcessor {
    private $numbers;
  
    public function __construct($numbers) {
      $this->numbers = $numbers;
    }
  
    public function bubbleSort() {
      $length = count($this->numbers);
      for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
          if ($this->numbers[$j] > $this->numbers[$j + 1]) {
            $temp = $this->numbers[$j];
            $this->numbers[$j] = $this->numbers[$j + 1];
            $this->numbers[$j + 1] = $temp;
          }
        }
      }
    }
  
    public function getMedian() {
      $length = count($this->numbers);
      $middle = floor($length / 2);
  
      if ($length % 2 === 0) {
        $median = ($this->numbers[$middle - 1] + $this->numbers[$middle]) / 2;
      } else {
        $median = $this->numbers[$middle];
      }
  
      return $median;
    }
  
    public function getLargestValue() {
      $length = count($this->numbers);
      return $this->numbers[$length - 1];
    }
  }
?>
