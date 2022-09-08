<?php

    namespace models\authentication;

    use Exception\DataBaseException;
    use Exception\UserException;
    use models\User;

    class Authentification
    {
        /**
         * Authentifie un utilisateur
         * @param string $login Login saisi par l'utilisateur
         * @param string $password Password saisi par l'utilisateur'
         * @throws UserException Jeté quand les informations sont incorrectes
         * @throws DataBaseException Erreur lors de la lecture des données à la base de données
         */
        public static function authenticate(string $login, string $password): User
        {


            try {
                $user = User::getByUserName($login);
                if ($user) {
                    if ($user->password == $password) {
                        return $user;
                    } else {

                        throw new UserException('Mot de passe incorrect');
                    }
                } else {
                    throw new UserException('Utilisateur introuvable');
                }
            } catch (\PDOException $e) {
                throw new DataBaseException('Erreur: ' . $e->getMessage());
            }
        }
    }
