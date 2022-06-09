const app = new Vue({
  el: "#app",
  data: {
    apiURL: "http://localhost/Lezione-09-06/php-ajax-dischi/api.php",
    discs: [],
  },
  mounted(){
    this.getAPI();
  },
  methods: {
    getAPI(){
      axios.get(this.apiURL)
        .then(response=>{
          this.discs = response.data.discs.response;
        })
        .catch(error=>{
          console.log(error);
        })
    }
  }
})