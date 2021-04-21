<?php
require 'config.php';
$list = [];
$sql = $pdo->query("select * from usuarios");
if ($sql->rowCount() > 0) {
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
        <div class="tabela">
        <table border="1" width="100%" cellspacing=0 cellpadding=2 bordercolor="666633">
                    <tr>
                        <th>ID</th>    
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>DT. NASCIMENTO</th>
                        <th>AÇÕES</th>
                    </tr>
                    <?php foreach($lista as $paciente): ?> 
                        <tr>
                            <td><?=$paciente['id']; ?></td>
                            <td><?=$paciente['nome']; ?></td>
                            <td><?=$paciente['cpf']; ?></td>
                            <td><?=$paciente['dtnascimento']; ?></td>
                            <td> 
                                <a class="BUTTON_LRD" href="editar.php?id=<?=$paciente['id']; ?> ">Editar </a>
                                <a class="BUTTON_LRD" href="excluir.php?id=<?=$paciente['id']; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
        </div>
        <div>
            <a class="BUTTON_LRD" href="inserir.php">INSERIR</a>
        </div>
    
                               
    </div>
    
</body>
</html>