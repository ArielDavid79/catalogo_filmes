<?php
 
require_once __DIR__ . "\..\..\model\Filme.php";
 
$filmeModel = new Filme();
$filmes = $filmeModel->buscarTodos();
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
 
    <link rel="stylesheet" href="/ariel/catalogo/public/css/style.css">
</head>
<body>
    <section class="container">    
        <h2>Filmes</h2>

        <div class="acao_home">
            <a href="home.php">
                <button>
                    <span class="material-symbols-outlined">
                        home
                    </span>
                </button>
            </a>
        </div>

 
        <div class="acao">
            <a href="cadastro.php">
                <button>
                    <span>Cadastrar filme:</span>
                    <span class="material-symbols-outlined">
                        add_box
                    </span>
                </button>
            </a>
        </div>
        <table class="table">
        <thead>
 
            <th>Id</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Descrição</th>  
 
        </thead>
 
        <tbody>
 
        <?php foreach ($filmes as $filme){ ?>
                <tr>
                    <td><?php echo $filme->id ?></td>
                    <td><img class="img"src="<?php echo $filme->imagem ?>" alt="Imagem do Filme" ></td>
                    <td><?php echo $filme->nome ?></td>
                    <td><?php echo $filme->ano ?></td>
                    <td><?php echo $filme->descricao ?></td>
                    <td>
                        <form action="visualizar.php" method="GET">
 
                            <input type="hidden" name="id" value="<?php echo $filme->id ?>">
                            <button>
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </button>
 
                        </form>
 
                        <form action="cadastro.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $filme->id ?>">
                            <button>
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </button>
                        </form>

                         
                        <form action="excluir.php" method="POST">
                           
                            <input type="hidden" name="id" value="<?php echo $filme->id ?>">
                            <button onclick="return confirm('Tem certeza de que deseja excluir esse filme?')">  
                                <span class="material-symbols-outlined">
                                 delete
                                </span>
                            </button>
                        </form>

                         
                    </td>
                </tr>
        <?php }?>
        </tbody>
    </table>
    </section>
 
    <script src="/ariel/catalogo/public/js/main.js">  </script>
   
</body>
</html>