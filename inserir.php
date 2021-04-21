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
            <h1>Cadastro de Paciente</h1>
        </div> 
        <form method="POST" action="inserir_action.php">
        <label>
                Nome:<br/>
                <input type="text" name="name" required oninvalid="this.setCustomValidity('Preencha seu Nome')" 
                onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>
            <label>
                CPF:<br/>
                <input type="" name="cpf" required oninvalid="this.setCustomValidity('Preencha seu CPF')" 
                onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>
            <label>
                Data Nascimento:<br/>
                <input type="date" name="dtnascimento" required oninvalid="this.setCustomValidity('Favor digite a data e nascimento')" 
                onchange="try{setCustomValidity('')}catch(e){}">
            </label><br/><br/>

            <input type="submit" value="Adicionar" class="BUTTON_LRD">
            <a href="paciente.php" class="BUTTON_LRD">Voltar</a>
            
        </form>                            
    </div> 
</body>
</html>

