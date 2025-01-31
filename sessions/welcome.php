<?php
    include('../config/protected.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
    <title>Bem vindo</title>
</head>
<body>
    <p>
        Bem vindo, <?php echo $_SESSION['users_token_id']?>
    </p>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>