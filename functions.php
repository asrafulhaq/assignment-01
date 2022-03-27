<?php 

/**
 * Local Timezome set
 */
date_default_timezone_set('Asia/Dhaka');



/**
 * Set Alert 
 */
function setAlert($msg, $type = 'danger'){
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\"> {$msg} <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
}


/**
 * Marriage Age Calculator 
 */
function marriageAgeCal($name, $birth_year, $gender){

    $age = date('Y') - $birth_year;

    $marriage_age = '';
    
    switch($gender){
        case 'Male' :
            $marriage_age = 21;
            break;

        case 'Female' :
            $marriage_age = 18;
            break;
        default : 
            $marriage_age = 21;
            break;
    }

    

    if( $age >=  $marriage_age ){
        return "Hi {$name}, You are now ready for marriage";
    }else {
        $wait = $marriage_age - $age;
        return "<p class=\"alert alert-success d-flex justify-content-between\">Hi {$name}, We are sorry, You are {$age} years old,  You have to wait {$wait} year for your marriage <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
    }




}


/**
 * Currency Converter 
 */
function convertCurrency($amount, $type){ 

    $rate = 0;

    switch( $type ){
        case 'USD';
            $rate = 86.54;
            break;

        case 'CAD';
            $rate = 69.04;
            break;

        case 'Pound';
            $rate = 114.15;
            break;

        case 'Euro';
            $rate = 95.06;
            break;

        case 'Won';
            $rate = 0.071;
            break;
    }

    $bdt = $amount * $rate;

    return "{$amount} {$type} = {$bdt} BDT";



}



