<?php
require_once ('vendor/autoload.php');
require('controllers/PersonnageController.php');

Kint::$enabled_mode = false;
Kint::dump($GLOBALS, $_SERVER);

if (isset($_GET['page'])){
    switch ($_GET['page']) {
            case 'listperso':
                $personnageController = new PersonnageController();
                $personnageController->listPersonnage();
                break;
            case 'download':
                $id=$_GET['id'];
                $personnageController = new PersonnageController();
                $personnageController->download($id);
                
                break;
            }}