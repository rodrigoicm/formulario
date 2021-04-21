<?php
    require 'config.php';

    $name = filter_input(INPUT_POST,'name');
    $cpf = filter_input(INPUT_POST,'cpf');
    $dtnascimento = filter_input(INPUT_POST,'dtnascimento');

    if($name && $cpf && $dtnascimento){

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE cpf = :cpf");
        $sql-> bindValue(':cpf', $cpf);
        $sql-> execute();

        if ($sql->rowCount() === 0){
            $sql = $pdo->prepare("INSERT INTO usuarios (nome,cpf,dtnascimento) VALUES (:name, :cpf, :dtnascimento)");
            $sql->bindValue(':name', $name);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':dtnascimento', $dtnascimento);
            $sql->execute();

            header("Location: paciente.php");
            exit;
        } else {
            header("Location: inserir.php");
            exit;
        }
    } else {
        header("Location: inserir.php");
        exit;
    }