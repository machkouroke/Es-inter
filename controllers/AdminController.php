<?php
    namespace controllers;
    class AdminController
    {
        public static function adminPage(): void
        {
            $employeePage = function () {
                $user = $_SESSION['User'];
                require(BASE_DIR . 'views/AdminSpace/adminPage.php');
            };
            $employeePage();
        }
    }
