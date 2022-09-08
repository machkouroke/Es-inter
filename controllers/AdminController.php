<?php
    namespace controllers;
    use models\Outil;
    use models\User;

    class AdminController
    {
        public static function adminPage(): void
        {
            $employeePage = function () {
                $user = $_SESSION['User'];
                $nbUsers = count(User::getAll());
                require(BASE_DIR . 'views/AdminSpace/adminPage.php');
            };
            $employeePage();
        }
        public static function outils()
        {
            $outilsPage = function () {
                $outils = Outil::getAll();
                require(BASE_DIR . 'views/outils/index.php');
            };
            $outilsPage();
        }
        /*TODO: Implémente les méthodes suivant Tu peux te baser sur la méthodes outils*/
        public static function userlist()
        {
        }

        public static function sites()
        {
        }


    }
