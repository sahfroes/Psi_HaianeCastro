<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css.css" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="icon" href="fotos/logo.png" type="image/png">
  <title>PSI.Haianecastro</title>


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

/* background-color: #f9fcff; */
/* separação */
.imgprinc {
  width: 26%;
  align-items: center;
  padding: -10%;
  margin: -10%;
}

.menu {
  text-align: center;
  background-color: #f9fcff;
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

/* separação */
body {
  margin: 0;
  padding: 0;
  color: #ddf0ff;
  font-family: sans-serif;
  word-wrap: break-word;
  overflow-wrap: break-word;
}

h1.tituloprincipal {
  font-size: 3rem;
  font-family: "Montserrat", sans-serif;
  color: #151620;
  text-decoration-color: #151620;
  text-align: left;
  padding: 0% 0% 0% 0%;
}

p.bannerin {
  font-size: 2rem;
  font-family: "Montserrat", sans-serif;
  color: #151620;
  text-decoration-color: #151620;
  text-align: center;
  align-items: center;
  display: flex;
  justify-content: center;
}

p.bannerin1 {
  font-size: 2rem;
  font-family: "Montserrat", sans-serif;
  color: #151620;
  text-decoration-color: #151620;
  text-align: center;
  align-items: center;
  display: flex;
  justify-content: center;
}

h2.tituloprincipal2 {
  font-size: 2rem;
  font-family: "Montserrat", sans-serif;
  color: #151620;
  text-decoration-color: #151620;
  text-align: left;
  padding: 0% 30% 0% 30%;
  text-align: center;
  align-items: center;
  display: flex;
  justify-content: center;
}

.wrapper {
  width: 100%;
  margin: 0 auto;
}

/* separação */
.container {
  width: 100%;
  max-width: 760px;
  margin: 0 auto;
  padding: 0 20px;
}

section.module p {
  margin-bottom: 40px;
}

section.module:last-child {
  margin-bottom: 0;
}


section.module.content {
  padding: 40px 0;
  background: #f9fcff;
}

section.module.parallax {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100vh !important;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

section.module.parallax:after {
  content: "";
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: 8;
  background: -moz-linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 60%, #000 150%);
  background: -webkit-linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 60%, #000 150%);
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 60%, #000 150%);
}


section.module.parallax-1 {
  background-image: url("fotos/banner1\ \(2\).jpg");
}

section.module.parallax-2 {
  background-image: url("fotos/banner2.jpg");
}

section.module.parallax-3 {
  background-image: url("fotos/banner3.jpg");
}

section.module.parallax h1 {
  text-align: center;
  font-size: 78px;
  z-index: 50;
  text-transform: uppercase;
}

@media all and (max-width: 820px) {
  section.module h2 {
    font-size: 32px;
  }

  .module h2,
  p {
    padding: 0 8px;
  }

  .container {
    margin: 0;
    padding: 0;
  }

  section.module.parallax h1 {
    font-size: 36px;
  }
}

/* separação */
.h1tex {
  font-size: 3rem;
  font-family: "Montserrat", sans-serif;
  color: #151620;
  text-decoration-color: #151620;
  text-align: center;
  padding: 0% 0% 0% 0%;
  margin: 0%;
}

article.content {
  text-align: justify;
  font-size: 1.3rem;
  font-family: Helvetica, sans-serif;
  font-optical-sizing: auto;
  font-weight: normal;
  font-style: normal;
  box-sizing: border-box;
  color: #40352c;
  padding: 3% 18% 3% 18%;
  margin: 0%;

}

.card1 {
  display: flex;
  flex-direction: row;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  max-width: 900px;
  margin: auto;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.imagem3 {
  flex: 1;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
}



.texto {
  flex: 2;
  padding: 20px;
  font-family: Arial, sans-serif;
}

.h1text {
  margin-top: 0;
  font-size: 2rem;
}

.principal {
  text-align: justify;
  font-size: 1.4rem;
  font-family: Helvetica, sans-serif;
  font-optical-sizing: auto;
  font-weight: normal;
  font-style: normal;
  border-radius: 26px;
  box-sizing: border-box;
  color: #40352c;
  margin: 0%;


}

.content {
  display: flex;
  align-items: center;
  gap: 20px;

}

.texto {
  flex: 1;
}

.imagem {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: stretch;
  overflow: hidden;
}

.img1 {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 0;
  /* remove arredondamento se for ocupar tudo */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
  transition: 1s;
}

.img1:hover {
  box-shadow: 0px 15px 25px #42708c;
}

.content-left {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-top: 20px;
}

.texto2 {
  background-color: #42708c;
  border-radius: 5px;
  padding: 5% 15% 5% 15%;
  color: #f8f8f7;
  align-items: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.carl {
  align-items: center;
}

/* separação */
.tituloprincipal2,
.bannerin,
.img1,
.cardimg,
.cardtext,
.h1text,
.principal,
.meublog,
.blo,
.baixoclass,
.servicos,
.centro,
.image-section2 {
  visibility: hidden;
}

/* separação */



/* separação */
.servicos {
  text-align: center;
  background-color: #f9fcff2d; 
  color: #000;
  padding: 3% 0% 0% 0%;
  transition: 3s;
  align-items: center;
  flex: auto;
  font-size: 3rem;
  padding: 3% 0% 0% 0%;
  margin-bottom: 20px;
  background-color: #f9fcff; 
  font-family: "Quicksand", sans-serif;
  margin: 0%;
}


.cardsmeio {
  display: flex;
  justify-content: center; /* centraliza horizontalmente */
  align-items: center;     /* centraliza verticalmente */
  padding: 5% 20% 5% 20% ;         /* mantém o padding */
  background-color: #f9fcff;           
  box-sizing: border-box;  /* para padding não alterar o tamanho total */
}
.card-container {
  display: flex;
  flex-wrap: wrap; /* permite quebra de linha se necessário */
  gap: 2rem;
  max-width: 1000px;
  width: 100%;
  justify-content: center;
  align-items: stretch;
}

.card {
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
  padding: 1.5rem;
  border-left: 6px solid #6C63FF;
  text-align: center;
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 400px;
  width: 300px; /* largura fixa para manter alinhamento */
  box-sizing: border-box;
  transition: transform 0.3s ease;
}

@media (max-width: 767px) {
  .card {
    width: 100%; /* em telas pequenas, ocupa toda a largura */
  }
}
.card:hover {
  transform: translateY(-5px);
}

.card img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  margin-bottom: 1rem;
}

.card h3 {
  margin-top: 0;
  font-size: 1.2rem;
  color: #333;
}

.card p {
  font-size: 0.95rem;
  color: #555;
  line-height: 1.5;
  text-align: justify;
}

/* separação */
.cta-button {
  background-color: #384584;
  color: #dce4ea;
  border: none;
  padding: 20px 80px;
  margin-top: 30px;
  border-radius: 80px;
  font-size: 1.2rem;
  cursor: pointer;
  transition: background-color 0.1s ease;
  box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, 0.3);
}

.cta-button:hover {
  background-color: #323a63;
}

.texto {
  flex: 2;
  font-size: 1.8rem;
  color: #151620;
}

/* separação */
.info-consulta {
  display: flex;
  gap: 50px;
  padding: 15%;
  background-color: #242c64;
}

/* EstilizaĆ§Ć£o do lado esquerdo */
.info {
  flex: 1;
  font-family: Arial, sans-serif;
  color: #ddf0ff;
}

.info h2,
.info h3 {
  color: #ddf0ff;
}

.info p {
  margin: 10px 0;
}

.blo {
  text-align: justify;
  font-size: 1.4rem;
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: normal;
  font-style: normal;
  border-radius: 26px;
  box-sizing: border-box;
  color: #40352c;
  margin: 0%;
}

/* botão */
.baixoclass {
  color: #f8f8f7;
  background-color: #f9fcff;
  padding: 0% 0% 5% 0%;
  align-items: center;
  text-align: center;
  transition: 0.4s;
}

.cta-button {
  background-color: rgba(0, 0, 0, 0, 0.0);
  color: #dce4ea;
  border: none;
  padding: 20px 80px;
  margin-top: 30px;
  border-radius: 80px;
  font-size: 1.2rem;
  cursor: pointer;
  box-shadow: 0px 0px 8px 5px rgba(0, 0, 0, 0.3);
}

/*parte do blog */
.meublog {
  color: #000;
  text-align: center;
  flex: auto;
  padding: 3% 0% 2% 0%;
  font-family: "Quicksand", sans-serif;
  font-size: 3rem;
}


/* final */
.meio {
  display: flex;
  justify-content: space-between;
  padding: 3% 15% 3% 15%;
  background-color: #081f5c;
}

.info {
  flex: 1;
  font-family: Arial, sans-serif;
}

.formulario {
  flex: 1;
  font-family: Arial, sans-serif;
  background-color: #b9cbdd;
  padding: 3% 5% 5% 8%;
  border-radius: 10px;
  box-shadow: 05px 7px 20px #b9cbdd;
  margin-left: 20px;
  /* Adiciona espaçamento entre os dois blocos */
}

.formulario h2 {
  font-family: "Montserrat", sans-serif;
  color: #384584;
  margin-bottom: 15px;
  font-size: 2rem;
  padding: 0% 0% 3% 0%;

}

.formulario label {
  display: block;
  margin: 10px 0 5px;
}

.formulario input,
.formulario button {
  width: 96%;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 10px;
  border: 1px solid #ccc;
  font-size: 1rem;
}

.mensagem {
  width: 96%;
  padding: 10px;
  margin-bottom: 15px;
  border-radius: 10px;
  border: 1px solid #ccc;
  font-size: 1rem;
}

.formulario button {
  background-color: #384584;
  color: white;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
  width: 100%;
}

.module content {
  background: linear-gradient(to bottom, black, transparent);
  background-size: 100% 50px;
  /* Gradiente preto ocupa apenas 50px na altura */
  background-repeat: no-repeat;

}

.formulario button:hover {
  background-color: #0d6dce;
}

/* se n der certo  */
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

/*separação*/
.centro {
  padding: 0% 5% 0% 5%;
  text-align: justify;
  font-family: "Montserrat", sans-serif;
}

/*separação*/
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container2 {
  display: flex;
  max-width: 1200px;
  margin: 40px auto;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.image-section2 img {
  width: 100%;
  height: auto;
  object-fit: cover;
  padding: 8% 3% 0% 5%;
}

.image-section2 {
  flex: 1;
}

.text-section2 {
  flex: 1;
  padding: 20px 30px;
  color: #333333;
}

.text-section2 h1 {
  font-size: 2em;
  color: #444444;
  margin-bottom: 20px;
}

.text-section2 p {
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 20px;
}

@media (max-width: 320px) {

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

  .logo {
    width: 20%;
    padding: 0% 0% 0% -20%;
    margin: 0%;
  }

  p.bannerin {
    font-size: 1rem;
    padding: 0% 20% 0% 20%;
    align-items: center;

  }

  p.bannerin1 {
    font-size: 1rem;
    padding: 0% 20% 0% 20%;
    align-items: center;

  }

  .imgprinc {
    align-items: center;
    width: 50%;
  }

  h1.h1text {
    font-size: 1rem;
    align-items: center;
  }

  p.principal {
    font-size: 0.9rem;
    padding: 0%;
    margin: 0%;
    align-items: center;
    flex-direction: column;
  }

  .img1 {
    visibility: hidden;
  }

  .tituloprincipal2,
  .bannerin,
  .cardimg,
  .cardtext,
  .h1text,
  .principal,
  .meublog,
  .blo,
  .baixoclass,
  .servicos,
  .centro,
  .img1,
  .image-section2 {
    visibility: visible;
  }

  .tituloprincipal2 {
    font-size: 1rem !important;
    line-height: 1.3 !important;
    padding: 0% 20% 0% 20% !important;

  }

  .bannerin {
    font-size: 0.8rem !important;
    padding: 0 5% !important;
  }

  .oi {
    max-width: 95% !important;
    text-align: center !important;
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

  h2.cardh {
    font-size: 0.8rem !important;
  }

  p.cardtext {
    font-size: 0.8rem !important;
    padding: 0% 0% 5% 0%;
  }

  .card {
    width: 100%;
    padding: 8% 8% 0% 8%;
    align-items: center;
  }

  .cardimg {
    width: 100% !important;
    height: auto !important;
    /* Mantém a proporção */
    display: block;
    /* Evita espaços extras */
    object-fit: contain;
    /* Ajusta sem cortar */
    align-items: center;
  }

  .cta-button {
    width: 50%;
    /* Mais largo em telas pequenas */
    font-size: 0.8rem;
    padding: 6px;
  }

  .container2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    padding: 0% 13% 0% 13%;
  }

  .image-section2 {
    width: 70%;
    display: flex;
    justify-content: center;
  }

  .imgblog {
    width: 100%;
    /* Ocupa toda a largura */
    height: auto;
    /* Mantém a proporção */
    margin-bottom: 15px;
    /* Espaço entre imagem e texto */
  }

  .text-section2 {
    width: 100%;
    padding: 0 10px;
    /* Espaçamento interno para evitar bordas coladas */
  }

  .text-section2 h1 {
    font-size: 1.2rem;
    /* Ajusta tamanho do título */
    margin-bottom: 10px;
  }

  .text-section2 p {
    font-size: 0.9rem;
    /* Ajusta tamanho do texto */
    line-height: 1.4;
    /* Melhora espaçamento */
    width: 90%;
  }

  .meio {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 13%;
  }

  .formulario {
    order: -1;
    width: 80%;
    /* Ajusta a largura para 90% */
    display: flex;
    flex-direction: column;
    align-items: center;
    /* Centraliza os itens dentro do formulário */
    justify-content: center;
    margin: 0 auto;
    /* Garante que o formulário fique centralizado na página */
  }

  .botão {
    width: 90% !important;
    /* Ajusta o botão para ocupar toda a largura disponível */
  }

  .info {
    width: 90%;
    text-align: center;
    /* Centraliza o texto dentro da div info */
    padding: 10px;
  }

  .formulario form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    /* Aumenta o espaço entre os campos */
    width: 90%;
    /* Garante que o formulário ocupe toda a largura */
    align-items: center;
    /* Centraliza os campos dentro do formulário */
  }

  .formulario input,
  .formulario textarea,
  .formulario button {
    width: 80%;
    /* Faz os campos ocuparem toda a largura disponível */
    max-width: 400px;
    /* Limita o tamanho máximo dos campos */
    padding: 5px;
    font-size: 1rem;
    margin: 0 auto;
    /* Centraliza os campos */
  }

  .info p {
    font-size: 0.9rem;
    line-height: 1.5;
  }

}

@media (max-width: 425px) and (min-width: 321px) {

  .a-menu {
    font-size: 0.7rem;
    margin: 0;
    /* Remove margens desnecessárias */
    text-decoration: none;
    color: #333;
    padding: 8px 12px;
    transition: all 0.3s ease;
    align-items: center;

  }

  .logo {
    width: 20%;
    padding: 0% 0% 0% -20%;
    margin: 0%;
  }

  p.bannerin {
    font-size: 1rem;
    padding: 0% 25% 0% 25%;
    align-items: center;

  }

  p.bannerin1 {
    font-size: 1rem;
    padding: 0% 20% 0% 20%;
    align-items: center;

  }

  .imgprinc {
    align-items: center;
    width: 50%;
  }

  h1.h1text {
    font-size: 1rem;
    align-items: center;
  }

  p.principal {
    font-size: 1rem;
    padding: 0%;
    margin: 0%;
    align-items: center;
    flex-direction: column;
  }

  .img1 {
    visibility: hidden;
  }

  .tituloprincipal2,
  .bannerin,
  .cardimg,
  .cardtext,
  .h1text,
  .principal,
  .meublog,
  .blo,
  .baixoclass,
  .servicos,
  .centro,
  .imagem3,
  .imagem,
  .img1,
  .image-section2 {
    visibility: visible;
  }

  .tituloprincipal2 {
    font-size: 1rem !important;
    line-height: 1.3 !important;
    padding: 0% 20% 0% 20% !important;

  }

  .bannerin {
    font-size: 0.8rem !important;
    padding: 0 20% !important;
  }

  .oi {
    max-width: 95% !important;
    text-align: center !important;
  }

  .navbar ul {
    padding: 0.5rem;
    position: relative;
    left: -70px;
    top: 50%;

  }

  .navbar a {
    width: 1.5rem;
    height: 1.5rem;
  }

  .navbar a span {
    font-size: 0.8rem;
  }

  h2.cardh {
    font-size: 0.8rem !important;
  }

  p.cardtext {
    font-size: 0.8rem !important;
    padding: 0% 0% 5% 0%;
  }

  .card {
    width: 100%;
    padding: 8% 8% 0% 8%;
    align-items: center;
  }

  .cardimg {
    width: 100% !important;
    height: auto !important;
    /* Mantém a proporção */
    display: block;
    /* Evita espaços extras */
    object-fit: contain;
    /* Ajusta sem cortar */
    align-items: center;
  }

  .cta-button {
    width: 50%;
    /* Mais largo em telas pequenas */
    font-size: 0.8rem;
    padding: 6px;
  }

  .container2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    padding: 0% 13% 0% 13%;
  }

  .image-section2 {
    width: 70%;
    display: flex;
    justify-content: center;
  }

  .imgblog {
    width: 100%;
    /* Ocupa toda a largura */
    height: auto;
    /* Mantém a proporção */
    margin-bottom: 15px;
    /* Espaço entre imagem e texto */
  }

  .text-section2 {
    width: 100%;
    padding: 0 10px;
    /* Espaçamento interno para evitar bordas coladas */
  }

  .text-section2 h1 {
    font-size: 1.2rem;
    /* Ajusta tamanho do título */
    margin-bottom: 10px;
  }

  .text-section2 p {
    font-size: 0.9rem;
    /* Ajusta tamanho do texto */
    line-height: 1.4;
    /* Melhora espaçamento */
    width: 90%;
  }

  .meio {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 13%;
  }

  .formulario {
    order: -1;
    width: 90%;
    /* Ajustado para não ficar muito largo */
    display: flex;
    flex-direction: column;
    align-items: center;
    /* Centraliza os itens dentro do formulário */
    justify-content: center;
    margin: 0 auto;
    /* Garante que o formulário fique centralizado */
  }

  .botão {
    width: 88% !important;
    /* Ajusta para ocupar toda a largura do formulário */
  }

  .info {
    width: 100%;
    text-align: center;
    /* Centraliza o texto dentro da info */
    padding: 10px;
  }

  .formulario form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    /* Aumenta o espaçamento entre os campos */
    width: 100%;
    /* Garante que o formulário ocupe toda a largura disponível */
    align-items: center;
    /* Centraliza os campos dentro do formulário */
  }

  .formulario input,
  .formulario textarea,
  .formulario button {
    width: 80%;
    /* Ocupará toda a largura disponível */
    max-width: 400px;
    /* Limita o tamanho máximo dos campos */
    padding: 10px;
    font-size: 1rem;
    margin: 0 auto;
    /* Centraliza os campos */
  }

  .info p {
    font-size: 0.9rem;
    line-height: 1.5;
  }
}

