<?php
$pesquisa = $_POST['busca'] ?? '';

include "conecta.php";

$sql = "SELECT * FROM produtos WHERE id_produto LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio em php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Listagem e Edição do Produto</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" action="edicao_produto.php" method="POST" role="search">
                            <input class="form-control me-2" type="search" placeholder="id" aria-label="Search"
                                name="busca">
                            <button class="btn btn-outline-success" type="submit">Consultar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Codigo de barras</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Quantidade no estoque</th>
                            <th scope="col">Foto do produto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $id = $linha['id_produto'];
                            $nome = $linha['nome_produto'];
                            $descricao = $linha['descricao_produto'];
                            $preco = $linha['preco_produto'];
                            $codigo = $linha['codigo_barras'];
                            $fornecedor = $linha['fornecedor_produto'];
                            $estoque = $linha['qtd_estoque'];
                            $foto = $linha['fotos_produto'];

                            echo "<tr>
                                            <th scope='row'>$id</th>
                                                <td>$nome</td>
                                                <td>$descricao</td>
                                                <td>$preco</td>
                                                <td>$codigo</td>
                                                <td>$fornecedor</td>
                                                <td>$estoque</td>
                                                <td>$foto</td>
                                                <td><a href='edicao_produto.php?id=$id' class='btn btn-success btn-sm'>Editar</td>
                                                <td><a href='#' class='btn btn-danger btn-sm'  data-bs-toggle='modal' data-bs-target='#confirma'
                                                onclick=" .'"' ."get_dados($id_produto,$nome)" .'"' .">Excluir</td>
                                        </tr>";
                        }

                        $dados = mysqli_query($conn, $sql);
                        ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="index.php" role="button">Voltar para o inicio</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="exclusao_produto.php" method="POST">
                    <p>Deseja realmente excluir <b id="nome_produto"></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <input type="text" name="nome" id="nome_produto_1" value="">
                    <input type="text" name="id" id="id_produto" value="">
                    <input type="submit" class="btn btn-danger" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function get_dados(id, nome){
            document.getElementById('nome_produto').innerHTML = nome;
            document.getElementById('nome_pessoa_1').value = nome;
            document.getElementById('id').value = id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>