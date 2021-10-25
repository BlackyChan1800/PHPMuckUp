<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Site</title>
</head>

<body>

    <?php

    $Variable = "Hello World";
    echo strtoupper($Variable);
    echo "<br>";
    echo strlen($Variable);
    echo "<br>";
    echo $Variable[6];
    echo "<br>";
    echo str_replace("Hello", "Goodbye", $Variable);

    ?>

</body>

</html>