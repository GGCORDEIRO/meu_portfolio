<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Descrição-->
    <meta name="author" content="Meu Portfólio">
    <meta name="description" content="Projeto para mostrar desempenho de Geovane">
    
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="/src/assets/icone.png">
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="/src/css/style.css">
    
    <!--Titulo-->
    <title>Meu Portfólio</title>
  </head>
  <body>
    <?php require_once('pages/header.php'); ?>
    
    <main class="conteudo-index">
      <div>
      <section>
        <img src="/src/assets/Geovane.png" style="border: solid 2px aqua; width: 50%;" alt="Imagem de Geovane">
      </section>
      <section>
        <img src="/src/assets/Geovane.png" style="border: solid 2px aqua; width: 50%;" alt="Imagem de Geovane">
      </section>
    </div>
    </main>
    
    <?php require_once('pages/footer.php'); ?>
  </body>
</html>
<style>
body {
  background-image: linear-gradient(to top right, aqua, black);
}
  .conteudo-index > div{
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 30%;
    padding: 0 50px;
    top: 20px;
    position: relative;
    top: 50px;
    background-color: brown;
  }
  .conteudo-index > div > section{
    width: 50%;
    background-color: blue;
  }
</style>