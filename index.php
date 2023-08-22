 <?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>IndexPage</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <h2 class="logo">Website Name</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="hbtn">Login</button>
        </nav>
    </header>

    <div class="wrapper">
    <a class="logout" href="logout.php">Logout</a>
    <h1>Index Page</h1>

    <br>
    Welcome. <?php echo $user_data['user_name']; ?>
    </div>
</body>
</html>