/* Estilos para telas entre 426px e 768px (Tablets) */
@media (max-width: 768px) and (min-width: 426px) {
  .a-menu {
    font-size: 1rem;
    margin: 0;
    /* Remove margens desnecessárias */
    text-decoration: none;
    color: #333;
    padding: 8px 22px;
    transition: all 0.3s ease;
    align-items: center;

  }

  .logo {
    width: 20%;
    padding: 0% 0% 0% -20%;
    margin: 0%;
  }

  p.bannerin {
    font-size: 1rem;
    padding: 0% 25% 0% 25%;
    align-items: center;
    text-align: center;

  }

  p.bannerin1 {
    font-size: 1rem;
    padding: 0% 20% 0% 20%;
    align-items: center;

  }

  .imgprinc {
    align-items: center;
    width: 50%;
  }

  h1.h1text {
    font-size: 1rem;
    align-items: center;
  }

  p.principal {
    font-size: 0.9rem;
    padding: 0%;
    margin: 0%;
    align-items: center;
    flex-direction: column;
  }

  .img1 {
    visibility: hidden;
  }

  .tituloprincipal2,
  .bannerin,
  .cardimg,
  .cardtext,
  .h1text,
  .principal,
  .meublog,
  .blo,
  .baixoclass,
  .servicos,
  .centro,
  .image-section2 {
    visibility: visible;
  }

  .tituloprincipal2 {
    font-size: 1rem !important;
    line-height: 1.3 !important;
    padding: 0% 20% 0% 20% !important;

  }

  .bannerin {
    font-size: 0.8rem !important;
    padding: 0 10% !important;
  }

  .oi {
    max-width: 95% !important;
    text-align: center !important;
  }

  .navbar ul {
    padding: 0.8rem;
    position: relative;
    left: -50px;
    top: 50%;

  }

  .navbar a {
    width: 2rem;
    height: 2rem;
  }

  .navbar a span {
    font-size: 1rem;
  }

  h2.cardh {
    font-size: 0.8rem !important;
  }

  p.cardtext {
    font-size: 0.8rem !important;
    padding: 0% 0% 5% 0%;
  }

  .card {
    width: 50%;
    padding: 5% 3% 5% 3%;
    display: flex;
    flex-direction: column;
    /* Organiza os itens em coluna */
    align-items: center;
    /* Centraliza horizontalmente */
    justify-content: center;
    /* Centraliza verticalmente */
    text-align: center;
  }

  .cardimg {
    width: 70% !important;
    height: auto !important;
    display: block;
    object-fit: contain;
  }

  .cta-button {
    width: 50%;
    /* Mais largo em telas pequenas */
    font-size: 0.8rem;
    padding: 6px;
  }

  .container2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    padding: 0% 13% 0% 13%;
  }

  .image-section2 {
    width: 70%;
    display: flex;
    justify-content: center;
  }

  .imgblog {
    width: 100%;
    /* Ocupa toda a largura */
    height: auto;
    /* Mantém a proporção */
    margin-bottom: 15px;
    /* Espaço entre imagem e texto */
  }

  .text-section2 {
    width: 100%;
    padding: 0 10px;
    /* Espaçamento interno para evitar bordas coladas */
  }

  .text-section2 h1 {
    font-size: 1.2rem;
    /* Ajusta tamanho do título */
    margin-bottom: 10px;
  }

  .text-section2 p {
    font-size: 0.9rem;
    /* Ajusta tamanho do texto */
    line-height: 1.4;
    /* Melhora espaçamento */
    width: 90%;
  }

  .meio {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 13%;
  }

  .formulario {
    width: 90%;
    padding: 5%;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* Centraliza os itens dentro do formulário */
    justify-content: center;
  }

  .formulario form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 15px;
    /* Mais espaçamento entre os campos */
    align-items: center;
    /* Centraliza os campos dentro do form */
  }

  .formulario input,
  .formulario textarea,
  .formulario button {
    width: 100%;
    /* Ocupa toda a largura disponível */
    max-width: 400px;
    /* Limita o tamanho máximo dos campos */
    padding: 10px;
    font-size: 1rem;
    margin: 0 auto;
    /* Centraliza os campos dentro do formulário */
  }

  .botão {
    width: 100% !important;
  }

  .info {
    width: 100%;
    text-align: center;
    padding: 10px;
  }

  .info p {
    font-size: 0.9rem;
    line-height: 1.5;
  }
}
@media (max-width: 768px) and (min-width: 425px) {
  .a-menu {
    font-size: 1rem;
    margin: 0;
    text-decoration: none;
    color: #333;
    padding: 8px 20px;
    transition: all 0.3s ease;
    align-items: center;
  }

  .logo {
    width: 20%;
    padding: 0 0 0 -20%;
    margin: 0;
  }

  p.bannerin,
  p.bannerin1 {
    font-size: 1rem;
    padding: 0 20%;
    align-items: center;
  }

  .imgprinc {
    align-items: center;
    width: 50%;
  }

  h1.h1text {
    font-size: 1rem;
    align-items: center;
  }

  p.principal {
    font-size: 0.9rem;
    padding: 0;
    margin: 0;
    align-items: center;
    flex-direction: column;
  }

  .img1 {
    visibility: hidden;
  }

  .tituloprincipal2,
  .bannerin,
  .cardimg,
  .cardtext,
  .h1text,
  .principal,
  .meublog,
  .blo,
  .baixoclass,
  .servicos,
  .centro,
  .img1,
  .image-section2 {
    visibility: visible;
  }

  .tituloprincipal2 {
    font-size: 1rem !important;
    line-height: 1.3 !important;
    padding: 0 20% !important;
  }

  .bannerin {
    font-size: 0.8rem !important;
    padding: 0 5% !important;
  }

  .oi {
    max-width: 95% !important;
    text-align: center !important;
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

  h2.cardh {
    font-size: 0.8rem !important;
  }

  p.cardtext {
    font-size: 0.8rem !important;
    padding: 0 0 5% 0;
  }

  .card {
    width: 100%;
    padding: 8% 8% 0 8%;
    align-items: center;
  }

  .cardimg {
    width: 100% !important;
    height: auto !important;
    display: block;
    object-fit: contain;
    align-items: center;
  }

  .cta-button {
    width: 50%;
    font-size: 0.8rem;
    padding: 6px;
  }

  .container2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    padding: 0 13%;
  }

  .image-section2 {
    width: 70%;
    display: flex;
    justify-content: center;
  }

  .imgblog {
    width: 100%;
    height: auto;
    margin-bottom: 15px;
  }

  .text-section2 {
    width: 100%;
    padding: 0 10px;
  }

  .text-section2 h1 {
    font-size: 1.2rem;
    margin-bottom: 10px;
  }

  .text-section2 p {
    font-size: 0.9rem;
    line-height: 1.4;
    width: 90%;
  }

  .meio {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 13%;
  }

  .formulario {
    order: -1;
    width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
  }

  .botão {
    width: 90% !important;
  }

  .info {
    width: 90%;
    text-align: center;
    padding: 10px;
  }

  .formulario form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 90%;
    align-items: center;
  }

  .formulario input,
  .formulario textarea,
  .formulario button {
    width: 80%;
    max-width: 400px;
    padding: 5px;
    font-size: 1rem;
    margin: 0 auto;
  }

  .info p {
    font-size: 0.9rem;
    line-height: 1.5;
  }
}

