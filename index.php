<?php include("includes.php");

if(isset($_GET["securityFail"])) { ?>
  <p class="alert-danger">Você não tem acesso a essa funcionalidade!</p>
<?php } 

userLoginMessages(); ?>

  <h1>Bem vindo!</h1>

  <?php if(isset($_SESSION["user_logged"])) { ?>
    <p class="text-sucess">Você está logado como: <?=$_SESSION["user_logged"] ?>. <br>
    <td style="width: 68px">
      <form action="user_logout.php" method="post" style="margin: 0">
        <button class="btn btn-danger">Logout</button>
      </form>
    </td>
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