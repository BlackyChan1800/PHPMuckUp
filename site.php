<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Site</title>
</head>

<body>
    <section>
    <header>
        <ul class="left-nav">
            <li>
                <a href="site.php"><img src="images/logo.gif" height="50px"></a>
            </li>
        </ul>
        <ul class="right-nav">
            <ul class="links">
                <li><a href="https://github.com/BlackyChan1800/WebPrac"><img src="images/pngegg.png" height="50px"></a></li>
            </ul>
            <li><a href="site.php">Home</a></li>
            <li><a href="/sub pages/aboutus.php">About Us</a></li>
            <li><a href="/sub pages/contactus.php">Contact Us</a></li>
        </ul>
    </header>
    </section>

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