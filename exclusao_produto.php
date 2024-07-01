<?php include 'conecta.php'; ?>

<?php

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = "DELETE FROM produtos WHERE id_produto = $id";

if(mysqli_query($conn, $sql)){
    echo("$nome excluído com sucesso!");
} else{
    echo("$nome não excluído");
}

?>
