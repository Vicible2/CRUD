<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/ModelRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();



// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$modelRepository = new ModelRepository($databaseManager);

//load function to add Cards to database
$cards = $modelRepository->create();
//load all data
$cards = $modelRepository->get();

//$totalPoints = $modelRepository->totalPoints();





// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';
