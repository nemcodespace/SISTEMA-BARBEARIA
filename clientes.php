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
            <a href="dashboard.php" class="paginaIndica">dashboard/</a><span class="span">Clientes</span>
        <?php endif ?>
        <!--FIM MARCADOR DE PAGINA-->
  </section>
  <div class="bloco">
  <form>
    <article class="buscar-cliente">
      <label for="buscar clientes">
        <input type="text" name="buscar_cliente" placeholder="Buscar por nome e sobrenome">
      </label>
      <div class="btn-busca">
        <button>
        <img src="assets/icons/search.svg" alt="buscar clientes">        
        Buscar</button>
        <a href="">
        <img src="assets/icons/add.svg" alt="cadastrar novo cliente">
        Novo cliente</a>
      </div>
    </article>
  </form>
  <section class="scroll">
    <table class="table">
    <thead class="scroll">
      <tr class="table">
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data cadastro</th>
        <th>Acões</th>
      </tr>
    </thead>
      <?php
        $sql = "SELECT id,nome,sobrenome,telefone,data_cadastro FROM clientes";
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
              <a href="">
                <img src="assets/icons/edit.svg" alt="editar cliente" class="edit">
              </a>
              <a href="">
                <img src="assets/icons/delete.svg" alt="deletar cliente"class="delete">
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
        <?php else:?>
          <tr><td colspan="4" style="color: #A9A9A9;">Sem clientes cadastrados.</td></tr>
        <?php endif ?>
        </tbody>
      </table>
  </section>
  </div>
  <?php include_once("includes/footer.php") ?>
</main>
