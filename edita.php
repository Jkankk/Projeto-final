<?php
require_once './actions/config.php';

$id = $_GET['id'];

$sqlUser = "SELECT * FROM usuarios WHERE id = :id";
$stmtUser = $conn->prepare($sqlUser);
$stmtUser->bindValue(':id', $id);
$stmtUser->execute();

$usuario = $stmtUser->fetch(PDO::FETCH_ASSOC);



?>

<?php include './layout/header.php'?>


<div class= "m-3 d-flex justify-content-between">
    <div>
       <h2>Adicionar Sala</h2>
    </div>
    <div>
        <a href="./agendamento.php" class="btn btn-secondary">Voltar</a>
    </div>

</div>

<form class="row g-3 m-4" method="POST" action="./actions/processaEdita.php">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>" >
  <div class="col-md-6">
    <label for="nome" class="form-label">Nome</label >
    <input type="text" name="nome" class="form-control" id="nome" value="<?= $usuario['nome'] ?>" required>
  </div>
  <div class="col-md-6">
    <label for="capacidade" class="form-label">Capacidade</label>
    <input type="number" name="capacidade" class="form-control" id="capacidade" value="<?= $usuario['capacidade'] ?>" required>
  </div>
  <div class="col-md-6">
    <label for="descricao" class="form-label">Assunto da reunião</label>
    <input type="text" name="descricao" class="form-control" id="descricao" value="<?= $usuario['descricao'] ?>" required>
  </div>
  <div class="col-md-6">
    <label for="datas" class="form-label">Data</label>
    <input type="date" name="datas" class="form-control" id="datas" value="<?= $usuario['datas'] ?>" required>
  </div>

  
</select>
  </div>
  <div class="col-12">
    
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>












<?php include './layout/footer.php'?>
