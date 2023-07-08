<?php

  // creo un array che dovrò recuperare e mostrare a schermo
  $arrayList = [
    ["text"=>"HTML","done"=>true],
    ["text"=>"CSS","done"=>true],
    ["text"=>"Responsive design","done"=>true],
    ["text"=>"Javascript","done"=>true],
    ["text"=>"PHP","done"=>true],
    ["text"=>"Laravel","done"=>false]
  ];

  //trasformo l'array in formato .json 
  echo json_encode($arrayList );

?>