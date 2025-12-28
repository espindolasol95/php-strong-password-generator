 <?php
    require_once __DIR__ . '/functions.php';
    if ($password != "") {
       // mandiamo all'altra pagina il valore della password tramite query string
         header("Location: ./result.php");
    }

    session_start();

    $_SESSION['password'] = $password;
?>
 <?php
 require_once __DIR__ . '/functions.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <body style="background-color: lightblue;">

    <h1 class="text-center">Password Generator</h1>
    

    <form action="" method="GET" class="d-flex flex-column align-items-center">
        <label for="text" class="d-flex flex-column align-items-center"> 
               <hr>
               <input type="number" placeholder= " password" name="length">
               <br>
               <button type="submit" class="btn btn-warning">Generate</button>
        </label>
     
        
    </form> 

    <hr>
    <h2 class="text-center">Your password is…</h2>
    <pre class="text-center h1"><?php echo  $password; ?></pre>
    



</body>
</html>