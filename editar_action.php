<?php
    require 'config.php';
    $id = filter_input(INPUT_POST,'id');
    $name = filter_input(INPUT_POST,'name');
    $cpf = filter_input(INPUT_POST,'cpf');
    $dtnascimento = filter_input(INPUT_POST,'dtnascimento');

    if($id && $name && $cpf && $dtnascimento){
        $sql = $pdo->prepare("UPDATE usuarios SET nome= :name, cpf = :cpf, dtnascimento= :dtnascimento WHERE id= :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':dtnascimento', $dtnascimento);
        $sql->execute();

        header("Location: paciente.php");
        exit;
    } else {
        header("Location: editar.php");
    }