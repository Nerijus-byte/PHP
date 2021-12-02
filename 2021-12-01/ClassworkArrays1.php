<?php

$languages = [
    'lt' => ['sekmadienis', 'pirmadienis', 'antradienis', 'treciadienis', 'ketvirtadienis', 'penktadienis', 'sestadienis'],
    'eng' => ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']
];

var_dump ("{$languages['lt'][1]}, {$languages['eng'][3]}");

$lang = 'eng';

if ($lang === 'lt' || $lang === 'eng') {
    $currentday = date('w');
    $dayname = $languages[$lang][$currentday];
} else {
    $dayname = 'Wrong day';
}

echo $dayname;




