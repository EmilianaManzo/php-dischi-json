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

        <div class="row row-cols-3">

          <div class="col p-3"
          v-for ="(item, i) in dischiArr">

            <div class="em_card">

              <div class="card-inner">

                <div class="card-front">
                  <img :src="item.poster" alt="">
                </div>

                <div class="card-back">
                  <div class="borders h-100 p-3 ">
                    <p><strong>Titolo:</strong> {{item.title}}</p>

                    <p><strong>Anno:</strong> {{item.year}} </p>

                    <p><strong>Autore:</strong> {{item.author}}</p>
                    <p><strong>Genere:</strong> {{item.genre}}</p>
                  </div>
                  
                </div>

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