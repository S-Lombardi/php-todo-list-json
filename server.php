<?php
 
  //prendo il contenuto nel file todo_list che viene restituito come stringa
  $string = file_get_contents('data/todo_list.json');

  //converto la stringa in un array
  $array = json_decode($string,true);

  
  if(isset($_POST['nuova_task'])){

    $task =[
      'text' => $_POST['nuova_task'],
      'done'=> true
    ];

    array_push($array, $task );
    $array_encoded = json_encode($array);
    
    file_put_contents('data/todo_list.json', $array_encoded);
    
  }
  
  header('Content-Type: application/json');
  //trasformo l'array in formato .json 
  echo json_encode($array);

?>