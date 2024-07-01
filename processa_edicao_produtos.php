<?php
include "conecta.php";

$id = $_POST['id_produto'];
$nome = $_POST['nome_produto'];
$descricao = $_POST['descricao_produto'];
$preco = $_POST['preco_produto'];
$codigo = $_POST['codigo_barras'];
$fornecedor = $_POST['fornecedor_produto'];
$estoque = $_POST['qtd_estoque'];
$fotos = $_FILES['fotos_produto']['name'];
move_uploaded_file($_FILES['fotos_produto']['tmp_name'], 'fotos_produtos/'.$fotos);

$sql = "UPDATE produtos set 'nome_produto' = '$nome', 'descricao_produto'='$descricao', 'preco_produto'='$preco', 'codigo_barras'='$codigo', 'fornecedor_produto'='$fornecedor', 'qtd_estoque'='$estoque', 'fotos_produto'='$fotos' WHERE id_produto  = $id";

if (mysqli_query($conn, $sql)) {
    echo "$nome alterado com sucesso!";
} else {
    echo "Erro ao alterar produto" . mysqli_error($conn);
}

?>
<a href="cadastro_produtos.php">Voltar</a>;
