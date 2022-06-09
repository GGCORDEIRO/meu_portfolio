<?php


 require_once('../database/config.php');
  $u = new Usuario;


  if(isset($_POST['nome'])){

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $contato = addslashes($_POST['contato']);
  $senha = addslashes($_POST['senha']);
  $confsenha = addslashes($_POST['confsenha']);
  $subscribe = addslashes($_POST['subscribe']);

  if(!empty($nome) && !empty($email) && !empty($contato) && !empty($senha) && !empty($confsenha) && !empty($subscribe)){
    $u->conectarBD();
    if($u->msgErro == ""){
        if($senha == $confsenha){
            if($u->cadastrar($nome,$email,$contato,$senha,$subscribe)){
                echo "<script>alert('Cadastrado com sucesso!');location.href='../pages/cadastro.php?p=inicial';</script>";
            }else{
                echo "<script>alert('Email já cadastrado');location.href='../pages/cadastro.php?p=inicial';</script>";
            }
        }else{
            echo "<script>alert('Senha e confirmar senha incompativel, tente novamente !');location.href='../pages/cadastro.php?p=inicial';</script>";
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
  <?php

$status = session_status();
if($status == PHP_SESSION_NONE){
session_start();};
if(!isset($_SESSION['id'])){
  header('location:login.php');
  exit();
  }
$logado = $_SESSION['id'];

?>
        <!--Topo da Página-->
        <?php require_once('header.php'); ?>

        <!--Meio da Página-->
        <main class="main-conteudo-cadastro">
            <section class="conteudo-cadastro">
                <div class="conteudo-1">

                </div>
                <h2 class="nome">Área de cadastro de usuários.</h2>
                <div class="conteudo-2">

                </div>
            </section>
            <section class="conteudo-form-cadastro">
                <form action="" method="POST">
                  <div class="box-form-cadastro-0">
                    <div class="box-form-cadastro-1">
                        <label for="nome">Nome:</label>
                        <label for="email">E-mail:</label>
                        <label for="contato">Contato:</label>
                        <label for="whatsapp">Senha:</label>
                        <label for="whatsapp">Confirmar senha:</label>
                        <label for="subscribe">Aceita contato pelo Whatsapp ?</label>

                    </div>
                    <div class="box-form-cadastro-2">
                        <input type="text" name="nome" id="nome" placeholder="Nome completo" required="">
                        <input type="email" name="email" id="email" minlength="8" maxlength="255" autocomplete="email" placeholder="@" required="">
                        <input size="15" type="tel" name="contato" id="contato" minlength="8" maxlength="15" inputmode="numeric" autocomplete="tel" placeholder="(__) _____-____" required="">
                        <input size="10" type="password" name="senha" id="senha" minlength="6" maxlength="15" inputmode="numeric" autocomplete="password" placeholder="******" required="">
                        <input size="10" type="password" name="confsenha" id="confsenha" minlength="6" maxlength="15" inputmode="numeric" autocomplete="password" placeholder="******" required="">
                        <div style="display: inline-flex; gap:10px;">
                        <input type="radio" name="subscribe" value="Sim" id="subscribe" checked> Sim
                        <input type="radio" name="subscribe" value="Não" id="subscribe"> Não
                        </div>
                    </div>
                  </div>
                    <input style="border: solid 2px aqua; padding: 5px; border-radius: 10px;" value="Cadastrar" title="Cadastrar" type="submit">

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
.nome{
    margin-bottom: 20px;
}
.main-conteudo-cadastro{
    margin: 12% 0 0 0;
}
form{
    background-color: rgb(95, 95, 95, 80%);
    width: 40%;
    margin-inline: auto;
    border: solid 2px aqua;
    border-radius: 10px;
    padding: 10px;
}
.box-form-cadastro-0{
    display: flex;
    gap: 15px;
}
#subscribe{
    display: flex;
}
.box-form-cadastro-1{
    display: flex;
    flex-direction: column;
    text-align: right;
    gap: 17px;
}
.box-form-cadastro-2{
    width: 50%;
    display: flex;
    flex-direction: column;
    text-align: left;
    gap: 10px;
}
.box-form-cadastro-2 > input{
    border-radius: 10px;
    padding: 3px;
    text-align: center;
    width: 100%;
}
</style>
