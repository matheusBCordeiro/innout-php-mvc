<?php 
loadModel('WorkingHours');
session_start();
requireValidSession();

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

$currentTime = strftime('%H:%M:%S', time());
$records->innout($currentTime);
header('Location: day_records.php');