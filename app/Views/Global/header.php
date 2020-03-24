<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">  
        <a class="navbar-brand" href="?"><img src="../public/img/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active">
                    <a class="nav-link" href="?">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?page=about-us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=contact-us">Contact us</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?page=posts">Posts</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="?page=articles">Articles</a>
                </li>
                
            <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=log-out">Log out</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=registration">Registration</a>
                </li>

        <?php } ?>
                </ul>
            </div>
        </nav>   