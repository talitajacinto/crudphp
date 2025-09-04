<title>Cadastrar</title>

<?php 

include ('conexao.php');
$nome = htmlspecialchars $_POST['nome'];
$cidade = htmlspecialchars $_POST['cidade'];
$estado = htmlspecialchars $_POST['estado'];

$sql = "INSERT INTO pessoa (nome, cidade, estado) VALUES ('$nome', '$cidade', '$estado')";
$resultado = mysqli_query($conexao, $sql);
echo ">>USUÁRIO CADASTRADO COM SUCESSO!<BR>";
echo "<a href= 'cad_cliente.php' >VOLTAR</a>";


mysqli_close($conexao);
?>