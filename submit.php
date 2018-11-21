<?php
$dataFolder = __DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR;

//header('Content-type: text/csv');
//header('Content-disposition: attachment;filename=database.csv');

$str = "";
$str .= ($_POST['city'] ?? '').','; // $str .= ($_POST['city'] ? $_POST['city'] : '').',';
$str .= ($_POST['ageRadio'] ?? '').',';
$str .= ($_POST['healthSectors'] ?? '').',';
$str .= ($_POST['hasHealthSectorsProblems'] ?? '').',';
$str .= ($_POST['healthSectorsProblems'] ?? '').',';
$str .= ($_POST['publicSectors'] ?? '').',';
$str .= ($_POST['hasPublicSectorsProblems'] ?? '').',';
$str .= ($_POST['publicSectorsProblems'] ?? '').',';
$str .= ($_POST['shopsSectors'] ?? '').',';
$str .= ($_POST['hasShopsSectorsProblems'] ?? '').',';
$str .= ($_POST['shopsSectorsProblems'] ?? '').',';
$str .= ($_POST['hobbiesSectors'] ?? '').',';
$str .= ($_POST['hasHobbiesSectorsProblems'] ?? '').',';
$str .= ($_POST['hobbiesSectorsProblems'] ?? '').',';
$str .= ($_POST['publicTransportUseful'] ?? '').',';
$str .= ($_POST['publicTransportRate'] ?? '').',';
$str .= ($_POST['otherTransports'] ?? '');
$str .= "\n";

$contents = file_get_contents($dataFolder.'database.csv');
$contents .= $str;
file_put_contents($dataFolder.'database.csv', $contents);
printf($str);
