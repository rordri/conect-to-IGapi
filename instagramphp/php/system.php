<?php 

//

    $pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');
	

	$sql = $pdo->prepare('SELECT usuarioig FROM usuarios');

   

     $sql->execute();

     $info=$sql->fetchALL(PDO::FETCH_COLUMN);


    
    $datas = array();


    foreach($info as $usu):


       
        $datas[] = $usu;

        

   
    endforeach;

