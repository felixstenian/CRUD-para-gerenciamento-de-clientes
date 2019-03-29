<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="POST">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="cliente['nome']" placeholder="Digite seu nome"
      required>
      
    </div>

    <div class="form-group col-md-5">
      <label for="cpf">CPF</label>
      <input type="number" class="form-control" name="cliente['cpf']" placeholder="Digite seu CPF"
          data-error="Por favor, informe um cpf correto."
          min="11"
          required>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="cliente['email']" placeholder="Digite seu email"
        data-error="Por favor, informe um e-mail correto."
        required>
    </div>

    <div class="form-group col-md-5">
      <label for="observacao">Observações</label>
      <input type="text" class="form-control" name="cliente['observacao']" placeholder="Observações sobre o cliente">
    </div>
  </div>
    
   
   <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

