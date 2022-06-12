<?php


 require_once('../database/config.php');
  $u = new Usuario;


  if(isset($_POST['nome'])){

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $whatsapp = addslashes($_POST['whatsapp']);
  $subscribe = addslashes($_POST['subscribe']);
  $assunto = addslashes($_POST['assunto']);
  $mensagem = addslashes($_POST['mensagem']);

  if(!empty($nome) && !empty($email) && !empty($whatsapp) && !empty($subscribe) && !empty($assunto) && !empty($mensagem)){
    $u->conectarBD();
    if($u->msgErro == ""){
            if($u->contato($nome,$email,$whatsapp,$subscribe,$assunto,$mensagem)){
              echo "<script>alert('Erro: Tente novamente!');location.href='../pages/contact.php';</script>";
            }else{
              echo "<script>alert('Mensagem enviada com sucesso, aguarde meu contato!');location.href='../pages/contact.php';</script>";
            }
    }else{
        echo "Erro: ".$u->msgErro;
    }
}else{
    echo "<script>alert('Preencha todos os campos! ');location.href='../pages/cadastro.php?p=inicial';</script>";
}
}


?>

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
    <link rel="stylesheet" type="text/css" href="/src/css/page.css">
    
    <!--Titulo-->
    <title>Meu Portfólio</title>
  </head>
  <body>

        <!--Topo da Página-->
        <?php require_once('header.php'); ?>

        <!--Meio da Página-->
        <main class="conteudo-contato">
            <section class="conteudo-criador">
                <div class="criador-1">
                    <div class="conteudo-imagem-geovane">
                        <a href="pdf.php"><img class="bord" title="Geovane" src="../src/assets/Geovane.png" alt="Geovane"></a>
                    </div>
                    <h2 class="nome">Geovane</h2>
                    <div class="conteudo-redes-geovane">
                        <a href="https://www.linkedin.com/in/geovane-dos-santos/"><img class="conteudo-logo-redes" src="/src/assets/linkedin.png" alt="" title="Linkedin"></a>
                        <a href="https://github.com/GGCORDEIRO/"><img class="conteudo-logo-redes" src="/src/assets/github.png" alt="" title="Github"></a>
                    </div>
                </div>
            </section>
            <section class="conteudo-form-contato">
            <h1 class="contato">Contato</h1>
                    <p class="caso">Caso tenha dúvidas a respeito do meu projeto,<br> entre em contato!</p>
                <form action="" method="POST">
                    <div class="form-0">
                    <div class="form-1">
                    <div class="box-form">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome completo" required="">
                    </div>
                    <div class="box-form">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" minlength="8" maxlength="255" autocomplete="email" placeholder="@" required="">
                    </div>
                    <div class="box-form">
                        <label for="whatsapp">Whatsapp:</label>
                        <input size="15" type="tel" name="whatsapp" id="whatsapp" minlength="8" maxlength="15" inputmode="numeric" autocomplete="tel" placeholder="(__) _____-____" required="">
                    </div>
                    <div class="box-form">
                        <label for="subscribe">Aceita contato via Whatsapp ?</label><br>
                        <input type="radio" name="subscribe" value="Sim" id="subscribe" checked> Sim
                        <input type="radio" name="subscribe" value="Não" id="subscribe"> Não
                    </div>
                    </div>
                    <div class="form-2">

                    <div class="box-form">
                        <label for="assunto">Assunto:</label>
                        <select name="assunto" type="text" list="sugestoes" id="assunto" required="">
                            <option disabled>Selecione uma opção</option>
                            <option value="Projeto">Projetos</option>
                            <option value="Sugestao">Sugestões</option>
                            <option value="Duvidas">Dúvidas</option>
                            <option value="Reclamacoes">Reclamações</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="box-form">
                        <label for="mensagem">Mensagem:</label>
                        <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem" rows="5" required="" title="Preencha este campo"></textarea>
                    </div>
                    </div>
                    </div>
                    <div class="form-enviar">
                        <input value="Enviar" title="Enviar" type="submit">
                        <input value="Limpar" title="Limpar" type="reset" style="margin-left: 20px;">
                    </div>
                </form>
            </section>
        </main>
    
    <!--Fim da Página-->
<?php require_once('footer.php'); ?>

  </body>
</html>
<style>
body {
  background-image: linear-gradient(to top right, rgb(0,200,200), black);
}
.conteudo-contato {
  width: 50vw;
  margin: 3% auto 0.5% auto;
  padding: 10px;
}
form{

}
.conteudo-contato .conteudo-criador {
    text-align: center;
    width: 45%;
    margin-inline: auto;
    padding: 5px;
}

.nome {
  margin: 20px 0;
  font-size: 150%;
  color: aqua;
}

.contato {
  margin-bottom: 10px;
  color: var(--base-color);
}
.caso {
  margin-bottom: 10px;
}

.box-form {
  margin-top: 5px;
  width: 100%;
  text-align: center;
}
.form-0{
  display: flex;
  width: 100%;
  text-align: center;
  justify-content: center;
}
.form-1, .form-2{
  width: 50%;
}
.form-1{
  position: relative;

}
.form-2{
  border-left: solid 4px gray;
}
#arquivo {
  width: 60%;
  border-radius: 10px;
  background-color: aqua;
}
.conteudo-form-contato {
  width: 90%;
  margin-inline: auto;
  margin-top: 20px;
  border: solid 2px var(--base-color);
  background-color: rgba(94, 94, 94, 80%);
  border-radius: 10px;
}
@keyframes edu2 {
  0% {
    border-color: var(--base-color);
  }
  50% {
    border-color: var(--base-black);
  }
  100% {
    border-color: var(--base-color);
  }
}
.bord {
  width: 20rem;
  border: solid 3px var(--base-black);
  border-radius: 10px;
  background-color: rgba(0, 255, 255, 70%);
  animation-name: edu2;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}
.conteudo-redes-geovane a{
  width: 50px;
  background-color: aqua;
  border-radius: 50px;
  padding: 20px 10px 2px 10px;
}
.conteudo-redes-geovane{
  text-align: center;
}
.conteudo-logo-redes {
  width: 30px;
}
.conteudo-imagem-geovane:hover,
a:hover,
.footer-linkedin:hover,
.conteudo-logo-redes:hover,.form-enviar > input:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
  transition: 0.2s ease-in;
}
input,
select, textarea, .conteudo-form-contato {
  padding: 1%;
  text-align: center;
  border-radius: 10px;
}

.form-enviar > input{
  width: 15%;
  margin-top: 10px;
  padding-inline: 1%;
  text-align: center;
  border-radius: 10px;
  border: solid 2px aqua;
  background-color: rgba(255, 255, 255, 70%);
}



</style>