<?php include("includes.php");?>

<table class="table table-striped table-bordered">

<?php
  if(array_key_exists("removed", $_GET) && $_GET['removed']=='true') { ?>
    <p class="text-success">Produto removido com sucesso! </p>
<?php }

  
  $products = product_list($connect);
    foreach ($products as $product) :
      ?>
      <tr>
        <td><?= $product['name'] ?></td>

        <td><?= $product['price'] ?></td>

        <td><?= substr($product['description'], 0, 255) ?></td>

        <td><?= $product['category_name'] ?></td>

        <td style="width: 116px"><?= print_r(usedYesOrNo($product['used']), true) ?> </td>

        <td style="width: 68px"><a class="btn btn-primary" href="change_product_form.php?id=<?=$product['id']?>">Alterar</a></td>

        <td style="width: 68px">
          <form action="remove_product.php?id=<?=$product['id']?>" method="post" style="margin: 0">
            <input type="hidden" name="id" value="<?=$product['id']?>"/>
            <button class="btn btn-danger">Remover</button>
          </form>
        </td>
      </tr>
    <?php
    endforeach
    ?>
</table>
<?php include("bottom.php");?>