<?php

    namespace controllers;

    use Closure;
    use Exception\DataBaseException;
    use Exception\UserException;
    use models\authentication\Authentication;

    /**
     * Contient les fonctionnalités requises à l'authentification de l'utilisateur
     */
    class AuthenticationController
    {
        /**
         * @param Closure $action Action à autoriser uniquement à l'utilisateur connecté
         */
        public static function loginRequired(Closure $action): Closure|null
        {
            if (isset($_SESSION['User'])) {
                return $action;
            } else {
                header(INDEX_LOCATION);
                return null;
            }
        }

        /**
         * Fonction permettant de verifier si un utilisateur a un role definit afin d'en avoir les fonctionnalités
         * specifiques
         * @param Closure $action
         * @param bool $role
         * @return void
         */
        public static function roleRequired(Closure $action, bool $role): void
        {
            if ($role) {
                $action();
            } else {
                header(INDEX_LOCATION);
            }
        }

        /**
         * Redirige l'utilisateur vers la page d'accueil
         */
        public static function loginPage(): void
        {
            require_once(BASE_DIR . 'views/Accueil/login.php');
        }

        /**
         * Fonction permettant de se connecter
         */
        public static function login(): void
        {

            try {
                $_SESSION['User'] = Authentication::authenticate($_POST['username'], $_POST['password']);
                header(INDEX_LOCATION);
            } catch (DataBaseException|UserException $e) {
                $query = ['error' => $e->getMessage()];
                header(INDEX_LOCATION . '?' . http_build_query($query));
            }


        }

        /**
         * Fonction permettant de se déconnecter
         */
        public static function logout(): void
        {
            unset($_SESSION['User']);
            session_destroy();
            header(INDEX_LOCATION);
        }
    }