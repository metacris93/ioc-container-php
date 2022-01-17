<?php
require_once __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
echo "<pre>";
$newsletter = $app->get('newsletter');
var_dump($newsletter->DoWork("test@aol.com"));
