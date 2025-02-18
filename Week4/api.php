<?php

require 'classes/database.php';
require 'classes/actors.php'

$endpoint = new Actors();
$database = new Database();

$funnyman = new Actors();

$data = $funnyman->$publicProperty

header('Content Type: application/json')
echo json_encode($data)