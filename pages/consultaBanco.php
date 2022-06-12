<?php 

require_once('../database/config.php');
$u = new Usuario;

$con_cont = $u->conectarBD();
$consul_cont = $conn->prepare("SELECT * FROM contatos ORDER BY id DESC");
$consul_cont->execute();

$consul_usu = $conn->prepare("SELECT * FROM usuarios ORDER BY id DESC");
$consul_usu->execute();



if(isset($_GET['deletar']) == true){
 $u->dadosdel();
}
if(isset($_GET['deletar1']) == true){
  $u->dadosdel1();
 }

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
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

<?php
 
    if(time() - $_SESSION["login_time"] > 10) 
    {
        session_destroy();
        echo "<script>alert('Você foi desconectado !');location.href='../pages/login.php';</script>";
    }
?>
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
<?php include("header.php"); ?>
  <main class="conteudo-consul">
    <div style="margin-top: 10px;">
        <?php
  echo 'Bem Vindo: <input name="nome" type="text" id="nome" size="7" style="text-transform: uppercase; text-align: center; background-color: rgb(255,255,255,0%); border: 0px;" maxlength="50" value='.$logado.'">';
?><br><br><?php
  var_dump($_SESSION);
  ?>
  </div>
<div class="banco-1">
<h1 class="teste" style="background: gray; border-radius: 10px; width: 30vw; margin: 20px auto; text-decoration: underline; font-size: 3.5rem;">Banco de Contatos</h1>
  <table class="table-1" border="1" style="width: 90%; margin-inline: auto; border: red;">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Email</td>
      <td>Whatsapp</td>
      <td title="Aceita contado via Whatsapp">Contato</td>
      <td>Assunto</td>
      <td>Arquivo</td>
      <td>Mensagem</td>
      <td>Criado em</td>
    </tr>
    <?php while($dado_cont = $consul_cont->fetch()){ ?>
    <tr>
      <td><?php echo $dado_cont["id"]; ?></td>
      <td><?php echo $dado_cont["nome"]; ?></td>
      <td><?php echo $dado_cont["email"]; ?></td>
      <td><?php echo $dado_cont["whatsapp"]; ?></td>
      <td><?php echo $dado_cont["subscribe"]; ?></td>
      <td><?php echo $dado_cont["assunto"]; ?></td>
      <td><?php echo $dado_cont["arquivo"]; ?></td>
      <td><?php echo $dado_cont["mensagem"]; ?></td>
      <td><?php echo date("d/m/Y H:i", strtotime($dado_cont["created"])); ?></td>
    <td>
        <a href="javascript: if(confirm('Tem certeza que deseja deletar o contato <?php echo $dado_cont['id']; ?>?')) location.href='../pages/consultaBanco.php?deletar=deletar&id=<?php echo $dado_cont['id']; ?>';">Deletar</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>


<!-- BANCO DE DADOS ACESSO -->
<div class="banco-2">
  <h1 style="background: gray; border-radius: 10px; width: 30vw; margin: 20px auto; text-decoration: underline; font-size: 3.5rem;">Banco de Acesso</h1>
  <a href="/pages/cadastro.php" style="background-color: red; bottom:10px; position:relative; padding: 5px;">Cadastrar usuário</a>
  <table class="table-2" border="1" style="width: 90%; margin-inline: auto; border: red;">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Email</td>
      <td>Contato</td>
      <td title="Aceita contado via Whatsapp">Aceita ctt</td>
      <td>Senha</td>
      <td>Criado em</td>
    </tr>
    <?php while($dado_usu = $consul_usu->fetch()){ ?>
    <tr>
      <td><?php echo $dado_usu["id"]; ?></td>
      <td><?php echo $dado_usu["nome"]; ?></td>
      <td><?php echo $dado_usu["email"]; ?></td>
      <td><?php echo $dado_usu["contato"]; ?></td>
      <td><?php echo $dado_usu["subscribe"]; ?></td>
      <td><?php echo $dado_usu["senha"]; ?></td>
      <td><?php echo date("d/m/Y H:i", strtotime($dado_usu["created"])); ?></td>
      <td>
      <a href="javascript: if(confirm('Tem certeza que deseja editar o usuário <?php echo $dado_usu['id']; ?>?')) window.open('../pages/editar.php?=editar&id=<?php echo $dado_usu['id']; ?>');">Editar</a>
    </td>
    <td>
        <a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $dado_usu['id']; ?>?')) location.href='../pages/consultaBanco.php?deletar1=deletar1&id=<?php echo $dado_usu['id']; ?>';">Deletar</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  </div>
  </main>

<?php include("footer.php"); ?>

</body>
</html>
<style>
  body {
  background-image: linear-gradient(to top right, rgb(0,200,200), black);
}
  .conteudo-consul{
    background-color: rgb(100, 255, 100, 30%);
    position: relative;
    top: 30px;
  }

</style>
