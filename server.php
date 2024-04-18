<?php 

// prendo il file jsono esterno e salvo come stringa il suo contenuto in una variabile, restituisce una stringa
$json_string = file_get_contents('dischi.json');

// ricodifico la stringa trasformandola in un elemento php 
$dischi = json_decode($json_string, true);


if(isset($_POST['newTaskTitle'])){
  $new_item =[
    'title' => $_POST['newTaskTitle'],
    'author' => $_POST['newTaskAuthor'],
    'year' => $_POST['newTaskYear'],
    'poster' => $_POST['newTaskPoster'],
    'genre' => $_POST['newTaskGenre']
  ];
  
  // LA VARIABILE CHE SCRIVO PER PUSHARE IL DISCO DEVE ESSERE LA STESSA CHE UTILIZZO SOPRA PER JSON_DECODE E NON L'ARRAY CHE USO IN JS 
  $dischi[] = $new_item;
  file_put_contents('dischi.json' , json_encode($dischi));
}







// trasformo il file php come se fosse un file json 
header('Content-Type: application/json');

// stampo la lista nuovamente trasformata in una stringa 
echo json_encode($dischi);
?>