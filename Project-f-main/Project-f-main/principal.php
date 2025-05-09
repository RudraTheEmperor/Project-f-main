<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            text-align: left;
        }
        .menu {
            margin-top: 60px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .menu a {
            margin: 10px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php 
            session_start(); 
            echo "CPF: ".$_SESSION['cpf'].'<br>'; 
            echo "Nome: ".$_SESSION['nome']; 
        ?>
    </div>

    <div class="menu">
        <a href="pagina1.php">Página 1</a>
        <a href="pagina2.php">Página 2</a>
        <a href="pagina3.php">Página 3</a>
        <a href="pagina4.php">Página 4</a>
        <a href="pagina5.php">Página 5</a>
    </div>
</body>
</html>
