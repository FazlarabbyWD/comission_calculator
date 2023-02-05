<?php
$tutionFee =7000 ;
$commission = null;

$commission = ($tutionFee >= 20000) ? ($tutionFee * 0.25) : 
             (($tutionFee >= 10000 && $tutionFee < 20000) ? ($tutionFee * 0.20) : 
             (($tutionFee < 10000 && $tutionFee >= 7000) ? ($tutionFee * 0.15) : 
             ($tutionFee < 7000 ? "Invalid" : '')));

echo "The commission is: $commission";


?>

