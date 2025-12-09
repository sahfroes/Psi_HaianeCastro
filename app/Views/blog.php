<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="blog.css" />
  <script src="https://unpkg.com/scrollreveal"></script>

  <title>Meu Blog</title>
</head>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap");

html {
  scroll-behavior: smooth;
}

.quicksand-uniquifier {
  font-family: "Quicksand", sans-serif;
  font-optical-sizing: auto;
  font-weight: weight;
  font-style: normal;
}

.montserrat-uniquifier {
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  /* Defina um valor numĆ©rico: 100 a 900 */
  font-style: normal;
}

body {
  margin: 0;
  font-family: "Montserrat", sans-serif;
  background-color: #f9fcff;
  color: #333;
}

.tema {
  background-color: #f9fcff;
  color: #151620;
  text-align: center;
  padding: 20px;
  border-bottom: 4px solid #f9fcff;
}

h1 {
  font-size: 2.5rem;
  margin: 0;
}

#container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  padding: 20px;
}

.card {
  background-color: #f9fcff;
  width: 320px;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-bottom: 2px solid #ddd;
}

.card-conteudo {
  padding: 20px;
  text-align: center;
}

h3 {
  font-size: 1.5rem;
  margin: 10px 0;
  color: #1a679e;
}

p {
  font-size: 1rem;
  line-height: 1.6;
  color: #555;
}

.cta-button {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #1a679e;
  color: white;
  border: none;
  border-radius: 30px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #14527b;
}

.menu {
  text-align: center;
  background-color: #f3f8ff;
  padding: 0% 15% 0% 15%;
  display: flex;
  align-items: center;

  justify-content: flex-start;
  /* Alinha os itens Ć  esquerda */
}

.a-menu {
  color: #151620;
  font-size: 1.8rem;
  font-family: "Quicksand", sans-serif;
  text-decoration: none;
  margin-right: 20px;
  font-weight: bold;
  transition: 1s;
  padding: 0% 5% 0 5%;
}

.a-menu:hover {
  padding-left: 30px;
  border-left: 4px solid rgba(15, 5, 1, 0.815);
  color: #273e4e;
  transition: 0.4s;
}

.logo {
  display: inline-block;
  /* Usar inline-block pode ser melhor se for dentro de um menu horizontal */
  margin: 0 auto;
  border-radius: 0px 0px 20px 20px;
  align-items: left;
  width: 12%;
  /* Diminui o tamanho da imagem */
  margin-right: 20px;
}


.dois {
  background-color: #e8e8e8;
  padding: 40px 20px;
}

.formulario {
  background-color: #1a679e;
  color: white;
  border-radius: 10px;
  max-width: 600px;
  margin: 0 auto;
  padding: 15%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.formulario label {
  display: block;
  margin-bottom: 10px;
  font-size: 1rem;
}

.formulario input,
.formulario textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 5px;
}

.formulario button {
  display: block;
  width: 103%;
  padding: 10px;
  background-color: #14527b;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.formulario button:hover {
  background-color: #0f3d5c;
}

.meio {
  padding: 0% 15% 0% 15%;
}

.forms {
  padding: 10% 15% 5% 15%;
}

.info {
  padding: 2% 0% 3% 5%;
  flex: 1;
  font-family: Arial, sans-serif;
}

.embaixo {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 20px;
  background-color: #081f5c;
  padding: 0% 10% 0% 10%;
}

.info {
  flex: 1;
  text-align: left;
  margin-right: 20px;
  font-family: Arial, sans-serif;
  color: #ddf0ff;
}

.info2 {
  flex: 1;
  text-align: left;
  margin-right: 20px;
  font-family: Arial, sans-serif;
  color: #ddf0ff;
}

.info h2,
.info h3 {
  color: #ddf0ff;
}

.faq-section {
  max-width: 800px;
  margin: 20px auto;
  padding: 10px;
}

.accordion-item {
  border-bottom: 1px solid #ccc;
  margin-bottom: 10px;
}

.accordion-header {
  cursor: pointer;
  padding: 10px;
  background: #f0f0f0;
  border: none;
  text-align: left;
  font-size: 16px;
}

.accordion-header.active {
  font-weight: bold;
  color: #007BFF;
}

.accordion-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease, padding 0.3s ease;
  background: #fafafa;
  padding: 0 10px;
  font-size: 14px;
}

.accordion-body.open {
  max-height: 200px;
  /* 7096D1 */
  padding: 10px;
}

.meu {
  padding: 5% 0% 5% 0%;
  flex: 1;
  font-family: "Montserrat", sans-serif;
  align-items: center;

}

