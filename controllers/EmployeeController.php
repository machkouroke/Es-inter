<?php
    namespace controllers;
    class EmployeeController
    {
        public static function employeePage(): void
        {
            $employeePage = function () {
                $user = $_SESSION['User'];
                require(BASE_DIR . 'views/UserSpace/userPage.php');
            };
            $employeePage();
        }
    }