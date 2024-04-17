<?php 

// prendo il file jsono esterno e salvo come stringa il suo contenuto in una variabile, restituisce una stringa
$json_string = file_get_contents('dischi.json');

// ricodifico la stringa trasformandola in un elemento php 
$dischi = json_decode($json_string);










// trasformo il file php come se fosse un file json 
header('Content-Type: application/json');

// stampo la lista nuovamente trasformata in una stringa 
echo json_encode($dischi);
?>