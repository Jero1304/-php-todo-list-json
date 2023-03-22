<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<!-- 
Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo. 
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Partite dal server e fate in modo di stampare la lista di todo come stringa json. 
(In questa prima fase usate un semplice array in php, 
solo successivamente leggerete questi dati dal file json)
Una volta che il server funziona passate al front end.

Prima assicuratevi che la vostra pagina index.php (il vostro front-end) 
riesca a comunicare correttamente con il vostro script PHP (le vostre “API”) utilizzando axios.
Lo step successivo è quello di “testare” l’invio di un nuovo task, 
sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura e scrittura della lista da un file JSON. 
-->

<body>
    <div id="app">
        <div class="container py-3 text-center">
            <h1>TodoList</h1>
        </div>
        <div class="container py-5">
            <ul class="list-group">
                <li v-for="todo in todos" :key="todo" class="list-group-item">{{todo}}</li>
            </ul>
        </div>
    </div>

    <script src="./app.js"></script>
</body>

</html>