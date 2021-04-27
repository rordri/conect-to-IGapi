

<?php

//require_once 'php/databaseconnect.php';


$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');


if(isset($_POST['acao'])){
    $usuarioig = $_POST['usuarioig'];
    $categoria_id = $_POST['categoria_id'];
   

    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?)");



    $sql->execute(array($usuarioig,$categoria_id));
    echo 'Cliente incluido com éxito!';


  }


 


 ?>



<div class="container">
  <H1> ESTA ES LA PAGINA DE ALTA</H1>

<form method="post">
  <input type="text" name="usuarioig" required />
  
  <select name="categoria_id">
<option value="1">Ropa</option> 
<option value="2">Ropa Niños</option> 
<option value="3">Ropa Hombres</option>
<option value="4">Ropa Mujeres</option> 
<option value="5">Ropa Talles Grandes</option> 
<option value="6">Zapaterías</option> 
<option value="7">Zapaterías Niños</option> 
<option value="8">Zapaterias Mujer</option>
<option value="9">Zapaterias Hombres</option>
<option value="10">Electrónica y Computación</option>
<option value="11">Electricidad</option>
<option value="12">Pinturerias</option>
<option value="13">Artística y Librería</option>
<option value="14">Estética</option>
<option value="15">Peluquerías</option>
<option value="16">Barberías</option>
<option value="17">Cosmética</option>
<option value="18">Farmacias</option>
<option value="19">Decoración</option>
<option value="20">Arquitectura</option>
<option value="21">Inmobiliarias</option>
<option value="22">Insumos de cocina</option>
<option value="23">Ópticas</option>
<option value="24">Supermercados</option>
<option value="25">Textiles y Lana</option>
<option value="26">Panderías y Confitería</option>
<option value="27">Heladerías</option>
<option value="28">Ferreterías</option>
<option value="29">Construcción</option>
<option value="30">Alimentación</option>
<option value="31">Dietéticas</option>
<option value="32">Vidrios</option>
<option value="33">Transporte</option>
<option value="34">Tatuajes</option>
<option value="35">Sanatorios y Especialidades Médicas</option>
<option value="36">Abogacía</option>
<option value="37">Universidades</option>
<option value="38">Psicología</option>
<option value="39">Psicopedagogía</option>
<option value="40">Veterinarias y PetShop</option>
</select>
  <input type="submit" name="acao" value="Enviar!" />
</form>


