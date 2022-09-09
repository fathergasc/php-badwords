<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $word = $_POST['word'];
        $string = ' Nel mezzo del cammin di nostra vita, mi ritrovai per una selva oscura ché la diritta via era smarrita. Ahi quanto a dir qual era è cosa dura esta selva selvaggia e aspra e forte che nel pensier rinova la paura!';
        $censoredString = str_replace($word, '***', $string)
    ?>

    <p><?php echo $censoredString ?></p>
    <span>Il paragrafo è lungo <?php echo strlen($censoredString) ?> caratteri.</span>
    
</body>
</html>