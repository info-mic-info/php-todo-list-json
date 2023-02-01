<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <h2 class="text-center text-light bg-primary p-3"><strong>TO-DO LIST</strong></h2>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-6 bg-primary p-3 radius">
                    <ul class="list-unstyled list-group text-center">
                        <li class="p-2 list-group-item animate__animated animate__bounceIn animate__delay-0.5s" v-for="todo in todoList">
                            {{todo.language}}
                        </li>
                    </ul>
                    <div class="container d-flex justify-content-center">
                    <div class="col-12 w-75 mt-5 d-flex">
                        <input type="text" v-model="language" placeholder="Insert new element" class="form-control" @keyup.enter="addToDoItem">
                        <button class="btn btn-light col-2" @click="addToDoItem">Add element</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>