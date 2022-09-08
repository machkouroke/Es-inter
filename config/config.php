<?php


    use config\DatabaseConnector;

    define('BASE_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);

    /**
     * Constante de répertoire d'url
     */
    const BASE_URL = '';
    const INDEX_LOCATION = 'Location:index.php';
    const DATABASE_CONNECTOR = new DatabaseConnector("mysql:host=localhost;dbname=Esinter", 'root', 'claudine');
    const ERROR_FILE = 'log/php_error.log';

    function logging($message): void
    {
        error_log($message . "\n", 3, ERROR_FILE);
    }