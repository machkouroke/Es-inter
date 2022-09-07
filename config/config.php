<?php

    define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
    define('BASE_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);

    /**
     * Constante de répertoire d'url
     */
    const BASE_URL = '';
    const CSS_URL = BASE_URL . 'views/css/';
    const IMG_URL = BASE_URL . 'images/';
    const JS_URL = BASE_URL . '/view/assets/js/';
    const VIEW_URL = BASE_URL . '/view/';
    const ASSETS_URL = BASE_URL . '/view/assets/';
    const INDEX_LOCATION = 'Location:index.php';
    const PIC_URL = BASE_URL . '/media/picture/';
    const CV_URL = BASE_URL . '/media/cv/';
