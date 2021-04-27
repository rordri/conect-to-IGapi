


<!DOCTYPE html>
<html>
<head>
  <title>Tienda Local</title>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/instagram.js"></script>

<link rel="stylesheet" href="css/style.css" />


</head>
<body>

  <header>


<?php  require_once 'header.php' ?>


   
</header>



 

  <?php

     
     
  //lógica para capturar la página que queremos abrir

        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

        //fragmento para llamar a las páginas

        require_once 'pages/' .$pagina. '.php';

     

?>







</body>
</html>

