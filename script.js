const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'Boolify',
      apiUrl: 'server.php',
      dischiArr: [],
      activeDisc: '',

      newTask: {
        title: '',
        author: '',
        year: '',
        poster: "https://www.musicamusicastore.com/image/cache/catalog/vinile33-300x300.png",
        genre: '',
        wishlist: false
      },
      isFavorite : false
    }
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
        .then(result =>{
          this.dischiArr = result.data;
          console.log(this.dischiArr);
          console.log('chiamata axios al caricamentooo');

        })
        .catch(error => {
          console.log(error);
        })
    },


    addDisc(){
      const data = new FormData();
      data.append ('newTaskTitle',this.newTask.title);
      data.append ('newTaskAuthor',this.newTask.author);
      data.append ('newTaskYear',this.newTask.year);
      data.append ('newTaskPoster',this.newTask.poster);
      data.append ('newTaskGenre',this.newTask.genre);

    
      axios.post(this.apiUrl, data)
        .then(result =>{
          this.dischiArr = result.data;
          console.log(this.dischiArr);
          console.log('chiamata add disc ------');
          this.newTask.title = '';
          this.newTask.author = '';
          this.newTask.year = '';
          this.newTask.genre = '';
        })
        .catch(error => {
          console.log(error);
        })
    },


    removeDisc(i){
      const discToDelete = this.dischiArr[i];

      if(confirm(`Sicuro di voler eliminare il disco ${discToDelete.title} ?`)){
        const data = new FormData();
        data.append('discToDelete', i);

        axios.post(this.apiUrl, data)
        .then(result =>{
          this.dischiArr = result.data;
          console.log('chiamata revode disc ------');
        })
        .catch(error => {
          console.log(error);
        })

      }
    },

    favoriteDisc(i){
      const data = new FormData();
      data.append('favDisc', i );

      axios.post(this.apiUrl, data)
      .then(result =>{
        this.dischiArr = result.data;
        console.log('chiamata favorite disc---');
      })
      .catch(error => {
        console.log(error);
      })
    }

  },

  mounted(){
    this.getApi();
  }
  
}).mount('#app')