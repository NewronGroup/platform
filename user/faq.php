<?php
include_once 'db_engine/bd_mysql_pdo.php';
session_start();
if (!isset($_SESSION['login']) && (!isset($_SESSION['senha']))) {
   header('Location: ../templates/index.php');
}

$stmt1 = $conn->prepare('select * from usuarios where login = :login');

$stmt1->bindValue('login', $_SESSION['login']);
$stmt1->execute();

$user = $stmt1->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Perguntas Frequentes - Newron</title>
   <!-------CSS------->
   <link rel="stylesheet" href="../style/fac.css">
   <!-------Logo Icon------->
   <link rel="icon" href="../src/logo/logo_inverted_no_content.png" type="image/icon type">
   <!-------CSS Icons------->
   <link href="../src/icons/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
   <link href="../src/icons/uicons-brands/css/uicons-brands.css" rel="stylesheet">
   <!-----Vue Framework----->
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
   <div class="loader"></div>
   <script src="../script/preloader.js"></script>
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
                     <li><a href="forum.php">Fórum</a></li>
                  </ul>
               </div>
            </div>
            <div class="nav-right">
               <input type="search" name="navbar-search" list="pages" v-bind:id="class_of_navbar_search_field" v-model="value_of_navbar_search_field" v-on:keyup.enter="anything()">
               <datalist id="pages">
                  <option value="Student life"></option>
                  <option value="Sobre nós"></option>
                  <option value="Teste vocacional"></option>
                  <option value="FAQ"></option>
                  <option value="Políticas de privacidade e inclusão"></option>
                  <option value="Página inicial"></option>
               </datalist>
               <i v-bind:class="search_icon" @click="show_search_field()"></i>
               <div class="ver-line"></div>
               <div class="nav-user" @click="onclick_dropdow()">
                  <p> Bem vindo! <?php echo $user->nome; ?></p>
                  <div v-bind:class="class_of_dropdow_user">
                     <a href="">Editar Perfil</a>
                     <a href="db_engine/bd_mysql_destroy_pdo.php">Sair <i class="fi fi-rr-sign-in-alt"></i></a>
                  </div>
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
            <div class="profile-settings">
               <a href="">Editar Perfil<i class="fi fi-rr-edit"></i></a>
               <a class="button-close-session" href="db_engine/bd_mysql_destroy_pdo.php">Desconectar<i class="fi  fi-rr-sign-in-alt"></i></a>
            </div>

            <div class="nav-user">
               <p>Bem vindo <?php echo $user->nome; ?></p>
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
   <!-----Header----->



   <header>
      <div class="header-text">
         <h1 class="selected">Como podemos te ajudar hoje?</h1>
         <h1>Newron<br>Transformando vidas!</h1>
         <h1>A. M. O.... E. B. A.</h1>
         <h1>Amoeba.... AMOEBA! É massa!</h1>
      </div>
      <img src="../../assets/logo/inverted-logo.png" alt="">
   </header>

   <main>
      <span>
         <h2>FAQ - Perguntas Frequentes</h2>
         <img src="../../assets/Icons/help.png" alt="" srcset="">
      </span>
      <div class="communs-errors">
         <button class="error">
            <h2>Como vocês irão me orientar na minha decisão?</h2>
            <p>No nosso site você vai encontrar dicas, conselhos e fóruns para discutir com outras pessoas que têm as
               mesmas dúvidas. Você também verá tudo sobre as
               profissões de seu interesse, como salário, melhores empresas e necessidade no mercado de trabalho. Terá a
               possibilidade de conversar com profissionais
               de cada área e terá acesso a um guia de estudos no Student Life. </p>
            <i class="fi-rr-angle-small-right"></i>
         </button>
         <button class="error">
            <h2>Eu vou precisar pagar algum valor para a Newron?</h2>
            <p>Não. Nossos serviços, conselhos e trilha são inteiramente gratuitos.</p>
            <i class="fi-rr-angle-small-right"></i>
         </button>
         <button class="error">
            <h2>O que é o Student Life?</h2>
            <p>O nosso projeto foi desenvolvido para te auxiliar através de um guia de estudos, na decisão de uma área
               que você tenha interesse.
               Você escolhe uma área, verá os vários ramos e profissões que existem e terá acesso a recomendações de
               estudos para alavancar sua carreira. </p>
            <i class="fi-rr-angle-small-right"></i>
         </button>
         <button class="error">
            <h2>Como faço para colocar os meus cursos no site?</h2>
            <p>Basta nos mandar um e-mail no endereço <a href="mailto:jurupinga.pinganemim@newron.com">support@newron.com.br</a> com a proposta. Seu e-mail
               será analisado, manteremos contato via tal.</p>
            <i class="fi-rr-angle-small-right"></i>
         </button>
      </div>
   </main>
   <!-------Footer------->
   <footer>
      <!-------Footer------->
      <section class="footer-components">
         <div class="footer-content">
            <div class="footer-left">
               <h3 class="title-m">Empresa</h3>
               <a class="par-m" href="#">Quem Somos</a>
               <a class="par-m" href="policies.html">Políticas de Privacidade e Inclusão</a>
            </div>
            <div class="footer-center">
               <h3 class="title-m">Colaboradores</h3>
               <a class="par-m" href="#">Trabalhe Conosco!</a>
               <div class="footer-colaboradores">
                  <img src="../src/logo/partners/fb-logo-white.png" alt="">
                  <img src="../src/logo/partners/ibm-logo-white.png" alt="">
               </div>
            </div>
            <div class="footer-right">
               <h3 class="title-m">Suporte</h3>
               <p class="par-m">E-mail:
                  <a href="mailto:support@newron.com">support@newron.com</a>
               </p>
               <a class="par-m" href="faq.html">Perguntas Frequentes</a>

            </div>
         </div>
         <div class="footer-media">
            <a href="#"><i class="fi fi-brands-facebook"></i></a>
            <a href="https://www.instagram.com/newronn_"><i class="fi fi-brands-instagram"></i></a>
            <a href="https://www.linkedin.com/in/newron-suporte-b71759243/#experience"><i class="fi fi-brands-linkedin"></i></a>
         </div>
         <div class="footer-line"></div>
         <div class="end">
            <p class="par-m">Encontre seu caminho com</p>
            <!--#top-return--><a href="#top-return"><img src="../src/logo/logo.png" alt="logo"></a>
            <p class="par-m">Newron</p>
         </div>
      </section>

   </footer>
   <!-------End Footer------->

   <script src="../../js/faq.js"></script>
</body>

</html>