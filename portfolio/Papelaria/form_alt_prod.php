<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
</head>
<body>
    
<?php	
	$id= $_POST['id'];	
          $con=mysqli_connect("127.0.0.1","root","","papelaria"); 
	    if (mysqli_connect_errno())
	      {  echo "Failed to connect to MySQL: " . mysqli_connect_error();}	
          $result = mysqli_query($con,"SELECT * FROM produtos WHERE id='$id'");	
?>
<p><center><form action="realizaaltprod.php" method="post">
<?php while($row = mysqli_fetch_array($result)) { 
?>	
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />	
<label>Nome:<input type="text" name="nome" value="<?php echo $row['nome']; ?>" />	</label><br/>
<label>codBarras:<input type="text" name="codBarras" value="<?php echo $row['codBarras']; ?>" /></label><br/>
<label>Marca:<input type="text" name="marca" value="<?php echo $row['nome']; ?>" /></label><br/>
<label>Preço:<input type="text" name="preco" value="<?php echo $row['preco']; ?>" /></label><br/>
<label>Quantidade:<input type="text" name="quantidade" value="<?php echo $row['quantidade']; ?>" /></label><br/>
<label>Fornecedor:<input type="text" name="fornecedor" value="<?php echo $row['fornecedor']; ?>" /></label><br/>

<button type="submit" name="enviar" value="ok">	Alterar	</button>
                  </form>
<?php } ?></p>


</body>
</html>