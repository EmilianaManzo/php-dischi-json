<?php 

include_once __DIR__ . '/partials/head.php';
?>

  <body>
    <div class="em_container" id="app">
      
      <header>
        <div class="container">
          <div class="row">
            <div class="col text-center ">
                <h1 class="">{{ title }}</h1>
            </div>
          </div>
        </div>
      </header>

      <main>
        <div class="container">

        <div class="row py-5 ">

          <div class="col text-white d-flex justify-content-center">


              <div class="d-flex flex-column mx-2">
                <label for="">Title</label>
                <input
                  v-model.trim="newTask.title"
                  placeholder="Titolo"
                  type="text"
                  name="">
              </div>

              <div class="d-flex flex-column mx-2">
                <label for="">Author</label>
                <input
                  v-model.trim="newTask.author"
                  placeholder="Autore"
                  type="text"
                  name="">
              </div>

              <div class="d-flex flex-column mx-2">
                <label for="">Year</label>
                <input
                  v-model.trim="newTask.year"
                  placeholder="Anno"
                  type="text"
                  name="">
              </div>

              <div class="d-flex flex-column mx-2">
                <label for="">Genre</label>
                <input
                  v-model.trim="newTask.genre"
                  placeholder="Genere"
                  type="text"
                  name="">
              </div>

              <div class="d-flex justify-content-center align-items-end  mx-2">
                <button @click="addDisc()" class="btn btn-success ">Crea</button>
              </div>

          </div>

        </div>

          <div class="row row-cols-3">

            <div class="col p-3"
              v-for ="(item, i) in dischiArr" :key="i">

              <div class="em_card" @click="activeDisc = i">

                <div class="card-inner">

                  <div class="card-front" :class="activeDisc === i ? 'active' : '' ">
                    <img :src="item.poster" alt="" >
                  </div>

                  <div class="card-back" :class="activeDisc === i ? 'active' : '' ">
                    <div class="borders h-100 p-3 " :class="activeDisc === i ? 'active' : '' ">
                      <p :class="activeDisc === i ? 'active' : '' "><strong>Titolo:</strong> {{item.title}}</p>

                      <p :class="activeDisc === i ? 'active' : '' "><strong>Anno:</strong> {{item.year}} </p>

                      <p :class="activeDisc === i ? 'active' : '' "><strong>Autore:</strong> {{item.author}}</p>
                      <p :class="activeDisc === i ? 'active' : '' "><strong>Genere:</strong> {{item.genre}}</p>
                      <p :class="activeDisc === i ? 'active' : '' ">
                        <strong><a :href="`disc_details.php?i=${i}`">More Info +</a></strong>
                      </p>
                    </div>
                    
                  </div>


                </div>

              </div>

              <div class=" d-flex justify-content-end px-2 " id="icons">
                <div class="favorite me-3 text-white-50 ">
                  <i
                    :class="{'wishlist' : item.wishlist}"
                    @click.stop="favoriteDisc(i)"
                    class="fa-solid fa-heart"
                    ></i>
                </div>

                <div class="delete text-black ">
                <i
                  @click.stop="removeDisc(i)"
                  class="fa-solid fa-trash"
                  ></i>
                </div>

                
              </div>

            </div>

          </div>
        </div>
      </main>

    </div>

    <script src="script.js"></script>
  </body>
</html>