<?php
require 'config.php';
$list = [];
$sql = $pdo->query("select * from usuarios");
if ($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Pacientes</title>
</head>
<body>
    <div class="container">
        <div class="col-md-1">
            <h1>Lista de Pacientes</h1>
        
    </div>
    <table border="1" width="100%" cellspacing=0 cellpadding=2 bordercolor="666633">
                    <tr>
                        <th>ID</th>    
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>DT. NASCIMENTO</th>
                    </tr>
                    <?php foreach($lista as $usuario): ?> 
                        <tr>
                            <td><?=$usuario['id']; ?></td>
                            <td><?=$usuario['nome']; ?></td>
                            <td><?=$usuario['cpf']; ?></td>
                            <td><?=$usuario['dtnascimento']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    
    
</body>
</html>