<?php
include("../config/config.php");

$objEvents = new \Classes\ClassEvents();

$json = json_decode(file_get_contents('php://input'));

$start = new \DateTime($json->start);
$end = new \DateTime($json->end);

$objEvents->createEvent(
    0,
    $json->title,
    '',
    'pink',
    $start->format("Y-m-d H:i:s"),
    $end->modify("-1 day")->format("Y-m-d H:i:s")

);

header("location: ../views/manager");
