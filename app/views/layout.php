<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="/src/style.css" rel="stylesheet" type="text/css">
    <title>Movies</title>
</head>
<body>
<header>
    <nav class="navbar header navbar-expand-lg navbar-dark bg-dark">
        <a href="/" class="navbar-brand">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Zeronet_logo.png" width="30" height="30" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupprtedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="/movie/create" class="nav-link">Добавить фильм</a>
                </li>
                <li class="nav-item">
                    <a href="/movie/parsePage" class="nav-link">Фильмы через файл</a>
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
                echo '
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a href="/auth/login" class="nav-link">Логин</a>
                      </li>
                      <li class="nav-item">
                          <a href="/auth/register" class="nav-link">Регистрация</a>
                      </li>
                    </ul>
                ';
            }
            else {
                echo '
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item" >
                         <a class="nav-link">' . $_SESSION['email'] . '</a>
                      </li>
                    </ul>
                ';
            }

            ?>

        </div>

    </nav>
</header>

    <?php include 'app/views/'. $content_view; ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



</body>
</html>