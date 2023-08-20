<html>
<head><title>Cadastro Produtos</title></head>
</body>
<?php
$nome=$_POST['nome'];
$codBarras=$_POST['codBarras'];
$marca=$_POST['marca'];
$preco=$_POST['preco'];
$quantidade=$_POST['quantidade'];
$fornecedor=$_POST['fornecedor'];

$sql="insert into produtos (nome, codBarras, marca, preco, quantidade, fornecedor)
values('$nome', '$codBarras','$marca','$preco','$quantidade','$fornecedor')";

$con=mysqli_connect("localhost","root","","papelaria");
if(mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:".mysqli_connect_error();}
	mysqli_query($con,$sql);
	echo"<center><h2>Produto cadastrado com sucesso!</center></h2><p><br>";
	mysqli_close($con);
	?>
	
	<center><h2><a href="cadprodutos.html">VOLTAR</a></h2></center>

</body>
</html>