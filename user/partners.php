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
   <title>Conexões - Newron</title>
   <!-------CSS------->
   <link rel="stylesheet" href="../style/partners.css">
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
               <i class="fi fi-rr-search" @click="show_search_field()"></i>
               <div class="ver-line"></div>
               <div class="nav-user" @click="onclick_dropdow()">
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


   <main>
      <section class="section-business">
         <div class="card">
            <img src="../src/logo/partners/ibm-logo-white.png" alt="Empresa IBM">
            <div class="card-text">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, praesentium.</p>
            </div>
         </div>
         <div class="card">
            <div class="card-text">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, praesentium.</p>
            </div>
            <img src="../src/logo/partners/fb-logo-white.png" alt="Empresa FB">
         </div>
         <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur laborum est! Esse aperiam porro consectetur, inventore dicta quia consequuntur deleniti modi dolores et, minima fugiat est aspernatur labore aut cumque ab commodi ad repellendus suscipit sequi incidunt. Rerum ipsa tempora corrupti consectetur iusto. In, necessitatibus obcaecati. Placeat qui illum cupiditate rerum, consectetur voluptatem quibusdam deserunt minus repudiandae ratione consequatur quos quisquam reiciendis possimus error ut, vero eaque iure ex blanditiis quaerat odio ipsum incidunt? Corporis adipisci, ea repellat sit unde modi eligendi laboriosam, vitae nisi et quos non similique quidem incidunt delectus qui id maxime cupiditate alias nobis possimus.</p>
      </section>

   </main>

   <!-------Footer------->
   <footer>
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

</body>

</html>