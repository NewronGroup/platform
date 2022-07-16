navbar = new Vue({

   el: '.navbar',
   data() {
      return {
         navbar_title_1: 'Sobre nós',
         navbar_title_2: 'Parceiros',
         navbar_dropdown_title_1: 'Comunidade',
         navbar_dropdown_1_subtitle: 'Fórum',

         mobile_menu_switch: true,
         user_name:'Entrar',
         user_image:'../src/user_provided/no_image.jpg',
         user_online:false,
      }
   },
   methods: {

      //  const btn_mobile = document.querySelector('#nav_mobile_menu')
      // const mobile_menu = document.querySelector('.hide')
      // const btn_menu = document.querySelector('.fi-rr-menu-burger')
      // const btn_exit = document.querySelector('.fi-rr-cross')

      // const search_button = document.querySelector('.fi-rr-search')
      // const search_window = document.querySelector('.section-search')

      // btn_menu(){
      //     mobile_menu.classList.toggle("hide"),
      //     btn_exit.style.display ="block"
      //     btn_menu.style.display ="none"
      // }

      // btn_exit.onclick = ()=>{
      //     mobile_menu.classList.toggle("hide"),
      //     btn_exit.style.display ="none"
      //     btn_menu.style.display ="block"
      // }

      // search_button.onclick = ()=>{
      //     search_window.classList.toggle('hide')

      // }

   },
   template:
`
<section class="navbar">
   <section class="navbar-top">
      <div class="nav-components">
         <div class="nav-left">
            <div class="nav-logo">
               <a href="index.html"><img src="../src/logo/logo-no-details.png" alt="logo"></a>
            </div>
            <div class="nav-links">
               <a href="about-us.html">{{navbar_title_1}}</a>
               <span class="navtop-line"></span>
               <a href="partners.html">{{navbar_title_2}}</a>
               <span class="navtop-line"></span>
               <ul>{{navbar_dropdown_title_1}}
                  <li ><a href="not-ready.html">Fórum</a></li>
               </ul>
            </div>
         </div>

         <div class="nav-right">
            <i class="fi fi-rr-search" @click=""></i>
            <div class="ver-line"></div>
            <div class="nav-user" v-if="user_online==false">
               <a href="sign-in.html" class="login">{{user_name}}</a>
            </div>
            <div class="nav-user" v-if="user_online==true">
               <img v-bind:src="user_image" alt="Foto do Usuário">
               <a href="sign-in.html" class="login_link">{{user_name}}</a>
            </div>
         </div>
      </div>
   </section>
   <!-- <section class="navbar-mobile">
      <aside class="navbar-right">
         <div class="exit-button"><span class="icon-exit"></span></div>
         <div class="login">
            <div class="nav-user" v-if="user_online==false">
               <a href="sign_in.html" class="login">{{user_name}}</a>
            </div>
            <div class="nav-user" v-else>
               <img v-bind:src="user_image" alt="" srcset="">
               <a href="sign_in.html" class="login">{{user_name}}</a>
            </div>
         </div>
         <div class="search">
            <i class="fi fi-rr-search" @click=""></i>
         </div>
         <div class="nav-links">
            <a href="about_us.html">{{navbar_title_1}}</a>
            <a href="connections.html">{{navbar_title_2}}</a>
            <li class="menu">{{navbar_dropdown_title_1}}
               <li class="submenu"><a href="not-ready.html">Fórum</a></li>
            </li>
         </div>
      </aside>
   </section>
   
   <div class="nav-mobile">
      <button id="nav_mobile_menu">
         <i class="fi fi-rr-menu-burger" v-if="mobile_menu_switch" @click="mobile_menu_switch=false"></i>
         <i class="fi fi-rr-cross" v-else @click="mobile_menu_switch=true"></i>
      </button>
   </div> -->
   
   <!-- <ul class="mobile-menu-total" v-if="mobile_menu_switch==false">
      <li class="mobile-menu">
         <a href="about-us.html">{{navbar_title_1}}</a>
      </li>
      <li class="mobile-menu"><a href="connections.html">{{navbar_title_2}}</a></li>
      <li class="mobile-menu">{{navbar_dropdown_title_1}}
         <ul class="mobile-submenu">
            <li><a href="not-ready.html"></a>{{navbar_dropdown_1_subtitle}}</li>
         </ul>
      </li>
   </ul>


   <section class="section-search hide">
      <form action="" method="post">
         <input type="search" name="search" id="nav-search" placeholder="Pesquisar...">
         <input type="submit" id="send-search" value="">
      </form>
   </section>
</section> -->
`
})

