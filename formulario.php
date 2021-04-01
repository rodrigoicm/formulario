<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <div class="col-md-1">
            <h1>Teste de vacinação</h1>
        </div>
        <div class="col-md-2">
            <div class="card-login">
                <h3 class="h3">Preencha com seus dados:</h3>
                <form name="login" method="POST" action="entrou.php" enctype="multipart/form-data" class="form">
                <div class="Control-usuario">
                    <label for="nome" >Nome Completo*:</label><br/>
                    <input name="nome" type="text" placeholder="Seu Nome" class="forminput" required/>
                </div>
                <div class="Control-password">
                    <label for="login">Sua Idade*:</label><br/>
                    <input name="idade" type="number" placeholder="Sua Idade" class="forminput" required/>
                </div>
                <div class="botao">
                    <input type="submit" value="Enviar" class="botaoin"/>
                </div>
                
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>