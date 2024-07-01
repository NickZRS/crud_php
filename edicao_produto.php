<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio em php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include "conecta.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM produtos WHERE id_produto = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados)

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Edição de Produto</h1>
                <form method="post" action="processa_edicao_produtos.php">
                    <div class="mb-3">
                        <label class="form-label">Nome do Produto: </label>
                        <input type="text" class="form-control" name="nome_produto" placeholder="Nome" required value="<?php echo $linha['nome_produto']; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Descrição do Produto: </label>
                        <input type="textarea" class="form-control" name="descricao_produto" placeholder="Descrição" required value="<?php echo $linha['descricao_produto']; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Preço do Produto: </label>
                        <input type="number" class="form-control" name="preco_produto" placeholder="Preço"
                        required value="<?php echo $linha['preco_produto']; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Código de barras: </label>
                        <input type="text" class="form-control" name="codigo_barras" placeholder="Código"
                        required value="<?php echo $linha['codigo_barras']; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Fornecedor: </label>
                        <input type="text" class="form-control" name="fornecedor_produto" placeholder="Fornecedor" required value="<?php echo $linha['fornecedor_produto']; ?>">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Quantidade no estoque: </label>
                        <input type="number" class="form-control" name="qtd_estoque" placeholder="Quantidade no Estoque" required value="<?php echo $linha['qtd_estoque']; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label>Foto do Produto</label>
                        <input type="file" class="form-control" name="fotos_produto" placeholder="Fotos" required value="<?php echo $linha['fotos_produto']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="?php echo $linha['id_produto']">
                    </div>
                </form>
                <a class="btn btn-primary" href="index.php" role="button">Voltar ao inicio</a>


            </div>
        </div>
    </div>    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>