new Vue({
   el: '.navbar',
   name: 'navbar',
   data() {
      return {
         navbar_title_1: 'Sobre nós',
         navbar_title_2: 'Parceiros',
         navbar_dropdown_title_1: 'Comunidade',
         navbar_dropdown_1_subtitle: 'Fórum',

         mobile_menu_switch: false,
         user_name:'Entrar',
         user_online:true,
         class_of_navbar_search_field:'navbar-search-field',
         value_of_navbar_search_field:null,
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
         
         if(this.class_of_navbar_search_field=='navbar-search-field' || this.class_of_navbar_search_field=='navbar-search-field--closed'){
            this.class_of_navbar_search_field=('navbar-search-field--active')
         }
         else
         {
            this.class_of_navbar_search_field=('navbar-search-field--closed')
         }
      },
      onclick_dropdow(){
         const dropdown = document.querySelector('.dropdow-user')
         var toggle_var = false
         if(toggle_var=false){
            dropdown.classList.add('show')
            return toggle_var=true; 
         }
         else{
            dropdown.classList.remove('show')
         }
      },
      anything(){
         console.log(this.value_of_navbar_search_field);
         
         if
         (
            this.value_of_navbar_search_field == 'student'

         )
         {window.location = "student-life.php"}
         

      }
      
   },
})