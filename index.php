<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$text = 'Ciao sono una variabile con un paragrafo di testo a mia scelta!';

$censoredWord = $_GET['word'];

$testarray = ['Mele', 'Pere', 'Banane', 5];

$testarray2 = [
    'nome' => 'Valerio',
    'cognome' => 'Failah',
    'età' => '15 anni',
];

var_dump($testarray);

var_dump($testarray2);

echo 'Il cognome è: ' . $testarray2['cognome'];

?>

<h1>
    <?= $text ?>
</h1>
<p>
    <?= 'Lunghezza della variabile: ' . strlen($text) ?>
</p>
<h1>
    <?= 'Variabile di testo con parola censurata: ' . str_replace($censoredWord, '***', $text) ?>
</h1>
<p>
    Inserisci nell'URL ---> "?word=PAROLA" sostituendo PAROLA con una da dover censurare nella variabile di testo
</p>