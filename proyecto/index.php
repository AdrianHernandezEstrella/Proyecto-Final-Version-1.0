<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        
        <!--Import Google Icon Font-->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
            />
        
        <!-- Compiled and minified CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
            />
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        
        <!-- Estilos propios -->
        <link rel = "stylesheet" href="styles/styles.css">
        <title>Proyecto Web con Materialize</title>
    </head>
    <body>
        
        <?php include 'views/header.php' ?> 
        
        <div class="container">            
            <?php include 'controller/routing.php' ?> 
        </div>
        
        <?php include 'views/footer.php' ?> 

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>

