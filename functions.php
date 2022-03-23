<?php 



/**
 * 
 */
function marriageAgeCal($name, $age){

    if( $age >= 20 ){
        return "HI {$name}, You are now ready for marriage";
    }else{
        $wait_age = 21 - $age;
        return "HI {$name}, We are sorry, You have to wait {$wait_age} years for marriage";
    }

}



