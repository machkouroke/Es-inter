<?php

    namespace models;


    use Exception\DataBaseException;
    use Exception\UserException;
    use PDOException;

    class User
    {
        public string $id, $name, $poste, $photo, $contact, $mail, $role, $surname, $password, $username;

        public function __construct(...$data)
        {

            $this->name = $data["name"];
            $this->surname = $data["surname"];
            $this->password = $data["password"];
            $this->poste = $data["poste"];
            $this->photo = $data["photo"];
            $this->contact = $data["contact"];
            $this->mail = $data["mail"];
            $this->role = $data["role"];
            $this->username = $data["username"];
        }


        public static function getAll(): bool|array
        {
            $con = DATABASE_CONNECTOR->get_connection();
            $sql = "SELECT * FROM users";
            $res = $con->query($sql);
            return $res->fetchAll();
        }

        public static function getById($id)
        {
            $con = DATABASE_CONNECTOR->get_connection();
            $sql = "SELECT * FROM users WHERE Iduser='" . $id . "'";
            $res = $con->query($sql);
            return $res->fetch();
        }

        public static function getByUserName($login)
        {
            $con = DATABASE_CONNECTOR->get_connection();
            $sql = "SELECT * FROM users WHERE username='" . $login . "'";
            $res = $con->query($sql);
            return $res->fetch();
        }

        /**
         * @throws UserException
         * @throws DataBaseException
         */
        public function add(): void
        {
            try {
                $con = DATABASE_CONNECTOR->get_connection();

                $sql = 'INSERT INTO users(Iduser,Nom, Poste, Photo, Contact, Mail, Role, password, Prenom) 
                        values(?,?,?,?,?,?,?, ?, ?) ';
                $statement = $con->prepare($sql);
                $userInfo = $this->getUserTable();
                $statement->execute($userInfo);
            } catch (PDOException $e) {

                if ($e->getCode() == 23000) {
                    throw new UserException("Le nom d'utilisateur existe déja");
                }

                throw new DataBaseException('Erreur: ' . $e->getMessage());

            }

        }

        public function delete($id): void
        {
            $con = DATABASE_CONNECTOR->get_connection();
            $sql = "DELETE FROM users where Iduser='" . $id . "'";
            $con->query($sql);

        }


        public function getUserTable(): array
        {
            return [$this->id, $this->name, $this->poste, $this->photo,
                $this->contact, $this->mail, $this->role, $this->password, $this->surname];
        }
    }