<?php

require_once('config.php');

// Charger toutes les dépendances de code
require_once('controllers/BaseController.php'); // Vu que dans HomeController on a mit extends BaseController, ce fichier doit être en premier dans les require
require_once('controllers/HomeController.php');
require_once('models/BaseModel.php');
require_once('models/Employee.php');
require_once('models/Review.php');
require_once('models/ProductCategory.php');
require_once('models/Product.php');
require_once('models/Menu.php');
require_once('models/Section.php');
require_once ('models/Page.php');

$controller = new HomeController(); //new permet de créer qlq chose, içi on créer un nouveau controller

$controller->handle(); // -> : C'est l'accesseur d'objet, permet d'accéder au propriété et méthode de l'objet (Très important !!)