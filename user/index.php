<?php
include_once 'db_engine/bd_mysql_pdo.php';
session_start();
if(!isset($_SESSION['login']) && (!isset($_SESSION['senha'])))
	{		
		header('Location: ../templates/index.php'); 
	}   

   $stmt1 = $conn->prepare('select * from usuarios where login = :login');

   $stmt1->bindValue('login', $_SESSION['login']);
   $stmt1->execute();

   $user = $stmt1->fetch(PDO::FETCH_OBJ);
?>

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

</head>

<body>
   <div class="loader"><img src="../src/logo/logo_inverted_no_content.png" alt=""></div>
   <script src="../script/preloader.js"></script>
   <!-------Top-Return------->
   <span id="top-return" style="position:absolute;"></span>
   <!-------Navbar------->
   <section class="navbar">
      <section class="navbar-top">
         <div class="nav-components">
            <div class="nav-left">
               <div class="nav-logo">
                  <a href="index.php"><img src="../src/logo/logo-no-details.png" alt="logo"></a>
               </div>
               <div class="nav-links">
                  <a href="about-us.php">{{navbar_title_1}}</a>
                  <span class="navtop-line"></span>
                  <a href="partners.php">{{navbar_title_2}}</a>
                  <span class="navtop-line"></span>
                  <ul>{{navbar_dropdown_title_1}}
                     <li><a href="not-ready.php">Fórum</a></li>
                  </ul>
               </div>
            </div>

            <div class="nav-right">
               <input type="search" name="navbar-search" v-bind:id="class_of_navbar_search_field">
               <i class="fi fi-rr-search" @click="show_search_field()"></i>
               <div class="ver-line"></div>
               <div class="nav-user"@click="onclick_dropdow()">
                  <p onselectstart='return false'> Bem vindo! <?php echo $user->nome; ?></p>
               </div>
               <div class="dropdow-user">
                  <a href="">Editar Perfil</a>
                  <a href="db_engine/bd_mysql_destroy_pdo.php">Sair <i class="fi fi-rr-sign-in-alt"></i></a>
               </div>
            </div>
         </div>
         <div class="nav-components-mobile">
            <div class="nav-left">
               <div class="nav-logo">
                  <a href="index.php"><img src="../src/logo/logo-no-details.png" alt="logo"></a>
               </div>
            </div>
            <div class="nav-mobile-right">
               <i class="fi fi-rr-menu-burger" @click="open_mobile_menu()" v-if="mobile_menu_switch==false"></i>
               <i class="fi fi-rr-cross" @click="close_mobile_menu()" v-else></i>
            </div>
         </div>
      </section>
      <section class="navbar-mobile" v-if="mobile_menu_switch==true">
         <aside class="mobile-menu">
            <div class="exit-button" @click="mobile_menu_switch=false"><i class="fi fi-rr-cross-circle"></i></div>
            <div class="login">
               <div class="nav-user" v-if="user_online==false">
                  <p class="login"><?php echo $_SESSION['nome'] ?></p>
               </div>
               <div class="nav-user" v-else>

                  <a href="sign-in.php" class="login"><img v-bind:src="user_image" alt="">{{user_name}}</a>
               </div>
            </div>
            <hr>
            <div class="search">
               <a href=""><i class="fi fi-rr-search" @click=""></i>&nbsp;&nbsp;Pesquisar</a>
            </div>
            <hr>
            <div class="nav-links">
               <a href="about-us.php">{{navbar_title_1}}</a>
               <a href="partners.php">{{navbar_title_2}}</a>
               <ul>{{navbar_dropdown_title_1}}<i class="fi fi-rr-angle-small-down"></i>
                  <li><a href="not-ready.php">Fórum</a></li>
               </ul>
            </div>
         </aside>
      </section>
   </section>

<script src="../components/navbar_off_template.js"></script>
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
      <a href="#top-return">
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
      <!-------End Footer------->
</body>

</html>