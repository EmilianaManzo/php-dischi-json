const { createApp } = Vue;

createApp({

  data(){
    return{
      title: 'Boolify',
      apiUrl: 'server.php',
      dischiArr: [],

      activeDisc: '',
    }
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
        .then(result =>{
          this.dischiArr = result.data;
          console.log(this.dischiArr);
        })
        .catch(error => {
          console.log(error);
        })
    },

  },

  mounted(){
    this.getApi();
  }
  
}).mount('#app')