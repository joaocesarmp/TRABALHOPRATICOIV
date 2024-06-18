<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Múltiplos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
       .multiplo {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<div class='multiplo'>Número $i é múltiplo de 3 e 5.</div>";
        } elseif ($i % 3 == 0) {
            echo "<div class='multiplo'>Número $i é múltiplo de 3.</div>";
        } elseif ($i % 5 == 0) {
            echo "<div class='multiplo'>Número $i é múltiplo de 5.</div>";
        }
    }
   ?>
</body>
</html>
