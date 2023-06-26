<?php
include('./arrayInterger_class.php');
  class ArrayProcessorUser {
    public function processArray($numbers) {
      $processor = new IntegerArrayProcessor($numbers);
      $processor->bubbleSort();
  
      $median = $processor->getMedian();
      $largestValue = $processor->getLargestValue();
      echo "<br>";  
      echo "Median: $median\n";
      echo"<br>";
      echo "Largest value: $largestValue\n";
    }
  }

$numbers = [-1, 23, 3, 44, 5];
echo "Numbers: ";
foreach($numbers as $number){
    echo " ";
    echo $number;
}
$user = new ArrayProcessorUser();
$user->processArray($numbers);
?>
