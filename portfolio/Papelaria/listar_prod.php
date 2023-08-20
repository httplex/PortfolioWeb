<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Produtos</title>
</head>
<body>
<?php $con=mysqli_connect("localhost","root","","papelaria"); 
     if (mysqli_connect_errno())  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
    $result = mysqli_query($con,"SELECT * FROM produtos");?><p> <center>
   <table border="1px" cellpadding="2px" cellspacing="0" bordercolor="#4169E1">	
   <tr>
    <th>ID</th>
    <th>Nome</th> 
	<th>Código de barras</th> 
    <th>Marca</th> 
    <th>Preço</th> 
    <th>Quantidade</th>                                                         
    <th>Fornecedor</th>  
	<th>Deleta</th><th>Alt</th>
   </tr>
       <?php while($row=mysqli_fetch_array($result)){ ?>  	
   	<tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
		<td><?php echo $row['codBarras']; ?></td>		
		<td><?php echo $row['marca']; ?></td>
		<td><?php echo $row['preco']; ?></td>
        <td><?php echo $row['quantidade']; ?></td>  
        <td><?php echo $row['fornecedor']; ?></td>      
		
		<td><form action="realizadelprod.php" method="post">					 <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>			  <button type="submit" name="botdelprod" value="ok">Del</button></form></td>
		<td><form action="form_alt_prod.php" method="post">				            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
        <button type="submit" name="botaltalun" value="ok">Alt</button></form></td>
    </tr>
        <?php }mysqli_close($con);?>    </table></p> </center>
</body>
</html>