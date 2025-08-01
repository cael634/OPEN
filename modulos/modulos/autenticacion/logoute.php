<?php

 if($r113['gastos']==2){
     @session_destroy();
            redir("info/horario.php");   
          }
          else{
              
         if($r113['gastos']==1){
             @session_destroy();
        redir("info/inicio12.php");  
         }else{
             @session_destroy();
            redir("info/info13.php");    
         }
     }


?>
