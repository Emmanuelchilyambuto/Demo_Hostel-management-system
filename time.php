<?php


$current_timezome = date_default_timezone_set('Africa/Lusaka');
$cur= date('m');

switch ($cur){
    case '1':
        $cur1 = "January";
        break;
        case '2':
        $cur1 = "February";
        break;
        case '3':
        $cur1 ="March";
        break;
        case '4':
        $cur1 ="April";
        break;
        case '5':
       $cur1 = "May";
        break;
        case '6':
        $cur1 ="June";
        break;
        case '7':
        $cur1 ="July";
        break;
        case '8':
        $cur1 ="August";
        break;
        case '9':
        $cur1 = "September";
        break;
        case '10':
        $cur1 ="October";
        break;
        case '11':
       $cur1 ="November";
        break;
        case '12':
       $cur1 = "December";
        break;
}
echo $cur1
?>
