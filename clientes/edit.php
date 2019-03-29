<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="cliente['nome']" value="<?php echo $cliente['nome']; ?>" placeholder="Digite seu nome"
      required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="cliente['cpf']" value="<?php echo $cliente['cpf']; ?>" data-error="Por favor, informe um cpf correto."
          data-minlength="11"
          required>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Email</label>
      <input type="text" class="form-control" name="cliente['email']" value="<?php echo $cliente['email']; ?>" placeholder="Digite seu email"
        data-error="Por favor, informe um e-mail correto."
        required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Observação:</label>
      <input type="text" class="form-control" name="cliente['observacao']" value="<?php echo $cliente['observacao']; ?>" placeholder="Observações sobre o cliente">
    </div>

  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

