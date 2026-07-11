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
      <div>
        <h1>Barbearia Stylo</h1>
      </div>
      <label for="usuario">Email
        <img src="assets" alt="email">
        <input type="email" name="email">
      </label>
      <label for="senha">Senha
        <img src="assets/" alt="senha">
        <input type="password" name="senha">
      </label>
      <button type="submit"><img src="assets/" alt="entrar">Entrar</img>
    </form>
  </div>
</body>
</html>