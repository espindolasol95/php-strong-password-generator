<?php

 if (isset($_GET['length'])) {

    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $specialChars = "!@#$%^&*()";

    $allCharacters = $uppercase . $lowercase . $numbers . $specialChars;
    

    
    function createPassword($length, $characters) {
        $password = ''; 
        $maxIndex = strlen($characters) - 1;


        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, $maxIndex);
            $password .= $characters[$index];
        }

        return $password;
    }
   
    


        $length = intval($_GET['length']);

        if ($length > 0) {
            $generatedPassword = createPassword($length, $allCharacters);
            echo "<h2 class='text-center'>Generated Password: $generatedPassword</h2>";
        } else {
            echo "<h2 class='text-center text-danger'>Please enter a valid length.</h2>";
        }
    }


     
?>