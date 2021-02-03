let root = new Vue({

  el: "#root",

  data: {
    albums:[]
  },


  mounted(){
    axios.get("dist/database.php")
    .then(resp => {
      console.log(resp.data.response);
      this.albums = resp.data.response;
    })

  },

  computed: {
    // genreFilter test
    filterGenre: function(){
      return this.albums.filter(item => item.genre=="Rock")
    }
  }

});
