
<?php
  $password = '';

 if (isset($_GET['length'])) {
    // Caratteri disponibili per la generazione della password
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $specialChars = "!@#$%^&*()";
    // Unire tutti i caratteri disponibili attraverso una concatenazione
    $allCharacters = $uppercase . $lowercase . $numbers . $specialChars;
      
    $password = createPassword($_GET['length'], $allCharacters);
} 
  
 
    //funzione per creare la password
    function createPassword($length, $characters) {
        $password = ''; 
        $maxIndex = strlen($characters) - 1;

       


        // Ciclo per generare la password
        for ($i = 0; $i <  $length; $i++) {
            $randomPosition= rand(0, strlen($characters) - 1);
            $randomCharacter= substr($characters, $randomPosition, 1);
            $password .= $randomCharacter;

        }

        return $password;

        
    }
   
    


        
      

       

     
?>