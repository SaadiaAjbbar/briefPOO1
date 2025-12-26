<?php
$page ="/lecteur";

require 'models/db.php';
require 'models/lecteur.php';

$db = new db();

$livres = $db->getReaders();




require 'templates/header.php';
require 'views/lecteur/liste.php';
require 'templates/footer.php';