</style>



</head>


<body>
  <div class="wrapper">
    <nav class="menu">
      <img class="logo" src="fotos/logo02.png" alt="logo" />
     <a class="a-menu" href="#sobre">Sobre mim</a>
      <a class="a-menu" href="#servicos">Serviços</a>
      <a class="a-menu" href="<?= base_url('blog') ?>">Blog</a>
      <a class="a-menu" href="<?= base_url('login') ?>">Login</a>
    </nav>
    <main>
      <section class="module parallax parallax-1">
        <h1 class="tituloprincipal">
          <img src="fotos/banner.png" alt="Terapia Psicanálise" class="imgprinc" />
        </h1>
        <p class="bannerin">
          “Cuidar da mente é o primeiro passo para transformar sua vida."
        </p>
      </section>

      <section class="module content">
        <article class="card1">
          <div class="imagem3">
            <img src="fotos/01.jpeg" alt="imagem01" class="img1" />
          </div>
          <div class="texto">
            <h1 class="h1text" id="sobre">Sobre mim</h1>
            <p class="principal">
              Bem-vindo(a)! Este é o seu espaço para cuidar da mente e
              encontrar o equilíbrio que você merece. Com uma abordagem
              descontraída e acolhedora, estou aqui para ajudá-lo(a) a superar
              desafios emocionais e a construir uma versão mais leve e
              autêntica de si mesmo(a).
            </p>
            <p class="principal">
              Com minha formação em Terapia
              Cognitivo-Comportamental e Psicopatologia, ofereço um ambiente
              seguro e empático, onde você pode se sentir à vontade para
              explorar seus sentimentos e emoções. Vamos juntos trilhar o
              caminho para o autoconhecimento e o bem-estar? Estou aqui para
              apoiar você em cada passo dessa jornada.
            </p>
          </div>
        </article>
      </section>


      <section class="module parallax parallax-2">


        <div class="oi">
          <h2 class="tituloprincipal2">
            "Não podemos mudar, não nos podemos afastar do que somos enquanto
            não aceitarmos profundamente o que somos".
          </h2>
          <p class="bannerin">-Carl Rogers-</p>
        </div>
      </section>

      <h2 class="servicos" id="servicos">Serviços</h2>
      <section class="cardsmeio">

        <div class="card-container">
          <div class="card">
            <img src="fotos/1.jpg" alt="Ansiedade">
            <h3>Ansiedade</h3>
            <p>A terapia para ansiedade oferece acolhimento e estratégias práticas, como a TCC, para identificar
              gatilhos de tensão e preocupação. Ajuda a desenvolver controle emocional, reduzir sintomas físicos e
              mentais e resgatar a tranquilidade no dia a dia.</p>
          </div>

          <div class="card">
            <img src="fotos/2.jpg" alt="Depressão">
            <h3>Depressão</h3>
            <p>A terapia para depressão oferece suporte emocional e estratégias eficazes, como a TCC, para lidar com
              sentimentos de tristeza, apatia e desânimo. Trabalha o resgate da autoestima, reconexão com objetivos de
              vida e promoção de bem-estar duradouro.</p>
          </div>

          <div class="card">
            <img src="fotos/3.jpg" alt="Adolescentes e Adultos">
            <h3>Adolescentes e Adultos</h3>
            <p>A terapia para adolescentes e adultos promove autoconhecimento e equilíbrio emocional. Com abordagem
              personalizada, oferece apoio para lidar com conflitos internos, relações interpessoais e desafios próprios
              de cada fase da vida, com empatia e acolhimento.</p>
          </div>
        </div>
      </section>
      </section>
      <div class="baixoclass">
        <a href="blog"><button class="cta-button">Ler Mais</button></a>
      </div>
    </main>

    <section class="module content">
      <div class="container2">
        <div class="image-section2">
          <img src="fotos/02.png" alt="Mesa decorada com flores azuis" class="imgblog">
        </div>

        <div class="text-section2">
          <h1 class="centro">Meu Blog</h1>
          <p class="centro">Sou pós-graduada em Terapia Cognitivo-Comportamental e formada em Psicopatologia, com uma
            trajetória
            voltada ao cuidado emocional e ao bem-estar. Minha missão é oferecer um espaço seguro e acolhedor, onde
            adolescentes e adultos possam encontrar suporte para enfrentar desafios emocionais e desenvolver
            resiliência.</p>
          <p class="centro">A clínica foi criada para ser um ambiente confortável e tranquilo, pensado para proporcionar
            acolhimento
            e confiança. Aqui, priorizamos a escuta ativa, o respeito às individualidades e a busca por soluções que
            realmente façam sentido para você.</p>
          <p class="centro">Com uma abordagem humanizada, acredito que cada pessoa tem o potencial de superar
            dificuldades e
            encontrar novos caminhos. Ofereço um acompanhamento personalizado, unindo técnicas baseadas em evidências
            com uma escuta empática. Meu objetivo é ajudá-lo a compreender emoções, transformar padrões de
            comportamento e desenvolver ferramentas para uma vida mais leve e equilibrada.</p>
        </div>
      </div>
    </section>

    <!-- Lado esquerdo com informações -->
    <!--         -->
    <section class="meio">
      <div class="info" id="login">
        <h2>Funcionamento</h2>
        <p>08 às 18 horas de segunda a sexta<br></p>
        <p>QS 614 conjunto B, <br>lote 2 sala 410,<br>
          Samambaia Norte <br>Brasilia-Df <br> CEP-72.322582</p>
        <p>Psiu Clinica de Psicologia LTDA</p>
        <p>CNPJ 58878952000192</p>
        <h3>Contatos</h3>
        <p>Telefone/Whatsapp: +55 (61) 8552-7828</p><br>
        <p>Instagram: @Psi.haianecastro</p>
        <br><br>
        <br><br>
        <p>Copyright © 2024 Projeto int. Todos os direitos reservados <br> Abner, Suellen, igor</p>
      </div>

      <!-- Lado direito com o formulário de login -->
      <div class="formulario">
        <h2>Contato</h2>
        <form action="#" method="post">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>

          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required>

          <label for="telefone">Telefone:</label>
          <input type="tel" id="telefone" name="telefone" placeholder="(DDD) 91234-5678" required>

          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem" rows="4" class="mensagem" required></textarea>

          <label for="endereco">Endereço:</label>
          <input type="text" id="endereco" name="endereco" placeholder="Opcional">

          <button type="submit" class="botão">Enviar</button>
          <p>Caso não tenha login <a href="CadastroLogin/cadastro.html">fazer cadastro</a></p>
        </form>
      </div>
    </section>

    <!--Menu-->
    <nav class="navbar" id="redes">
      <ul>
        <li>
          <a
            href="https://www.instagram.com/psi.haianecastro?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
            <img src="fotos/insta.png" alt="Instagram">
            <span>Instagram</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="fotos/x.png" alt="X">
            <span>X</span>
          </a>
        </li>
        <li>
          <a
            href="https://api.whatsapp.com/send?phone=5561985527828&fbclid=PAZXh0bgNhZW0CMTEAAadAj8rcwgI0qiF38-oU4px9D57aG1vJqRmcKOnc0p7uda7WsJGCK0Q4XdpaPQ_aem_1DAipiPmbR6rLmq3-AzhpQ">
            <img src="fotos/what.png" alt="WhatsApp">
            <span>WhatsApp</span>
          </a>
        </li>
      </ul>
    </nav>
