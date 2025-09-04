<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <form action="cadastar.php" method="post">
       <input type="text" name="nome" placeholder="Nome do Cliente:">
       <input type="text" name="cidade" placeholder="Cidade:">
       <input type="text" name="estado" placeholder="Estado:">
       <input type="submit" value="Cadastrar">
    </form>

    <h2>Lista de Clientes:</h2>

<table>
        <thead>
<tr>
        <th>Nome:</th>
        <th>Cidade:</th>
        <th>Estado:</th>
        <th>Ações:</th>

          </tr>
</thead>
<tbody>
<?php
include ('conexao.php');
$query = "SELECT id, nome, cidade, estado FROM pessoa ORDER BY nome";
$resultado = $conexao->query($query);
  while ($linha = $resultado->fetch_assoc()){
  echo '<tr>';
  echo '<td>'.$linha ['nome'].'</td>'; 

  echo '<td>'.$linha ['cidade'].'</td>'; 

  echo '<td>'.$linha ['estado'].'</td>';
  
  echo '</tr>';
  }




?>

</tbody>        



    </table>
</body>
</html>