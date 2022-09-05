<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="views/css/style.css" type="text/css"/>


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title><?= $title ?></title>
</head>
<body>
<!--    <h2>--><?php //echo CSS_URL ?><!--</h2>-->
<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="images/esinter.png" alt="">
        </div>
        <span class="logo_name">
                <span class="title">ES INTER</span>
                <h6>Solutions Innovantes</h6>
            </span>
    </div>
    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="route.php?p=local">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
            <li><a href="route.php?p=users">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Users</span>
                </a></li>
            <li><a href="route.php?p=outils">
                    <i class="uil uil-trowel"></i>
                    <span class="link-name">Outils</span>
                </a></li>
            <li><a href="route.php?p=sites">
                    <i class="uil uil-globe"></i>
                    <span class="link-name">Interventions</span>
                </a></li>
        </ul>
        <ul class="logout">
            <li><a href="views/Accueil/Inscription.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Deconnexion</span>
                </a></li>
        </ul>
    </div>
</nav>
<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Recherchez ici ...">
        </div>
        <img src="images/avatar2.webp" alt="">
    </div>

    <div class="dash-content">
        <div class="overview">

            <div class="title">
                <i class="uil uil-tachometer-fast"></i>
                <span class="text"><?= $title ?></span>
            </div>
            <?= $content ?>
            <!--                <div class="boxes">-->
            <!--                        <a href="#" class="box box1">-->
            <!--                            <i class="uil uil-users-alt"></i>-->
            <!--                            <span class="text">Total Utilisateurs</span>-->
            <!--                            <span class="number">50</span>-->
            <!--                        </a>-->
            <!--                    -->
            <!--                        <a  href="#" class="box box2">-->
            <!--                            <i class="uil uil-jackhammer"></i>-->
            <!--                            <span class="text">Total Outils</span>-->
            <!--                            <span class="number">150</span>-->
            <!--                        </a>-->
            <!---->
            <!--                        <a  href="#" class="box box3">-->
            <!--                            <i class="uil uil-globe"></i>-->
            <!--                            <span class="text">Sites d'Interventions</span>-->
            <!--                            <span class="number">10</span>-->
            <!--                        </a>-->
            <!--                </div>-->
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
<script>
    const body = document.querySelector("body"),
        sidebar = document.querySelector("nav"),
        sidebarToggle = document.querySelector(".sidebar-toggle");
    showForm = document.querySelector("#showForm");
    closeForm = document.querySelector(".close-btn")

    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    // showForm.addEventListener("click",()=>{
    //     document.querySelector(".popup").classList.add("active");
    // })

    closeForm.addEventListener("click",()=>{
        document.querySelector(".popup").classList.remove("active");
    })
</script>
</body>
</html>