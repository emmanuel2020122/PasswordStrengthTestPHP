<?php 

 if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $password =$_GET['q']; 

    function checkPassword($pass) {
          
          $score='';
   
        // Check length 
        if (strlen($pass) >= 8) {
            $score='a';
            echo $score;    
        }
        if (preg_match('/[A-Z]/', $pass)) {
             // Check for uppercase letter     
            $score='b';
            echo $score;
          
        }
        if (preg_match('/[a-z]/', $pass)) {
            //check for lowercase   
            $score='c';
            echo $score;     
        }
        if(preg_match('/[0-9]/', $pass)) {
            // check for digits;
            $score='d';
            echo $score;
         }
         if (preg_match('/[!@#$%^&*()_+{}|<>]/', $pass)) {
            //check for special symbol;
            $score='e';
            echo $score;
        }

    }
   
    checkPassword($password);
   
    // Example usage   
}
 
?>



