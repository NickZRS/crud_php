<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio em php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro de Produtos</h1>
                <form method="post" action="processa_cadastro_produtos.php">
                    <div class="mb-3">
                        <label class="form-label">Nome do Produto: </label>
                        <input type="text" class="form-control" name="nome_produto" placeholder="Nome">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Descrição do Produto: </label>
                        <input type="textarea" class="form-control" name="descricao_produto" placeholder="Descrição">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Preço do Produto: </label>
                        <input type="number" class="form-control" name="preco_produto" placeholder="Preço">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Código de barras: </label>
                        <input type="text" class="form-control" name="codigo_barras" placeholder="Código">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Fornecedor: </label>
                        <input type="text" class="form-control" name="fornecedor_produto" placeholder="Fornecedor">
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Quantidade no estoque: </label>
                        <input type="number" class="form-control" name="qtd_estoque" placeholder="Quantidade no Estoque">
                    </div>
                    <div class="form-group mb-2">
                        <label>Foto do Produto</label>
                        <input type="file" class="form-control" name="fotos_produto" placeholder="Fotos">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a class="btn btn-primary" href="index.php" role="button">Voltar ao inicio</a>
                </form>
                
            </div>
        </div>
    </div>    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>