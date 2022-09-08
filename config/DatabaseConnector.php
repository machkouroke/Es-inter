<?php

    namespace config;

    use PDO;
    use PDOException;

    class DatabaseConnector
    {


        public string $password;
        public string $username;
        public string $dns;
        public $connexion;

        public function __construct(string $dns, string $username, string $password)
        {
            $this->dns = $dns;
            $this->username = $username;
            $this->password = $password;
            try {
                $this->connexion = new PDO($this->dns, $this->username, $this->password);
                $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur de connexion ' . $e->getMessage());
            }
        }

        /**
         * Renvoie l'objet de la connexion
         * @return PDO L'objet de la connexion
         */
        public function get_connection(): PDO
        {
            return $this->connexion;
        }

        public function __destruct()
        {
            $this->connexion = null;
        }
    }