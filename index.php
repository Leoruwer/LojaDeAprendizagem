<?php include("includes.php");

if(isset($_GET["securityFail"])) { ?>
  <p class="alert-danger">Você não tem acesso a essa funcionalidade!</p>
<?php } 

if(isset($_GET["login"]) && $_GET["login"]==1) {?>
<p class="alert-success">Login realizado com sucesso!</p>
<?php
}
if(isset($_GET["login"]) && $_GET["login"]==0) {?>
  <p class="alert-danger">Usuario ou senha inválida!</p>
<?php } 

if (isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
  <p class="alert-danger">Deslogado com sucesso!</p>
<?php } ?>

  <h1>Bem vindo!</h1>

  <?php if(isset($_COOKIE["user_logged"])) { ?>
    <p class="text-sucess">Você está logado como: <?=$_COOKIE["user_logged"] ?>. <br>
    <a href="user_logout.php">Deslogar</a></p>
  <?php } else { ?>

  <h2>Login</h2>

    <form action="login.php" method="post">
      <table class="table">
        <tr>
          <td>Email</td>
          <td><input class="form-control" type="email" name="email"></td>
        </tr>

        <tr>
          <td>Senha</td>
          <td><input class="form-control" type="password" name="password"></td>
        </tr>

        <tr>
          <td><button type="submit" class= "btn btn-primary">Login</button></td>
        </tr>
  <?php } ?>

      </table>
    </form>
<?php include("bottom.php")?>