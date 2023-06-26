<?php
function fibonacci($n)
{
    if ($n <= 0 || $n > 20) {
        echo "Invalid input. Please provide a value between 1 and 20.";
    }
    else{
        $fib = [0, 1]; 
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    echo "INPUT: $n, OUTPUT:";;
    foreach($fib as $item){
        echo " ";
        echo $item;
    }
    }
}

fibonacci(3);
?>
