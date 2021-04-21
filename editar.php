<?php
    require 'config.php';
    $info = [];
    $id = filter_input(INPUT_GET, 'id');
    if($id){
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id= :id");
        $sql->bindValue('id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch( PDO::FETCH_ASSOC);
            
        } else {
            header("Location: paciente.php");
        exit;
        }
    }else {
        header("Location: paciente.php");
        exit;
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
            <h1>Editar Paciente</h1>
        </div> 
        <form method="POST" action="editar_action.php">
            <input type="hidden" name="id" value="<?=$info['id'];?>" />
        <label>
                Nome:<br/>
                <input type="text" name="name" value="<?=$info['nome'];?>" required oninvalid="this.setCustomValidity('Preencha seu Nome')" 
onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>
            <label>
                CPF:<br/>
                <input type="" name="cpf" value="<?=$info['cpf'];?>" required oninvalid="this.setCustomValidity('Preencha seu CPF')" 
onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>
            <label>
                Data Nascimento:<br/>
                <input type="date" name="dtnascimento" value="<?=$info['dtnascimento'];?>" required oninvalid="this.setCustomValidity('Favor digite a data e nascimento')" 
onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>

            <input type="submit" value="Salvar" class="BUTTON_LRD" >
            <a href="paciente.php" class="BUTTON_LRD">Voltar</a> 
            
        </form>  
                                
    </div>
    
</body>
</html>