.fim {
  flex: 1;
  text-align: left;
  margin-right: 20px;
  font-family: "Quicksand", sans-serif;
  color: #ddf0ff;
}

/*separação*/

.navbar {
  display: flex;
  background-color: transparent;
  position: fixed;
  top: 50%;
  left: 80px;
  /* Ajuste para posicionar o menu Ć  esquerda */
  transform: translateY(-50%);
  z-index: 99;
  opacity: 1;
  transition: opacity 0.3s ease, transform 0.3s ease;
}

.navbar.scrolled {
  opacity: 0.8;
  /* Torna a navbar ligeiramente transparente ao rolar */
  transform: translateY(-40%);
  /* Desloca a navbar para cima um pouco */
}

.navbar ul {
  list-style: none;
  margin: 0;
  padding: 0.75rem;
  background-color: #b9cddd;
  display: flex;
  flex-direction: column;
  align-items: left;
  border-radius: 10px;
  box-shadow: 0 10px 50px rgba(5, 4, 62, 0.25);
}

.navbar li+li {
  margin-top: 0.75rem;
}

.navbar a {
  color: #ffffff;
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  border-radius: 8px;
  position: relative;
  transition: color 0.15s ease, background-color 0.15s ease;
}

.navbar a:hover,
.navbar a:focus,
.navbar a.active {
  background-color: #30305a;
  box-shadow: 0px 14px 60px #0f118f;
}

.navbar a img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.navbar a span {
  position: absolute;
  background-color: #30305a;
  color: #ffffff;
  white-space: nowrap;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  left: calc(100% + 1.5rem);
  transform-origin: center left;
  transform: scale(0);
  opacity: 0;
  transition: transform 0.15s ease, opacity 0.15s ease;
}

.navbar a:hover span,
.navbar a:focus span,
.navbar a.active span {
  transform: scale(1);
  opacity: 1;
}

.navbar a span:before {
  content: "";
  display: block;
  width: 12px;
  height: 12px;
  position: absolute;
  background-color: #30305a;
  left: -5px;
  top: 50%;
  transform: translateY(-50%) rotate(45deg);
  border-radius: 3px;
}

/* Responsividade para telas menores */

@media (max-width: 320px) {
  .tema {
    padding: 5px;
    font-size: 0.9rem;
  }

  h1 {
    font-size: 1.2rem;
  }

  .meu {
    align-items: center;
    padding: 20% 0% 3% 0%;
  }

  #container {
    flex-direction: column;
    gap: 10px;
  }

  p {
    padding: 0% 5% 0% 5%;
    font-size: 0.7rem;
    margin: 10px 0;
    text-align: justify;
    font-family: "Montserrat", sans-serif;

  }

  h3 {
    padding: 0% 5% 0% 5%;
    font-size: 0.9rem;
    margin: 0%;
    color: #1a679e;
    text-align: center;
    font-family: "Montserrat", sans-serif;
  }

  h2 {
    padding: 0% 5% 0% 5%;
    font-size: 0.9rem;
    margin: 0%;

    text-align: center;
    font-family: "Montserrat", sans-serif;
  }

  .card {
    width: 100%;
    margin: 0 auto;
  }

  .cta-button {
    font-size: 0.7rem;
    padding: 6px 10px;
  }

  .menu {
    display: flex;
    justify-content: flex-start;
    /* Alinha os itens à esquerda */
    align-items: center;
    /* Centraliza os itens verticalmente */
    padding: 5%;
    gap: 15px;
    /* Espaço entre os itens */
  }

  .a-menu {
    font-size: 0.5rem;
    margin: 0;
    /* Remove margens desnecessárias */
    text-decoration: none;
    color: #333;
    padding: 8px 12px;
    transition: all 0.3s ease;
    align-items: center;

  }

  .menu {
    flex-direction: column;
    /* Empilha os itens em telas menores */
    gap: 10px;
  }

  .a-menu {
    width: 100%;
    /* Ocupa toda a largura disponível */
    text-align: center;
  }


  .a-menu:hover {
    color: #007bff;
  }

  .logo {
    width: 20%;
    padding: 0% 0% 0% -20%;
    margin: 0%;
  }

  .formulario {
    padding: 15%;
  }

  .formulario label {
    font-size: 0.9rem;
  }

  .formulario input,
  .formulario textarea {
    padding: 8px 0px 0px 3px;
    font-size: 0.8rem;
  }

  .formulario button {
    font-size: 0.9rem;
    padding: 8px 8px 8px 8px;
  }

  .navbar ul {
    padding: 0.5rem;
    position: relative;
    left: -70px;
    top: 50%;

  }

  .navbar a {
    width: 1rem;
    height: 1rem;
  }

  .navbar a span {
    font-size: 0.8rem;
  }

  .embaixo {
    flex-direction: column;
    padding: 5%;
    text-align: center;
  }

  .info,
  .info2 {
    font-size: 0.8rem;
    margin-bottom: 10px;
    align-items: center;
    padding: 0% 15% 0% 15%;

  }

  .accordion-header {
    font-size: 0.9rem;
    padding: 8px;
  }

  .accordion-body {
    font-size: 0.8rem;
  }

  .faq-section {
    align-items: center;
    padding: 0% 15% 0% 15%;

  }
}

