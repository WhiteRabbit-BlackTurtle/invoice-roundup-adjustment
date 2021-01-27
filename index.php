<?php

function roundUp ($amount){
    ### Formula 
    $total = (round($amount/0.05,0))*0.05;
    ### Show in two decimal places
    $totalAmount = sprintf('%0.2f', $total); 
    return $totalAmount;
}

?>