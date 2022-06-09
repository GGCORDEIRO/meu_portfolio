  <footer>
    <div class="footer-logo">
      <a href="/index.php" title="Meu Portfólio">
        <b>Geo DEV</b>
      </a>
    </div>

    <div class="footer-contato">
    <b style="text-decoration: underline;">Contatos e Úteis</b>
    <ul>
      <li>
        <a href="/pages/contact.php">Contato</a>
      </li>
    </ul>
    </div>
  </footer>
  <div class="footer-direitos">
      <p>© 2022 – Todos os direitos reservados </p>
    </div>

  <style>

/* Footer das paginas */

footer {
  display: flex;
  height: 50px;
  align-items: center;
  justify-content: center;
  margin-top: auto;
  background-color: aquamarine;
  border-radius: 20px 20px 0 0;
  gap: 40vw;
}
footer, .footer-direitos{
  animation-name: fundo1;
  animation-duration: 1s;
  animation-iteration-count: inherit;
}
@keyframes fundo1 {
  0% {
    transform: translateY(120px);
  }
  100% {
    transform: translateY(0px);
  }
}
footer:hover > div > a{
  color: var(--primary-color) !important;
}
.footer-logo{
  font-size: 30px;
}
footer > div > a {
  color: var(--primary-color);
}
.footer-direitos{
  width: 100%;
  position: relative;
  background-color: rgb(95, 95, 95);
  color: wheat;
}
.footer-contato{

}

/* Fim Footer das paginas */

  </style>