@media (max-width: 425px) {
  .tema {
    padding: 5px;
    font-size: 0.9rem;
  }

  .a-menu {
    font-size: 1rem !important;
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    max-width: 100%;
  }

  .menu {
    flex-direction: column;
    /* Empilha os itens em telas menores */
    gap: 10px;
  }

  .a-menu {
    width: 100%;
    /* Ocupa toda a largura disponível */
    text-align: center;
  }


  h1 {
    font-size: 1.2rem;
  }

  .meu {
    align-items: center;
    padding: 20% 0% 3% 0%;
  }

  #container {
    flex-direction: column;
    gap: 10px;
  }

  p {
    padding: 0% 5% 0% 5%;
    font-size: 0.7rem;
    margin: 10px 0;
    text-align: justify;
    font-family: "Montserrat", sans-serif;

  }

  h3 {
    padding: 0% 5% 0% 5%;
    font-size: 0.9rem;
    margin: 0%;
    color: #1a679e;
    text-align: center;
    font-family: "Montserrat", sans-serif;
  }

  h2 {
    padding: 0% 5% 0% 5%;
    font-size: 0.9rem;
    margin: 0%;

    text-align: center;
    font-family: "Montserrat", sans-serif;
  }

  .card {
    width: 100%;
    margin: 0 auto;
  }

  .cta-button {
    font-size: 0.7rem;
    padding: 6px 10px;
  }

  .menu {
    display: flex;
    justify-content: flex-start;
    /* Alinha os itens à esquerda */
    align-items: center;
    /* Centraliza os itens verticalmente */
    padding: 2%;
    gap: 15px;
    /* Espaço entre os itens */
  }

  .a-menu {
    font-size: 0.5rem;
    margin: 0;
    /* Remove margens desnecessárias */
    text-decoration: none;
    color: #333;
    padding: 8px 12px;
    transition: all 0.3s ease;
    align-items: center;

  }

  .a-menu:hover {
    color: #007bff;
  }

  .logo {
    width: 20%;
    padding: 0% 0% 0% -20%;
    margin: 0%;
  }

  .formulario {
    padding: 15%;
  }

  .formulario label {
    font-size: 0.9rem;
  }

  .formulario input,
  .formulario textarea {
    padding: 8px 0px 0px 3px;
    font-size: 0.8rem;
  }

  .formulario button {
    font-size: 0.9rem;
    padding: 8px 8px 8px 8px;
  }

  .navbar ul {
    padding: 0.5rem;
    position: relative;
    left: -70px;
    top: 50%;

  }

  .navbar a {
    width: 1rem;
    height: 1rem;
  }

  .navbar a span {
    font-size: 0.8rem;
  }

  .embaixo {
    flex-direction: column;
    padding: 5%;
    text-align: center;
  }

  .info,
  .info2 {
    font-size: 0.8rem;
    margin-bottom: 10px;
    align-items: center;
    padding: 0% 15% 0% 15%;

  }

  .accordion-header {
    font-size: 0.9rem;
    padding: 8px;
  }

  .accordion-body {
    font-size: 0.8rem;
  }

  .faq-section {
    align-items: center;
    padding: 0% 15% 0% 15%;

  }
}

@media (min-width: 426px) and (max-width: 768px) {
  .a-menu {
    font-size: 1rem !important;
  }

  .tema {
    font-size: 1rem;
    padding: 10px;
  }

  h1 {
    font-size: 1.5rem;
  }

  p {
    font-size: 0.9rem;
    padding: 0% 8%;
  }

  h2,
  h3 {
    font-size: 1rem;
    padding: 0% 8%;
  }

  .card {
    max-width: 80%;
  }

  .menu {
    padding: 3%;
  }

  .a-menu {
    font-size: 0.7rem;
  }

  .formulario {
    padding: 10%;
  }

  .formulario input,
  .formulario textarea {
    font-size: 1rem;
  }

  .formulario button {
    font-size: 1rem;
  }

  .accordion-header {
    font-size: 1rem;
  }

  .accordion-body {
    font-size: 0.9rem;
  }

  .navbar ul {
    padding: 1rem;
    position: relative;
    left: -50px;
    top: 50%;

  }

  .navbar a {
    width: 2rem;
    height: 2rem;
  }

  .navbar a span {
    font-size: 0.8rem;
  }

}
</style>




