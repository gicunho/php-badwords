<?php 
$paragrafo = 'Questo è un paragrafo di prova dove proverò a usare delle parole che saranno sostituite in quanto parolacce, cazzo!';
var_dump($paragrafo);
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
        <?php echo $paragrafo; ?>
        <?php echo strlen($paragrafo); ?>
        <?php echo str_replace('cazzo', '***', $paragrafo); ?>

    </p>
</body>
</html>