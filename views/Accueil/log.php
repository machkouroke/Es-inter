<?php ob_start();
$title = "Connection";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="Inscr.css">
 <title>ES-Inter</title>
 <link rel="icon" type="image/png" href="Medias/logprin.jpg">
<style>
  body{
    background-color: white;
  }
</style>
<script>
  const inputs = document.querySelectorAll(".input");


function addcl(){
 let parent = this.parentNode.parentNode;
 parent.classList.add("focus");
}

function remcl(){
 let parent = this.parentNode.parentNode;
 if(this.value === ""){
  parent.classList.remove("focus");
 }
}


inputs.forEach(input => {
 input.addEventListener("focus", addcl);
 input.addEventListener("blur", remcl);
});

</script>

</head>
<body>
 <div class="container">
  <div class="img">
    <img src="Medias/Maintr.mp4"/>
  </div>
  <div class="login-content">
   <form action="index.php?action=login" method="post">
    <img src="Medias/logprin.png">
    <h2 class="title">Connection</h2>
             <div class="input-div one">
                <div class="i">
                  <i class="fas fa-user"></i>
                </div>
                <div class="div">

                  <input type="text" class="input" placeholder="Nom d'Utilisateur">
                </div>
             </div>
             <div class="input-div pass">
                <div class="i">
                  <i class="fas fa-lock"></i>
                </div>
                <div class="div">

                  <input type="password" class="input" placeholder="Password">
                </div>
             </div>
             <a href="#">Forgot Password?</a>
             <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>



<?php $content = ob_get_clean(); ?>

<?php require(BASE_DIR . 'views\base.php'); ?>