<body>
  <div class="wrapper">
    <nav class="menu">
      <img class="logo" src="fotos/logo02.png" alt="logo" />
     
      
    <a class="a-menu" href="<?= base_url() ?>#sobre">Sobre mim</a>
    
    <a class="a-menu" href="<?= base_url() ?>#servicos">Serviços</a>
    
    <a class="a-menu" href="<?= base_url('blog') ?>">Blog</a>
    <a class="a-menu" href="<?= base_url('login') ?>">Login</a>

    </nav>

    <section>
      <nav class="tema">
        <h1 id="blog" class="meu">MEU BLOG</h1>
      </nav>
      <section class="meio">
        <div id="container">
          <div class="card">
            <img src="fotos/9.png" alt="Amor Próprio" class="card-img">
            <div class="card-conteudo">
              <h3>O que é o amor próprio e como praticá-lo no dia a dia?</h3>
              <p>Amor-próprio é a capacidade de reconhecer e valorizar a si mesmo, independentemente das circunstâncias
                externas...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>

          <div class="card">
            <img src="fotos/8.png" alt="Ansiedade" class="card-img">
            <div class="card-conteudo">
              <h3>Ansiedade: como identificar e lidar com os sintomas?</h3>
              <p>A ansiedade é uma resposta natural do nosso corpo a situações de estresse, perigo ou incerteza...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>

          <div class="card">
            <img src="fotos/6.png" alt="Relacionamentos" class="card-img">
            <div class="card-conteudo">
              <h3>Relacionamentos e Conexões: Lidando com conflitos familiares...</h3>
              <p>Os conflitos familiares são inevitáveis em qualquer família...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>

          <!-- Novos Cards -->
          <div class="card">
            <img src="fotos/7.png" alt="Redes Sociais" class="card-img">
            <div class="card-conteudo">
              <h3>O Impacto das Redes Sociais na Saúde Mental</h3>
              <p>As redes sociais transformaram a forma como nos conectamos, mas seu uso excessivo pode influenciar
                negativamente nossa saúde mental...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>

          <div class="card">
            <img src="fotos/3.png" alt="Produtividade" class="card-img">
            <div class="card-conteudo">
              <h3>Como manter a produtividade sem sacrificar o bem-estar emocional</h3>
              <p>É possível equilibrar produtividade e saúde mental com estratégias que promovam resultados sem
                comprometer sua qualidade de vida...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>

          <div class="card">
            <img src="fotos/2.png" alt="Luto" class="card-img">
            <div class="card-conteudo">
              <h3>Lidando com o luto: fases e cuidados emocionais</h3>
              <p>O luto é uma experiência universal e parte fundamental do processo de cura e aceitação...</p>
              <button class="cta-button">Ler Mais</button>
            </div>
          </div>
        </div>
      </section>
      <section class="forms">
        <div class="formulario">
          <form action="#" method="post">
            <h4>Inscreva-se para receber um aviso sempre que eu publicar novos conteúdos 🙂</h4>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Enviar</button>
          </form>
        </div>
  </div>
  </section>
  </section>
  <section class="embaixo">
    <div class="info">
      <h2>Funcionamento</h2>
      <p class="fim">08 às 18 horas de segunda a sexta<br></p>
      <p class="fim">Rua das Flores, 123, <br>Bairro Jardim Sereno,<br>
        Cidade do Sol, <br>Estado da Esperança, <br>CEP 12345-678.</p>
      <p class="fim">Psiu Clinica de Psicologia LTDA</p>
      <p class="fim">CNPJ 58878952000192</p>
      <h3>Contatos</h3>
      <p class="fim">Telefone/Whatsapp: (99) 99999-9999</p>
      <p class="fim">Instagram: @haianecastro</p>
      <p class="fim">Copyright © 2024 Projeto int. Todos os direitos reservados <br> Abner, Suellen, Igor</p>
    </div>
    <section class="faq-section">
      <h2 class="info2 ">Dúvidas Frequentes</h2>
      <div class="accordion">
        <div class="accordion-item">
          <h3 class="accordion-header" data-target="#item1">▾ Duração das sessões</h3>
          <div class="accordion-body" id="item1">
            A terapia é um trabalho em equipe. Os melhores resultados acontecem quando o paciente se envolve ativamente,
            experimenta novas formas de agir e se permite evoluir. Pequenos passos fora da sessão fazem toda a diferença
            no caminho para o bem-estar emocional!
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" data-target="#item2">▾ Não são apenas 50 minutos!</h3>
          <div class="accordion-body" id="item2">
            <p> A terapia é um trabalho em equipe. Os melhores resultados acontecem quando o paciente se envolve
              ativamente,
              experimenta novas formas de agir e se permite evoluir. Pequenos passos fora da sessão fazem toda a
              diferença
              no caminho para o bem-estar emocional!</p>
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" data-target="#item3">▾ Remarcações e desistência</h3>
          <div class="accordion-body" id="item3">
            <p></p>O compromisso com a terapia é um fator essencial para o seu progresso. Para garantir um atendimento
            de
            qualidade e uma organização justa da agenda, seguem algumas orientações sobre remarcação e desistência de
            sessões:

            <p>✅ Remarcação: Caso precise reagendar sua sessão, solicite com pelo menos 24 horas de antecedência. Isso
              permite que o horário seja disponibilizado para outro paciente.</p>

            <p>🚫 Desistência e Cancelamento: Faltas sem aviso prévio ou cancelamentos em cima da hora podem comprometer
              o
              andamento do tratamento e a disponibilidade da agenda. Nessas situações, a sessão será contabilizada
              normalmente.</p>

            <p>🕰 Pontualidade: O tempo da sessão é reservado exclusivamente para você. Atrasos podem reduzir seu tempo
              de
              atendimento, já que as sessões seguem um cronograma fixo.</p>

            <p>Manter esse compromisso é fundamental para que seu processo terapêutico aconteça da melhor forma. Se
              houver
              qualquer imprevisto, estou à disposição para alinhar da melhor maneira possível!</p>
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" data-target="#item4">▾ Formato das sessões</h3>
          <div class="accordion-body" id="item4">
            Online e presencial
          </div>
        </div>
        <div class="accordion-item">
          <h3 class="accordion-header" data-target="#item6">▾ Sigilo de informações</h3>
          <div class="accordion-body" id="item6">
            <p>O sigilo profissional é um dos princípios fundamentais do meu trabalho como psicóloga, conforme
              estabelecido
              pelo Código de Ética Profissional do Psicólogo. Todas as informações compartilhadas em sessão são
              protegidas
              por confidencialidade, garantindo um espaço seguro e acolhedor para você se expressar livremente.</p>

            <p>No entanto, existem exceções previstas pelo código de ética em que o sigilo pode ser quebrado, sempre com
              o
              intuito de proteger a integridade do paciente ou de terceiros. Essas situações incluem:</p>
            <p>🔹 Risco iminente à vida, Quando há ameaça à segurança do próprio paciente ou de outras pessoas.</p>
            <p>🔹 Determinação judicial, Em casos específicos em que a justiça exige informações.</p>

            <p> Mesmo nessas situações, qualquer decisão sobre a quebra de sigilo será tomada com responsabilidade,
              respeitando sempre os princípios éticos da profissão.</p>
          </div>
        </div>
      </div>
    </section>


    <nav class="navbar" id="redes">
      <ul>
        <li>
          <a
            href="https://www.instagram.com/psi.haianecastro?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
            <img src="fotos/insta.png" alt="Instagram" class="redes">
            <span>Instagram</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="fotos/x.png" alt="X" class="redes">
            <span>X</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="fotos/what.png" alt="WhatsApp" class="redes">
            <span>WhatsApp</span>
          </a>
        </li>
      </ul>
    </nav>
    <script src="blogjava.js"></script>
    <!-- Lado direito com o formulário de login -->

  </section>
  </section>
  </div>

  <script>
document.querySelectorAll('.accordion-header').forEach(header => {
  header.addEventListener('click', () => {
    const target = document.querySelector(header.getAttribute('data-target'));
    const isOpen = target.classList.contains('open');
    
    // Fecha todas as abas
    document.querySelectorAll('.accordion-body').forEach(body => body.classList.remove('open'));
    document.querySelectorAll('.accordion-header').forEach(h => {
      h.textContent = h.textContent.replace('▴', '▾');
      h.classList.remove('active');
    });

    // Abre a aba clicada se não estiver aberta
    if (!isOpen) {
      target.classList.add('open');
      header.classList.add('active');
      header.textContent = header.textContent.replace('▾', '▴');
    }
  });
});

window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 100) { // A partir de 100px de rolagem
      navbar.classList.add('scrolled');
  } else {
      navbar.classList.remove('scrolled');
  }
});
  </script>
</body>





</html>