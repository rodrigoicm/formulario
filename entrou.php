<?php
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST,'idade');

if($nome){
    echo 'Nome: '.$nome."<br/>";
} else{
    echo nl2br('POR FAVOR PREENCHA SEU NOME'."<br/>");
} if($idade){
    echo 'Idade: '.$idade."<br/>";

}else{
    
    echo 'POR FAVOR INFORME A SUA IDADE'."<br/>";
}

if($idade >=70){
    echo 'Vacinação Liberada'."<br/>";

} else{
    echo 'Aguarde sua vez de vacinar'."<br/>";
}