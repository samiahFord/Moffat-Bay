<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <link rel="stylesheet" type="text/css" href="shared/styles.css">
</head>
<body>
    <?php
    readfile("shared/navigation.html");
    ?>
    <header>
        <h1>Registration Complete</h1>
    </header>
    <main>
        <p>You have successfully created an account with Moffat Bay Lodge!</p>
        <?php
        header( "refresh:3;url=http://localhost/Moffat-Bay/login.php" );
        ?>
    </main>
</body>
</html>
