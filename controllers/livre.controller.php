<?php
$page ="/livre";

require 'models/db.php';
require 'models/livre.php';

$db = new db();

$livres = $db->getBooks();




require 'templates/header.php';
require 'views/livre/liste.php';
require 'templates/footer.php';
