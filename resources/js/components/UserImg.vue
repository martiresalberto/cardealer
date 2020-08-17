<template>
  <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Usuario :</a>
        </div>
      </div>
</template>

<script>
export default {
  data(){
    return{
       nombre : '',
       email : '',
       image : '',
       arrayUsuario : []
    }
  },
  methods: {
    listarUsuario (){
        let me=this;
        axios.get('/profile').then(function (response) {
            me.arrayUsuario = response.data;
          })
          .catch(function (error) {
            // handle error
            console.log(error);
          });
       }
  },
  mounted() {
    this.listarUsuario();
  }
}
</script>

