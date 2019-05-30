<?php include("includes.php");

verifyUser();

$id = $_GET['id'];
$product = lookForProduct($connect, $id);
$categories = categoryList($connect);
$used = $product['used'] ? "checked='checked'" : "";?>

<h1>Alterando o Produto</h1>
  <form action="change_product.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
      <table class="table">
        <tr>
          <td>Nome</td>
          <td><input class="form-control" type="text" name="name" value="<?=$product['name']?>"></td>
        </tr>

        <tr>
          <td>Preço</td>
          <td><input class="form-control" type="number" name="price" value="<?=$product['price']?>"></td>
        </tr>

        <tr>
          <td>Descrição</td>
          <td><textarea class="form-control" name="description"><?=$product['description']?></textarea></td>
        </tr>
        
        <tr>
          <td></td>
          <td><input type="checkbox" name= "used" <?=$used?> value="true">Usado</td>
        </tr>

        <tr>
          <td>Categoria</td>
          <td>
            <select name="category_id" class="form-control">
              <?php
                foreach($categories as $category) : 
                  $thisCategory = $product['category_id'] == $category['id'];
                  $selection = $thisCategory ? "selected='selected'" : ""; 
              ?>

                <option value="<?=$category['id']?>" <?=$selection?>>
                   <?=$category['name']?>
                </option>
              <?php endforeach ?>
            </select>
          </td>
        </tr>

        <tr>
          <td>
            <button class="btn btn-primary" type="submit">Alterar</button>
          </td>
        </tr>

      </table>

  </form>
<?php include("bottom.php")?> 