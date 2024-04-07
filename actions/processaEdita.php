<?php
require_once './config.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$capacidade = $_POST['capacidade'];
$datas = $_POST['datas'];

$sql = "UPDATE usuarios SET nome = :nome, descricao = :descricao, capacidade = :capacidade, datas = :datas WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':capacidade', $capacidade);
$stmt->bindValue(':datas', $datas);
$stmt->execute();

if($stmt->rowCount() > 0){
    header("Location: ../agendamento.php");
}else{
    echo "Erro ao editar usuario"; 
}