<script>
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) { // A partir de 100px de rolagem
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
if (window.innerWidth > 500) {
  window.sr = ScrollReveal({ reset: true });

  sr.reveal('.tituloprincipal2', { duration: 1300, origin: 'top', distance: '20px' });
  sr.reveal('.bannerin', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.img1', { duration: 1900, origin: 'top', distance: '20px' });
  sr.reveal('.cardimg', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.cardtext', { duration: 1900, origin: 'top', distance: '20px' });
  sr.reveal('.h1text', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.principal', { duration: 1900, origin: 'top', distance: '20px' });
  sr.reveal('.meublog', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.blo', { duration: 1900, origin: 'top', distance: '20px' });
  sr.reveal('.baixoclass', { duration: 2100, origin: 'top', distance: '20px' });
  sr.reveal('.servicos', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.centro', { duration: 1200, origin: 'top', distance: '20px' });
  sr.reveal('.image-section2', { duration: 1200, origin: 'top', distance: '20px' });
}
window.addEventListener('scroll', () => {
  const menu = document.querySelector('.menu');
  if (window.scrollY > 50) { // Ajuste o valor de 50 pixels conforme necessário
    menu.classList.add('scrolled');
  } else {
    menu.classList.remove('scrolled');
  }
});

</script>
  </div>
</body>

</html>