<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="73436_woody_icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Summary</title>
</head>
<body>
    
    <header>
		<div class="logo">
            <h1><a href="Homepage.html">Woody.org</a></h1> 
		</div>
	</header>

    <section>
    <div class="welcome">
    <h1><span class=welc>Welcome</span>,
    <?php
        	$userName = $_POST["userName"];
            echo $userName;
    ?>
    </h1>
    </div>


    <div class="php">

    <?php
    $lastName = $_POST["lastName"];
    echo "<span>Last Name: </span>"  . $lastName;
    echo "<br>";

    $firstName = $_POST["firstName"];
	echo "<span>First Name: </span>" . $firstName;
	echo "<br>";
	
	$passWord  = $_POST["passWord"];
	echo "<span>Password: </span>" . $passWord;
	echo "<br>";

    $email = $_POST["email"];
	echo "<span>E-mail: </span>" . $email;
	echo "<br>";

    $age = $_POST["age"];
	echo "<span>Age: </span>" . $age;
	echo "<br>";
	
	$gender = $_POST["gender"];
	echo "<span>Gender: </span>" . $gender;
	echo "<br>";
    ?>

    </div>
    </section>
    
<footer>
        <p><a href="aboutus.html">Learn More About Us</a></p>
        <p>Woody.Org © All Rights Reserved. 2022</p>
    </footer>   
</body>
</html>