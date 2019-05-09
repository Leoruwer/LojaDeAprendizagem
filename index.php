<?php include("includes.php");

if(isset($_GET["login"]) && $_GET["login"]==1) {?>
<p class="alert-success">Login realizado com sucesso!</p>
<?php
}
if(isset($_GET["login"]) && $_GET["login"]==0) {
?>
  <p class="alert-danger">Usuario ou senha inválida!</p>
<?php
}
?>
  <h1>Bem vindo!</h1>
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

      </table>
    </form>
<?php include("bottom.php")?>