<?php
include_once("includes/header.php");
include_once("config/conexao.php");
?>
<main class="main">
  <!--INCLUIR MENU TOPO-->
  <?php include_once("includes/nav-topo.php")?>
  <section class="main-padding">
      <!--INICIO MARCADOR DE PAGINA-->
      <?php
          if($paginaAtual == 'clientes.php'):?>
            <a href="dashboard.php" class="paginaIndica">Dashboard/</a><span class="span"><?= htmlspecialchars(pathinfo($_SERVER["PHP_SELF"], PATHINFO_FILENAME)) ?></span>
        <?php endif ?>
        <!--FIM MARCADOR DE PAGINA-->
        <div class="voltar_pagina">
          <a href="dashboard.php">
          <img src="assets/icons/voltar.svg" alt="Voltar">
          Voltar</a>
        </div>
        <!--INICIO MENSAGEM DE ERRO-->
        <?php
        if(isset($_GET["erro"]) == 2):?>
          <div class="erro">
            <p>Digite o nome do cliente.</p>
          </div>
        <?php endif ?>
        <!--FIM MENSAGEM DE ERRO-->
  </section>
  <div class="bloco">
  <!--INICIO DA BUSCA DE CLIENTES-->
  <form action="busca_clientes.php" method="GET">
    <article class="buscar-cliente">
      <label for="buscar clientes">
        <input type="text" name="buscar_cliente" placeholder="Buscar por nome e sobrenome">
      </label>
      <div class="btn-busca">
        <button>
        <img src="assets/icons/search.svg" alt="buscar clientes">        
        Buscar</button>
        <a href="cadastrar-cliente.php">
        <img src="assets/icons/add.svg" alt="cadastrar novo cliente">
        Novo cliente</a>
      </div>
    </article>
  </form>
  <!--FIM DA BUSCA DE CLIENTES-->
  <!--INICIO DE CLIENTES CADASTRADOS-->
  <section class="scroll">
    <table class="table">
    <thead class="scroll">
      <tr class="table">
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data cadastro</th>
        <th>Ações</th>
      </tr>
    </thead>
      <?php
        $sql = "SELECT id,nome,sobrenome,telefone,data_cadastro FROM clientes ORDER BY id DESC";
        $res = $conn->query($sql);
        
        //VERIFICAR SE TEM DADOS
        if($res->num_rows > 0):?>
        <?php while($clientes = $res->fetch_assoc()):?>
        <tbody>
          <tr>
            <td>
              <p><?= htmlspecialchars($clientes["nome"]) ?></p>
              <p><?= htmlspecialchars($clientes["sobrenome"]) ?></p>
            </td>
            <td>
              <p><?= htmlspecialchars($clientes["telefone"]) ?></p>
            </td>
            <td>
              <p><?= htmlspecialchars(date("d/m/Y", strtotime($clientes["data_cadastro"]))) ?></p>
            </td>
            <td class="edit-cliente">
              <form action="editar-cliente.php" method="POST" class="form-edit-cliente">
                <input type="hidden" name="editar-cliente" value="<?php echo htmlspecialchars($clientes["id"]) ?>">
                <button type="submit">
                  <img src="assets/icons/edit.svg" alt="editar cliente" class="edit">
                </button>
              </form>
              <form action="apagar-cliente.php" method="POST" onsubmit="return confirm('Deseja mesmo APAGAR esse cliente')">
                <input type="hidden" value="<?php echo htmlspecialchars($clientes["id"]) ?>" name="id">
                <button type="submit">
                <img src="assets/icons/delete.svg" alt="deletar cliente"class="delete">
                </button>
              </form>
            </td>
          </tr>
        <?php endwhile; ?>
        <?php else:?>
          <tr><td colspan="4" style="color: #A9A9A9;">Sem clientes cadastrados.</td></tr>
        <?php endif ?>
        </tbody>
      </table>
  </section>
  <!--FIM DE CLIENTES CADASTRADOS-->
  </div>
  <?php include_once("includes/footer.php") ?>
</main>


