<?php


function generatePassword($passwordLength, $characters){
    $randomPassword = "";
    $charactersLength = strlen($characters);
    for ($i = 1; $i <= $passwordLength; $i ++){
        $randomPassword .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    return $randomPassword ;
}



?>
