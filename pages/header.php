<?php

$status = session_status();
if($status == PHP_SESSION_NONE){
session_start();};

if((!isset ($_SESSION['id']) == true))
{
  $consul = "none";
  $consul1 = "block";
  }else{
    $consul = "block";
    $consul1 = "none";
  }

?>
<header>
<div class="header-cel">
      <svg width="22" height="20" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.4023 0.292969C16.4935 0.397135 16.5651 0.507812 16.6172 0.625C16.6693 0.742188 16.6953 0.865885 16.6953 0.996094C16.6953 1.13932 16.6693 1.26953 16.6172 1.38672C16.5651 1.50391 16.4935 1.60807 16.4023 1.69922C16.2982 1.80339 16.1875 1.88151 16.0703 1.93359C15.9531 1.97266 15.8294 1.99219 15.6992 1.99219H1.69531C1.55208 1.99219 1.42188 1.97266 1.30469 1.93359C1.1875 1.88151 1.08333 1.80339 0.992188 1.69922C0.888021 1.60807 0.809896 1.50391 0.757812 1.38672C0.71875 1.26953 0.699219 1.13932 0.699219 0.996094C0.699219 0.865885 0.71875 0.742188 0.757812 0.625C0.809896 0.507812 0.888021 0.397135 0.992188 0.292969C1.08333 0.201823 1.1875 0.130208 1.30469 0.078125C1.42188 0.0260417 1.55208 0 1.69531 0H15.6992C15.8294 0 15.9531 0.0260417 16.0703 0.078125C16.1875 0.130208 16.2982 0.201823 16.4023 0.292969ZM16.4023 6.28906C16.4935 6.39323 16.5651 6.50391 16.6172 6.62109C16.6693 6.73828 16.6953 6.86198 16.6953 6.99219C16.6953 7.13542 16.6693 7.26562 16.6172 7.38281C16.5651 7.5 16.4935 7.60417 16.4023 7.69531C16.2982 7.79948 16.1875 7.8776 16.0703 7.92969C15.9531 7.98177 15.8294 8.00781 15.6992 8.00781H1.69531C1.55208 8.00781 1.42188 7.98177 1.30469 7.92969C1.1875 7.8776 1.08333 7.79948 0.992188 7.69531C0.888021 7.60417 0.809896 7.5 0.757812 7.38281C0.71875 7.26562 0.699219 7.13542 0.699219 6.99219C0.699219 6.86198 0.71875 6.73828 0.757812 6.62109C0.809896 6.50391 0.888021 6.39323 0.992188 6.28906C1.08333 6.19792 1.1875 6.1263 1.30469 6.07422C1.42188 6.02214 1.55208 5.99609 1.69531 5.99609H15.6992C15.8294 5.99609 15.9531 6.02214 16.0703 6.07422C16.1875 6.1263 16.2982 6.19792 16.4023 6.28906ZM16.4023 12.3047C16.4935 12.3958 16.5651 12.5 16.6172 12.6172C16.6693 12.7344 16.6953 12.8646 16.6953 13.0078C16.6953 13.138 16.6693 13.2617 16.6172 13.3789C16.5651 13.4961 16.4935 13.6068 16.4023 13.7109C16.2982 13.8021 16.1875 13.8737 16.0703 13.9258C15.9531 13.9779 15.8294 14.0039 15.6992 14.0039H1.69531C1.55208 14.0039 1.42188 13.9779 1.30469 13.9258C1.1875 13.8737 1.08333 13.8021 0.992188 13.7109C0.888021 13.6068 0.809896 13.4961 0.757812 13.3789C0.71875 13.2617 0.699219 13.138 0.699219 13.0078C0.699219 12.8646 0.71875 12.7344 0.757812 12.6172C0.809896 12.5 0.888021 12.3958 0.992188 12.3047C1.08333 12.2005 1.1875 12.1224 1.30469 12.0703C1.42188 12.0182 1.55208 11.9922 1.69531 11.9922H15.6992C15.8294 11.9922 15.9531 12.0182 16.0703 12.0703C16.1875 12.1224 16.2982 12.2005 16.4023 12.3047Z" fill="#191919"></path>
      </svg>
    </div>
  <div class="header-logo">
    <a href="/index.php" title="Meu Portfólio"><b>Geo DEV</b></a>
  </div>
  <nav>
    <ul class="sobre">
      <li><a href="/index.php">Inicio</a></li>
      <li style="display:<?php echo $consul ?>;"><a href="/pages/consultaBanco.php">Consulta Dados</a></li>
      <li class="aba_dev">Desenvolvedor
      <ul class="nav_dev">
          <li><a href="/pages/pdf.php">Curriculum</a></li>
          <li><a href="/pages/contact.php">Contato</a></li>
      </ul>
    </li>
  </ul>
  <a href="/pages/login.php" style="display:<?php echo $consul1 ?>">Login</a>
  <a href="/pages/sair.php" style="border: solid 2px red; display:<?php echo $consul ?>">Sair</a>
  </nav>
</header>
<style> 

/* Header das paginas */


header {
  z-index: 1;
  position: fixed;
  background-color: aquamarine;
  width: 100%;
  justify-content: center;
  align-items: center;
  height: 5%;
  border-radius: 0 0 20px 20px;
}

.header-logo:hover a{
  color: var(--primary-color) !important;
}

header {
  animation-name: fundo;
  animation-duration: 1s;
  animation-iteration-count: inherit;
}

@keyframes fundo {
  0% {
    transform: translateY(-120px);
  }
  100% {
    transform: translateY(0px);
  }
}

header,
header nav,
header nav ul {
  display: inline-flex;
  gap: 50px;
}

.header-logo{
  font-size: 30px;
}

header div a {
  color: var(--primary-color);
}

.header-cel{
  display: none;
}

.nav_dev{
  display: none;
}

.nav_dev li{
  margin-top: 10px;
}

  .aba_dev:hover .nav_dev{
    display: block;
    position: absolute;
    top: 1.7em;
    padding: 10px;
    background-color: aquamarine;
  }


/* Fim Header das paginas */

</style>