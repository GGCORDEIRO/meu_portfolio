<?php

 require_once('../database/config.php');
  $u = new Usuario;

$usu = $u->conectarBD();
$usu_id = intval($_GET['id']);
$usuario = $conn->prepare("SELECT * FROM usuarios WHERE id = '$usu_id' ");
$usuario->execute();

  if(isset($_POST['id'])){

  $id = addslashes($_POST['id']);  
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $contato = addslashes($_POST['contato']);
  $subscribe = addslashes($_POST['subscribe']);

    $u->conectarBD();
    if($u->msgErro == ""){
            if($u->editar($id,$nome,$email,$contato,$subscribe)){
                echo "<script>alert('Editado com sucesso!');location.href='../pages/consultaBanco.php?p=inicial';</script>";
        }else{
        echo "Erro: ".$u->msgErro;
    }
}else{
    echo "<script>alert('Preencha todos os campos! ');location.href='../pages/editar.php?p=inicial';</script>";
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
$logado = $_SESSION['nome'];

?>

        <!--Topo da Página-->
        <?php require_once('header.php'); ?>

        <!--Meio da Página-->
        <main class="main-conteudo-cadastro">
            <section class="conteudo-cadastro">
                <div class="conteudo-1">

                </div>
                <h2 class="nome">Editar usuário.</h2>
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
                        <label for="subscribe">Aceita contato pelo Whatsapp ?</label>
                        <label > Ultima modificação:</label>

                    </div>
                    <div class="box-form-cadastro-2">
                    <?php while($dado_cont1 = $usuario->fetch()){ ?>
                        <input type="hidden" name="id" value="<?php echo $dado_cont1["id"]; ?>">
                        <input type="text" name="nome" id="nome" placeholder="Nome completo" required="" value="<?php echo $dado_cont1["nome"]; ?>">
                        <input type="email" name="email" id="email" minlength="8" maxlength="255" autocomplete="email" placeholder="@" required="" value="<?php echo $dado_cont1["email"]; ?>">
                        <input type="tel" name="contato" id="contato" minlength="8" maxlength="15" inputmode="numeric" autocomplete="tel" placeholder="(__) _____-____" required="" value="<?php echo $dado_cont1["contato"]; ?>">
                        <input size="1" type="text" name="subscribe" id="subscribe" value="<?php echo $dado_cont1["subscribe"]; ?>">
                        <?php echo date("d/m/Y H:i", strtotime($dado_cont1["modified"])); ?>
                    </div>
                  </div>
                    <input style="border: solid 2px aqua; padding: 1px 5px 1px 5px; border-radius: 10px;" value="Editar" type="submit">
                    <?php } ?>
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
