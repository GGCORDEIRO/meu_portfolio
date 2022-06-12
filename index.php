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
      <div class="l-word">
          <div class="c-word">
            Bem vindo
          </div> 
          </div>
          <div class="l-word1"> 
            <div class="c-word1">
            <i style="color:red;">let</i> nome = "<i style="color:green;">Geovane</i>"
          </div>
          </div>
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
.conteudo-index{

}
  .conteudo-index > div{
    align-items: center;
    display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 0 10px;
    gap: 10px;
    position: relative;
    top: 40px;
    background-color: brown;
  }
  .conteudo-index > div > section{
    width: 50%;
    background-color: blue;
  }
  .c-word{
    color: gray;
    font-family: "Russo One", sans-serif;
    font-size: 5rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: relative;
    padding: 0rem 0rem;
    opacity: 0;
    animation: fadeInText 0s 1.7s both;
}
.l-word{
    position: relative;
    overflow: hidden;
  }
  .l-word::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: red;
    transform: translate(-100%);
    animation: enlargeBlock 1s 1s both, revealBlock 1s 1.7s both;
  }
  @keyframes fadeInText{
  from{
    opacity: 0;
  }
  to{
    opacity: 1;
  }
}
  @keyframes revealBlock{
    from{
      transform: translateX(0%);
    }
    to{
      transform: translateX(100%);
    }
  }
  @keyframes enlargeBlock{
    from{
      width: 0%;
    }
    to{
      width: 100%;
    }
  }



  .c-word1{
    color: gray;
    font-family: "Russo One", sans-serif;
    font-size: 3rem;
    letter-spacing: 5px;
    position: relative;
    padding: 0rem 0rem;
    opacity: 0;
    animation: fadeInText1 0s 3.4s both;
}
.l-word1{
    position: relative;
    overflow: hidden;
  }
  .l-word1::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: red;
    transform: translate(-100%);
    animation: enlargeBlock1 1s 2s both, revealBlock1 2s 3.4s both;
  }
  @keyframes fadeInText1{
  from{
    opacity: 0;
  }
  to{
    opacity: 1;
  }
}
  @keyframes revealBlock1{
    from{
      transform: translateX(0%);
    }
    to{
      transform: translateX(100%);
    }
  }
  @keyframes enlargeBlock1{
    from{
      width: 0%;
    }
    to{
      width: 100%;
    }
  }

</style>