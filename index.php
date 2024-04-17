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
        <div class="row row-cols-3 ">

          <div class="col p-3"
          v-for ="(item, i) in dischiArr" >
            <div class="card py-5 px-2">
              <h3>{{item.title}}</h3>
              <div class="img">
                <img :src="item.poster" alt="">
              </div>
              <span>{{item.year}}</span>
              <p>{{item.author}}</p>
              <p>{{item.genre}}</p>
            </div>
          </div>

        </div>
      </div>
    </main>

  </div>

  <script src="script.js"></script>
</body>
</html>