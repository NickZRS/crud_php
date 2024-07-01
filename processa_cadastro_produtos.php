<?php
include "conecta.php";

$nome = $_POST['nome_produto'];
$descricao = $_POST['descricao_produto'];
$preco = $_POST['preco_produto'];
$codigo = $_POST['codigo_barras'];
$fornecedor = $_POST['fornecedor_produto'];
$estoque = $_POST['qtd_estoque'];
$fotos = $_FILES['fotos_produto']['name'];
move_uploaded_file($_FILES['fotos_produto']['tmp_name'], 'fotos_produtos/'.$fotos);

$sql = "INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, codigo_barras, fornecedor_produto, qtd_estoque, fotos_produto) 
        VALUES ('$nome','$descricao','$preco','$codigo','$fornecedor','$estoque','$fotos')";

if (mysqli_query($conn, $sql)) {
    echo "$nome cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . mysqli_error($conn);
}

?>
<a href="cadastro_produtos.php">Voltar</a>;
