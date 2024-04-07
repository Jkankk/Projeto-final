<?php
require_once './config.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$capacidade = $_POST['capacidade'];
$datas = $_POST['datas'];



$sql = "INSERT INTO usuarios (nome, descricao, capacidade, datas) VALUES (:nome, :descricao, :capacidade, :datas)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':descricao', $descricao);
$stmt->bindValue(':capacidade', $capacidade);
$stmt->bindValue(':datas', $datas);
$stmt->execute();

if($stmt->rowCount() > 0){
    header("Location: ../agendamento.php");
}else{
    echo "Erro ao criar sala";
}