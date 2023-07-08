<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
   <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="wrapper">
            <div class="p-4 bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-muted">Todo List</h1>
                            <ul>
                                <li v-for="(item, index) in todoList" :key="index">{{item.text}}</li>
                            </ul>
    
                        </div>
                    </div>
    
                </div>

            </div>
    
        </div>

        

    </div>



    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>