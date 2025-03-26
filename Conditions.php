<?php

if(7 > 10){
    echo "7 is greater than 10";
}else{
    echo "7 is less than 10";
};


$username = "Admin";
$password = 1234;

if($username == "Bilal"){
    echo "Hello Admin";
}else{
    echo "Hello User";
}

if($username == "Bilal" AND $password == 1234){
    echo "Login";
}else{
    echo "Password And Username Incorrect";
}


/*If Elseif Else*/

$food = "Desifood" ;
$time = "Lunch";

if($food == "Desifood"){
    if($time == "Lunch"){
        echo "Menu Will be Biryani";
    }elseif($time == "Breakfast"){
        echo "Sandwich";
    }else{
        echo "Menu Will be Omlete";
    }
}else{
    echo "Fastfood is not Available";
}


$today = date("l");

switch($today){
      case 'Monday':
      echo "Today Is Monday";
      break;  

      case 'Tuesday':
      echo "Today Is Tuesday";
      break; 

      case 'Wednesday':
      echo "Today Is Wednesday";
      break; 

      case 'Thursday':
      echo "Today Is Thursday";
      break; 

      case 'Friday':
        echo "Today Is Friday";
        break;
    
        case 'Saturday':
            echo "Today Is Saturday";
            break;
            
            case 'Sunday':
                echo "Today Is Sunday";
                break;   
                
      default:
      echo "Today Is Noday";       

       
  }

?>