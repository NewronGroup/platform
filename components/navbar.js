navbar = new Vue({
   name:'navbar',
   el: '.navbar',
   data() {
      return {
         navbar_title_1: 'Sobre nós',
         navbar_title_2: 'Parceiros',
         navbar_dropdown_title_1: 'Comunidade',
         navbar_dropdown_1_subtitle: 'Fórum',

         mobile_menu_switch: false,
         user_name:'Entrar',
         user_image:'../src/user_provided/no_image.jpg',
         user_online:true,


      }
   },
   methods: {
      open_mobile_menu(){
         this.mobile_menu_switch=true
         /*Add class switch to soft fade in out*/
      },
      close_mobile_menu(){
         this.mobile_menu_switch=false
         /*Add class switch to soft fade in out*/
      },
      aoba(){
         return{
            <?php echo('Boa noite meu patrão')
            ?>
         }
      },
   },
   template:
`
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
                  <li ><a href="not-ready.php">Fórum</a></li>
               </ul>
            </div>
         </div>

         <div class="nav-right">
            <i class="fi fi-rr-search" @click=""></i>
            <div class="ver-line"></div>
            <div class="nav-user" v-if="user_online==false">
               <a href="sign-in.php" class="login">{{user_name}}</a>
            </div>
            <div class="nav-user" v-if="user_online==true">
               <img v-bind:src="user_image" alt="Foto do Usuário">
               <a href="sign-in.php" class="login_link">{{user_name}}</a>
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
   <section class="navbar-mobile"v-if="mobile_menu_switch==true">
      <aside class="mobile-menu">
         <div class="exit-button" @click="mobile_menu_switch=false"><i class="fi fi-rr-cross-circle"></i></div>
         <div class="login">
            <div class="nav-user" v-if="user_online==false">
               <a href="sign-in.php" class="login">Entrar / Cadastrar-se</a>
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
   

`
})

