<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Cuiaba');

// Set up dependencies
require '../app/dependencies.php';
// database
require '../app/config/database.php';

// Register middleware
require '../app/middleware/middleware.php';
// Register routes
require '../app/routes/api.php';
