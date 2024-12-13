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
    <title>Home</title>
    <link rel="stylesheet" href="/ariel/catalogo/public/css/style.css">
</head>
<body>
        
    <header>
 
        <nav>
            <ul>
                <li><a href="listar.php">Listar</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="visualizar.php">Visualizar</a></li>
            </ul>
        </nav>
       
    </header>
        <section class="container_card">
            <?php foreach($filmes as $filme) {?>
                <div class="cards">
                <img class="img_view2"src="<?php echo $filme->imagem ?>" alt="img-view" >
                <h2 class="title"><?php echo $filme->nome ?></h2>
                <span class="descricao"><?php echo $filme->descricao ?></span>
                </div>
            <?php }?>
        </section>
   
</body>
</html>