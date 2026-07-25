<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/login.css">
  <title>Barbearia Stylo</title>
</head>
<body>
  <div class="hero-form">
    <form action="config/login.php" method="POST" class="form-login">
      <div class="hero-title">
        <img src="assets/icons/tesoura.svg" alt="tesoura">
        <h1>Barbearia Stylo</h1>
        <p>Faça login para continuar</p>
      </div>
      <label for="usuario">E-mail
        <div class="img-input">
          <img src="assets/icons/mail.svg" alt="email">
          <input type="email" name="email" placeholder="admin@gmail.com">
        </div>
      </label>
      <label for="senha">Senha
        <div class="img-input">
          <img src="assets/icons/lock.svg" alt="senha">
          <input type="password" name="senha" placeholder="****">
        </div>
        <?php if(isset($_GET["erro"]) == 1):?>
          <div class="erro">
              <p>Erro! Usuário ou senha incorretos</p>
            </div>
        <?php endif ?>
      </label>
      <button type="submit"><img src="assets/icons/logout.svg" alt="entrar">Entrar</img>
      </button>
      <div style="text-align: center; color: gray;">
        <p>Demo:</p>
        <p>E-mail: admin@gmail.com</p>
        <p>Senha: 1234</p>
      </div>
    </form>
  </div>
</body>
</html>