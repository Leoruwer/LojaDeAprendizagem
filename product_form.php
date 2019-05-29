<?php include("includes.php");

verifyUser();

$categories = categoryList($connect);
?>
     <h1>Formulario de Produto</h1>
			<form action="add_product.php" method="post">
				<table class="table">
					<tr>
						<td>Nome</td>
						<td><input class="form-control" type="text" name="name" /></td>
					</tr>

					<tr>
						<td>Preço</td>
						<td><input class="form-control" type="number" name="price" /></td>
					</tr>

					<tr>
						<td>Descrição</td>
						<td><textarea class="form-control" name="description"></textarea></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="checkbox" name= "used" value="true">Usado</td>
					</tr>

					<tr>
						<td>Categoria</td>
						<td>
							<select name="category_id">
							<?php foreach($categories as $category) : ?>
								<option value="<?=$category['id']?>"><?=$category['name']?></option>
							<?php endforeach ?>
						</select>
						</td>
					</tr>

					<tr>
						<td>
							<button class="btn btn-primary" type="submit">Cadastrar</button>
						</td>
					</tr>


				</table>

			</form>			
<?php include("bottom.php")?>	