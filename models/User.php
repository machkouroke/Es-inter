<?php
    /* TODO:
        Créer une classe hydraté c'est à dire basé sur le model de la base de données ce genre de code n'est pas
        très maintenable. Tu peux te baser sur la table User que j'ai déja fait  */

    namespace models;


    use config\enum\Role;
    use Exception\DataBaseException;
    use Exception\UserException;
    use PDO;
    use PDOException;

    class User
    {
        public string $id, $name, $poste, $photo, $contact, $mail, $surname, $password, $username;
        public Role $role;

        public function __construct(...$data)
        {
            $this->name = $data["Name"];
            $this->surname = $data["Surname"];
            $this->password = $data["password"];
            $this->poste = $data["Poste"];
            $this->photo = $data["Photo"];
            $this->contact = $data["Contact"];
            $this->mail = $data["Mail"];
            $this->role = Role::from($data["Role"]);
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

        public static function getByUserName($login): User
        {
            $con = DATABASE_CONNECTOR->get_connection();
            $sql = "SELECT * FROM users WHERE username='" . $login . "'";
            $res = $con->query($sql)->fetch(PDO::FETCH_ASSOC);
            return new User(...$res);
        }

        /**
         * @throws UserException
         * @throws DataBaseException
         */
        public function add(): void
        {
            try {
                $con = DATABASE_CONNECTOR->get_connection();

                $sql = 'INSERT INTO users(Iduser,Name, Poste, Photo, Contact, Mail, Role, password, Surname) 
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
                $this->contact, $this->mail, $this->role->value, $this->password, $this->surname];
        }
    }