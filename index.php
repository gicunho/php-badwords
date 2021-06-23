<?php 
$paragrafo = 'Questo è un paragrafo di prova dove proverò a usare delle parole che saranno sostituite in quanto parolacce, caspita!';
var_dump($paragrafo);
//$richiesta_censura_msg = "Inserisci la parola da censurare";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Badwords</title>
</head>
<body>
    <h1>PHP Bad Words</h1>
    <p>
        <?php echo $paragrafo; ?> <br>
        La lunghezza del paragrafo originale è di <?php echo strlen($paragrafo); ?> caratteri. <br>
        <?php echo str_replace($_GET['censura'], '***', $paragrafo); ?>
    </p>
    <form action="" method="get">
    <input type="text" name="censura" placeholder="inserisci la parola da censurare">
    <input type="submit" value="Submit">
    </form>
    
</body>
</html>