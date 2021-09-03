<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('auth-8ea62-firebase-adminsdk-per1p-12a60d0c1b.json') 
    ->withDatabaseUri('https://auth-8ea62-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth=  $factory->createAuth()
?>