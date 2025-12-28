<?php
session_start();

$password = $_SESSION['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>resultPage</title>
</head>
<body>
    <nav><a href="./index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BACK</a></nav>
    <h1 class="text-center">You Password <?php echo strlen($password)?> Charaters Is...</h1>
    <pre class="text-center h1 "><?php echo $password?></pre>
</body>
</html>