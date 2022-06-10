<?php

include_once __DIR__."/database.php";
$result = [];
$authorsList = [];
$genresList = [];
$selectedAuthor = $_GET["author"];
$selectedGenre = $_GET["genre"];

foreach($db as $disc){
  if(!in_array($disc["author"], $authorsList)) $authorsList[] = $disc["author"];
  if(!in_array($disc["genre"], $genresList)) $genresList[] = $disc["genre"];
}

if(empty($selectedAuthor) && empty($selectedGenre)){
  $result = $db;
}
else{
  foreach($db as $disc){
    if((empty($selectedAuthor) || $selectedAuthor === $disc["author"]) && (empty($selectedGenre) || $selectedGenre === $disc["genre"])) $result[] = $disc;
  }
}

header('Content-Type: application/json');
echo json_encode([
  "authors" => $authorsList,
  "genres" => $genresList,
  "discs" => $result
]);