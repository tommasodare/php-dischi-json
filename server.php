<?php

// Leggere il file dei dischi.json
$json_text = file_get_contents("dischi.json");

// Convertiamo la stringa da JSON a struttura PHP
$albums = json_decode($json_text, true);

// Modifichiamo questa struttura PHP per aggiungere il nuovo album
$new_album = [
    "titolo" => $_POST['titolo'],
    "artista" => $_POST['artista'],
    "coverUrl" => $_POST['coverUrl'],
    "anno" => $_POST['anno'],
    "genere" => $_POST['genere']
];


// Aggiungiamo il nuovo album all'array degli album
$albums[] = $new_album;

file_put_contents("dischi.json", json_encode($albums, JSON_PRETTY_PRINT));
header("Location: index.php");
exit;


// Riga 20 -> salva il nuovo array $albums in dischi.json
// -> json_encode() converte l'array PHP in una stringa JSON