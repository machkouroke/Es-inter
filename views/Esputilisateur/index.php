
<!DOCTYPE HTML>
<html>
<head>
    <title>ESPACE Utilisateur</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="views/css/espaceutil.css" />

</head>
<body class="is-preload">

<!-- Header -->
<header id="header">
    <div class="content">
        <h1><a href="#">Espace Utilisateur</a></h1>

        <ul class="actions">
            <li><a href="#" class="button primary icon solid fa-download">Retourner Outil</a></li>
            <li><a href="#one" class="button icon solid fa-chevron-down scrolly">Demander outil</a></li>
        </ul>
    </div>
    <div class="image phone"><div class="inner"><img src="images/phone.png" alt="" /></div></div>
</header>

<!-- One -->
<section id="one" class="wrapper style2 special">
    <form class="row g-3">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Numéro de Commande</label>
            <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Adresse spécifique</label>
            <input type="text" class="form-control" id="validationDefault05" required>
        </div>

        </div>
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Sélectionner Outils</label>
            <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
            </select>
        </div>

        <select name="choix">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>


        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Valider Liste
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Send form</button>
        </div>
    </form>
</section>


<!-- Three -->
<section id="three" class="wrapper style2 special">
    <ul class="actions special">
        <li><a href="#" class="button">Se déconnecter</a></li>
    </ul>
</section>



<!-- Scripts -->
<script src="views/js/jquery.min.js"></script>
<script src="views/js/jquery.scrolly.min.js"></script>
<script src="views/js/browser.min.js"></script>
<script src="views/js/breakpoints.min.js"></script>
<script src="views/js/util.js"></script>
<script src="views/js/main.js"></script>

</body>
</html>