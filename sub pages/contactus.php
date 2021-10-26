<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Site</title>
    <link rel="stylesheet" href="../css/contactus.css" type="text/css">
</head>

<body>
    
    <section>
    <header>
        <ul class="left-nav">
            <li>
                <a href="../homepage.php"><img src="../images/logo.gif" height="50px"></a>
            </li>
        </ul>
        <ul class="right-nav">
            <ul class="links">
                <li>
                    <a href="https://github.com/BlackyChan1800/PHPMuckUp">
                    <img src="../images/pngegg.png" height="25px"> </a>
                </li>
            </ul>
            <li><a href="../homepage.php"> <?php echo "Home" ?> </a></li>
            <li><a href="aboutus.php"> <?php echo "About Us" ?> </a></li>
            <li><a href="contactus.php"> <?php echo "Contact Us" ?> </a></li>
        </ul>
    </header>
    </section>
    <section>
        <form action="contactus.php" method="get">
            First Name: <input type="text" name="FirstName">
            <br>
            Last Name: <input type="text" name="LastName">
            <br>
            Email: <input type="text" name="Email">
            <br>
            Desription: <input type="text" name="Desription">
            <br>
            <input type="submit">
            <br>
        </form>
        <br>
        <?php echo $_GET["FirstName"]?>
        <br>
        <?php echo $_GET["LastName"]?>
        <br>
        <?php echo $_GET["Email"]?>
        <br>
        <?php echo $_GET["Desription"]?>
    </section>

</body>

</html>