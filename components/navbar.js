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
         class_of_navbar_search_field:'navbar-search-field',


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
      show_search_field(){
         
         if(this.class_of_navbar_search_field=('navbar-search-field')){
            this.class_of_navbar_search_field=('navbar-search-field--active')
         }
         if(this.class_of_navbar_search_field=('navbar-search-field--active')){
            this.class_of_navbar_search_field=('navbar-search-field')
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
                  <li ><a href="forum-please-login.php">Fórum</a></li>
               </ul>
            </div>
         </div>
   
         <div class="nav-right">
            <input type="search" name="navbar-search" v-bind:id="class_of_navbar_search_field">
            <i class="fi fi-rr-search" @click="show_search_field()"></i>
            <div class="ver-line"></div>
            <div class="nav-user">
               <a href="sign-in.php" class="login">Entrar</a>
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
            <div class="nav-user">
               <a href="sign-in.php" class="login">Entrar / Cadastrar-se</a>
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

`
})

