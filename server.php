<?php

  // creo un array che dovrò recuperare e mostrare a schermo
  $arrayList=[
    "HTML",
    "CSS",
    "Design",
    "JS",
    "PHP"
  ];

  //trasformo l'array in formato .json 
  echo json_encode($arrayList );

?>