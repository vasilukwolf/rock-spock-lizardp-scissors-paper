<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Присваиваем числа
        function number_to_name($number){
            if(0 == $number) {return "rock";}
            else if (1 == $number){return "Spock";}
            else if (2 == $number){return "paper";}
            else if (3 == $number){return "lizard";}
            else if (4 == $number){return "scissors";}
            else {return "Error number";}
        }
        //Присваиваем имена
        function name_to_number($name){
            if("rock" === $name) {return 0;}
            else if ("Spock" === $name){return 1;}
            else if ("paper" === $name){return 2;}
            else if ("lizard" === $name){return 3;}
            else if ("scissors" === $name){return 4;}
            else {return "Error unit";}  
        }
        //Составляем правила
        function rpsls($name){
          $player_number = name_to_number($name);
          $comp_number = rand(0,5);
          $difference =($player_number - $comp_number);
          if ($difference == 0){
              $results='Player and computer tie!';
          }
          else if($difference >= 3){
              $results='Computer wins!';
          }
           else if($difference <= 2){
              $results='Player wins!';
          }
          $comp_name = number_to_name($comp_number);
           print("Player chooses ".$name.'<br/>');  
           print("Computer chooses ".$comp_name.'<br/>');  
           print($results.'<br/><br/>'); 
        }
        
        rpsls("rock") ; 
        rpsls("Spock")  ;
        rpsls("paper")  ;
        rpsls("lizard") ; 
        rpsls("scissors") ;
           ?>
    </body>
</html>
