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
                <a href="../index.html"><img src="../images/logo.gif" height="50px"></a>
            </li>
        </ul>
        <ul class="right-nav">
            <ul class="links">
                <li>
                    <a href="https://github.com/BlackyChan1800/PHPMuckUp">
                    <img src="../images/pngegg.png" height="25px"> </a>
                </li>
            </ul>
            <li><a href="../index.html"> <?php echo "Home" ?> </a></li>
            <li><a href="aboutus.php"> <?php echo "About Us" ?> </a></li>
            <li><a href="contactus.php"> <?php echo "Contact Us" ?> </a></li>
        </ul>
    </header>
    </section>
    <section>
        <form action="contactus.php" class="User_form" method="post">
            First Name: <input type="text" name="FirstName">
            <br>
            Last Name: <input type="text" name="LastName">
            <br>
            Email: <input type="text" name="Email">
            <br>
            Desription: <input type="text" name="Desription">
            <section class="submitbutton">
                <input type="submit">
            </section>
            <br>
        </form>
        <?php if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['Description'])): ?>
        <br>
        <?php echo $_POST["FirstName"]; ?>
        <br>
        <?php echo $_POST["LastName"]; ?>
        <br>
        <?php echo $_POST["Email"]; ?>
        <br>
        <?php echo $_POST["Desription"]; ?>
        <?php endif; ?>
    </section>

</body>

</html>