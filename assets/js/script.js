const app = new Vue({
  el: "#app",
  data: {
    apiURL: "http://localhost/Lezione-09-06/php-ajax-dischi/api.php",
    discs: [],
    authors: [],
    genres: [],
    selectedAuthor: "?author=",
    selectedGenre: "&genre=",
    isLoaded: false,
  },
  mounted(){
    this.getAPI();
  },
  methods: {
    getAPI(){
      this.isLoaded = false;
      axios.get(this.apiURL+this.selectedAuthor+this.selectedGenre)
        .then(response=>{
          this.discs = response.data.discs;
          this.authors = response.data.authors;
          this.genres = response.data.genres;
          this.isLoaded = true;
        })
        .catch(error=>{
          console.log(error);
        })
    },
    changeAuthorFilter(filterOption){
      this.selectedAuthor = "?author="+filterOption.target.value;
      this.getAPI();
    },
    changeGenreFilter(filterOption){
      this.selectedGenre = "&genre="+filterOption.target.value;
      this.getAPI();
    }
  },

})