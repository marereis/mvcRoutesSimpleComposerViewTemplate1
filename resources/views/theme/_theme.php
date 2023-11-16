<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="resources\bootstrap.min.css" rel="stylesheet" > -->
    <!-- <link rel="shortcut icon" href='http://localhost:81/comanda/views/ui/img/logotransp.ico' type="image/x-icon"> -->
    <title>Mvc PHP </title>
</head>

<body class="bg-dark text-light" style="display: flex; flex-flow: column nowrap; min-height: 100vh">
    
        <header> <?php include 'header.php'; ?></header>

        <div class="container" style="border: 0; flex: 1">
            <?Php \Mare\App\Core\Views::renderVeiwTemplate($view); ?>
        </div>

        <footer><?php include 'footer.php'; ?></footer>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- <script src="resources\bootstrap.bundle.min.js" ></script> -->
</body>

</html>