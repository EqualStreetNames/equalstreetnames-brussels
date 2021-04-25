<?php

declare(strict_types=1);

chdir(__DIR__ . '/../../');

require 'vendor/autoload.php';

$relations = json_decode(file_get_contents('../data/relations.geojson'));
$ways = json_decode(file_get_contents('../data/ways.geojson'));

$event = array_merge(
  array_filter($relations->features, function ($feature) { return $feature->properties->source === 'event'; }),
  array_filter($ways->features, function ($feature) { return $feature->properties->source === 'event'; })
);

printf('Count: %d%s', count($event), PHP_EOL);

$names = array_map(function ($feature) { return $feature->properties->name; }, $event);
$genders = array_map(function ($feature) { return $feature->properties->gender; }, $event);

array_multisort(
  $genders,
  SORT_ASC,
  $names,
  SORT_ASC,
  $event
);

$fp = fopen('../event.csv', 'w');

fputcsv($fp, ['name', 'gender']);

foreach ($event as $feature) {
  fputcsv($fp, [
    $feature->properties->name,
    $feature->properties->gender,
  ]);
}

fclose($fp);


exit();
