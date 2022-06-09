<?php
 require_once '../database/config.php';
 $u = new Usuario;

?>
<?php
 
 // Session starts
 session_start();
  
 if(isset($_POST["email"])) {
  
     // Session Variables are created
     $_SESSION["id"];  
  
     // Login time is stored in a session variable
     $_SESSION["login_time_stamp"] = time(); 
     header("Location:consultaBanco.php");
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
        <div class="container">
          
        <!--Meio da Página-->
        <main class="conteudo-login">
        <section class="conteudo-cadastro">
                <div class="conteudo-1">

                </div>
                <h2 class="nome">Acesso apenas para pessoal autorizado !</h2>
                <div class="conteudo-2">

                </div>
            </section>
            <section class="conteudo-sec-login">

              <form method="POST" action="login.php?login=true">
                <P><input name="email" placeholder="E-mail" type="email"></P>
                <p><input name="senha" placeholder="Senha" minlength="6"  type="password"></p>
                <p><a href="">Esqueceu sua senha?</a></p>
                <p><input value="Entrar" type="submit"></p>
              </form>
            </section>
        </main>
</div>
<?php
if(isset($_POST['email'])){
  $email = addslashes($_POST['email']);
  $senha = addslashes($_POST['senha']);

  if(!empty($email) && !empty($senha)){
    $u->conectarBD();
    if($u->msgErro == ""){
      if($u->login($email,$senha)){
        echo "<script>alert('Login efetuado com sucesso!');location.href='../pages/consultaBanco.php?p=inicial';</script>";
      }else{
        echo "<script>alert('Email e/ou senha estão incorretos!');location.href='../pages/login.php?p=inicial';</script>";
      }
    }else{
      echo "Erro: ".$u->msgErro;
    }
  }else{
    echo "<script>alert('Preencha todos os campos!');location.href='../pages/login.php?p=inicial';</script>";
  }
}


?>
    <!--Fim da Página-->
<?php require_once('footer.php'); ?>

</body>
</html>
<style>
.container {
	background: linear-gradient(-45deg, rgb(0,255,255), rgb(95,95,95), rgb(0,255,255));
	background-size: 400% 400%;
	animation: gradient 25s ease-in infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
  .conteudo-login{
    margin-top: 13%;
  }
.conteudo-sec-login{
  margin-top: 10px;
  background-color: gray;
  width: 20%;
  margin-inline: auto;
  padding: 10px;
  border: solid 2px aqua;
  border-radius: 10px;
}
.conteudo-sec-login p{
  margin-top: 10px;
}
.conteudo-sec-login input{
  padding: 5%;
}
</style>