<?php
ob_start();
include_once("includes/header.php");
include_once("config/conexao.php");
?>
<main class="main">
  <?php include_once("includes/nav-topo.php")?>
  <section class="main-padding">
      <?php if($paginaAtual == 'editar-cliente.php'):?>
            <a href="dashboard.php" class="paginaIndica">Dashboard/</a><span class="span">Editar Clientes</span>
        <?php endif ?>
        <div class="voltar_pagina">
          <a href="clientes.php">
          <img src="assets/icons/voltar.svg" alt="Voltar">
          Voltar</a>
        </div>
        <!--MENSAGEM SUCESSO/ERRO-->
        <?php
          if(isset($_GET["sucesso"]) == 1):?>
            <div class="sucesso">
              <p>Dados salvo com sucesso</p>
            </div>
          <?php elseif(isset($_GET["erro"]) == 2): ?>
            <div class="erro">
              <p>Erro ao salvar os dados</p>
            </div>
          <?php endif  ?>
  </section>
  <div class="bloco">
    <?php
    //INICIALIZA A VARIAVEL EM NULL
    $row = null;
    
    if(isset($_POST["editar-cliente"])){
      $id_cliente = $_POST["editar-cliente"];
      
      $sql = $conn->prepare("SELECT nome,sobrenome,telefone FROM clientes WHERE id = ?");
      $sql->bind_param("i", $id_cliente);
      $sql->execute();
      $row = $sql->get_result();
    }
    //VERIFICA SE O $ROW VEIO RESULTADO
    if($row && $row->num_rows > 0): 
      $res = $row->fetch_assoc(); 
    ?>
      <form action="salvar-cliente.php" method="POST" class="form-container">
        <h3>Editar cliente</h3>
        <section class="form">
          <input type="hidden" name="id" value="<?php echo $id_cliente; ?>">
        <label>
          Nome
          <input type="text" name="novo_nome" value="<?php echo htmlspecialchars($res["nome"]) ?>">
        </label>
        <label>
          Sobrenome
          <input type="text" name="novo_sobrenome" value="<?php echo htmlspecialchars($res["sobrenome"]) ?>">
        </label>
        <label>
          Telefone
          <input type="text" name="novo_telefone" value="<?php echo htmlspecialchars($res["telefone"]) ?>">
        </label>
        </section>
        <div class="btn-busca">
          <button type="submit">Salvar</button>
        </div>
      </form>
    <?php 
    else: 
      echo "<p>Selecione um cliente para editar.</p>";
    endif 
    ?>
  </div>
  <?php include_once("includes/footer.php") ?>
</main>