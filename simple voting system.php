<?php

$age = 18;
$ward = 020;
$pvc = true;

if($age >= 18 && $pvc == true && $ward == 020){
    echo "Voter eligible to vote";
}
if ($age < 18){
    echo "You're below 18 years";

}
if($pvc == false){
    echo "You don't have a PVC";

}
if($ward != 020){
    echo "You're not in Ward 020";
}

?>
