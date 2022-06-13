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

  <div id="loader-wrapper">
<div id="loader">
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
</div>
</div>
<style>
  #loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 77;
    background-color: #fefffe;
    opacity: 1;
    -webkit-transition: all 500ms linear 0s;
    -moz-transition: all 500ms linear 0s;
    -ms-transition: all 500ms linear 0s;
    -o-transition: all 500ms linear 0s;
    transition: all 500ms linear 0s;
}
#loader {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    margin-top: -9px;
    margin-left: -125px;
    perspective: 400px;
    transform-style: preserve-3d;
}
#loader .dot {
    animation: loader ease-in-out 3s infinite;
    height: 18px;
    width: 18px;
    border-radius: 50%;
    background-color: #000;
    position: absolute;
    background: #00ffc3bd;
}
#loader .dot:nth-child(2) {
    animation-delay: .5s;
}
#loader .dot:nth-child(3) {
    animation-delay: .4s;
}
#loader .dot:nth-child(4) {
    animation-delay: .3s;
}
#loader .dot:nth-child(5) {
    animation-delay: .2s;
}
#loader .dot:nth-child(6) {
    animation-delay: .1s;
}
#loader .dot:nth-child(7) {
    animation-delay: .0s;
}
@keyframes loader{
15% {
    transform: translateX(0);
}
45% {
    transform: translateX(232px);
}
65% {
    transform: translateX(232px);
}
95% {
    transform: translateX(0);
}
}
#loader-wrapper.loader-off, #loader-wrapper{
  opacity: 1;
  visibility: hidden;
  -webkit-transition: all 500ms linear 0s;
  -moz-transition: all 500ms linear 0s;
  -ms-transition: all 500ms linear 0s;
  -o-transition: all 500ms linear 0s;
  transition: all 500ms linear 0s;
}
</style>

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
    <section class="conteudo-criador" style="margin-top: 50px;">
      <h2 class="nome" style="background: grey;">Meus projetos !</h2>
    </section>
    <section>
  <article>
    <div id='content'>
      <div id='content-app'>
        <input type='text' id='field1' readonly value='0' />
        <br /><br />
        <button onclick='writeNumber(this)' id='n1'>1</button>
        <button onclick='writeNumber(this)' id='n2'>2</button>
        <button onclick='writeNumber(this)' id='n3'>3</button>
        <button onclick='writeNumber(this)' id='n4'>4</button>
        <br /><br />
        <button onclick='writeNumber(this)' id='n5'>5</button>
        <button onclick='writeNumber(this)' id='n6'>6</button>
        <button onclick='writeNumber(this)' id='n7'>7</button>
        <button onclick='writeNumber(this)' id='n8'>8</button>
        <br /><br />
        <button onclick='writeNumber(this)' id='n9'>9</button>
        <button onclick='writeNumber(this)' id='n0'>0</button>
        <button onclick='setDecimal(this,true)' id='dec'>.</button>
        <button onclick='setOperator(this)' id='sum'>+</button>
        <br /><br />
        <button onclick='setOperator(this)' id='sustract'>-</button>
        <button onclick='setOperator(this)' id='multi'>*</button>
        <button onclick='setOperator(this)' id='divide'>/</button>
        <button onclick='cleartxt()' id='C'>C</button>
        <br /><br />
        <button onclick='calculate()' id='calcular' style='width:190px'>=</button>
        <button onclick='removeLastNumber()' id='removeLast'>B</button>
      </div>
    </div>
    <br />
    <br /><br />
  </article>
  <style>

section,
article {
  margin: 0px;
  padding: 5px;
}

#content {
  width: 260px;
  background-color: #000;
  text-align: center;
}

button {
  width: 60px;
  text-align: center;
  font-size: 35px;
  background-color: red;
  color: black;
  border: cornflowerblue solid 1px;
  box-shadow: 1px 2px 3px 1px green;
  text-shadow: 1px 1px 3px green;
}

input {
  width: 250px;
  font-size: 30px;
  background-color: red;
  color: black;
  border: cornflowerblue solid 1px;
  text-align: right;
  box-shadow: 1px 2px 3px 1px green;
  text-shadow: 1px 1px 3px blue;
}

  </style>
  <script>
    function writeNumber(elementId) {
  var outputValueTo = document.getElementById('field1');

  if (outputValueTo.value == '0' || outputValueTo.value == 'Syntax error') {
    outputValueTo.value = elementId.textContent;
  } else {

    outputValueTo.value += elementId.textContent;
  }
}

function cleartxt() {
  document.getElementById('field1').value = '0';
  document.getElementById('dec').disabled = false;
}

function setOperator(elementId) {
  var outputValueTo = document.getElementById('field1');
  if (outputValueTo.value == '0' || outputValueTo.value == 'Syntax error') {
    outputValueTo.value = '0';
  } else {
    outputValueTo.value += elementId.textContent;
    document.getElementById('dec').disabled = false;
  }
}

function setDecimal(elementId, status) {
  var outputValueTo = document.getElementById('field1');
  outputValueTo.value += elementId.textContent;
  document.getElementById('dec').disabled = status;
}

function calculate() {

  try {

    var field1txt = document.getElementById('field1');
    if (field1txt.value != '') {
      var calculateResult = eval(field1txt.value);
      field1txt.value = calculateResult;
    }
  } catch (err) {

    field1txt.value = 'Syntax error';

  }

}

function removeLastNumber() {

  var field1txt = document.getElementById('field1');

  if (field1txt.value.length == 1 || field1txt.value == '0' || field1txt.value == 'Syntax error') {
    field1txt.value = '0';
    document.getElementById('dec').disabled = false;
  } else {
    field1txt.value = field1txt.value.substring(0, field1txt.value.length - 1);
  }
}
  </script>
</section>
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