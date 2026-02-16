<?php

$data = file_get_contents("dataset.json");
$data = json_decode($data);

foreach ($data as $person) {
    if ($person->age < 25 && !empty($person->children)) {
        
        echo $person->id . " - " .
             $person->first_name . " " .
             $person->last_name .
             " (" . $person->age . " years old)";
        echo "<\n>";
    }
}