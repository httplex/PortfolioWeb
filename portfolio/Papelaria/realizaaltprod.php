<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar atualização de dados dos produtos</title>
</head>
<body>
    
<?php		
     $id=$_POST['id'];                
     $nome= $_POST['nome'];		
     $codBarras=$_POST['codBarras'];               
     $marca=$_POST['marca'];		
     $preco=$_POST['preco'];               
     $quantidade=$_POST['quantidade'];                
     $fornecedor=$_POST['fornecedor'];		  
    $sql="update produtos set id='$id',nome='$nome',codBarras='$codBarras',marca='$marca',preco='$preco',quantidade='$quantidade',fornecedor='$fornecedor' where id=$id";
    $con=mysqli_connect("127.0.0.1","root","","papelaria");          		
	if (mysqli_connect_errno())	
        {  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }                             
    mysqli_query($con, $sql);
	 echo "<center><h2>Produto Alterado com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?> 
              <center><h2><a href="listar_prod.php">VOLTAR</a></h2></center>


</body>
</html>