<?php
include_once 'db_engine/bd_mysql_pdo.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Newron - Guiando o seu Futuro</title>

   <!-------CSS------->
   <link rel="stylesheet" href="../style/index.css">
   <!-------Logo Icon------->
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
   <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
   <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
   <!-----Vue Framework----->
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
   <!----Scroll Animation--->
   <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
   <div class="loader"><img src="../src/logo/logo_inverted_no_content.png" alt=""></div>
   <script src="../script/preloader.js"></script>
   <!-------Top-Return------->
   <span id="top-return" style="position:absolute;"></span>
   <!-------Navbar------->
   <div class="navbar"></div>
   <script src="../components/navbar.js"></script>
   <!-----End-Navbar----->

   <header>
      <section class="atractive">
         <div class="ver-line-bold"></div>
         <div class="ver-line-bold-mobile"></div>
         <div class="atractive-text">
            <h2>Organize <br>suas Ideias</h2>
            <p>Conheça nossos Planos de Carreira</p>
            <a href="student-life.php">Saiba Mais</a>
         </div>
      </section>
   </header>


   <!-------Ads------->
   <a href="#top-return" target="_self">
      <div class="top-return"></div>
   </a>
   <!-------Ads------->

   <main>
      <div id="mid-return"></div>
      <!-------Main------->
      <section class="student-life">
         <img src="https://th.bing.com/th/id/R.9e3ea311da1788ea1ff72c567f7b4470?rik=Dqtq8%2bR2irfaQw&riu=http%3a%2f%2fwww.gifs-animados.net%2fprofissao%2fprofissao098.gif&ehk=QBHuFi%2faXzfmq3NmFKQQIXyQWBM%2bbO%2f2sul8%2buPTq0Q%3d&risl=&pid=ImgRaw&r=0" alt="">
         <div class="student-life-text">
            <h2 class="title-gg">Teste vocacional</h2>
            <p>Faça um teste para saber em que você pode ser útil, caso não tenha, desista.</p>
            <a href="student-life.php">Comece sua Jornada</a>
         </div>
      </section>

      <section class="student-life">
         <img src="../src/logo/shiba/shiba_3.png" alt="Ícone nível máximo - Student Life">
         <div class="student-life-text">
            <h2 class="title-gg">Student life</h2>
            <p>Trilhe uma jornada de conhecimento com o nosso Student Life, e tenha um cronograma imersivo para alcançar
               seus objetivos profissionais.</p>
            <a href="db_engine/bd_mysql_destroy_pdo.php">Comece sua Jornada</a>
         </div>
      </section>

      <section class="advantages">
         <h4 class="title">Um pouco sobre a Newron</h4>
         <div class="advantages-cards">
            <div>
               <img src="../src/images/cards/target.png" alt="">
               <div>
                  <h4><strong>Missão</strong></h4>
                  <p>Direcionar as pessoas nas decisões dos estudos e na carreira.</p>
               </div>
            </div>
            <div>
               <img src="../src/images/cards/web-design.png" alt="">
               <div>
                  <h4><strong>Visão</strong></h4>
                  <p>Tornar-se a plataforma de orientação profissional mais reconhecida do Brasil</p>
               </div>
            </div>
            <div>
               <img src="../src/images/cards/chart.png" alt="">
               <div>
                  <h4><strong>Valores</strong></h4>
                  <p>Planejamento, Acessibilidade,<br>Criatividade e Confiança</p>
               </div>
            </div>
         </div>
      </section>
      <section class="final-main-text">
         <div>
            <h4 class="title-m">Precisa de um Plano?</h4>
            <a class="title link" href="student-life.php">Vamos Trabalhar Juntos →</a>
         </div>
      </section>
   </main>
   <!-------End Main------->
   <!-------Footer------->
   <footer></footer>
   <script src="../components/footer.js"></script>
   <!----Scroll Animation--->
   <script src="../script/index.js"></script>
</body>

</html>