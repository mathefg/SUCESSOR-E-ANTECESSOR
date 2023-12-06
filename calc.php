<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <h1>Antecessor e Sucessor</h1>
        <?php 
        $num=$_REQUEST['valor'];
        $a=$num - 1;
        $s=$num + 1;
        echo"O numero é <strong>$num<br></strong>";
        echo"O seu antecessor $a<br>";
        echo"O seu sucessor é $s<br>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>