<?php 
include __DIR__ . '/partials/head.php';

$json_string = file_get_contents('dischi.json');
$dischi = json_decode($json_string, true);
$disco = $dischi[$_GET['i']];

?>
  <body>
    <div class="container m-5 " id="app">
      <div class="row py-5 ">
        <div class="col flex-grow-1 d-flex justify-content-center align-items-center ">
          <div class="w-75 h-70 ">
            <img src="<?php echo $disco['poster'] ?> " alt="">
          </div>
        </div>
        <div class="col text-white ">
          <h1 class="mb-3"><?php echo $disco['title'] ?></h1>
          <h3 class="mb-3"><?php echo $disco['author'] ?></h3>
          <h5 class="mb-3"><?php echo $disco['year'] ?></h5>
          <h5 class="mb-3"><?php echo $disco['genre'] ?></h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro praesentium, quam id accusantium cupiditate dolores. Consectetur fuga totam quae cum eligendi. Aliquam tempora magni iure vel impedit ipsam corporis mollitia!</p>


          <a href="index.php" class="btn btn-success mt-5 ">
            Torna alla pagina precedente
          </a>

        </div>
      </div>
    </div>


  </body>
</html>