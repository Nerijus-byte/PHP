<!--// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre-->
<!--// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas. Minimum 3.-->
<!--// Išvesti visus knygų masyvo elementus su var_dump;-->
<!--// Išvesti visų visų knygų metų vidurkį;-->
<?php

$descriptionOfBook = ['In Search of Lost Time', 'Marcel Proust', 1913, 'Modern physics' ];
$descriptionOfBooks = [
    ['Ulysses', 'James Joyce', 1904, 'Modernist novel'],
    ['Don Quixote', 'Miguel de Cervantes', 1605, 'Novel'],
    ['The Great Gatsby', 'F. Scott Fitzgerald', 1925, 	'Tragedy']
];

$descriptionOfBooks[] = $descriptionOfBook;

$years = array_column($descriptionOfBooks, 2);

$averageOFYears = array_sum($years) / count($years);
$result = round($averageOFYears);

var_dump ($result);

