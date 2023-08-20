<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Produtos</title>
</head>
<body>
    
<?php
	$id=$_POST['id']; 
   	 $sql = "delete from produtos where id='$id'";	   $con=mysqli_connect("127.0.0.1","root","","papelaria");    
      	     if (mysqli_connect_errno())
               { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }                                              mysqli_query($con, $sql);
	     echo "<center><h2>Produto deletado com sucesso!</center></h2><p><br>";              
    mysqli_close($con);
?> 
              <center><h2><a href="listar_prod.php">VOLTAR</a></h2></center>


</body>
</html>