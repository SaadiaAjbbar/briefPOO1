<?php
$page ="/emprunt";

require 'models/db.php';
require 'models/emprunt.php';

$db = new db();

$borrows = $db->getBorrows();


require 'templates/header.php';
require 'views/emprunt/liste.php';
require 'templates/footer.php';
