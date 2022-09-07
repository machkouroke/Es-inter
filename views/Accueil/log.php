
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="views/css/login.css">
 <title>ES-Inter</title>
 <link rel="icon" type="image/png" href="Medias/logprin.png">

<!--<script>-->
<!--  const inputs = document.querySelectorAll(".input");-->
<!---->
<!---->
<!--function addcl(){-->
<!-- let parent = this.parentNode.parentNode;-->
<!-- parent.classList.add("focus");-->
<!--}-->
<!---->
<!--function remcl(){-->
<!-- let parent = this.parentNode.parentNode;-->
<!-- if(this.value === ""){-->
<!--  parent.classList.remove("focus");-->
<!-- }-->
<!--}-->
<!---->
<!---->
<!--inputs.forEach(input => {-->
<!-- input.addEventListener("focus", addcl);-->
<!-- input.addEventListener("blur", remcl);-->
<!--});-->
<!---->
<!--</script>-->

</head>
<body class="login">

    <div class="form">
        <form action="index.php?action=login" method="post">
            <h2 class="title">Connexion</h2>

            <div class="form-element">
                <label>Nom d'utilisateur</label>
                <input type="text" placeholder="Nom d'Utilisateur">
            </div>
            <div class="form-element">
                <label>Mot de passe</label>
                <input type="password"  placeholder="Mot de passe">
            </div>
            <div class="form-element">
                <input type="submit" value="Se connecter">
            </div>

        </form>
    </div>

</body>
</html>


<!---->
<?php //$content = ob_get_clean(); ?>
<!---->
<?php //require(ROOT . 'views\base.php'); ?>