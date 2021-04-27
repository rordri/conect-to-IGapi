
<?php

    $v1=$_GET['var1'];

    echo $v1;
    echo 'esto es categorías';
    print_r($v1);
    $coqui=1;
   
$pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');
  

  $sql = $pdo->prepare(' SELECT usuarioig FROM usuarios WHERE categoria_id = :categoria_id');

   
     $sql->bindValue( ':categoria_id', $v1, PDO::PARAM_INT);




     $sql->execute();

     $info=$sql->fetchALL(PDO::FETCH_COLUMN);

 
    
    $datas = array();


    foreach($info as $usu):


       
        $datas[] = $usu;

        

   
    endforeach;






    for ($i = 0; $i < count($datas); $i++)
    
    {

      





?>

   

   
 <script>
      
      

  function nFormatter(num){
    
    if(num >= 1000000){
      return (num/1000000).toFixed(1).replace(/\.0$/,'') + 'M';
    }
    if(num >= 1000){
      return (num/1000).toFixed(1).replace(/\.0$/,'') + 'K';
    }
    return num;
  }






  $.ajax({


    url: "https://www.instagram.com/<?php echo $datas[$i]; ?>?__a=1", 
    type:'get',
    success:function(response){
      $(".profile-pic<?php echo $i ?>").attr('src',response.graphql.user.profile_pic_url);
      $(".name<?php echo $i ?>").html(response.graphql.user.full_name);
      $(".biography<?php echo $i ?>").html(response.graphql.user.biography);
      $(".username<?php echo $i ?>").html(response.graphql.user.username);
      $(".number-of-posts<?php echo $i ?>").html(response.graphql.user.edge_owner_to_timeline_media.count);
      $(".followers<?php echo $i ?>").html(nFormatter(response.graphql.user.edge_followed_by.count));
      $(".following<?php echo $i ?>").html(nFormatter(response.graphql.user.edge_follow.count));
      posts = response.graphql.user.edge_owner_to_timeline_media.edges;
      posts_html = '';
      for(var i=0;i<posts.length;i++){
        url = posts[i].node.display_url;
        likes = posts[i].node.edge_liked_by.count;
        comments = posts[i].node.edge_media_to_comment.count;
        posts_html += '<div class="col-md-4 equal-height"><img style="min-height:50px;background-color:#fff;width:100%" src="'+url+'"><div class="row like-comment"><div class="col-md-6">'+nFormatter(likes)+' LIKES</div><div class="col-md-6">'+nFormatter(comments)+' COMMENTS</div></div></div>';
      }
      $(".posts<?php echo $i ?>").html(posts_html);
    }
  });



    </script>


  

 <div class="container m-t-15" style="margin-top:20px;margin-bottom:20px;padding:50px;background-color:#ddd;">
  <div class="row mt-5">
    <div class="col-md-3">
      <img src="" class="profile-pic<?php echo $i ?>" style="border-radius:50%;">
    </div>
    <div class="col-md-9">
      <h2 class="username<?php echo $i ?>"></h2>
      <div class="row">
        <div class="col-md-4">
          <span class="number-of-posts<?php echo $i ?>"></span> posts
        </div>
        <div class="col-md-4">
          <span class="followers<?php echo $i ?>"></span> followers
        </div>
        <div class="col-md-4">
          <span class="following<?php echo $i ?>"></span> following
        </div>
      </div>
      <div class="row" style="margin-top:60px;">
        <h4 class="name<?php echo $i ?>"></h4>
      </div>
      <div class="row">
        <h4 class="biography<?php echo $i ?>"></h4>
      </div>
      <br><hr><br>
      <div class="row">
        <p>POSTS</p>
      </div>
      <div class="row posts<?php echo $i ?>"></div>
    </div>
  </div>

</div>




<?php

} //Cierra el loop de los feeds*/

?>
