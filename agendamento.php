<?php 

require_once './actions/config.php';
$sql = "SELECT * FROM usuarios";
$stmt = $conn->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<?php include './layout/header.php'?>

<div class="container">
    <div class="d-flex justify-content-between mt-5">
        <div>
            <h4>Salas</h4>
        </div>
        <div>
          <a href="./criar-sala.php"  type="button" class="btn btn-primary ">Agendar Sala</a>
          
        </div>
        
        
    </div>
    <div class="mt-5">
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Capacidade</th>
            <th>Assunto da reunião</th> 
            <th>Data</th> 
            <th>Opções</th> 
          </tr>
        </thead>
        <tbody>
        <?php foreach($usuarios as $usuario){ ?>
            <tr>
              <td><?php echo $usuario['nome']; ?></td>
              <td><?php echo $usuario['capacidade']; ?></td>
              <td><?php echo $usuario['descricao']; ?></td>
              <td><?php echo $usuario['datas']; ?></td>
              <td>
                <a href="edita.php?id=<?= $usuario['id']; ?>" class="btn btn-primary">Editar</a>
                <a href="#" data-id="<?php echo $usuario['id']; ?>" class="btn btn-danger btn_excluir">Excluir</a>
              </td>
            </tr>

         <?php } ?>
        </tbody>

      </table>

    </div>
    
    
</div>    

<?php include './layout/footer.php'?>